// prettier-ignore
$(document).ready(function () {
    $("#registration-form").on("submit", function (e) {
        e.preventDefault();
        $('button').prop('disabled', true);
        $.ajax({
            url: "/api/register",
            type: "POST",
            accepts: "application/json",
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                pincode: $("#pincode").val(),
            },
            success: function (result) {
                $("#success-msg").html(
                    '<div class="alert alert-success"><p>'+result.message+'<p></div>'
                );
                $(".form-control").val('');
                $('button').prop('disabled', false);
            },
            error: function (error) {
                printErrorMsg(error.responseJSON.error);
                $('button').prop('disabled', false);
            },
        });
    });

    function printErrorMsg(err) {
        for (elem in err)
            if (err.hasOwnProperty(elem)) {
                $("#err-" + elem).text(err[elem][0]);
            }
    }
});
