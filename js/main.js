$(document).on('click', '#isValidate', function() {
	if (isValidate()) {
		var frm = $("#frm").serialize();
		$.ajax({
			url : 'enquiry.php',
			type : 'POST',
			data : frm,
			success : function(result) {
			    $(".message").hide();
				if (result.indexOf("send") > -1) {
				    $('#frm')[0].reset();
				    swal("Thank you !", "You are enquiry successfull.", "success");
				}else if (result.indexOf("fail") > -1) {
					swal("Oops...", "Something went wrong!", "error");
				}
			}
		});
	}
});
function isValidate() {
	var valid = true;
	var name = $("input[name='name']").val();
	var phone = $("input[name='phone']").val();
	var email = $("input[name='email']").val();
	var state = $("#state").val();
	var vehicle = $("#vehicle").val();
	$(".message").hide();
	$(".message").css("color", "red");
	$(".message").css("font-size", "12px");
	$(".message").css("display", "block");
	
	if (name.length == 0) {
		valid = false;
		$("#msgname").html("* Please enter name");
		$("#msgname").show();
	}
	if (phone.length == 0) {
		valid = false;
		$("#msgphone").html("* Please enter your phone no.");
		$("#msgphone").show();
	}
	
	if (state.length == 0) {
		valid = false;
		$("#msgstate").html("* Please select your state.");
		$("#msgstate").show();
	}
	
	if (vehicle.length == 0) {
		valid = false;
		$("#msgvehicle").html("* Please select your vehicle.");
		$("#msgvehicle").show();
	}
	
	if (email.length == 0) {
		valid = false;
		$("#msgemail").html("* Please enter your email.");
		$("#msgemail").show();
	}
	
	return valid;
}



