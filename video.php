<?php
	$date = new DateTime();
?>

<html>
	<head>
		<title>VR-App – Test 02 – Video</title>
		<meta charset="UTF-8">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link href="css/main.css?<?php echo $date->getTimestamp();?>" rel="stylesheet" />
		<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
	</head>
	<body>
		<a-scene inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
		
			<a-assets timeout="10000">
				<video crossorigin="anonymous" id="video" webkit-playsinline="true" playsinline="true" autoplay="true" loop="false" src="assets/intro.mp4" type="application/x-mpegurl"></video>
			</a-assets>

			<a-videosphere id="video-sphere" rotation="0 -90 0" ios10hls src="#video" visible="true" autoplay="true" webkit-playsinline="true" playsinline="true" loop="false"></a-videosphere>
		
<!-- 			<a-videosphere src="assets/intro.mp4"></a-videosphere> -->

		</a-scene>
		<!--<div id="play">
			<button>Play Video</button>
		</div>-->
		<div id="splash">
	      <div id="start-button">Start Video</div>
	    </div>
	    <button id="request">
			Request
		</button>
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/main.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>