$(document).ready(function(){
	interact('.font').draggable({});
	interact('.font')
		.on('dragstart', test)
		.on('dragstart', test4)
		.on('dragstop', testt);
	interact('p, h2')
		.on('dragenter', test2)
		.on('dragleave', test3)
	  	.dropzone({
	    	ondrop: function (event) {
		      	console.log(event.relatedTarget.id);
		      	$(event.target).css('font-family', event.relatedTarget.id);
		      	$(event.target).css('border', 'none');
		      	$(event.relatedTarget).css('border', 'none');
	    	}
	  	});
});

function test (event) {
		$(event.target).css('border', 'solid 1px #F1433F');
}

function testt (event) {
		$(event.target).css('border', 'none');
}

function test2 (event){
	$(event.target).css('border', 'solid 1px #F1433F');
}

function test3 (event){
	$(event.target).css('border', 'none');
}

function test4 (event){
	$("h2, p").css('border', 'solid 1px #F1433F');
}