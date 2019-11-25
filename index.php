<?php
	$date = new DateTime();
?>

<html>
	<head>
		<title>VR-App – Test 02 – Start</title>
		<meta charset="UTF-8">
		<link href="css/main.css?<?php echo $date->getTimestamp();?>" rel="stylesheet" />
		<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
	</head>
	<body>
		<a-scene inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			<a-assets>
				<img id="homeThumbnail" src="assets/360.jpg">
			</a-assets>
			
			<a-link href="index.html" title="Start" image="#homeThumbnail" position="0 1.5 -3" rotation="0 0" on="click"></a-link>
				
			<a-entity
				position="-3 1.5 0"
				text=	"value: (Left) Ich hatte sie auf der Hochzeitsfeier eines Bekannten kennengelernt und mich mit ihr angefreundet. Das war vor drei Jahren. Wir waren fast zwoelf Jahre auseinander, sie war zwanzig, ich einunddreissig.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/merriweather/Merriweather-Regular.json;
						width: 3;"
				rotation="0 90">
			</a-entity> 
					
			<a-entity
				position="0 1.5 3"
				text=	"value: (Back) Ich hatte sie auf der Hochzeitsfeier eines Bekannten kennengelernt und mich mit ihr angefreundet. Das war vor drei Jahren. Wir waren fast zwoelf Jahre auseinander, sie war zwanzig, ich einunddreissig.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/merriweather/Merriweather-Regular.json;
						width: 3;"
				rotation="0 180">
			</a-entity> 
			
			<a-entity
				position="3 1.5 0"
				text=	"value: (Right) Ich hatte sie auf der Hochzeitsfeier eines Bekannten kennengelernt und mich mit ihr angefreundet. Das war vor drei Jahren. Wir waren fast zwoelf Jahre auseinander, sie war zwanzig, ich einunddreissig.;
						color: #FFFFFF;
						align: center;
						shader: msdf;
						font: https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/merriweather/Merriweather-Regular.json;
						width: 3;"
				rotation="0 -90">
			</a-entity>     
			

			<a-sky color="#000"></a-sky>
		</a-scene>
		<button id="request">
			Request
		</button>
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/main.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>