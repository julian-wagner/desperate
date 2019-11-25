// Permission to use Device Motion (iOS)

$(document).ready(function() {

	if (location.protocol != 'https:') {
		location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
	}
	
	$("#request").on("click", function() {
		if (typeof(DeviceMotionEvent) !== 'undefined' && typeof(DeviceMotionEvent.requestPermission) === 'function') {
			DeviceMotionEvent.requestPermission().then(response => {
				alert('resp'+ response);
				
				if (response == 'granted') {
					window.addEventListener('devicemotion', (e) => {
						$("#request").hide();
					})
				}
			}).catch(console.error)
		} else {
			alert('DeviceMotionEvent is not defined');
		}
	
	});
});



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

    function run () {
      if(AFRAME.utils.device.isMobile()) {
        document.querySelector('#splash').style.display = 'flex';
        document.querySelector('#splash').addEventListener('click', function () {
          playVideo();
          this.style.display = 'none';
        })
      } else {
          playVideo();
      }
    }

    function playVideo () {
      vid.play();
      videoSphere.components.material.material.map.image.play();
    }
  })