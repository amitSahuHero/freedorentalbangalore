$(document).on('click', '#isValidateGetQuotes', function() {
    alert('okoko');
    if (isValidateGet()) {
        var frm = $("#getaquote").serialize();
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
function isValidateGet() {
    var valid = true;
    var getname = $("input[name='getname']").val();
    var getphone = $("input[name='getphone']").val();
    var getemail = $("input[name='getemail']").val();
    var getstate = $("#getstate").val();
    var getvehicle = $("#getvehicle").val();
    $(".message").hide();
    $(".message").css("color", "red");
    $(".message").css("font-size", "12px");
    $(".message").css("display", "block");

    if (getname.length == 0) {
        valid = false;
        $("#msggetname").html("* Please enter name");
        $("#msggetname").show();
    }
    if (getphone.length == 0) {
        valid = false;
        $("#msggetphone").html("* Please enter your phone no.");
        $("#msggetphone").show();
    }

    if (getstate.length == 0) {
        valid = false;
        $("#msggetstate").html("* Please select your state.");
        $("#msggetstate").show();
    }

    if (getvehicle.length == 0) {
        valid = false;
        $("#msggetvehicle").html("* Please select your vehicle.");
        $("#msggetvehicle").show();
    }

    if (getemail.length == 0) {
        valid = false;
        $("#msggetemail").html("* Please enter your email.");
        $("#msggetemail").show();
    }

    return valid;
}