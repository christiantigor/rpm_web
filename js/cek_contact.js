$(function(){
	
	var nama = $("#contact-name");
	var email = $("#contact-email");
	var company = $("#contact-company");
	var message = $("#contact-message");
	var capca = $("#capca");
	
	var url = "sendemail.php";
	
	function sendContact () {
		$("#btn_contact").val("SENDING...");
		$("#btn_contact").attr('disabled','disabled');
		
		var request = $.ajax({
		  url: url,
		  type: "POST",
		  data: {
			  kirim : "masuk",
			  nama : nama.val(),
			  email : email.val(),
			  company : company.val(),
			  message : message.val(), 
			  capca : capca.val()
			},
		  dataType: "html"
		  });
		
		request.done(function(msg) {
		  $("#btn_contact").val("SEND MESSAGE");
		  $("#btn_contact").removeAttr('disabled');
		  
				if(msg=="nama") {
					nama.addClass("inputWarning");
				}else if(msg=="email") { 
					email.addClass("inputWarning");
				}else if(msg=="message") { 
					message.addClass("inputWarning");
				}else if(msg=="capca") { 
					capca.addClass("inputWarning");
				}else if(msg=="ok") {
					$(".divMsg").fadeIn();
					$(".divMsg").html("Your message has been sent successfully");
				}else{
					alert(msg);
				}
				
		});
		
		request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
		  $("#btn_contact").removeAttr('disabled');
		  $("#btn_contact").val("SEND MESSAGE");
		});
	}
	
	$("#formContact").bind('submit', function (event) {
		event.preventDefault(); 
		$(".divMsg").fadeOut();
	
		var cek2 = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; //cekemail
		var cek3 = /^([0-9]{6,6})+$/; //cek captcha
		
		if(nama.val().trim()=="") {
			nama.addClass("inputWarning");
			return false;
		}else if(!cek2.test(email.val())) {
			email.addClass("inputWarning");
			return false;
		}else if(message.val().trim()==""){
			message.addClass("inputWarning");
			return false;
		}else if(!cek3.test(capca.val())) {
			capca.addClass("inputWarning");
			return false;
		}else{
			sendContact();
			return true;
		}
		
	});
	
	$("#formContact input[type=text], #formContact textarea").click(function(){
		$(this).removeClass("inputWarning");
		$(".divMsg").fadeOut();
	});
	
});