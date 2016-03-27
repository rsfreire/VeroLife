$(document).ready(function() {

	$('.CPF').mask("000.000.000-00", {clearIfNotMatch: true});
	$('.matricula').mask("0000000000000000", {clearIfNotMatch: true});

	$('#loginForm').submit(function(e) {

		var formData = $(this).serialize();
		
		$.post(base_url+'beneficiario/do-login', formData, function(data, textStatus, xhr) {
			window.location = base_url+'beneficiario';
		})
		.fail(function(data) {
    	var response = $.parseJSON( data.responseText );      
			showAlert(response.message);
  	});

  	return false;
	});

	$('#cadastroForm').submit(function(e) {

		var formData = $(this).serialize();
		
		$.post(base_url+'beneficiario/do-cadastro', formData, function(data, textStatus, xhr) {
			window.location = base_url+'beneficiario';
		})
		.fail(function(data) {
    	var response = $.parseJSON( data.responseText );      
			showAlert(response.message);
  	});

  	return false;
	});

	$('#senhaForm').submit(function(e) {

		var formData = $(this).serialize();
		
		$.post(base_url+'beneficiario/do-trocar-senha', formData, function(data, textStatus, xhr) {
			showSuccessAlert(data);
		})
		.fail(function(data) {
    	var response = $.parseJSON( data.responseText );      
			showAlert(response.message);
  	});

  	return false;
	});

	$('#esqueciSenhaForm').submit(function(e) {

		var formData = $(this).serialize();
		
		$.post(base_url+'beneficiario/do-esqueci-minha-senha', formData, function(data, textStatus, xhr) {
			showSuccessAlert(data);
		})
		.fail(function(data) {
    	var response = $.parseJSON( data.responseText );      
			showAlert(response.message);
  	});

  	return false;
	});
});

function showAlert(msg){
	$('#userAlertMsg').html(msg);
	$('#userAlert').show();
	
	setTimeout(function() {
	    $('#userAlert').fadeOut('slow');
	}, 5000);
}
function showSuccessAlert(msg){
	$('#userSuccessAlertMsg').html(msg);
	$('#userSuccessAlert').show();
	
	setTimeout(function() {
	    $('#userSuccessAlert').fadeOut('slow');
	}, 105000);
}