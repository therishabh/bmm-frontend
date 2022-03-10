<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>


    <section class="login-section login-section-pro">
        <div class="container">
            <div class="row">
                <section class="login">
                    <div class="form-group">
                        <form class="login-form login-pro-form col-md-5 mx-auto" id="proRegisterStepOne">
                        <label>Register</label>
                            <div class="register-steps register-step1">
                                <ul class="pro-user-type">
                                    <li> <label><input type="radio" name="salonType" id="salon" value="salon" checked /> Salon</label></li>
                                    <li> <label><input type="radio" name="salonType" id="makeup_artist" value="makeup_artist" /> Makeup Artist</label></li>
                                </ul>

                                <div class="form-group"><input type="text" placeholder="Enter Phone" class="form-control" maxlength="10" name="mobile_no"></div>
                                <div class="form-group"><input type="email" placeholder="Enter Email Id" class="form-control" maxlength="" name="email"></div>
                                <div class="form-group text-center"><button type="submit" id="proRegisterBtn" class="btn login-btn">Register</button></div>
                                <p class="text-white">Have An Account? Click here to <a class="text-white" href="pro-login.php"> Sign In</a></p>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none col-md-5 mx-auto" id="proRegisterStepTwo">
                        <label>Register</label>
                            <div class="register-steps register-step2 mt-3">
                                <div class="form-group"><input type="text" placeholder="Enter OTP" class="form-control" maxlength="4" name="otp"></div>
                                <label class="resend-seconds"> <span class></span> sec</label>
                                <label class="cursor-pointer resend-btn">Resend OTP</label>
                                <div class="form-group text-center mt-3"><button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button></div>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none col-md-5 mx-auto" id="proRegisterStepThree">
                        <label>Register</label>
                            <div class="register-steps register-step3 mt-3">
                                <div class="form-group"><input type="password" placeholder="Enter Password" class="form-control" maxlength="" name="password" id="password"></div>
                                <div class="form-group"><input type="password" placeholder="Confirm Password" class="form-control" maxlength="" name="confirmPassword"></div>
                                <div class="form-group text-center"><button type="submit" id="proRegisterSubmit" class="btn login-btn">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        let token = localStorage.getItem('token');
        let primaryToken;
        if (token) {
            window.location.replace('salon/salon-ho-manage-brand.php');
        }
        $("#proRegisterStepTwo").find('.resend-seconds span').text(otp_timer);

        $(function() {
            $("#proRegisterStepOne").validate({
                rules: {
                    email: {
                        email: true
                    },
                    mobile_no: {
                        required: true,
                        number: true,
                        minlength: 10
                    }
                },
                messages: {
                    email: {
                        email: "Please enter valid email address"
                    },
                    mobile_no: {
                        required: "Please provide a phone number",
                        number: "Please enter a valid phone number",
                        minlength: "Your phone number must be at least 10 characters long"
                    }
                },

                submitHandler: function(form) {
                    let categoryEl = $('input[name=salonType]:checked').val();
                    let post_data = {
                        category: categoryEl,
                        mobile_no: $('[name=mobile_no]').val(),
                        email_id: $('[name=email]').val()
                    }
                    $.ajax({
                        url: base_url + 'auth/signup.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(data, item) {
                            $('#proRegisterStepOne').hide();
                            $('#proRegisterStepTwo').show();
                            registerStepTwoValidation();
                            primaryToken = data.token;
                            resendSetInterval();
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            const registerStepTwoValidation = () => {
                $("#proRegisterStepTwo").validate({
                    rules: {
                        otp: {
                            required: true,
                            number: true,
                            minlength: 4
                        }
                    },
                    messages: {
                        otp: {
                            required: "Please provide OTP",
                            number: "Please enter a valid OTP",
                            minlength: "Please enter a valid OTP"
                        }
                    },
                    submitHandler: function(form) {
                        let post_data = {
                            otp: $('[name=otp]').val(),
                            token: primaryToken
                        }
                        $.ajax({
                            url: base_url + 'auth/verify-otp.php',
                            type: 'POST',
                            dataType: 'JSON',
                            data: JSON.stringify(post_data),
                            success: function(res) {
                                $('#proRegisterStepTwo').hide();
                                $('#proRegisterStepThree').show();
                                registerStepThreeValidation();
                                primaryToken = res.token;
                            },
                            error: function(error) {
                                toastr.error(error.responseJSON.message);
                            }
                        });
                    }
                });
            }

            function resendSetInterval(){
                let resend_seconds = otp_timer;
                let interval = setInterval(function() {
                    resend_seconds--;
                    if (resend_seconds > 1) {
                        $('.resend-seconds span').text(resend_seconds);
                    }else{
                        $('.resend-seconds').hide();
                        $('.resend-btn').show();
                        clearInterval(interval);
                        return;
                    }
                }, 1000);
            }

            $('.resend-btn').click(function() {
                let $this = $(this);
                let post_data = {
                    token: primaryToken
                }
                $.ajax({
                    url: base_url + 'auth/resend-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function() {
                        $('.resend-seconds span').text(otp_timer);
                        $('.resend-seconds').show();
                        $('.resend-btn').hide();
                        resendSetInterval();
                    }
                });
            });

            const registerStepThreeValidation = () => {
                $("#proRegisterStepThree").validate({
                    rules: {
                        password: {
                            required: true
                        },
                        confirmPassword: {
                            required: true,
                            equalTo : "#password"
                        }
                    },
                    messages: {
                        password: {
                            required: "Please provide password"
                        },
                        confirmPassword: {
                            required: "Please provide confirm password",
                            equalTo : "Please match passwords"
                        }
                    },
                    submitHandler: function(form) {
                        let password = $('[name=password]').val();
                        let confirmPassword = $('[name=confirmPassword]').val();
                        if (password == confirmPassword) {
                            let post_data = {
                                token: primaryToken,
                                password: password
                            }
                            $.ajax({
                                url: base_url + 'auth/set-password.php',
                                type: 'POST',
                                dataType: 'JSON',
                                data: JSON.stringify(post_data),
                                success: function(post_data, item) {
                                    toastr.success('Register Successfully');
                                    localStorage.setItem("token", primaryToken);
                                    window.location.replace('salon/salon-ho-manage-brand.php');
                                },
                                error: function(error) {
                                    toastr.error(error.responseJSON.message);
                                }
                            });
                        } else {
                            toastr.error('password not matched');
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>