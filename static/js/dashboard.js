/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#dashboard_update").submit(function () {
        var data = $("#dashboard_update").serialize();
        var url = "dashboard_submit.php";
        $.ajax(url, {
            data: data,
            success: update_success,
            error: onError,
            type: "POST"
        });
        return false;
    });
});
var update_success = function (data) {//data contains the response as it is
    alert("Updte Successful");
};
function onError(data) {
    alert("Internal Server Error");
}

