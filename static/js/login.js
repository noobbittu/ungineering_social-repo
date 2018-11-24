$('document').ready(function () {
    $('#login_form').submit(function () {
        var url = "login_submit.php";
        var data = $("#login_form").serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: onError,
            type: "POST"
        });
        return false;
    });
});

function login_success(data) {
    //data = JSON.parse(data);
    alert("success");
}

function onError() {
    alert("error");
}