$(document).ready(function(){
	var dragged;
	document.addEventListener("drag", function(event) {}, false);

	document.addEventListener("dragstart", function(event) {
		    // Récupération de l'elmts en cours de déplacement
		    dragged = event.target;
		    dragged.style.opacity = .5;
	}, false);

	document.addEventListener("dragend", function(event) {
		dragged.style.opacity = "";
	}, false);

	document.addEventListener("dragover", function(event) {
		event.preventDefault();
	}, false);

	document.addEventListener("dragenter", function(event) {
		if ( event.target.className == "dropzone" ) {
			event.target.style.border = "solid 1px #F1433F";
		}
	}, false);

	document.addEventListener("dragleave", function(event) {
		if ( event.target.className == "dropzone" ) {
			event.target.style.border = "";
		}
	}, false);

	document.addEventListener("drop", function(event) {
	    // prevent default action (open as link for some elements)
	    event.preventDefault();
	    if (event.target.className == "dropzone") {
	    	event.target.style.border = "";
	    	event.target.style.fontFamily = dragged.id;
	    }
	}, false);
});
