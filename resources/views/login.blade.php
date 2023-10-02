<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<style>

		/*//////////////////////////////////////////////////////////////////
		[ FONT ]*/
		
		@font-face {
		  font-family: Poppins-Regular;
		  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
		}
		
		@font-face {
		  font-family: Poppins-Bold;
		  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
		}
		
		@font-face {
		  font-family: Poppins-Medium;
		  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
		}
		
		@font-face {
		  font-family: Montserrat-Bold;
		  src: url('../fonts/montserrat/Montserrat-Bold.ttf'); 
		}
		
		/*//////////////////////////////////////////////////////////////////
		[ RESTYLE TAG ]*/
		
		* {
			margin: 0px; 
			padding: 0px; 
			box-sizing: border-box;
		}
		
		body, html {
			height: 100%;
			font-family: Poppins-Regular, sans-serif;
		}
		
		/*---------------------------------------------*/
		a {
			font-family: Poppins-Regular;
			font-size: 14px;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
			transition: all 0.4s;
			-webkit-transition: all 0.4s;
		  -o-transition: all 0.4s;
		  -moz-transition: all 0.4s;
		}
		
		a:focus {
			outline: none !important;
		}
		
		a:hover {
			text-decoration: none;
		  color: #57b846;
		}
		
		/*---------------------------------------------*/
		h1,h2,h3,h4,h5,h6 {
			margin: 0px;
		}
		
		p {
			font-family: Poppins-Regular;
			font-size: 14px;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
		}
		
		ul, li {
			margin: 0px;
			list-style-type: none;
		}
		
		
		/*---------------------------------------------*/
		input {
			outline: none;
			border: none;
		}
		
		textarea {
		  outline: none;
		  border: none;
		}
		
		textarea:focus, input:focus {
		  border-color: transparent !important;
		}
		
		input:focus::-webkit-input-placeholder { color:transparent; }
		input:focus:-moz-placeholder { color:transparent; }
		input:focus::-moz-placeholder { color:transparent; }
		input:focus:-ms-input-placeholder { color:transparent; }
		
		textarea:focus::-webkit-input-placeholder { color:transparent; }
		textarea:focus:-moz-placeholder { color:transparent; }
		textarea:focus::-moz-placeholder { color:transparent; }
		textarea:focus:-ms-input-placeholder { color:transparent; }
		
		input::-webkit-input-placeholder { color: #999999; }
		input:-moz-placeholder { color: #999999; }
		input::-moz-placeholder { color: #999999; }
		input:-ms-input-placeholder { color: #999999; }
		
		textarea::-webkit-input-placeholder { color: #999999; }
		textarea:-moz-placeholder { color: #999999; }
		textarea::-moz-placeholder { color: #999999; }
		textarea:-ms-input-placeholder { color: #999999; }
		
		/*---------------------------------------------*/
		button {
			outline: none !important;
			border: none;
			background: transparent;
		}
		
		button:hover {
			cursor: pointer;
		}
		
		iframe {
			border: none !important;
		}
		
		
		/*//////////////////////////////////////////////////////////////////
		[ Utility ]*/
		.txt1 {
		  font-family: Poppins-Regular;
		  font-size: 13px;
		  line-height: 1.5;
		  color: #999999;
		}
		
		.txt2 {
		  font-family: Poppins-Regular;
		  font-size: 13px;
		  line-height: 1.5;
		  color: #666666;
		}
		
		
		/*//////////////////////////////////////////////////////////////////
		[ login ]*/
		
		.limiter {
		  width: 100%;
		  margin: 0 auto;
		}
		
		.container-login100 {
		  width: 100%;  
		  min-height: 100vh;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: center;
		  align-items: center;
		  padding: 15px;
		  background: #9053c7;
		  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
		  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
		  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
		  background: linear-gradient(-135deg, #c850c0, #4158d0);
		}
		
		.wrap-login100 {
		  width: 960px;
		  background: #fff;
		  border-radius: 10px;
		  overflow: hidden;
		
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		  padding: 177px 130px 33px 95px;
		}
		
		/*------------------------------------------------------------------
		[  ]*/
		.login100-pic {
		  width: 316px;
		}
		
		.login100-pic img {
		  max-width: 100%;
		}
		
		
		/*------------------------------------------------------------------
		[  ]*/
		.login100-form {
		  width: 290px;
		}
		
		.login100-form-title {
		  font-family: Poppins-Bold;
		  font-size: 24px;
		  color: #333333;
		  line-height: 1.2;
		  text-align: center;
		
		  width: 100%;
		  display: block;
		  padding-bottom: 54px;
		}
		
		
		/*---------------------------------------------*/
		.wrap-input100 {
		  position: relative;
		  width: 100%;
		  z-index: 1;
		  margin-bottom: 10px;
		}
		
		.input100 {
		  font-family: Poppins-Medium;
		  font-size: 15px;
		  line-height: 1.5;
		  color: #666666;
		
		  display: block;
		  width: 100%;
		  background: #e6e6e6;
		  height: 50px;
		  border-radius: 25px;
		  padding: 0 30px 0 68px;
		}
		
		
		/*------------------------------------------------------------------
		[ Focus ]*/
		.focus-input100 {
		  display: block;
		  position: absolute;
		  border-radius: 25px;
		  bottom: 0;
		  left: 0;
		  z-index: -1;
		  width: 100%;
		  height: 100%;
		  box-shadow: 0px 0px 0px 0px;
		  color: rgba(87,184,70, 0.8);
		}
		
		.input100:focus + .focus-input100 {
		  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
		  animation: anim-shadow 0.5s ease-in-out forwards;
		}
		
		@-webkit-keyframes anim-shadow {
		  to {
			box-shadow: 0px 0px 70px 25px;
			opacity: 0;
		  }
		}
		
		@keyframes anim-shadow {
		  to {
			box-shadow: 0px 0px 70px 25px;
			opacity: 0;
		  }
		}
		
		.symbol-input100 {
		  font-size: 15px;
		
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  align-items: center;
		  position: absolute;
		  border-radius: 25px;
		  bottom: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  padding-left: 35px;
		  pointer-events: none;
		  color: #666666;
		
		  -webkit-transition: all 0.4s;
		  -o-transition: all 0.4s;
		  -moz-transition: all 0.4s;
		  transition: all 0.4s;
		}
		
		.input100:focus + .focus-input100 + .symbol-input100 {
		  color: #57b846;
		  padding-left: 28px;
		}
		
		/*------------------------------------------------------------------
		[ Button ]*/
		.container-login100-form-btn {
		  width: 100%;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: center;
		  padding-top: 20px;
		}
		
		.login100-form-btn {
		  font-family: Montserrat-Bold;
		  font-size: 15px;
		  line-height: 1.5;
		  color: #fff;
		  text-transform: uppercase;
		
		  width: 100%;
		  height: 50px;
		  border-radius: 25px;
		  background: #57b846;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  padding: 0 25px;
		
		  -webkit-transition: all 0.4s;
		  -o-transition: all 0.4s;
		  -moz-transition: all 0.4s;
		  transition: all 0.4s;
		}
		
		.login100-form-btn:hover {
		  background: #333333;
		}
		
		
		
		/*------------------------------------------------------------------
		[ Responsive ]*/
		
		
		
		@media (max-width: 992px) {
		  .wrap-login100 {
			padding: 177px 90px 33px 85px;
		  }
		
		  .login100-pic {
			width: 35%;
		  }
		
		  .login100-form {
			width: 50%;
		  }
		}
		
		@media (max-width: 768px) {
		  .wrap-login100 {
			padding: 100px 80px 33px 80px;
		  }
		
		  .login100-pic {
			display: none;
		  }
		
		  .login100-form {
			width: 100%;
		  }
		}
		
		@media (max-width: 576px) {
		  .wrap-login100 {
			padding: 100px 15px 33px 15px;
		  }
		}
		
		
		/*------------------------------------------------------------------
		[ Alert validate ]*/
		
		.validate-input {
		  position: relative;
		}
		
		.alert-validate::before {
		  content: attr(data-validate);
		  position: absolute;
		  max-width: 70%;
		  background-color: white;
		  border: 1px solid #c80000;
		  border-radius: 13px;
		  padding: 4px 25px 4px 10px;
		  top: 50%;
		  -webkit-transform: translateY(-50%);
		  -moz-transform: translateY(-50%);
		  -ms-transform: translateY(-50%);
		  -o-transform: translateY(-50%);
		  transform: translateY(-50%);
		  right: 8px;
		  pointer-events: none;
		
		  font-family: Poppins-Medium;
		  color: #c80000;
		  font-size: 13px;
		  line-height: 1.4;
		  text-align: left;
		
		  visibility: hidden;
		  opacity: 0;
		
		  -webkit-transition: opacity 0.4s;
		  -o-transition: opacity 0.4s;
		  -moz-transition: opacity 0.4s;
		  transition: opacity 0.4s;
		}
		
		.alert-validate::after {
		  content: "\f06a";
		  font-family: FontAwesome;
		  display: block;
		  position: absolute;
		  color: #c80000;
		  font-size: 15px;
		  top: 50%;
		  -webkit-transform: translateY(-50%);
		  -moz-transform: translateY(-50%);
		  -ms-transform: translateY(-50%);
		  -o-transform: translateY(-50%);
		  transform: translateY(-50%);
		  right: 13px;
		}
		
		.alert-validate:hover:before {
		  visibility: visible;
		  opacity: 1;
		}
		
		@media (max-width: 992px) {
		  .alert-validate::before {
			visibility: visible;
			opacity: 1;
		  }
		}
        @charset "UTF-8";

/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.5.2
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2017 Daniel Eden
 */

.animated {
  animation-duration: 1s;
  animation-fill-mode: both;
}

.animated.infinite {
  animation-iteration-count: infinite;
}

.animated.hinge {
  animation-duration: 2s;
}

.animated.flipOutX,
.animated.flipOutY,
.animated.bounceIn,
.animated.bounceOut {
  animation-duration: .75s;
}

@keyframes bounce {
  from, 20%, 53%, 80%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -30px, 0);
  }

  70% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -15px, 0);
  }

  90% {
    transform: translate3d(0,-4px,0);
  }
}

.bounce {
  animation-name: bounce;
  transform-origin: center bottom;
}

@keyframes flash {
  from, 50%, to {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

.flash {
  animation-name: flash;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@keyframes pulse {
  from {
    transform: scale3d(1, 1, 1);
  }

  50% {
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    transform: scale3d(1, 1, 1);
  }
}

.pulse {
  animation-name: pulse;
}

@keyframes rubberBand {
  from {
    transform: scale3d(1, 1, 1);
  }

  30% {
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    transform: scale3d(.95, 1.05, 1);
  }

  75% {
    transform: scale3d(1.05, .95, 1);
  }

  to {
    transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  animation-name: rubberBand;
}

@keyframes shake {
  from, to {
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    transform: translate3d(10px, 0, 0);
  }
}

.shake {
  animation-name: shake;
}

@keyframes headShake {
  0% {
    transform: translateX(0);
  }

  6.5% {
    transform: translateX(-6px) rotateY(-9deg);
  }

  18.5% {
    transform: translateX(5px) rotateY(7deg);
  }

  31.5% {
    transform: translateX(-3px) rotateY(-5deg);
  }

  43.5% {
    transform: translateX(2px) rotateY(3deg);
  }

  50% {
    transform: translateX(0);
  }
}

.headShake {
  animation-timing-function: ease-in-out;
  animation-name: headShake;
}

@keyframes swing {
  20% {
    transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    transform: rotate3d(0, 0, 1, -5deg);
  }

  to {
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

.swing {
  transform-origin: top center;
  animation-name: swing;
}

@keyframes tada {
  from {
    transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  to {
    transform: scale3d(1, 1, 1);
  }
}

.tada {
  animation-name: tada;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@keyframes wobble {
  from {
    transform: none;
  }

  15% {
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  to {
    transform: none;
  }
}

.wobble {
  animation-name: wobble;
}

@keyframes jello {
  from, 11.1%, to {
    transform: none;
  }

  22.2% {
    transform: skewX(-12.5deg) skewY(-12.5deg);
  }

  33.3% {
    transform: skewX(6.25deg) skewY(6.25deg);
  }

  44.4% {
    transform: skewX(-3.125deg) skewY(-3.125deg);
  }

  55.5% {
    transform: skewX(1.5625deg) skewY(1.5625deg);
  }

  66.6% {
    transform: skewX(-0.78125deg) skewY(-0.78125deg);
  }

  77.7% {
    transform: skewX(0.390625deg) skewY(0.390625deg);
  }

  88.8% {
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
  }
}

.jello {
  animation-name: jello;
  transform-origin: center;
}

@keyframes bounceIn {
  from, 20%, 40%, 60%, 80%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
  }

  20% {
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    transform: scale3d(.97, .97, .97);
  }

  to {
    opacity: 1;
    transform: scale3d(1, 1, 1);
  }
}

.bounceIn {
  animation-name: bounceIn;
}

@keyframes bounceInDown {
  from, 60%, 75%, 90%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    transform: translate3d(0, 25px, 0);
  }

  75% {
    transform: translate3d(0, -10px, 0);
  }

  90% {
    transform: translate3d(0, 5px, 0);
  }

  to {
    transform: none;
  }
}

.bounceInDown {
  animation-name: bounceInDown;
}

@keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    transform: translate3d(25px, 0, 0);
  }

  75% {
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    transform: translate3d(5px, 0, 0);
  }

  to {
    transform: none;
  }
}

.bounceInLeft {
  animation-name: bounceInLeft;
}

@keyframes bounceInRight {
  from, 60%, 75%, 90%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    transform: translate3d(-25px, 0, 0);
  }

  75% {
    transform: translate3d(10px, 0, 0);
  }

  90% {
    transform: translate3d(-5px, 0, 0);
  }

  to {
    transform: none;
  }
}

.bounceInRight {
  animation-name: bounceInRight;
}

@keyframes bounceInUp {
  from, 60%, 75%, 90%, to {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    transform: translate3d(0, -20px, 0);
  }

  75% {
    transform: translate3d(0, 10px, 0);
  }

  90% {
    transform: translate3d(0, -5px, 0);
  }

  to {
    transform: translate3d(0, 0, 0);
  }
}

.bounceInUp {
  animation-name: bounceInUp;
}

@keyframes bounceOut {
  20% {
    transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    transform: scale3d(1.1, 1.1, 1.1);
  }

  to {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
  }
}

.bounceOut {
  animation-name: bounceOut;
}

@keyframes bounceOutDown {
  20% {
    transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    transform: translate3d(0, -20px, 0);
  }

  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0);
  }
}

.bounceOutDown {
  animation-name: bounceOutDown;
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    transform: translate3d(20px, 0, 0);
  }

  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0);
  }
}

.bounceOutLeft {
  animation-name: bounceOutLeft;
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    transform: translate3d(-20px, 0, 0);
  }

  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0);
  }
}

.bounceOutRight {
  animation-name: bounceOutRight;
}

@keyframes bounceOutUp {
  20% {
    transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0);
  }
}

