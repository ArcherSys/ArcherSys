$(document).ready(function() {
	var flickrGame = {
		APIKEY: "76656089429ab3a6b97d7c899ece839d",
		imageArray: [],
		tempImages:[],
		theImages: [],
		chosenCards: [],
		numberPhotosReturned: 0,
		imageNum: 0,
		numImagesLoaded: 0,
        totalImages: 12,
        numberLevels: 0,
		currentLevel: 0
    }
	 function randOrd() {
        return (Math.round(Math.random()) - 0.5);
    }
	function doSearch() {
	    if ($("#searchterm").val() != "") {
	        $(document).off("keypress");
			 $("#infoprogress").css({
                'visibility': 'visible'
            });
            var searchURL = "http://api.flickr.com/services/rest/?method=flickr.photos.search";
            searchURL += "&api_key=" + flickrGame.APIKEY;
            searchURL += "&tags=" + $("#searchterm").val();
            searchURL += "&per_page=36"
            searchURL += "&license=5,7";
            searchURL += "&format=json";
            searchURL += "&jsoncallback=?";
            $.getJSON(searchURL, setImages);
        }
	}
	
	function setImages(data) {
	$("#infoprogress").css({
		'visibility': 'hidden'
	});
	 $("#progressdiv").css({
            'visibility': 'visible'
        });
    $("#progressdiv p").text("Loading Photo Information");
	if (data.photos.photo.length >= 12) {
		$("#searchdiv").css({
			'visibility': 'hidden'
		});
		$.each(data.photos.photo, function (i, item) {
			var imageURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_' + 'q.jpg';
			flickrGame.imageArray.push({
				imageUrl: imageURL,
				photoid: item.id
			});
            var getPhotoInfoURL = "http://api.flickr.com/services/rest/?method=flickr.photos.getInfo";
			getPhotoInfoURL += "&api_key=" + flickrGame.APIKEY;
			getPhotoInfoURL += "&photo_id=" + item.id;
			getPhotoInfoURL += "&format=json";
			getPhotoInfoURL += "&jsoncallback=?";
            $.getJSON(getPhotoInfoURL, infoLoaded);
		});
	} else {
	      $("#progressdiv").css({
                'visibility': 'hidden'
        });
		 $("#dialog").dialog('open');
		addKeyPress();
   }
	 flickrGame.numberPhotosReturned = flickrGame.imageArray.length;
     flickrGame.numberLevels = Math.floor(flickrGame.numberPhotosReturned / 12);
   }
	
	    function infoLoaded(data) {
        flickrGame.imageNum += 1;
		var percentage = Math.floor(flickrGame.imageNum / flickrGame.numberPhotosReturned * 100);
        $("#progressbar").progressbar({
            value: percentage
        });
        var index = 0;
        for (var i = 0; i < flickrGame.imageArray.length; i++) {
            if (flickrGame.imageArray[i].photoid == data.photo.id) {
                index = i
                flickrGame.imageArray[index].username = data.photo.owner.username;
                flickrGame.imageArray[index].photoURL = data.photo.urls.url[0]._content;
            }
        }
        if (flickrGame.imageNum == flickrGame.numberPhotosReturned) {
            preloadImages();
        }
    }
	
	
	function preloadImages(){
		flickrGame.tempImages = flickrGame.imageArray.splice(0, 12);
        for (var i = 0; i < flickrGame.tempImages.length; i++) {
            for (var j = 0; j < 2; j++) {
                var tempImage = new Image();
                tempImage.src = "cardFront.png";
                tempImage.imageSource = flickrGame.tempImages[i].imageUrl;
                flickrGame.theImages.push(tempImage);
               
            }
        }
		 $("#progressdiv").css({
            'visibility': 'visible'
        });
        $("#progressdiv p").text("Loading Images");
        var tempImageArray = [];
        for (var i = 0; i < flickrGame.tempImages.length; i++) {
            tempImageArray.push(flickrGame.tempImages[i].imageUrl);
        }

        $.imgpreload(tempImageArray, //flickrGame.tempImages,
        {
            each: function () {
                if ($(this).data('loaded')) {
                    //alert("LOADED");
                    flickrGame.numImagesLoaded++;
                    var percentage = Math.floor(flickrGame.numImagesLoaded / flickrGame.totalImages * 100);
                    $("#progressbar").progressbar({
                        value: percentage
                    });
                }
            },
            all: function () {
                //alert("Preloaded "+flickrGame.numImagesLoaded+" images" );
                $("#progressdiv").css({
                    'visibility': 'hidden'
                });
                drawImages();
            }
        });
	}
	
	function drawImages() {
        flickrGame.currentLevel += 1;
        $("#leveldiv").css({
            'visibility': 'visible'
        }).html("Level " + flickrGame.currentLevel + " of " + flickrGame.numberLevels);
        flickrGame.theImages.sort(randOrd);
        for (var i = 0; i < flickrGame.theImages.length; i++) {
            $(flickrGame.theImages[i]).attr("class", "card").appendTo("#gamediv");
        }
        addListeners();
    }
	
	function addListeners() {
        for (var i = 0; i < flickrGame.theImages.length; i++) {
            $(flickrGame.theImages[i]).on("click", function (e) {
                doFlip(e);
            });
        }
    }
	
	function removeListeners() {
        for (var i = 0; i < flickrGame.theImages.length; i++) {
            $(flickrGame.theImages[i]).off("click");
        }
    }
	
	function doFlip(e) {
        var theCard = e.target;
        $(theCard).attr("src", theCard.imageSource);
        if ($('#image1').css('backgroundImage') == "none") {
            $('#image1').css('backgroundImage', 'url(' + theCard.imageSource + ')');
        } else {
            $('#image2').css('backgroundImage', 'url(' + theCard.imageSource + ')');
        }
        if (flickrGame.chosenCards.indexOf(theCard) == -1) {
            flickrGame.chosenCards.push(theCard);
            $(theCard).off("click");
        }

        if (flickrGame.chosenCards.length == 2) {
            removeListeners();
            checkForMatch();

        }
    }
	
	 function checkForMatch() {
        if (flickrGame.chosenCards.length == 2) {
            if ($("#image1").css('background-image') == $("#image2").css('background-image')) {
				setTimeout(hideCards, 1000);
            } else {
                setTimeout(resetImages, 1000);
            }
        }

    }
	function showAttributions() {
        $("#leveldiv").css({
            'visibility': 'hidden'
        });
        $("#attributionsdiv").css({
            'visibility': 'visible'
        });
        if (flickrGame.currentLevel == flickrGame.numberLevels) {
            $("#nextlevel_btn").css({
                'visibility': 'hidden'
            });
        } else {
            $("#nextlevel_btn").css({
                'visibility': 'visible'
            });
        }

        $("#attributionsdiv div").each(function (index) {
            $(this).find('img').attr('src', flickrGame.tempImages[index].imageUrl).
            next().html('<span>Username: </span>' + flickrGame.tempImages[index].username + '<br/>' + '<a href="' + flickrGame.tempImages[index].photoURL + '"target="_blank">View Photo</a>');
        });
    }

	 function hideCards() {
        $(flickrGame.chosenCards[0]).animate({
            'opacity': '0'
        });
        $(flickrGame.chosenCards[1]).animate({
            'opacity': '0'
        });
        flickrGame.theImages.splice(flickrGame.theImages.indexOf(flickrGame.chosenCards[0]), 1);
        flickrGame.theImages.splice(flickrGame.theImages.indexOf(flickrGame.chosenCards[1]), 1);
        $("#image1").css('background-image', 'none');
        $("#image2").css('background-image', 'none');
		
		if (flickrGame.theImages.length == 0) {
            $("#gamediv img.card").remove();
            $("#gamediv").css({
                'visibility': 'hidden'
            });
            showAttributions();
        }
		addListeners();
        flickrGame.chosenCards = new Array();
    }
	
	
    function resetImages() {
        $(flickrGame.chosenCards[0]).attr("src", "cardFront.png");
        $(flickrGame.chosenCards[1]).attr("src", "cardFront.png");
        $("#image1").css('background-image', 'none');
        $("#image2").css('background-image', 'none');
        addListeners();
        flickrGame.chosenCards = new Array();
    }
    function addKeyPress() {
        $(document).on("keypress", function (e) {
            if (e.keyCode == 13) {
                if (!flickrGame.gameStarted) {
                    hideIntroScreen();
                } else {
                    doSearch();
                }
                flickrGame.gameStarted = true;
            }
        });
    }
    addKeyPress();
	
	 function hideIntroScreen() {
            $("#gamediv").css({
                'visibility': 'visible'
            });
            $("#introscreen").css({
                'visibility': 'hidden'
            });
    }
	
	 $("#dialog").dialog({
        autoOpen: false
    });
	$("#nextlevel_btn").on("click", function (e) {
        $(this).css({
            'visibility': 'hidden'
        });
        $("#gamediv").css({
            'visibility': 'visible'
        });
        $("#attributionsdiv").css({
            'visibility': 'hidden'
        });

        flickrGame.numImagesLoaded = 0;
        preloadImages();

    });
	
	$("#newgame_btn").on("click", function (e) {
        $("#gamediv").css({
            'visibility': 'visible'
        });
        $("#leveldiv").css({
            'visibility': 'hidden'
        });
        $("#attributionsdiv").css({
            'visibility': 'hidden'
        });
        $("#searchdiv").css({
            'visibility': 'visible'
        });
        $("#nextlevel_btn").css({
            'visibility': 'hidden'
        });
        flickrGame.imageNum = 0;
        flickrGame.numImagesLoaded = 0;
        flickrGame.imageArray = new Array();
        flickrGame.currentLevel = 0;
        flickrGame.numberLevels = 0;
        addKeyPress();


    });
});