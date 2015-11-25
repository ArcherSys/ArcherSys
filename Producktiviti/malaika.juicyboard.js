Malaika.JuicyBoard = {
    focusSpeak:function(phrases,voices,variants,pitch,element){
        Malaika.speak(phrases, variants, voices,pitch);
        ArcherSysOS.$("input:not(" + element + ")").hide();
    },
    focusSpeakTime:function(phrases,voices,variants,pitch,element,time){
       window.setTimeout(function(){ Malaika.speak(phrases,variants,voices,pitch);
       ArcherSysOS.$("input:not(" + element + ")").hide();
								   },time);
    },
	  focusCalibrateSpeakTime:function(phrases,voices,variants,pitch,element,time){
       window.setTimeout(function(){ Malaika.speak(phrases,variants,voices,pitch);
       ArcherSysOS.$("input:not(" + element + ")").hide();
	    ArcherSysOS.$(element).show();
								   },time);
    }
};