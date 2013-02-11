$(document).ready(function(){
	$(".error-message").hide();
	$("#form-nama").click(function(){
		showError(this);
	});
	$("#form-nama").keyup(function(){
		hideError(this);
	});
});

function showError(field){
	$(field).addClass("error");
	$(field).parent().find(".error-message").show();
}

function hideError(field){
	$(field).removeClass("error");
	$(field).parent().find(".error-message").fadeOut();
}
