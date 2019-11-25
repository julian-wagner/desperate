<?php
	$date = new DateTime();
?>


<html>
	<head>
		<title>VR-App – Test 02 – Barn 01</title>
		<meta charset="UTF-8">
		<link href="css/main.css" rel="stylesheet" />
		<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
	</head>
	<body>
		<a-scene inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			<a-assets>
				<img id="homeThumbnail" src="assets/360.jpg">
				<a-asset-item id="barn" src="assets/scene.gltf">
			</a-assets>
			
			<a-gltf-model src="#barn"></a-gltf-model>
				
			<a-light color="white" type="hemisphere" position="0 15 0" intensity="20"></a-light>
							
			<a-sky color="#000"></a-sky>
		</a-scene>
		<button id="request">
			Request
		</button>
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/main.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>