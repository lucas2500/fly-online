
function playVideo(objButton){

	var video = document.getElementById('AULAS');

	if(video.paused == true){

		document.getElementById('play').className="btn btn-danger";
		document.getElementById('icon').className="glyphicon glyphicon-pause";
		video.play();

	}  else{

		document.getElementById('play').className="btn btn-primary";
		document.getElementById('icon').className="glyphicon glyphicon-play";
		video.pause();	
	}
}


function reload(){

	var video = document.getElementById('AULAS');
	video.pause();
	video.currentTime = 0;
	video.autoplay = false;
	document.getElementById('play').className="btn btn-primary";
	document.getElementById('icon').className="glyphicon glyphicon-play";
	video.load();
}


function playVideo2(objButton){

	var video = document.getElementById('AULAS2');

	if(video.paused == true){

		document.getElementById('play2').className="btn btn-danger";
		document.getElementById('icon2').className="glyphicon glyphicon-pause";
		video.play();

	}  else{

		document.getElementById('play2').className="btn btn-primary";
		document.getElementById('icon2').className="glyphicon glyphicon-play";
		video.pause();	
	}
}

function reload2(){

	var video = document.getElementById('AULAS2');
	video.pause();
	video.currentTime = 0;
	video.autoplay = false;
	document.getElementById('play2').className="btn btn-primary";
	document.getElementById('icon2').className="glyphicon glyphicon-play";
	video.load();
}


function showProf(){

	$('#coordenacao').collapse('hide');
	$('#professor').collapse('show');
	video = document.getElementById('AULAS');
	video.pause();
	document.getElementById('play').className="btn btn-primary";
	document.getElementById('icon').className="glyphicon glyphicon-play";
}

function showCoord(){

	$('#coordenacao').collapse('show');
	$('#professor').collapse('hide');
	video = document.getElementById('AULAS2');
	video.pause();
	document.getElementById('play2').className="btn btn-primary";
	document.getElementById('icon2').className="glyphicon glyphicon-play";
}