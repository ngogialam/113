function isEmail(inputEmail) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(inputEmail);
}

function validatePassword(inputPassword) {
    return inputPassword.length > 4;
}

$(document).ready(function() {
    $('#email').change(function() {
        var email = $(this).val().trim();
        // alert(`email = ${JSON.stringify(email)}`)
        if (!isEmail(email)) {
            //Error ?
            $(".emailError").html("Email khong dung");
        } else {
            $(".emailError").html("");
        }
    });
    $('#password').change(function() {
        var password = $(this).val();
        if (!validatePassword(password)) {
            $(".passwordError").html("Password hon 5 ki tu");
        } else {
            $(".passwordError").html("");
        }
    });
});