.bounceOutUp {
  animation-name: bounceOutUp;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fadeIn {
  animation-name: fadeIn;
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInDown {
  animation-name: fadeInDown;
}

@keyframes fadeInDownBig {
  from {
    opacity: 0;
    transform: translate3d(0, -2000px, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInDownBig {
  animation-name: fadeInDownBig;
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInLeft {
  animation-name: fadeInLeft;
}

@keyframes fadeInLeftBig {
  from {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInLeftBig {
  animation-name: fadeInLeftBig;
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInRight {
  animation-name: fadeInRight;
}

@keyframes fadeInRightBig {
  from {
    opacity: 0;
    transform: translate3d(2000px, 0, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInRightBig {
  animation-name: fadeInRightBig;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp {
  animation-name: fadeInUp;
}

@keyframes fadeInUpBig {
  from {
    opacity: 0;
    transform: translate3d(0, 2000px, 0);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUpBig {
  animation-name: fadeInUpBig;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

.fadeOut {
  animation-name: fadeOut;
}

@keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  animation-name: fadeOutDown;
}

@keyframes fadeOutDownBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, 2000px, 0);
  }
}

.fadeOutDownBig {
  animation-name: fadeOutDownBig;
}

@keyframes fadeOutLeft {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(-100%, 0, 0);
  }
}

.fadeOutLeft {
  animation-name: fadeOutLeft;
}

@keyframes fadeOutLeftBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(-2000px, 0, 0);
  }
}

.fadeOutLeftBig {
  animation-name: fadeOutLeftBig;
}

@keyframes fadeOutRight {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0);
  }
}

.fadeOutRight {
  animation-name: fadeOutRight;
}

@keyframes fadeOutRightBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(2000px, 0, 0);
  }
}

.fadeOutRightBig {
  animation-name: fadeOutRightBig;
}

@keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  animation-name: fadeOutUp;
}

@keyframes fadeOutUpBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, -2000px, 0);
  }
}

.fadeOutUpBig {
  animation-name: fadeOutUpBig;
}

@keyframes flip {
  from {
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    animation-timing-function: ease-out;
  }

  40% {
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    animation-timing-function: ease-out;
  }

  50% {
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    animation-timing-function: ease-in;
  }

  80% {
    transform: perspective(400px) scale3d(.95, .95, .95);
    animation-timing-function: ease-in;
  }

  to {
    transform: perspective(400px);
    animation-timing-function: ease-in;
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  animation-name: flip;
}

@keyframes flipInX {
  from {
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    animation-timing-function: ease-in;
  }

  60% {
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  to {
    transform: perspective(400px);
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  animation-name: flipInX;
}

@keyframes flipInY {
  from {
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    animation-timing-function: ease-in;
  }

  60% {
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  to {
    transform: perspective(400px);
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  animation-name: flipInY;
}

@keyframes flipOutX {
  from {
    transform: perspective(400px);
  }

  30% {
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  to {
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

.flipOutX {
  animation-name: flipOutX;
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
}

@keyframes flipOutY {
  from {
    transform: perspective(400px);
  }

  30% {
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  to {
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  animation-name: flipOutY;
}

@keyframes lightSpeedIn {
  from {
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    transform: skewX(-5deg);
    opacity: 1;
  }

  to {
    transform: none;
    opacity: 1;
  }
}

.lightSpeedIn {
  animation-name: lightSpeedIn;
  animation-timing-function: ease-out;
}

@keyframes lightSpeedOut {
  from {
    opacity: 1;
  }

  to {
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

.lightSpeedOut {
  animation-name: lightSpeedOut;
  animation-timing-function: ease-in;
}

@keyframes rotateIn {
  from {
    transform-origin: center;
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  to {
    transform-origin: center;
    transform: none;
    opacity: 1;
  }
}

.rotateIn {
  animation-name: rotateIn;
}

@keyframes rotateInDownLeft {
  from {
    transform-origin: left bottom;
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  to {
    transform-origin: left bottom;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownLeft {
  animation-name: rotateInDownLeft;
}

@keyframes rotateInDownRight {
  from {
    transform-origin: right bottom;
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    transform-origin: right bottom;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownRight {
  animation-name: rotateInDownRight;
}

@keyframes rotateInUpLeft {
  from {
    transform-origin: left bottom;
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    transform-origin: left bottom;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpLeft {
  animation-name: rotateInUpLeft;
}

@keyframes rotateInUpRight {
  from {
    transform-origin: right bottom;
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  to {
    transform-origin: right bottom;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpRight {
  animation-name: rotateInUpRight;
}

@keyframes rotateOut {
  from {
    transform-origin: center;
    opacity: 1;
  }

  to {
    transform-origin: center;
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

.rotateOut {
  animation-name: rotateOut;
}

@keyframes rotateOutDownLeft {
  from {
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    transform-origin: left bottom;
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

.rotateOutDownLeft {
  animation-name: rotateOutDownLeft;
}

@keyframes rotateOutDownRight {
  from {
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    transform-origin: right bottom;
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutDownRight {
  animation-name: rotateOutDownRight;
}

@keyframes rotateOutUpLeft {
  from {
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    transform-origin: left bottom;
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutUpLeft {
  animation-name: rotateOutUpLeft;
}

@keyframes rotateOutUpRight {
  from {
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    transform-origin: right bottom;
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

.rotateOutUpRight {
  animation-name: rotateOutUpRight;
}

@keyframes hinge {
  0% {
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }

  20%, 60% {
    transform: rotate3d(0, 0, 1, 80deg);
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }

  40%, 80% {
    transform: rotate3d(0, 0, 1, 60deg);
    transform-origin: top left;
    animation-timing-function: ease-in-out;
    opacity: 1;
  }

  to {
    transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

.hinge {
  animation-name: hinge;
}

@keyframes jackInTheBox {
  from {
    opacity: 0;
    transform: scale(0.1) rotate(30deg);
    transform-origin: center bottom;
  }

  50% {
    transform: rotate(-10deg);
  }

  70% {
    transform: rotate(3deg);
  }

  to {
    opacity: 1;
    transform: scale(1);
  }
}

.jackInTheBox {
  animation-name: jackInTheBox;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@keyframes rollIn {
  from {
    opacity: 0;
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  to {
    opacity: 1;
    transform: none;
  }
}

.rollIn {
  animation-name: rollIn;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@keyframes rollOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

.rollOut {
  animation-name: rollOut;
}

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  animation-name: zoomIn;
}

@keyframes zoomInDown {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInDown {
  animation-name: zoomInDown;
}

@keyframes zoomInLeft {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInLeft {
  animation-name: zoomInLeft;
}

@keyframes zoomInRight {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInRight {
  animation-name: zoomInRight;
}

@keyframes zoomInUp {
  from {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInUp {
  animation-name: zoomInUp;
}

@keyframes zoomOut {
  from {
    opacity: 1;
  }

  50% {
    opacity: 0;
    transform: scale3d(.3, .3, .3);
  }

  to {
    opacity: 0;
  }
}

.zoomOut {
  animation-name: zoomOut;
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform-origin: center bottom;
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutDown {
  animation-name: zoomOutDown;
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  to {
    opacity: 0;
    transform: scale(.1) translate3d(-2000px, 0, 0);
    transform-origin: left center;
  }
}

.zoomOutLeft {
  animation-name: zoomOutLeft;
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  to {
    opacity: 0;
    transform: scale(.1) translate3d(2000px, 0, 0);
    transform-origin: right center;
  }
}

.zoomOutRight {
  animation-name: zoomOutRight;
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform-origin: center bottom;
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutUp {
  animation-name: zoomOutUp;
}

@keyframes slideInDown {
  from {
    transform: translate3d(0, -100%, 0);
    visibility: visible;
  }

  to {
    transform: translate3d(0, 0, 0);
  }
}

.slideInDown {
  animation-name: slideInDown;
}

@keyframes slideInLeft {
  from {
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  to {
    transform: translate3d(0, 0, 0);
  }
}

.slideInLeft {
  animation-name: slideInLeft;
}

@keyframes slideInRight {
  from {
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  animation-name: slideInRight;
}

@keyframes slideInUp {
  from {
    transform: translate3d(0, 100%, 0);
    visibility: visible;
  }

  to {
    transform: translate3d(0, 0, 0);
  }
}

.slideInUp {
  animation-name: slideInUp;
}

@keyframes slideOutDown {
  from {
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    transform: translate3d(0, 100%, 0);
  }
}

.slideOutDown {
  animation-name: slideOutDown;
}

@keyframes slideOutLeft {
  from {
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    transform: translate3d(-100%, 0, 0);
  }
}

.slideOutLeft {
  animation-name: slideOutLeft;
}

@keyframes slideOutRight {
  from {
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    transform: translate3d(100%, 0, 0);
  }
}

.slideOutRight {
  animation-name: slideOutRight;
}

@keyframes slideOutUp {
  from {
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    transform: translate3d(0, -100%, 0);
  }
}

.slideOutUp {
  animation-name: slideOutUp;
}

		</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="/login" method="post">
          @csrf
					<span class="login100-form-title">
            LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="{{old('email')}}">
            <span style="background-color:#FF817E;color:white ">
                  @error('email') 
                        {{$message}} 
                    @enderror
                  </span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="{{old('pwd')}}">
            <span style="background-color:#FF817E;color:white ">
                  @error('pwd') 
                        {{$message}} 
                    @enderror
                    </span>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>