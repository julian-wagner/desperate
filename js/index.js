// Permission to use Device Motion (iOS)

/*
$(document).ready(function() {
	if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
		$("#request").hide();	
	}

	if (location.protocol != 'https:') {
		location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
	}
	
	$("#request").on("click", function() {
		if (typeof(DeviceMotionEvent) !== 'undefined' && typeof(DeviceMotionEvent.requestPermission) === 'function') {
			DeviceMotionEvent.requestPermission().then(response => {
				alert('resp '+ response);
				
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
*/