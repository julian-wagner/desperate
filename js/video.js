// Check if iOS Safari

var safari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
if (safari && iOS) {
    $("html").addClass("ios-safari");
}

// Play Video

document.addEventListener("DOMContentLoaded", function(event) {
    var scene = document.querySelector("a-scene");
    var vid = document.getElementById("video");
    var videoSphere = document.getElementById("video-sphere");

    if (scene.hasLoaded) {
		run();
    } else {
		scene.addEventListener("loaded", run);
    }

    function run() {
		if (AFRAME.utils.device.isMobile()) {
			if (safari && iOS) {
				document.querySelector("#play").style.display = "flex";
				document.querySelector("#play").addEventListener("click", function () {
					playVideo();
					this.style.display = "none";
				});	
			}		
		} else {
			playVideo();
		}
	}

	function playVideo() {
		vid.play();
		videoSphere.components.material.material.map.image.play();
	}
});



// Redirect after Video ends

document.getElementById("video").addEventListener("ended", function() { 
	window.location.pathname = "/vr/barns.php"
});	

