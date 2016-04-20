$(document).ready(function () {
	var sliders = $('.slider');
	var vals = $('.output');

	var val = $('#physVal');

	$('#physicality').change(function(){
			val.html(this.value);
	});
	$('#physicality').change();
})
