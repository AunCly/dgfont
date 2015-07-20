$(document).ready(function(){
		interact('.font')
	  	.draggable({});
	  	interact("p, h2")
	  	.dropzone({
	    	ondrop: function (event) {
		      	console.log(event.relatedTarget.id);
		      	$(event.target).css('font-family', event.relatedTarget.id);
	    	}
	  	});
	});