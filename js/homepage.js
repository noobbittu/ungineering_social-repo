$(document).ready(function () {

    $("#form").submit(function () {
        var data = $('#form').serialize();
        var url = "homepage_submit.php";
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: onError,
            type: "POST"
        });
        return false;
    });
    
    
    var registration_success = function (data) {
        alert("Successfull");
    };
    
    
    function onError(data) {
        alert("Internal Server Error");
    }
    
});
