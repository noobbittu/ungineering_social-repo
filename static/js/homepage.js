$(document).ready(function () {

    $("#form").submit(function () {
        var data = $('#form').serialize();
        var url = "homepage_submit.php";
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
    
    
    var registration_success = function (data) {
        data = JSON.parse(data);
        if (data.success) {
            alert(data.message);
        } else {
            alert(data.message);
        }
    };
    
    
    var on_error = function () {
        alert("something went wrong");
    };
    
});
