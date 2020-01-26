// Buttons Barn 01

document.querySelector("#barn01-cam02").addEventListener("click", () => {switchCam02()});
document.querySelector("#barn01-cam03").addEventListener("click", () => {switchCam03()});
document.querySelector("#barn01-cam04").addEventListener("click", () => {switchCam04()});



// Buttons Barn 02

document.querySelector("#barn02-cam01").addEventListener("click", () => {switchCam01()});
document.querySelector("#barn02-cam03").addEventListener("click", () => {switchCam03()});
document.querySelector("#barn02-cam04").addEventListener("click", () => {switchCam04()});



// Buttons Barn 03

document.querySelector("#barn03-cam01").addEventListener("click", () => {switchCam01()});
document.querySelector("#barn03-cam02").addEventListener("click", () => {switchCam02()});
document.querySelector("#barn03-cam04").addEventListener("click", () => {switchCam04()});



// Buttons Barn 04

document.querySelector("#barn04-cam01").addEventListener("click", () => {switchCam01()});
document.querySelector("#barn04-cam02").addEventListener("click", () => {switchCam02()});
document.querySelector("#barn04-cam03").addEventListener("click", () => {switchCam03()});



// Switch to Cam 01

function switchCam01() {
	document.querySelector("#cam01").setAttribute("camera", "active", true);
	document.querySelector("#cam02").setAttribute("camera", "active", false);
	document.querySelector("#cam03").setAttribute("camera", "active", false);
	document.querySelector("#cam04").setAttribute("camera", "active", false);
}



// Switch to Cam 02

function switchCam02() {
	document.querySelector("#cam01").setAttribute("camera", "active", false);
	document.querySelector("#cam02").setAttribute("camera", "active", true);
	document.querySelector("#cam03").setAttribute("camera", "active", false);
	document.querySelector("#cam04").setAttribute("camera", "active", false);
}



// Switch to Cam 03

function switchCam03() {
	document.querySelector("#cam01").setAttribute("camera", "active", false);
	document.querySelector("#cam02").setAttribute("camera", "active", false);
	document.querySelector("#cam03").setAttribute("camera", "active", true);
	document.querySelector("#cam04").setAttribute("camera", "active", false);
}



// Switch to Cam 04

function switchCam04() {
	document.querySelector("#cam01").setAttribute("camera", "active", false);
	document.querySelector("#cam02").setAttribute("camera", "active", false);
	document.querySelector("#cam03").setAttribute("camera", "active", false);
	document.querySelector("#cam04").setAttribute("camera", "active", true);
}



// Audio "Car"

document.querySelector("#car").addEventListener("click", () => {playCar()});

function playCar() {
	document.getElementById("audio-car").play(); 
}



// Audio "Sofa & Table"

document.querySelector("#sofa").addEventListener("click", () => {playSofaTable()});
document.querySelector("#table").addEventListener("click", () => {playSofaTable()});

function playSofaTable() {
	document.getElementById("audio-sofatable").play(); 
}



// Audio "Saddle"

document.querySelector("#saddle").addEventListener("click", () => {playSaddle()});

function playSaddle() {
	document.getElementById("audio-saddle").play(); 
}



// Audio "Hay Bale"

document.querySelector("#haybale").addEventListener("click", () => {playHayBale()});

function playHayBale() {
	document.getElementById("audio-haybale").play(); 
}



// Begin

$("#begin").delay(5000).fadeOut();



// Timer

$("#timer").startTimer({
	onComplete: function(element) {
		$("#end").css("display", "flex").hide().fadeIn();
	}
});