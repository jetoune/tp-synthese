
$(document).ready(function() {
	$('#mobil-menu').click(function() {
		$('#menu-mobile').toggleClass('on');
		return false;
	})


	$('.admin-panel').click(function() {
		$('.panel-admin').toggleClass('on');
		return false;
	})


	$('.rate').each(function() {
		rate = $(this).data('rate');
		$('.percent', this).css('width', rate);
	})
})