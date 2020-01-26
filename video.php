<?php
	$date = new DateTime();
?>

<html>
	<head>
		<title>Desperate – Intro</title>
		<meta charset="UTF-8" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet" />
		<link href="css/main.css?<?php echo $date->getTimestamp();?>" rel="stylesheet" />
		<script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
		<link rel="apple-touch-icon" href="assets/icon/apple-touch-icon.png" />
		<link rel="icon" href="assets/icon/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<a-scene loading-screen="dotsColor: white; backgroundColor: black" inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			
			<!-- ASSETS -->
			
			<a-assets timeout="10000">
				<video id="video" src="assets/vid/intro.mp4" webkit-playsinline="true" playsinline="true" autoplay="true" loop="false" crossorigin="anonymous"></video>
			</a-assets>

			<!-- VIDEO  -->
			
			<a-videosphere id="video-sphere" src="#video" rotation="0 -45 0"></a-videosphere> 		
		</a-scene>
		
		<!-- PLAY BUTTON -->
		
		<div id="play">
			<div id="play-button">Play Video</div>
	    </div>
	    
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/video.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>