$(document).ready(function () {
    console.log("Document is ready");
    $("#hideLogin").click(function () {
        console.log("hidelogin is ready");
        $('#loginForm').hide();
        $('#registerForm').show();
    });

    $("#hideRegister").click(function () {
        console.log("hideRegister is ready");
        $('#loginForm').show();
        $('#registerForm').hide();
    });

});