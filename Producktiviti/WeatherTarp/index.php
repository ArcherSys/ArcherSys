<!DOCTYPE HTML>
<html>
    <head>
        <script src="/core/js/jquery.js"></script>
        <script type="text/javascript">
            // looks best in full mode

// work in progress
$(function(){
  
  var weather = {
    init: function(){
      this.form = $(".weather");
      this.loc = $(".location");
      this.icon = $(".icon");
      this.temp = $(".temp");
      this.city = $(".name");
      this.weather = $(".title");
      this.desc = $(".description");
      this.message = $(".message");
      this.loader = $(".loader");
      this.loadingBox = $(".loading");
      this.currentCity = null;
      // maps api weather codes to icon font
      this.icons = {
        "01d": "B",
        "01n": "C",
        
        "02d": "H",
        "02n": "I",
        
        "03d": "N",
        "03n": "N",
        
        "04d": "Y",
        "04n": "Y",
        
        "09d": "Q",
        "09n": "Q",
        
        "10d": "R",
        "10n": "R",
        
        "11d": "0",
        "11n": "0",
        
        "13d": "W",
        "13n": "W",
        
        "50d": "J",
        "50n": "K",
      };
      this.binding();
    },
    
    binding: function(){
      this.form.on("submit", $.proxy(this.formSubmit, this));
    },
    
    formSubmit: function(e){
      if(this.loc.val() && this.loc.val() !== this.currentCity){
        this.getWeather(this.loc.val());
      } else if(this.loc.val() == this.currentCity){
        $(".content").velocity({
          translateX: [-3, 3, 0],
          translate3d: 0
        }, {
          duration: 50,
          loop: 2
        });
      }
      e.preventDefault();
    },
    
    getWeather: function(loc){
      var city = encodeURIComponent(loc);
      this.currentCity = loc;
      this.loading();
      $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?units=imperial&q=" + city,
        dataType: "json",
        success: $.proxy(this.showWeather, this)
      });
    },
    
    weatherData: function(data){
      if(data.name){
        return {
          name: data.name,
          lat: data.coord.lat,
          lon: data.coord.lon,
          weather: data.weather[0].main,
          weatherDesc: data.weather[0].description,
          temp: Math.round(data.main.temp),
          tempMax: data.main.temp_max,
          tempMin: data.main.temp_min,
          humidity: data.main.humidity,
          iconMap: data.weather[0].icon,
          wind: {
            deg: data.wind.deg,
            speed: data.wind.speed
          }
        }
      } else {
        return false;
      }
    },
    
    showWeather: function(data){
     var w = this.weatherData(data);
     if(w){
       this.icon.html(this.icons[w.iconMap]);
       this.city.html(w.name);
       this.temp.html(w.temp);
       this.temp.attr("data-far", "+");
       this.desc.html(w.weatherDesc);
       this.weather.html(w.weather);
       this.weatherChange();
     } else {
       this.cityNotFound();
     }
    },
    
    clearAll: function(){
      var els = ["temp", "city", "desc", "weather", "icon"];
      var i;
      for(i=0;i<els.length;i++){
        var s = els[i];
        this[s].velocity("stop");
        this[s].velocity({
          opacity: 0,
          translateY: [0, -50]
        },{
          display: "none",
          duration: 0
        });
      }
    },
    
    loading: function(){
      this.clearAll();
      this.message.html("Checking the weather for: <em>" + this.currentCity) + "</em>";
      this.message.velocity({
        translateY: [20, 0],
        opacity: 1
      }, {
        display: "block",
        duration: 1000
      });
      
      this.loader.velocity({
        translateY: [40, 10],
        translateX: [0, 1000],
        opacity: 1,
      }, {
        display: "inline-block",
        duration: 750
      }).velocity({
        rotateZ: [-540, 0],
        easing: "linear"
      }, {
        loop: 10,
        delay: 250,
        duration: 3000
      });
    },
    
    cityNotFound: function(){
      this.message.html("No weather data found for <em>" + this.currentCity + "</em>, please try a different city.");
      this.loader.velocity("stop");
      this.loader.velocity({
        opacity: 0,
        translateX: 1000
      }, {
        duration: 1000,
        display: "none"
      })
    },
    
    weatherChange: function(){
     this.message.velocity("stop");
     this.message.velocity({
       translateY: 0,
       opacity: 0,
     }, {
       display: "none",
       duration: 0,
     });
     this.loader.velocity("stop");
     this.loader.velocity({
       translateY: 0,
       opacity: 0
      }, {
        display: "none",
        delay: 0,
        duration: 0,
        complete: function(){
          var w = weather;
          w.icon.velocity({
            opacity: 1,
            translateX: [0, 25],
            
          }, {
            display: "block",
            duration: 600,
            
          });
          w.city.velocity({
            opacity: [1, 0],
            translateX: [0, 300]
            
          }, {
            duration: 800,
            display: "block"
          });
          w.weather.velocity({
            opacity: [1,0],
            translateY: [0, 100]
          }, {
            duration: 600,
            display: "block"
          });
          
          w.desc.velocity({
            opacity: [1, 0],
            translateX: [0, -100]
          }, {
            duration: 600,
            delay: 600,
            display: "block"
          });
          
          w.temp.velocity({
            opacity: 1,
            translateY: [0, -20]
          }, {
            display: "inline-block",
            duration: 600,
            delay: 400
          });
        }
      });
      
    },
    
   
  }; // end weather {}
  
  
  weather.init();
  
})(jQuery, window);
        </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p data-height="591" data-theme-id="0" data-slug-hash="wuqIc" data-default-tab="result" data-user="natewiley" class='codepen'>See the Pen <a href='http://codepen.io/natewiley/pen/wuqIc/'>Weather App</a> by Nate Wiley (<a href='http://codepen.io/natewiley'>@natewiley</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
</body>
</html>