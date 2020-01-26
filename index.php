<?php
	$date = new DateTime();
?>

<html>
	<head>
		<title>Desperate</title>
		<meta charset="UTF-8" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="css/main.css?<?php echo $date->getTimestamp();?>" rel="stylesheet" />
		<script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
		<script src="js/plugins/aframe-href-component.min.js"></script>
		<link rel="icon" href="assets/icon/favicon.ico" type="image/x-icon" />
		
		<!-- Apple Web App -->
		<link rel="apple-touch-icon" href="assets/icon/apple-touch-icon.png" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="assets/splashscreens/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
		<link href="assets/splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	</head>
	<body>
		
		<!-- AUDIO -->
		
		<audio id="bg-audio" autoplay="true" loop="true"><source src="assets/sound/start.mp3" type="audio/mpeg" /></audio>
		
		<!-- AFRAME -->
		
		<a-scene loading-screen="dotsColor: white; backgroundColor: black" inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			
			<!-- ASSETS -->
			
			<a-assets>
				<img id="sky" src="assets/img/sky-index.jpg">
			</a-assets>
			
			<!-- START BUTTON -->
			
			<a-box position="0 1.5 -3" rotation="0 0" scale="1 0.5 0" color="#FFF" href="video.php">
				<a-entity position="0 0 0.5" scale="1 2 1" text="value: START; color: #000; align: center; width: 2;"></a-entity>
			</a-box>
				
			<!-- TEXT LEFT -->	
			
			<a-entity
				position="-3 1.5 0"
				text=	"value: Ich hatte sie auf der Hochzeitsfeier eines Bekannten kennengelernt und mich mit ihr angefreundet. Das war vor drei Jahren. Wir waren fast zwoelf Jahre auseinander, sie war zwanzig, ich einunddreissig.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/specialelite/SpecialElite-Regular.json;
						width: 3;"
				rotation="0 90">
			</a-entity> 
					
			<!-- TEXT BACK -->			
					
			<a-entity
				position="0 1.5 3"
				text=	"value: Ausserdem würde sicherlich niemand auf die Idee kommen, dass ein gut gekleideter junger Mann in einem ausländischen Wagen herumfuhr und Scheunen abbrannte.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/specialelite/SpecialElite-Regular.json;
						width: 3;"
				rotation="0 180">
			</a-entity> 
			
			<!-- TEXT RIGHT -->	
			
			<a-entity
				position="3 1.5 0"
				text=	"value: Er hatte mir die Vorstellung vom Scheunenabbrennen in den Kopf gesetzt, und jetzt blies sie sich auf, als ob man Luft in einen Fahrradreifen pumpte.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/specialelite/SpecialElite-Regular.json;
						width: 3;"
				rotation="0 -90">
			</a-entity> 
			
			<!-- CAMERA & CURSOR -->	    
			
			<a-entity camera look-controls position="0 2 0">
				<a-entity
					animation__click="property: scale; startEvents: click; easing: easeInCubic; dur: 150; from: 0.1 0.1 0.1; to: 1 1 1"
					animation__fusing="property: scale; startEvents: fusing; easing: easeInCubic; dur: 1500; from: 1 1 1; to: 0.1 0.1 0.1"
					animation__mouseleave="property: scale; startEvents: mouseleave; easing: easeInCubic; dur: 500; to: 1 1 1"
					cursor="fuse: true;"
					material="color: red; shader: flat"
					position="0 0 -1"
					geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03">
				</a-entity>
			</a-entity>

			<!-- SKY -->	
			
			<a-sky src="#sky"></a-sky>
				
		</a-scene>
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/index.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>