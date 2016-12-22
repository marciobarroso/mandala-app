$(document).ready(function(){
	
	// handle bootstrap alert messages
	$(".alert").fadeTo(5000, 500).slideUp(500, function(){
		$(".alert").alert('close');
	});

	// show modal messages if exists
	$("#modal-messages").modal();

	// apply format to checkboxes
	var checkboxes = $("input[type='checkbox'].switch");

	// setting attributes to use icons
	$(checkboxes).attr('data-on-text', "<i class='glyphicon glyphicon-ok'></i>");
	$(checkboxes).attr('data-off-text', "<i class='glyphicon glyphicon-remove'></i>");

	// setting classes
	$(checkboxes).bootstrapSwitch('onColor', 'success');
	$(checkboxes).bootstrapSwitch('offColor', 'primary');

	// fix label issue
	$("div.bootstrap-switch").css("display", "block");
	
});