$(function(){

	var currentValue = $('#currentValue');

	$('#slider').change(function(){
	    currentValue.html(this.value);
	});
	$('#slider').change();

});
