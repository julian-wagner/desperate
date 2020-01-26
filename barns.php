<?php
	$date = new DateTime();
?>

<html>
	<head>
		<title>Desperate – Scheunen</title>
		<meta charset="UTF-8" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet" />
		<link href="css/main.css" rel="stylesheet" />
		<script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>
		<link rel="apple-touch-icon" href="assets/icon/apple-touch-icon.png" />
		<link rel="icon" href="assets/icon/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<a-scene loading-screen="dotsColor: white; backgroundColor: black" inspector="https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js">
			
			<!-- BG AUDIO -->
		
			<audio id="bg-audio" autoplay="true" loop="false"><source src="assets/sound/barns.mp3" type="audio/mpeg" /></audio>
			
			<!-- ASSETS -->
			
			<a-assets>
				<a-asset-item id="barn01" src="assets/3d/barn01/barn01.obj">
				<a-asset-item id="barn01mtl" src="assets/3d/barn01/barn01.mtl">
					
				<a-asset-item id="barn01car" src="assets/3d/barn01car/car.obj">
				<a-asset-item id="barn01carmtl" src="assets/3d/barn01car/car.mtl">
					
				<a-asset-item id="barn02" src="assets/3d/barn02/barn02.obj">
				<a-asset-item id="barn02mtl" src="assets/3d/barn02/barn02.mtl">
					
				<a-asset-item id="barn02sofa" src="assets/3d/barn02sofa/sofa.obj">
				<a-asset-item id="barn02sofamtl" src="assets/3d/barn02sofa/sofa.mtl">
					
				<a-asset-item id="barn02table" src="assets/3d/barn02table/table.obj">
				<a-asset-item id="barn02tablemtl" src="assets/3d/barn02table/table.mtl">
					
				<a-asset-item id="barn03" src="assets/3d/barn03/barn03.obj">
				<a-asset-item id="barn03mtl" src="assets/3d/barn03/barn03.mtl">
					
				<a-asset-item id="barn03saddle" src="assets/3d/barn03saddle/saddle.obj">
				<a-asset-item id="barn03saddlemtl" src="assets/3d/barn03saddle/saddle.mtl">
					
				<a-asset-item id="barn04" src="assets/3d/barn04/scene.gltf">
					
				<a-asset-item id="barn04haybale" src="assets/3d/barn04haybale/haybale.obj">
				<a-asset-item id="barn04haybalemtl" src="assets/3d/barn04haybale/haybale.mtl">
					
				<a-asset-item id="barn04can" src="assets/3d/barn04can/can.obj">
				<a-asset-item id="barn04canmtl" src="assets/3d/barn04can/can.mtl">
			</a-assets>
			
			<!-- BARN 01 -->
			
			<a-obj-model src="#barn01" mtl="#barn01mtl" position="-200 0 -200" scale="0.05 0.05 0.05">
				
				<!-- BUTTONS -->
				
				<a-box id="barn01-cam02" position="-50 50 -200"  scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 02; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn01-cam03" position="0 50 -200" scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 03; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn01-cam04" position="50 50 -200" scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 04; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>				
				
				<!-- LIGHT -->
				
				<a-light color="#d3f1ff" type="spot" position="0 80 0" intensity="5" angle="180" rotation="180 0 0"></a-light>
				
				<!-- CAR -->
				
				<a-obj-model id="car" src="#barn01car" mtl="#barn01carmtl" position="-350 30 -100" scale="0.35 0.35 0.35" rotation="0 0 0">
				</a-obj-model>
				
				<!-- CAMER & CURSOR -->
				
				<a-entity id="cam01" camera="active: true" look-controls position="0 100 0">
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
			</a-obj-model>
				
			<!-- BARN 02 -->
			
			<a-obj-model src="#barn02" mtl="#barn02mtl" position="200 0 -200" scale="0.05 0.05 0.05">
				
				<!-- TELEPORTES -->
				
				<a-box id="barn02-cam01" position="-50 15 -200"  scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 01; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn02-cam03" position="0 15 -200" scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 03; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn02-cam04" position="50 15 -200" scale="30 30 30" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 04; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				
				<!-- SOFA -->
				
				<a-obj-model id="sofa" src="#barn02sofa" mtl="#barn02sofamtl" position="450 13 200" scale="150 150 150" rotation="0 90 0">
				</a-obj-model>
				
				<!-- TABLE -->
				
				<a-obj-model id="table" src="#barn02table" mtl="#barn02tablemtl" position="250 0 50" scale="5 5 5" rotation="0 90 0">
				</a-obj-model>
				
				<!-- LIGHT -->
				
				<a-light color="#d3f1ff" type="spot" position="0 80 0" intensity="0" angle="180" rotation="180 0 0"></a-light>
				
				<!-- CAMERA & CURSOR -->
				
				<a-entity id="cam02" camera="active: false" look-controls position="0 100 0">
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
			</a-obj-model>
			
			<!-- BARN 03 -->
			
			<a-obj-model src="#barn03" mtl="#barn03mtl" position="-200 0 200" scale="0.05 0.05 0.05">
				
				<!-- TELEPORTERS -->
				
				<a-box id="barn03-cam01" position="-50 15 -200" scale="20 20 20" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 01; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn03-cam02" position="0 15 -200" scale="20 20 20" rotation="0 90 0"  color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 02; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn03-cam04" position="50 15 -200" scale="20 20 20" rotation="0 90 0" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 04; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				
				<!-- SADDLE -->
				
				<a-obj-model id="saddle" src="#barn03saddle" mtl="#barn03saddlemtl" position="-550 75 50" scale="1.5 1.5 1.5" rotation="0 90 90">
				</a-obj-model>
				
				<!-- LIGHT -->
				
				<a-light color="#d3f1ff" type="spot" position="0 80 0" intensity="5" angle="180" rotation="180 0 0"></a-light>
				
				<!-- CAMERA & CURSOR -->
				
				<a-entity id="cam03" camera="active: false" look-controls position="0 100 0">
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
			</a-obj-model>
			
			<!-- BARN 04 -->
			
			<a-gltf-model src="#barn04" position="200 0 200" scale="0.8 0.8 0.8">
				
				<!-- TELEPORTERS -->
				
				<a-box id="barn04-cam01" position="-3 15 -7.5" rotation="0 90 0" scale="0.1 1 1" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 01; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn04-cam02" position="0 15 -7.5" rotation="0 90 0" scale="0.1 1 1" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 02; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				<a-box id="barn04-cam03" position="3 15 -7.5" rotation="0 90 0" scale="0.1 1 1" color="#FFFFFF" material="" geometry="">
					<a-entity position="-0.5 0 0" scale="2 2 2" text="value: 03; color: #000000; align: center; width: 2" rotation="0 270 0"></a-entity>
				</a-box>
				
				<!-- HAY BALE -->
				
				<a-obj-model id="haybale" src="#barn04haybale" mtl="#barn04haybalemtl" position="-30 5 -90" scale="0.2 0.2 0.2" rotation="0 0 0">
				</a-obj-model>
				
				<!-- CAN -->
				
				<a-obj-model id="can" src="#barn04can" mtl="#barn04canmtl" position="-100 0 20" scale="0.05 0.05 0.05" rotation="0 0 0">
				</a-obj-model>
				
				<!-- LIGHT -->
				
				<a-light color="#d3f1ff" type="spot" position="0 80 0" intensity="2" angle="180" rotation="180 0 0"></a-light>
				
				<!-- CAMERA & CURSOR -->
				
				<a-entity id="cam04" camera="active: false" look-controls position="0 15 0">
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
			</a-gltf-model>
					
			<!-- ENVIROMENT -->	
				
			<a-light color="#d3f1ff" type="ambient" position="198.5982 380.30331 178.35676" intensity="2"></a-light>
			<a-sky color="#000"></a-sky>

		</a-scene>
		
		<!-- TIMER -->
		
		<div id="timer" data-seconds-left="150"></div>
		
		<!-- BEGIN -->
		
		<div class="modal" id="begin">
			<p>
				Suche nach Hinweisen darauf, welche Scheune abgebrannt werden könnte.
			</p>
		</div>
		
		<!-- END -->
		
		<div class="modal" id="end">
			<p>
				Glaubst du immer noch, dass es um Scheunen geht? Was zu nah ist, sieht man nicht.
			</p>
		</div>
		
		<!-- AUDIO -->
		
		<audio id="audio-sofatable"><source src="assets/sound/tablesofa.mp3" type="audio/mpeg" /></audio>
		<audio id="audio-saddle"><source src="assets/sound/saddle.mp3" type="audio/mpeg" /></audio>
		<audio id="audio-haybale"><source src="assets/sound/haybale.mp3" type="audio/mpeg" /></audio>
		<audio id="audio-car"><source src="assets/sound/car.mp3" type="audio/mpeg" /></audio>
		
		<!-- SCRIPTS -->
		
		<script src="js/vendor/jquery-3.4.1.min.js"></script>
		<script src="js/plugins/jquery.simple.timer.js"></script>
		<script src="js/barns.js?<?php echo $date->getTimestamp();?>"></script>
	</body>
</html>