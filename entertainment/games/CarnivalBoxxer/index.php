<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>\
<style>
    * {
  box-sizing: border-box;
}

h1 {
  font-size: 1.4em;
}

body {
  counter-reset: game;
  text-align: center;
  background: #e9b58b;
  font-family: 'Open Sans', 'Helvetica', 'Arial', sans-serif;
  color: #333;
}

input:checked {
  counter-increment: game;
}

.total-count::after {
  content: counter(game);
}

h2 {
  font-size: 1em;
  margin: -.5em auto 3em;
  font-weight: 400;
}

.total-count {
  font-size: 1.75em;
  position: absolute;
  top: 1.75em;
  width: 100%;
  left: 0;
  text-align: center;
  z-index: 300;
}

.game-area {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: wrap;
      -ms-flex-flow: wrap;
          flex-flow: wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  max-width: 600px;
  min-height: 550px;
  max-height: 700px;
  margin: 0 auto;
  padding-left: 0;
}

li {
  width: calc(33% - .5em);
  margin-bottom: 1em;
  height: 10em;
  list-style: none;
  position: relative;
  outline: 4px solid white;
  background: #64ddf3;
}
li:nth-child(1) input {
  -webkit-filter: hue-rotate(250.47724deg) brightness(1.58449);
          filter: hue-rotate(250.47724deg) brightness(1.58449);
  -webkit-animation-duration: 4.68949s;
          animation-duration: 4.68949s;
}
li:nth-child(2) input {
  -webkit-filter: hue-rotate(36.13199deg) brightness(1.66913);
          filter: hue-rotate(36.13199deg) brightness(1.66913);
  -webkit-animation-duration: 2.15691s;
          animation-duration: 2.15691s;
}
li:nth-child(3) input {
  -webkit-filter: hue-rotate(342.52979deg) brightness(1.56817);
          filter: hue-rotate(342.52979deg) brightness(1.56817);
  -webkit-animation-duration: 3.60893s;
          animation-duration: 3.60893s;
}
li:nth-child(4) input {
  -webkit-filter: hue-rotate(271.57201deg) brightness(1.44817);
          filter: hue-rotate(271.57201deg) brightness(1.44817);
  -webkit-animation-duration: 3.77258s;
          animation-duration: 3.77258s;
}
li:nth-child(5) input {
  -webkit-filter: hue-rotate(341.8777deg) brightness(1.51128);
          filter: hue-rotate(341.8777deg) brightness(1.51128);
  -webkit-animation-duration: 1.43151s;
          animation-duration: 1.43151s;
}
li:nth-child(6) input {
  -webkit-filter: hue-rotate(213.68837deg) brightness(1.75405);
          filter: hue-rotate(213.68837deg) brightness(1.75405);
  -webkit-animation-duration: 4.14195s;
          animation-duration: 4.14195s;
}
li:nth-child(7) input {
  -webkit-filter: hue-rotate(6.13713deg) brightness(1.31901);
          filter: hue-rotate(6.13713deg) brightness(1.31901);
  -webkit-animation-duration: 2.20735s;
          animation-duration: 2.20735s;
}
li:nth-child(8) input {
  -webkit-filter: hue-rotate(194.95933deg) brightness(1.06626);
          filter: hue-rotate(194.95933deg) brightness(1.06626);
  -webkit-animation-duration: 0.24448s;
          animation-duration: 0.24448s;
}
li:nth-child(9) input {
  -webkit-filter: hue-rotate(359.2819deg) brightness(1.9036);
          filter: hue-rotate(359.2819deg) brightness(1.9036);
  -webkit-animation-duration: 1.32149s;
          animation-duration: 1.32149s;
}

input[type="checkbox"] {
  width: 50px;
  height: 50px;
  position: absolute;
  cursor: crosshair;
  background: -webkit-radial-gradient(#ff0000 10%, #ffffff 10%, #ffffff 30%, #ff0000 30%, #ff0000 50%, #ffffff 50%, #ffffff 80%, #ff0000 80%, #ff0000 100%);
  background: radial-gradient(#ff0000 10%, #ffffff 10%, #ffffff 30%, #ff0000 30%, #ff0000 50%, #ffffff 50%, #ffffff 80%, #ff0000 80%, #ff0000 100%);
  border-radius: 50%;
  display: block;
  left: 0;
  right: 0;
  text-align: center;
  margin: 0 auto;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: 6px solid red;
  -webkit-animation: hide-target infinite alternate ease-in-out;
          animation: hide-target infinite alternate ease-in-out;
  z-index: 1;
}
input[type="checkbox"]:before {
  content: '';
  display: block;
  background-color: black;
  height: 50%;
  width: 6px;
  position: absolute;
  left: 0;
  right: 0;
  top: calc(100% + 6px);
  margin: 0 auto;
  z-index: -1;
}
input[type="checkbox"]:focus {
  outline: none;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
input[type="checkbox"]:checked {
  pointer-events: none;
  -webkit-filter: grayscale(1) opacity(0.75);
          filter: grayscale(1) opacity(0.75);
  -webkit-animation: none;
          animation: none;
}
input[type="checkbox"]:checked:after {
  content: '+1!';
  padding: .5em;
  margin: 1em 0 0 1.5em;
  font-size: 2.5em;
  font-weight: 600;
}

.shield {
  background: #724c20;
  width: 100%;
  height: 60%;
  margin: 0 auto;
  bottom: 0;
  left: 0;
  right: 0;
  position: absolute;
  pointer-events: all;
  z-index: 100;
}

@-webkit-keyframes hide-target {
  0% {
    top: 0;
  }
  25% {
    top: 50%;
  }
  100% {
    top: 0;
  }
}

@keyframes hide-target {
  0% {
    top: 0;
  }
  25% {
    top: 50%;
  }
  100% {
    top: 0;
  }
}
.game-over {
  height: 100%;
  width: 100%;
  display: block;
  background: white;
  pointer-events: all;
  position: absolute;
  top: -100%;
  left: 0;
  z-index: 200;
  -webkit-animation: appear .25s forwards;
          animation: appear .25s forwards;
  -webkit-animation-delay: 16s;
          animation-delay: 16s;
  background: -webkit-repeating-linear-gradient(135deg, #c9ff00 0, #c9ff00 5em, #20c0ff 5em, #20c0ff 10em);
  background: repeating-linear-gradient(-45deg, #c9ff00 0, #c9ff00 5em, #20c0ff 5em, #20c0ff 10em);
}
.game-over h1 {
  padding: 1em 0 3.5em;
  background: white;
}

@-webkit-keyframes appear {
  from {
    top: -100vh;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

@keyframes appear {
  from {
    top: -100vh;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}
.play-again {
  background: white;
  color: #20c0ff;
  padding: .5em 1em;
  font-size: 2.5em;
  font-weight: 700;
}

small a {
  margin-bottom: 2em;
  display: block;
  color: #222;
}

</style>

<h1>CSS Only Carnival: Target Practice</h1>
<h2>This game uses no JS at all (isn't CSS awesome?). You have 8 seconds to hit as many targets as you can!</h2>

<div class="game-over">
  <h1>Game Over!</h1>
  <a class="play-again" target="_parent" href="<?php echo $_SERVER["PHP_SELF"];?>">Play Again</a>
</div>

<ul class="game-area">
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
  <li><input type="checkbox"><div class="shield"></div></li>
</ul>

<h3 class="total-count">Targets Hit: &nbsp;</h3>

<small><a href="http://twitter.com/<una</una>">Made with love by @una &hearts;</a></small>