     // These will be initialized later
     var Malaika = {};
     Malaika.recognizer, Malaika.recorder, Malaika.callbackManager, Malaika.audioContext, Malaika.outputContainer;
     // Only when both recorder and recognizer do we have a ready application
     Malaika.recorderReady = Malaika.recognizerReady = false;
     meSpeak.loadConfig("/Malaika/mespeak_config.json");
     meSpeak.loadVoice("/Malaika/voices/en/en-us.json");
     // A convenience function to post a message to the recognizer and associate
     // a callback to its response
     Malaika.postRecognizerJob = function (message, callback) {
         var msg = message || {};
         if (Malaika.callbackManager) msg.callbackId = Malaika.callbackManager.add(callback);
         if (Malaika.recognizer) Malaika.recognizer.postMessage(msg);
     };

     // This function initializes an instance of the recorder
     // it posts a message right away and calls onReady when it
     // is ready so that onmessage can be properly set
     Malaika.spawnWorker = function (workerURL, onReady) {
         Malaika.recognizer = new Worker(workerURL);
         Malaika.recognizer.onmessage = function (event) {
             onReady(Malaika.recognizer);
         };
         Malaika.recognizer.postMessage('');
     };
     Malaika.handleDisconnection = function(){
         Malaika.speak(["I have to tell you something.","I can't help you Metro right now."],["2"],["en/en-us"],80);
     };
     window.onoffline = Malaika.handleDisconnection;
     Malaika.Handle = function(handle){
     Malaika.spawnWorker("/Malaika/js/recognizer.js", function (worker) {
         // This is the onmessage function, once the worker is fully loaded
         worker.onmessage = function (e) {
                 // This is the case when we have a callback id to be called
                 if (e.data.hasOwnProperty('id')) {
                     var clb = Malaika.callbackManager.get(e.data['id']);
                     var data = {};
                     if (e.data.hasOwnProperty('data')) data = e.data.data;
                     if (clb) clb(data);
                 }
                 // This is a case when the recognizer has a new hypothesis
                 if (e.data.hasOwnProperty('hyp')) {

                     var newHyp = e.data.hyp;

                     if (e.data.hasOwnProperty('final') && e.data.final) {
                                        handle(newHyp);
                     }
                 }
                 Malaika.updateHyp(newHyp);

             }
             // This is the case when we have an error
         if (e.data.hasOwnProperty('status') && (e.data.status == "error")) {
             Malaika.updateStatus("Something's not right: " + e.data.command + " with code " + e.data.code + "; Try again in a little bit");
         }
     });
     // Once the worker is fully loaded, we can call the initialize function
     Malaika.initRecognizer();
   

     // The following is to initialize Web Audio
     try {
         window.AudioContext = window.AudioContext || window.webkitAudioContext;
         navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
         window.URL = window.URL || window.webkitURL;
         Malaika.audioContext = new AudioContext();
     }
     catch (e) {
         Malaika.updateStatus("Oh no! I just lost my voice!");
     }
     if (navigator.getUserMedia) navigator.getUserMedia({
         audio: true
     }, Malaika.startUserMedia, function (e) {
         Malaika.updateStatus("I can't hear you right now!");
     });
     else Malaika.updateStatus("I'm sorry to say that in this browser that I am deaf.");

     Malaika.startRecording();
     };
     
    
     Malaika.speak = function (phrases, variants, voices, pitch) {
         var parts = [];
         for (var i = 0; i < phrases.length; i++) {
             parts.push({
                 text: phrases[i],
                 voice: voices[i],
                 variant: variants[i]
             });

         }
         meSpeak.speakMultipart(parts, {
             pitch: pitch,
             speed: 140
         });
     };
     Malaika.speakTime = function (time, phrases, variants, voices, pitch) {
         window.setTimeout(function () {
             Malaika.speak(phrases, variants, voices, pitch);
         }, time);
     };
     // To display the hypothesis sent by the recognizer
     Malaika.updateHyp = function (hyp) {
         if (Malaika.outputContainer) Malaika.outputContainer.innerHTML = hyp;
     };

     // This updates the UI when the app might get ready
     // Only when both recorder and recognizer are ready do we enable the buttons
     Malaika.updateUI = function () {
         if (Malaika.recorderReady && Malaika.recognizerReady) startBtn.disabled = stopBtn.disabled = false;
     };

     // This is just a logging window where we display the status
     Malaika.updateStatus = function (newStatus) {
         document.getElementById('current-status').innerHTML += "<br/>" + newStatus;
     };

     // A not-so-great recording indicator
     Malaika.displayRecording = function (display) {
         if (display) document.getElementById('recording-indicator').innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         else document.getElementById('recording-indicator').innerHTML = "";
     };
     Malaika.checkGithub = function(){
         Malaika.speak(["Github is " + data.status],["f2"],["en/en-us"],80);
     }

     // Callback function once the user authorises access to the microphone
     // in it, we instanciate the recorder
     Malaika.startUserMedia = function (stream) {
         Malaika.input = Malaika.audioContext.createMediaStreamSource(stream);
         // Firefox hack https://support.mozilla.org/en-US/questions/984179
         window.firefox_audio_hack = Malaika.input;
         Malaika.audioRecorderConfig = {
             errorCallback: function (x) {
                 Malaika.updateStatus("I can't hear you: " + x);
             }
         };
         Malaika.recorder = new AudioRecorder(Malaika.input, Malaika.audioRecorderConfig);
         // If a recognizer is ready, we pass it to the recorder
         if (Malaika.recognizer) Malaika.recorder.consumers = [Malaika.recognizer];
         Malaika.recorderReady = true;
         Malaika.updateUI();
         Malaika.updateStatus("I can hear you now...");
     };

     // This starts recording. We first need to get the id of the grammar to use
     Malaika.startRecording = function () {
         var id = document.getElementById('grammars').value;
         if (Malaika.recorder && Malaika.recorder.start(id)) Malaika.displayRecording(true);
     };

     // Stops recording
     Malaika.stopRecording = function () {
         Malaika.recorder && Malaika.recorder.stop();
         Malaika.displayRecording(false);
     };

     // Called once the recognizer is ready
     // We then add the grammars to the input select tag and update the UI
     Malaika.recognizerReady = function () {
         Malaika.updateGrammars();
         Malaika.recognizerReady = true;
         Malaika.updateUI();
         Malaika.updateStatus("Ready!");
     };

     // We get the grammars defined below and fill in the input select tag
     Malaika.updateGrammars = function () {
         var selectTag = document.getElementById('grammars');
         for (var i = 0; i < grammarIds.length; i++) {
             var newElt = document.createElement('option');
             newElt.value = grammarIds[i].id;
             newElt.innerHTML = grammarIds[i].title;
             selectTag.appendChild(newElt);
         }
     };

     // This adds a grammar from the grammars array
     // We add them one by one and call it again as
     // a callback.
     // Once we are done adding all grammars, we can call
     // recognizerReady()
     Malaika.feedGrammar = function (g, index, id) {
         if (id && (grammarIds.length > 0)) grammarIds[0].id = id.id;
         if (index < g.length) {
             grammarIds.unshift({
                 title: g[index].title
             });
             Malaika.postRecognizerJob({
                     command: 'addGrammar',
                     data: g[index].g
                 },
                 function (id) {
                     Malaika.feedGrammar(grammars, index + 1, {
                         id: id
                     });
                 });
         }
         else {
             Malaika.recognizerReady();
         }
     };

     // This adds words to the recognizer. When it calls back, we add grammars
     Malaika.feedWords = function (words) {
         Malaika.postRecognizerJob({
                 command: 'addWords',
                 data: words
             },
             function () {
                 Malaika.feedGrammar(grammars, 0);
             });
     };

     // This initializes the recognizer. When it calls back, we add words
     Malaika.initRecognizer = function () {
         // You can pass parameters to the recognizer, such as : {command: 'initialize', data: [["-hmm", "my_model"], ["-fwdflat", "no"]]}
         Malaika.postRecognizerJob({
                 command: 'initialize'
             },
             function () {
                 if (Malaika.recorder) Malaika.recorder.consumers = [Malaika.recognizer];
                 Malaika.feedWords(Malaika.wordList);
             });
     };
     Malaika.openApp = function(appName,newWindow){
         if(newWindow){
             window.open("http://localhost" + Malaika.Apps[appName]);
         }else{
              window.location.assign("http://localhost" + Malaika.Apps[appName]);
         }
     };

     // When the page is loaded, we spawn a new recognizer worker and call getUserMedia to
     // request access to the microphone
     window.onload = function () {
         Malaika.outputContainer = document.getElementById("output");
         Malaika.updateStatus("Stretching, whenever you're ready....");
         Malaika.callbackManager = new CallbackManager();
         Malaika.spawnWorker("js/recognizer.js", function (worker) {
             // This is the onmessage function, once the worker is fully loaded
             worker.onmessage = function (e) {
                 // This is the case when we have a callback id to be called
                 if (e.data.hasOwnProperty('id')) {
                     var clb = Malaika.callbackManager.get(e.data['id']);
                     var data = {};
                     if (e.data.hasOwnProperty('data')) data = e.data.data;
                     if (clb) clb(data);
                 }
                 // This is a case when the recognizer has a new hypothesis
                 if (e.data.hasOwnProperty('hyp')) {

                     var newHyp = e.data.hyp;

                     if (e.data.hasOwnProperty('final') && e.data.final) {
                         switch (newHyp) {
                             case "OPEN-DOCS":
                                 window.document.getElementById("malaikaspeech").innerHTML = "Opening PDFLINT ...  ";
                                 meSpeak.speakMultipart([{
                                     text: "Opening ",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }, {
                                     text: "PDFLINT ....",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 80,
                                     speed: 160
                                 });

                                 window.setTimeout(function () {
                                     window.location.assign("http://localhost:80/Producktiviti/PDFLint");
                                 }, 6000);

                                 newHyp = "Final: " + newHyp;
                                 break;
                             case "HI-MALAIKA":
                                 window.document.getElementById("malaikaspeech").innerHTML = "Hi, " + localStorage.getItem("Name") + "!";
                                 meSpeak.speakMultipart([{
                                     text: "Hi ",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 85,
                                     speed: 160
                                 });
                                 window.setTimeout(function () {
                                     meSpeak.speakMultipart([{
                                         text: localStorage.getItem("Name"),
                                         voice: "en/en-us",
                                         variant: "f2"
                                     }], {
                                         pitch: 70,
                                         speed: 160
                                     });
                                 }, 500);
                                 break;
                                 case "HOWS_GITHUB":
                                     Malaika.checkGithub();
                             case "HOW-ARE-YOU":
                                 window.document.getElementById("malaikaspeech").innerHTML = "I'm fine, " + localStorage.getItem("Name") + "!";
                                 meSpeak.speakMultipart([{
                                     text: "I'm fine ",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 85,
                                     speed: 160
                                 });
                                 window.setTimeout(function () {
                                     meSpeak.speakMultipart([{
                                         text: localStorage.getItem("Name"),
                                         voice: "en/en-us",
                                         variant: "f2"
                                     }], {
                                         pitch: 70,
                                         speed: 160
                                     });
                                 }, 500);
                                 break;
                             case "WHATS-UP":
                                 action = Math.floor(Math.random() * 3 + 1);
                                 switch (action) {
                                     case 1:
                                         meSpeak.speakMultipart([{
                                             text: "I'm listening",
                                             voice: "en/en-us",
                                             variant: "f2"
                                         }], {
                                             pitch: 75,
                                             speed: 160
                                         });
                                         window.setTimeout(function () {
                                             meSpeak.speakMultipart([{
                                                 text: "to you, ",
                                                 voice: "en/en-us",
                                                 variant: "f2"
                                             }, {
                                                 text: localStorage.getItem("Name"),
                                                 voice: "en/en-us",
                                                 variant: "f2"
                                             }], {
                                                 pitch: 70,
                                                 speed: 160
                                             });
                                         }, 500);
                                         break;
                                     case 2:
                                         meSpeak.speakMultipart([{
                                             text: "I'm checking the Internet",
                                             voice: "en/en-us",
                                             variant: "f2"
                                         }], {
                                             pitch: 75,
                                             speed: 160
                                         });
                                         window.document.getElementById("malaikaspeech").innerHTML = "I'm checking the Internet";
                                         break;
                                     case 3:
                                         meSpeak.speakMultipart([{
                                             text: "Did you know that you can ask for help on using your ArcherVM?",
                                             voice: "en/en-us",
                                             variant: "f2"
                                         }], {
                                             pitch: 75,
                                             speed: 160
                                         });
                                         window.document.getElementById("malaikaspeech").innerHTML = "Did you know that you can ask for help on using your ArcherVM?";
                                         break;
                                 }

                                 break;
                             case "METRO-ALERTS":
                                 ArcherSysOS.$.ajax({
                                         url: 'https://api.wmata.com/Incidents.svc/json/BusIncidents?' + ArcherSysOS.$.param({
                                             // Specify your subscription key
                                             'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
                                             // Specify values for the following required parameters

                                         }),
                                         type: 'GET'
                                     })
                                     .done(function (data) {
                                         var alerts = [];
                                         for (var ij = 0; ij < data.BusIncidents.length; ij++) {
                                             alerts.push({
                                                 text: data.BusIncidents[ij].IncidentType + " Detected",
                                                 voice: "en/en-us",
                                                 variant: "f2"
                                             });
                                             alerts.push({
                                                 text: data.BusIncidents[ij].Description,
                                                 voice: "en/en-us",
                                                 variant: "f2"
                                             });
                                         }
                                         meSpeak.speakMultipart(alerts, {
                                             pitch: 75,
                                             speed: 160
                                         });

                                     }).fail(function(error){
                                         Malaika.speak(["I'm sorry.","the Internet and I aren't talking right now"],["f2","f2"],["en/en-us","en/en-us"],80);
                                     });
                                 break;
                             case "I-HAVE-A-MATH-HINT":
                                 meSpeak.speakMultipart([{
                                     text: "I'm all ears!",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 var mathProblem = prompt("Tell me your problem to continue...");
                                 try {
                                     var result = eval(mathProblem);
                                      meSpeak.speakMultipart([{
                                     text: result,
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 }
                                 catch (e) {
                                     result = "I'm sorry, this does not compute to me.";
                                      meSpeak.speakMultipart([{
                                     text: result,
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 }
                                

                                 break;
                                 case "WHATS-THE-BEST-OS":
                                    
                                     Malaika.speak(["I would recommend ArcherSys OS 4 and or Windows 10."],["f2"],["en/en-us"],80);
                                     break;
                                 case "WHAT-TIME-IS-IT":
                                 var timeNow = new Date();
                                 var hora = null;
                                 hora = timeNow.getHours();
                                 if (timeNow.getHours() > 12) {

                                     hora -= 12;
                                 }
                                 if (timeNow.getMinutes() >= 30) {
                                     hora = hora + 1;
                                     if (hora > 12) {
                                         hora -= 12;
                                     }

                                 }

                                 var timeVerb = "";

                                 if (timeNow.getMinutes() >= 30) {
                                     timeVerb += (60 - timeNow.getMinutes()) + " to ";

                                 }
                                 else if (timeNow.getMinutes() == 0) {
                                     timeVerb += " it is";
                                 }
                                 else {
                                     timeVerb += timeNow.getMinutes() + " after";
                                 }
                                 meSpeak.speakMultipart([{
                                     text: timeVerb + hora,
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 window.document.getElementById("malaikaspeech").innerHTML = window.document.getElementById("malaikaspeech").innerHTML = timeVerb + hora;
                                 break;
                             case "SHOW-YOURSELF":
                                 meSpeak.speakMultipart([{
                                     text: "I'm MAL-AY-KAH, your personal assistant",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "LOOKUP":
                                 var searchresult = prompt("Enter Something to Search");

                                 meSpeak.speakMultipart([{
                                     text: "Search " + searchresult,
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 window.setTimeout(function () {
                                     window.location.assign("http://localhost:80/Producktiviti/index-default.php?Query=" + searchresult);
                                 }, 4000);
                                 break;

                             case "CARS":
                                 meSpeak.speakMultipart([{
                                     text: "Dodge Dart GT",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }, {
                                     text: "Audee R8 E-tron",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "BINARY":
                                 var numbers = [];
                                 result = Number(prompt("Enter a number for me to convert")).toString(2);
                                 for (var i = 0; i < result.length; i++) {
                                     numbers.push({
                                         text: result[i],
                                         voice: "en/en-us",
                                         variant: "f2"
                                     })
                                 }
                                 meSpeak.speakMultipart(numbers, {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 window.document.getElementById("malaikaspeech").innerHTML = result;
                                 break;
                             case "HEXADECIMAL":
                                  numbers = [];
                                  result = Number(prompt("Enter a number for me to convert")).toString(16);
                                 for ( i = 0; i < result.length; i++) {
                                     numbers.push({
                                         text: result[i],
                                         voice: "en/en-us",
                                         variant: "f2"
                                     });
                                 }
                                 Malaika.speak(numbers, {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "THANK-YOU":
                                 meSpeak.speakMultipart([{
                                     text: "You're welcome",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "THANKS":
                                 meSpeak.speakMultipart([{
                                     text: "You're welcome",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                                 case "OPEN-APP":
                                     app = prompt("Start which app?");
                                         meSpeak.speakMultipart([{
                                     text: "Opening ," + app,
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 Malaika.speak(["Would you like to open " + app + "in a new window or keep it simple?"],["f2"],["en/en-us"],80);
                                 window.setTimeout(function(){
                                 var result = confirm("Would you like to open " + app + "in a new window or keep it simple?");
                                 if(result){
                                     window.setTimeout(function () {
                                         Malaika.openApp(app,false);
                                     }, 5000);
                                 }else{
                                       window.setTimeout(function () {
                                         Malaika.openApp(app,true);
                                     }, 5000)
                                 }
                                 },10000);
                                 
                                     break;
                             case "HAVE-YOU-ATTENDED-TECH":
                                 meSpeak.speakMultipart([{
                                     text: "Yes, I have.",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }, {
                                     text: "I'm glad you asked.",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "WHATS-TECH-LIKE":
                                 meSpeak.speakMultipart([{
                                     text: "A very nice place, indeed.",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }, {
                                     text: "A very good friend of mine who made me your assistant went there.",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "HOW-DO-I-MAKE-DOCUMENTS":
                                 meSpeak.speakMultipart([{
                                     text: "Just use PDFLint",
                                     voice: "en/en-us",
                                     variant: "f2"
                                 }], {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "TERNARY":
                                 var numbers = [];
                                 var result = Number(prompt("Enter a number for me to convert")).toString(3);
                                 for (var i = 0; i < result.length; i++) {
                                     numbers.push({
                                         text: result[i],
                                         voice: "en/en-us",
                                         variant: "f2"
                                     });
                                     meSpeak.speakMultipart(numbers, {
                                         pitch: 75,
                                         speed: 160
                                     });
                                 }
                                 break;
                             case "QUARTERNARY":
                                 var numbers = [];
                                 var result = Number(prompt("Enter a number for me to convert")).toString(4);
                                 for (var i = 0; i < result.length; i++) {
                                     numbers.push({
                                         text: result[i],
                                         voice: "en/en-us",
                                         variant: "f2"
                                     });
                                 }
                                 meSpeak.speakMultipart(numbers, {
                                     pitch: 75,
                                     speed: 160
                                 });
                                 break;
                             case "QUINARY":
                                 var numbers = [];
                                 var result = Number(prompt("Enter a number for me to convert")).toString(5);
                                 for (var i = 0; i < result.length; i++) {
                                     numbers.push({
                                         text: result[i],
                                         voice: "en/en-us",
                                         variant: "f2"
                                     });
                                     meSpeak.speakMultipart(numbers, {
                                         pitch: 75,
                                         speed: 160
                                     });
                                     break;
                                   
                                 }
                         }
                     }
                     Malaika.updateHyp(newHyp);

                 }
                 // This is the case when we have an error
                 if (e.data.hasOwnProperty('status') && (e.data.status == "error")) {
                     Malaika.updateStatus("Error in " + e.data.command + " with code " + e.data.code);
                 }
             };
             // Once the worker is fully loaded, we can call the initialize function
             Malaika.initRecognizer();
         });

         // The following is to initialize Web Audio
         try {
             window.AudioContext = window.AudioContext || window.webkitAudioContext;
             navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
             window.URL = window.URL || window.webkitURL;
             Malaika.audioContext = new AudioContext();
         }
         catch (e) {
             Malaika.updateStatus("Something's not right.");
         }
         if (navigator.getUserMedia) navigator.getUserMedia({
             audio: true
         }, Malaika.startUserMedia, function (e) {
             Malaika.updateStatus("I cannot hear you right now.");
         });
         else Malaika.updateStatus("I am deaf in this browser");

         // Wiring JavaScript to the UI
         var startBtn = window.document.getElementById('startBtn');
         var stopBtn = window.document.getElementById('stopBtn');
         startBtn.disabled = true;
         stopBtn.disabled = true;
         startBtn.onclick = Malaika.startRecording;
         stopBtn.onclick = Malaika.stopRecording;
     };
     /** @constructor Creates a Transition Object
      *
      */
     Malaika.Transition = ArcherSysOS.defineClass(function (from, to, word) {
         this.from = from;
         this.to = to;
         this.word = word;
     }, {}, {});
     // This is the list of words that need to be added to the recognizer
     // This follows the CMU dictionary format
     Malaika.wordList = [
         ["ONE", "W AH N"],
         ["TWO", "T UW"],
         ["THREE", "TH R IY"],
         ["FOUR", "F AO R"],
         ["FIVE", "F AY V"],
         ["SIX", "S IH K S"],
         ["SEVEN", "S EH V AH N"],
         ["EIGHT", "EY T"],
         ["NINE", "N AY N"],
         ["ZERO", "Z IH R OW"],
         ["NEW-YORK", "N UW Y AO R K"],
         ["NEW-YORK-CITY", "N UW Y AO R K S IH T IY"],
         ["PARIS", "P AE R IH S"],
         ["PARIS(2)", "P EH R IH S"],
         ["SHANGHAI", "SH AE NG HH AY"],
         ["SAN-FRANCISCO", "S AE N F R AE N S IH S K OW"],
         ["LONDON", "L AH N D AH N"],
         ["BERLIN", "B ER L IH N"],
         ["SUCKS", "S AH K S"],
         ["ROCKS", "R AA K S"],
         ["IS", "IH Z"],
         ["NOT", "N AA T"],
         ["GOOD", "G IH D"],
         ["GOOD(2)", "G UH D"],
         ["GREAT", "G R EY T"],
         ["WINDOWS", "W IH N D OW Z"],
         ["LINUX", "L IH N AH K S"],
         ["UNIX", "Y UW N IH K S"],
         ["MAC", "M AE K"],
         ["AND", "AE N D"],
         ["AND(2)", "AH N D"],
         ["O", "OW"],
         ["S", "EH S"],
         ["X", "EH K S"],
         ["OPEN-DOCS", "OW P EH N D AA K  S"],
         ["HI-MALAIKA", "AY M AA L AY K AH"],
         ["HOW-ARE-YOU", "HH OW R Y UW"],
         ["WHATS-UP", "W AH T S AH P"],
          ["WHATS-THE-BEST-OS", "W AH T S TH AH B EH S T OW EH S"],
         ["I-HAVE-A-MATH-HINT", "AY HH AE V AH M AE TH HH IH N T"],
         ["WHAT-TIME-IS-IT", "W AH T T AY M IH S IH T"],
         ["SHOW-YOURSELF", "SH OW Y AO R S EH L F"],
         ["BINARY", "B AY N AH R IY"],
         ["HEXADECIMAL", "HH EH K S AH D EH S IH M AH L"],
         ["THANK-YOU", "TH AE N K Y UW"],
         ["THANKS", "TH AE N K S"],
         ["OPEN-APP","OW P EH N AA P"],
         ["CARS", "K AA R S"],
         ["HAVE-YOU-ATTENDED-TECH", "HH AA V Y UW AA T EH N D EH D T EH K"],
         ["WHATS-TECH-LIKE", "W AH T S T EH K L AY K"],
         ["TERNARY", "T ER N EH R Y"],
         ["QUARTERNARY", "K W R T ER N EH R Y"],
         ["HOW-DO-I-MAKE-DOCUMENTS", "HH OW D UW AY M AE K D AA K Y UW M EH N T S"],
         ["METRO-ALERTS", "M EH T R OW AA L ER T S"],
         ["LOOKUP", "L UH K AH P"],
         ["QUINARY", "K W AY N EH R Y"]
     ];
     // This grammar recognizes digits
     var grammarDigits = {
         numStates: 1,
         start: 0,
         end: 0,
         transitions: [{
             from: 0,
             to: 0,
             word: "ONE"
         }, {
             from: 0,
             to: 0,
             word: "TWO"
         }, {
             from: 0,
             to: 0,
             word: "THREE"
         }, {
             from: 0,
             to: 0,
             word: "FOUR"
         }, {
             from: 0,
             to: 0,
             word: "FIVE"
         }, {
             from: 0,
             to: 0,
             word: "SIX"
         }, {
             from: 0,
             to: 0,
             word: "SEVEN"
         }, {
             from: 0,
             to: 0,
             word: "EIGHT"
         }, {
             from: 0,
             to: 0,
             word: "NINE"
         }, {
             from: 0,
             to: 0,
             word: "ZERO"
         }]
     };
     // This grammar recognizes a few cities names
     var grammarCities = {
         numStates: 1,
         start: 0,
         end: 0,
         transitions: [{
             from: 0,
             to: 0,
             word: "NEW-YORK"
         }, {
             from: 0,
             to: 0,
             word: "NEW-YORK-CITY"
         }, {
             from: 0,
             to: 0,
             word: "PARIS"
         }, {
             from: 0,
             to: 0,
             word: "SHANGHAI"
         }, {
             from: 0,
             to: 0,
             word: "SAN-FRANCISCO"
         }, {
             from: 0,
             to: 0,
             word: "LONDON"
         }, {
             from: 0,
             to: 0,
             word: "BERLIN"
         }]
     };
     var grammarFun = {
         numStates: 1,
         start: 0,
         end: 0,
         transitions: [{
             from: 0,
             to: 0,
             word: "HI-MALAIKA"
         }, {
             from: 0,
             to: 0,
             word: "HOW-ARE-YOU"
         }, {
             from: 0,
             to: 0,
             word: "WHATS-UP"
         }, {
             from: 0,
             to: 0,
             word: "I-HAVE-A-MATH-HINT"
         }, {
             from: 0,
             to: 0,
             word: "WHAT-TIME-IS-IT"
         }, {
             from: 0,
             to: 0,
             word: "SHOW-YOURSELF"
         }, {
             from: 0,
             to: 0,
             word: "BINARY"
         }, {
             from: 0,
             to: 0,
             word: "HEXADECIMAL"
         }, new Malaika.Transition(0, 0, "THANK-YOU"), new Malaika.Transition(0, 0, "THANKS"), {
             from: 0,
             to: 0,
             word: "CARS"
         }, new Malaika.Transition(0, 0, "HAVE-YOU-ATTENDED-TECH"), new Malaika.Transition(0, 0, "WHATS-TECH-LIKE"), new Malaika.Transition(0, 0, "TERNARY"), new Malaika.Transition(0, 0, "QUARTERNARY"), new Malaika.Transition(0, 0, "HOW-DO-I-MAKE-DOCUMENTS"), new Malaika.Transition(0, 0, "METRO-ALERTS"), new Malaika.Transition(0, 0, "LOOKUP"), new Malaika.Transition(0, 0, "QUINARY"),new Malaika.Transition(0,0,"OPEN-APP"),new Malaika.Transition(0,0,"WHATS-THE-BEST-OS")]
     };

     var grammarApps = {
         numStates: 1,
         start: 0,
         end: 0,
         transitions: [{
             from: 0,
             to: 0,
             word: "OPEN-DOCS"
         }]
     };
     // This is to play with beloved or belated OSes
     var grammarOses = {
         numStates: 7,
         start: 0,
         end: 6,
         transitions: [new Malaika.Transition(0, 1, "WINDOWS"), {
             from: 0,
             to: 1,
             word: "LINUX"
         }, {
             from: 0,
             to: 1,
             word: "UNIX"
         }, {
             from: 1,
             to: 2,
             word: "IS"
         }, {
             from: 2,
             to: 2,
             word: "NOT"
         }, {
             from: 2,
             to: 6,
             word: "GOOD"
         }, {
             from: 2,
             to: 6,
             word: "GREAT"
         }, {
             from: 1,
             to: 6,
             word: "ROCKS"
         }, {
             from: 1,
             to: 6,
             word: "SUCKS"
         }, {
             from: 0,
             to: 4,
             word: "MAC"
         }, {
             from: 4,
             to: 5,
             word: "O"
         }, {
             from: 5,
             to: 3,
             word: "S"
         }, {
             from: 3,
             to: 1,
             word: "X"
         }, {
             from: 6,
             to: 0,
             word: "AND"
         }]
     };
     /**@constructor Creates word sets for Malaika to follow.
      *
      */
     Malaika.GrammarPack = ArcherSysOS.defineClass(function(title,grammar){
         
         this.title = title;
         this.g = grammar;
     },{
         
     },{
         
     });
     Malaika.addGrammarPack = function(gPack){
         if(gPack instanceof Malaika.GrammarPack){
             grammar.push(gPack);
         }
     };
     var grammars = [new Malaika.GrammarPack("OSes",grammarOses),new Malaika.GrammarPack("Digits",grammarDigits),new Malaika.GrammarPack("Cities",grammarCities), new Malaika.GrammarPack("App Commander",grammarApps),new Malaika.GrammarPack("Conversationals",grammarFun)];
     var grammarIds = [];
     Malaika.Apps = {
       PDFLint: "/Producktiviti/PDFLint",
       
     };
     Malaika.Dictionary = {
        "Bildungsroman":"a novel whose subject is the development of a youthful main character"
    
     };