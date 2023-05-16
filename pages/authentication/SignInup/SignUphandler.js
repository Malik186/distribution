$(document).ready(function () {
    let form_tfm_time = 500;

    $("#btn_signup").on("click", function () {
        // $("#btn_signup").attr("disabled", "disabled");

        // var name = $("#name").val();
        let sign_up_data = {
            "user_name": $("#login-username").val(),
            "user_email": $("#login-email").val(),
            "user_password": $("#login-password").val(),
        }

        console.log(sign_up_data);

        if (sign_up_data.login-username != "" && sign_up_data.login-email != "" && sign_up_data.login-password != "") {
            $.ajax({
                url: url,
                type: "POST",
                data: sign_up_data,
                cache: false,
                success: function (dataResult) {
                    // console.log(dataResult)
                    var dataResult = JSON.parse(dataResult);
                    console.log(dataResult)
                    if (dataResult.success == 1) {
                        // $("#btn_signup").removeAttr("disabled");
                        $("#log_in_p_form").find("input:text").val("");
                        $("#error").hide();
                        $("#success").show();
                        $("#success").html("Registration successful !");

                        $(".sign_up_in").show(form_tfm_time);
                        $(".sign_in").show(form_tfm_time);
                        $(".sign_up").hide(form_tfm_time);
                        $("#btn_signin").show(form_tfm_time);
                        $("#btn_signup").hide(form_tfm_time);
                    } else if (dataResult.code == 11) {
                        $("#error").show();
                        $("#success").hide();
                        $("#error").html("Email already exists !");
                        $("#btn_signup").attr("disabled", "false");
                        $("#btn_signup").removeAttr("disabled");
                    } else if (dataResult.code == 0) {
                        $("#error").show();
                        $("#success").hide();
                        $("#error").html("Error saving yor data !");
                        $("#btn_signup").attr("disabled", "false");
                        $("#btn_signup").removeAttr("disabled");
                    }
                },
                error: function (dataResult) {
                    console.log("error");
                }
            });
        } else {
            alert("Please fill all the field !");
            $("#btn_signup").attr("disabled", "false");
            $("#btn_signup").removeAttr("disabled");
        }
    });

});
