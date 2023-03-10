<!DOCTYPE html>
<html lang="en" >
<head>
    <style>
        html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

/* --- Colours --- */
/* --- Styles --- */
body {
  margin: 0;
  background: linear-gradient(#d8b9d7 50%, #ffc0cb);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  position: relative;
  
}

.cloud div {
  position: absolute;
  will-change: margin-top;
  z-index: -10;
}
.cloud div:nth-child(1) {
  width: 36vmin;
  height: 25vmin;
  top: 35%;
  left: 3%;
  opacity: 0.6;
  background: radial-gradient(1vmin 1vmin at 16% 53%, #fff 4vmin, transparent 4.4vmin), radial-gradient(0.8vmin 1vmin at 33% 51%, #fff 6vmin, transparent 6.4vmin), radial-gradient(1.5vmin 1vmin at 57% 30%, #fff 7vmin, transparent 7.5vmin), radial-gradient(1.2vmin 1vmin at 79% 36%, #fff 3vmin, transparent 3.4vmin), radial-gradient(2vmin 1.5vmin at 84% 55%, #fff 5vmin, transparent 5.5vmin), radial-gradient(2vmin 1.5vmin at 78% 72%, #fff 4vmin, transparent 4.5vmin), radial-gradient(2vmin 1.5vmin at 55% 72%, #fff 5.5vmin, transparent 6vmin), radial-gradient(2vmin 1.5vmin at 35% 80%, #fff 2.5vmin, transparent 3vmin), radial-gradient(2vmin 1.5vmin at 16% 70%, #fff 4.5vmin, transparent 5vmin), radial-gradient(2vmin 0.9vmin at 50% 55%, #fff 14.5vmin, transparent 15vmin);
  animation: moving-cloud 30s infinite linear;
}
.cloud div:nth-child(2) {
  width: 50vmin;
  height: 30vmin;
  top: 3%;
  left: 72%;
  opacity: 0.7;
  background: radial-gradient(1vmin 1vmin at 21% 53%, #fff 6.6vmin, transparent 7vmin), radial-gradient(1vmin 1vmin at 38% 42%, #fff 8vmin, transparent 8.4vmin), radial-gradient(1vmin 1vmin at 59% 40%, #fff 8.5vmin, transparent 8.9vmin), radial-gradient(1vmin 1vmin at 76% 34%, #fff 3vmin, transparent 3.4vmin), radial-gradient(1vmin 1vmin at 82% 55%, #fff 6vmin, transparent 6.5vmin), radial-gradient(2vmin 1.5vmin at 88% 66%, #fff 5.5vmin, transparent 6vmin), radial-gradient(2vmin 1.5vmin at 74% 76%, #fff 4vmin, transparent 4.5vmin), radial-gradient(2vmin 1.5vmin at 59% 80%, #fff 5.5vmin, transparent 6vmin), radial-gradient(2vmin 1.1vmin at 39% 80%, #fff 7.5vmin, transparent 8vmin), radial-gradient(2vmin 1.5vmin at 15.8% 68%, #fff 7.5vmin, transparent 7.9vmin), radial-gradient(2vmin 1vmin at 42% 56%, #fff 17vmin, transparent 17.4vmin);
  animation: moving-cloud 20s infinite linear;
}
.cloud div:nth-child(3) {
  width: 25vmin;
  height: 15vmin;
  top: 65%;
  left: 63%;
  opacity: 0.5;
  background: radial-gradient(0.8vmin 1vmin at 33% 50%, #fff 4vmin, transparent 4.4vmin), radial-gradient(1.5vmin 1vmin at 57% 35%, #fff 6vmin, transparent 6.5vmin), radial-gradient(1.2vmin 1vmin at 79% 41%, #fff 3vmin, transparent 3.4vmin), radial-gradient(2vmin 1.5vmin at 78% 65%, #fff 4vmin, transparent 4.5vmin), radial-gradient(2vmin 1.5vmin at 55% 66%, #fff 5.5vmin, transparent 6vmin), radial-gradient(2vmin 1.5vmin at 30% 80%, #fff 2.5vmin, transparent 3vmin), radial-gradient(2vmin 1.5vmin at 17% 72%, #fff 1.6vmin, transparent 2vmin), radial-gradient(2vmin 0.9vmin at 50% 55%, #fff 10vmin, transparent 10.5vmin);
  animation: moving-cloud 40s infinite linear;
}
.cloud div:nth-child(4) {
  width: 12vmin;
  height: 8vmin;
  top: 90%;
  left: 25%;
  opacity: 0.4;
  background: radial-gradient(1.2vmin 1vmin at 44% 35%, #fff 2vmin, transparent 2.4vmin), radial-gradient(1.5vmin 1vmin at 66% 30%, #fff 1vmin, transparent 1.4vmin), radial-gradient(2vmin 1.5vmin at 78% 75%, #fff 1vmin, transparent 1.5vmin), radial-gradient(2vmin 1.5vmin at 55% 66%, #fff 2.5vmin, transparent 3vmin), radial-gradient(2vmin 1.5vmin at 35% 80%, #fff 1vmin, transparent 1.4vmin), radial-gradient(2vmin 1.5vmin at 17% 72%, #fff 1.6vmin, transparent 2vmin), radial-gradient(2vmin 0.8vmin at 50% 55%, #fff 5vmin, transparent 5.5vmin);
  animation: moving-cloud 50s infinite linear;
}

.madeline-container {
  width: 40.5vmin;
  height: 91.8vmin;
  animation: body-move 1.3s infinite alternate ease-in-out;
}

.balloon {
  width: 20vmin;
  height: 24vmin;
  position: absolute;
  background: #dd2602;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate3d(-114%, -200%, 0);
  animation: balloon-move 1.3s infinite alternate ease-in-out;
}
.balloon::after {
  content: '';
  width: 2.2vmin;
  height: 1.6vmin;
  display: block;
  position: absolute;
  background-color: #dd2602;
  position: absolute;
  top: 99.2%;
  left: 44%;
  transform: rotate(5deg) skewX(-5deg);
  border-radius: 60% 60% 20% 20%;
}
.balloon::before {
  content: '';
  width: 0.2vmin;
  height: 26vmin;
  display: block;
  position: absolute;
  background-color: #7f467d;
  top: 100%;
  left: 50.2%;
}

.head_c {
  width: 79%;
  height: 26%;
  position: relative;
  top: 40%;
  left: 11.5%;
}
.head_c::before, .head_c::after {
  content: '';
  width: 0;
  height: 0;
  display: block;
  position: absolute;
  background-color: transparent;
  z-index: -10;
  border-bottom: 7vmin solid #000;
}
.head_c::before {
  border-right: 6vmin solid transparent;
  top: 5%;
  left: 31.5%;
  transform: rotateZ(-8deg);
}
.head_c::after {
  border-left: 6vmin solid transparent;
  top: 2%;
  left: 42.5%;
  transform: rotateZ(-3.5deg);
}
.head__hair, .head__hair--fringe {
  width: 80%;
  height: 47%;
  position: absolute;
  top: 52.5%;
  left: 12%;
  border-radius: 50% 50% 60% 60% / 90% 90% 35% 35%;
  transform: rotateZ(2.5deg);
  overflow: hidden;
}
.head__hair {
  background-color: #d25317;
}
.head__hair--fringe {
  z-index: 20;
}
.head__hair--fringe::before, .head__hair--fringe::after {
  content: '';
  width: 38%;
  height: 30%;
  display: block;
  position: absolute;
  background-color: #d25317;
  border-radius: 50%;
}
.head__hair--fringe::before {
  top: -5%;
  left: 22%;
  transform: rotate(-14deg);
}
.head__hair--fringe::after {
  top: -10%;
  left: 50%;
  transform: rotate(14deg);
}
.head__face {
  width: 44%;
  height: 42%;
  border-radius: 30% 30% 60% 70% / 80% 80% 70% 70%;
  position: absolute;
  top: 57%;
  left: 33.5%;
  z-index: 10;
  background: radial-gradient(12% 8% at 58% 60%, #efdebd 0.5vmin, transparent 0.7vmin), radial-gradient(10% 8% at 59% 63%, rgba(0, 0, 0, 0.8) 0.4vmin, transparent 0.5vmin), linear-gradient(-50deg, transparent 46%, #efdebd 46.5%), linear-gradient(50deg, transparent 51%, #efdebd 51.5%), radial-gradient(2.4% 1.2% at 54% 74%, #efdebd 1.9vmin, transparent 2.1vmin), radial-gradient(2.2% 1.2% at 54% 76%, rgba(0, 0, 0, 0.8) 2vmin, transparent 2.2vmin), #efdebd;
}
.head__face::before, .head__face::after {
  content: '';
  width: 5%;
  height: 11%;
  display: block;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 50%;
  animation: eyes-blink 7s infinite;
  will-change: transform;
}
.head__face::before {
  top: 32%;
  left: 33%;
}
.head__face::after {
  top: 34%;
  left: 70%;
}
.head__hat {
  width: 84%;
  height: 36%;
  background-color: #f7e957;
  border-radius: 70% 70% 50% 50% / 70% 70% 80% 80%;
  position: absolute;
  top: 28%;
  left: 13%;
  transform: rotateZ(4deg);
}
.head__hat::after, .head__hat::before {
  content: '';
  width: 24%;
  height: 30%;
  display: block;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.8);
  background: radial-gradient(1% 1.5% at 20% 120%, transparent 3vmin, #000 3.1vmin, #000 5vmin, transparent 5.1vmin), radial-gradient(2.2% 1.5% at 22% 107%, transparent 3vmin, #000 3.2vmin, #000 6vmin, transparent 6vmin);
}
.head__hat::before {
  top: 80%;
  left: -17%;
  transform: rotate(-45deg);
}
.head__hat::after {
  top: 103%;
  left: -13%;
  transform: rotate(-62deg);
}

.body {
  width: 66%;
  height: 34.4%;
  position: absolute;
  top: 65.6%;
  left: 23.5%;
  transform-origin: 50% 0%;
  animation: dress-sway 1.2s infinite alternate ease-in-out;
}
.body::before {
  content: '';
  width: 84%;
  height: 66%;
  display: block;
  position: absolute;
  background-color: #010152;
  background-color: #010152;
  background-color: rgba(1, 1, 82, 0.5);
  border-radius: 0 0 45% 55% / 0 0 18% 18%;
  border-radius: 50% / 100% 100% 0% 0%;
  transform: rotate(-3deg);
  top: 0;
  left: 3%;
  background: linear-gradient(-72.8deg, transparent 35%, #010152 35.5%, #010152 77.3%, transparent 77.7%), linear-gradient(74deg, transparent 42%, #010152 42.5%, #010152 78%, transparent 78.5%);
}
.body::after {
  content: '';
  width: 82.6%;
  height: 18%;
  display: block;
  position: absolute;
  background-color: #010152;
  border-radius: 50%;
  top: 56.7%;
  left: 5.5%;
  transform: rotate(-3deg);
}
.body__leg-l::after, .body__leg-r::after {
  content: '';
  width: 13%;
  height: 28%;
  display: block;
  position: absolute;
  position: absolute;
  background: radial-gradient(circle at 50% -50%, #efdebd 72%, #fff 72.5%);
}
.body__leg-l::before, .body__leg-r::before {
  content: '';
  width: 20%;
  height: 7%;
  display: block;
  position: absolute;
  background-color: #000;
}
.body__leg-l::after {
  top: 69%;
  left: 12.8%;
  border-radius: 0 0 50% 50% / 0 0 5% 8%;
  transform: rotate(18deg);
}
.body__leg-l::before {
  top: 93%;
  left: 0.5%;
  border-radius: 60% 50% 40% 30% / 80% 60% 70% 30%;
}
.body__leg-r::after {
  top: 68.2%;
  left: 72%;
  border-radius: 0 0 50% 50% / 0 0 10% 8%;
  transform: rotate(-33deg);
}
.body__leg-r::before {
  top: 89.5%;
  right: -1.5%;
  border-radius: 40% 60% 30% 40% / 60% 80% 30% 40%;
  transform: rotate(-10deg);
}

.arm__l, .arm__r {
  position: absolute;
  width: 50%;
  height: 15%;
}
.arm__l::before, .arm__r::before {
  content: '';
  width: 75%;
  height: 25%;
  display: block;
  position: absolute;
}
.arm__l {
  top: 66%;
  left: 4%;
  transform: rotate(46deg);
  transform-origin: 100% 0;
}
.arm__l::before {
  top: 0%;
  left: -18%;
  transform: perspective(20vmin) rotateY(135deg);
  transform-origin: 50% 0%;
  background: radial-gradient(2% 3% at 84% 10%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 83% 30%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 82% 50%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 81% 70%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 80% 90%, #fff 1vmin, transparent 1.1vmin), radial-gradient(circle at 0% 0%, transparent 2vmin, #efdebd 2vmin, #efdebd 7.7vmin, transparent 7.8vmin), radial-gradient(circle at 0% 0%, transparent 2vmin, #fff 2vmin, #fff 12.5vmin, transparent 12.6vmin);
}
.arm__l::after {
  content: '';
  width: 100%;
  height: 100%;
  display: block;
  position: absolute;
  background-color: yellow;
  background: radial-gradient(1% 2% at 87% 6%, #fff 2.6vmin, transparent 2.7vmin), radial-gradient(1% 2% at 90% 5%, #fff 2.2vmin, transparent 2.3vmin), radial-gradient(circle at 89% 16%, #fff 2.2vmin, transparent 2.3vmin), radial-gradient(5% 8% at 108% -50%, #010152 15.5vmin, transparent 15.6vmin);
}
.arm__r {
  transform: rotate(2deg);
  top: 65%;
  left: 53%;
  transform-origin: 0 0;
  animation: arm-move-right 1.3s infinite alternate ease-in-out;
}
.arm__r::before {
  top: 14%;
  right: -14%;
  transform: perspective(20vmin) rotateY(35deg);
  background: radial-gradient(2% 3% at 86% 10%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 85% 30%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 84% 50%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 83% 70%, #fff 1vmin, transparent 1.1vmin), radial-gradient(2% 3% at 82% 90%, #fff 1vmin, transparent 1.1vmin), radial-gradient(circle at 0% 0%, #efdebd 8.2vmin, transparent 8.3vmin), radial-gradient(circle at 0% 0%, #fff 12.5vmin, transparent 12.6vmin);
}
.arm__r::after {
  content: '';
  width: 75%;
  height: 100%;
  display: block;
  position: absolute;
  clip-path: polygon(0 0, 10% 100%, 100% 15%);
  background: radial-gradient(2.5% 3% at 15% 5%, #fff 2.2vmin, transparent 2.3vmin), radial-gradient(2.5% 3% at 17% 12%, #fff 2.2vmin, transparent 2.3vmin), radial-gradient(2.5% 3% at 18% 12%, #fff 2.2vmin, transparent 2.3vmin), radial-gradient(6% 5% at 0% 0%, #010152 12.5vmin, transparent 12.6vmin);
}

/* --- Animation --- */
@keyframes balloon-move {
  0% {
    margin-top: 0.5%;
  }
  100% {
    margin-top: 0%;
  }
}
@keyframes body-move {
  0%, 6% {
    transform: rotate(-1deg);
  }
  94%, 100% {
    transform: rotate(1deg);
  }
}
@keyframes eyes-blink {
  0% {
    transform: scaleY(1);
  }
  2% {
    transform: scaleY(0.1);
  }
  4% {
    transform: scaleY(1);
  }
  6% {
    transform: scaleY(0.1);
  }
  8% {
    transform: scaleY(1);
  }
  66% {
    transform: scaleY(1);
  }
  68% {
    transform: scaleY(0.1);
  }
  70% {
    transform: scaleY(1);
  }
  100% {
    transform: scaleY(1);
  }
}
@keyframes dress-sway {
  0%, 5% {
    transform: rotate(-1.2deg);
  }
  95%, 100% {
    transform: rotate(8deg);
  }
}
@keyframes arm-move-right {
  0%, 5% {
    transform: rotate(-10deg);
  }
  95%, 100% {
    transform: rotate(-4deg);
  }
}
@keyframes moving-cloud {
  0% {
    margin-top: 100vh;
  }
  100% {
    margin-top: -100vh;
  }
}

    </style>
</head>
<body >
<!-- partial:index.partial.html -->
<div class="cloud">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  
  <figure class="madeline-container">
 
  </figure>


  
</body>


    <footer style="position:fixed;bottom:0px;background-color: rgb(11, 78, 95);width: 100%;color:#ffffff;padding:10px;text-align:center;">
    Arias & Brice??o Copyright &copy; 2019
</footer>
</html>
