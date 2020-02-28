$(document).ready(function () {

    $("input#massage").on("keyup", function (event) {
        if (event.keycode || event.which === 13) {
            var massage = $(this).val();
            var u_id = $("#u_id").val();
            var DataString = "u_id=" + u_id + "&massage=" + massage;
            $.ajax({
                type: "POST",
                url: "inc/SendMassageScript.php",
                data: DataString,
                success: function () {
                    $(".massages").load('inc/getMassage.php');
                    $("#massage").val('');
                }
            });
        }
    });

    $(".massages").load('inc/getMassage.php');

});