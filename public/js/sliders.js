$(function(){

	var currentValue = $('#currentValue');
	console.log("here");
	
	$('#slider').change(function(){
	    currentValue.html(this.value);
	});
	$('#slider').change();

});
