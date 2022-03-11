<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <script src="https://www.google.com/recaptcha/api.js"></script>
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
                            <div class="form-heading">Registration</div>
                            <div class="register-steps register-step1">
                                <ul class="pro-user-type">
                                    <li> <label><input type="radio" name="salonType" value="salon" checked /> Salon</label></li>
                                    <li> <label><input type="radio" name="salonType" value="makeup_artist" /> Makeup Artist</label></li>
                                </ul>
                                <div class="form-group" id="input_makeup_artist_name">
                                    <label for="makeup_artist_input">Makeup Artist Name</label>
                                    <input type="text" id="makeup_artist_input" placeholder="Enter Makeup Artist Name" class="form-control" name="makeup_artist_name">
                                </div>
                                <div class="form-group" id="input_salon_name">
                                    <label for="salon_name_input">Salon Name</label>
                                    <input type="text" id="salon_name_input" placeholder="Enter Salon Name" class="form-control" name="salon_name">
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number_input">Mobile Number</label>
                                    <input type="text" id="mobile_number_input" placeholder="Enter Mobile Number" class="form-control" maxlength="10" name="mobile_no">
                                </div>
                                <div class="form-group">
                                    <label for="email_id_input">Email Id</label>
                                    <input type="email" id="email_id_input" placeholder="Enter Email Id" class="form-control" maxlength="" name="email">
                                </div>
                                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeMSM8eAAAAABYjhVtzcDqWMCwLZu_oPCh2kBRB"></div>
                                <div class="form-group text-center" style="margin-top: 15px;"><button type="submit" id="proRegisterBtn" class="btn login-btn">Sign Up</button></div>
                                <div class="bar-text">
                                    <span> Already have an account ?</span>
                                </div>
                                <div class="button-wrap">
                                    <a href="pro-login.php">
                                        <div class="sign-in-btn btn login-btn">Sign In</div>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none col-md-5 mx-auto" id="proRegisterStepTwo">
                            <div class="form-heading">Registration - Verify OTP</div>
                            <div class="register-steps register-step2 mt-3">
                                <div class="form-group">
                                    <label for="otp_text">OTP</label>
                                    <input type="text" id="otp_text" placeholder="Enter OTP" class="form-control" maxlength="6" name="otp">
                                </div>
                                <div class="form-group"></div>
                                <label class="resend-seconds"> <span class></span> sec</label>
                                <div class="cursor-pointer resend-btn">Resend OTP</div>
                                <div class="form-group text-center mt-3">
                                    <div class="go-back-btn btn login-btn">Go Back</div>
                                    <button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button>
                                </div>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none col-md-5 mx-auto" id="proRegisterStepThree">
                            <div class="form-heading">Registration - Set Password</div>
                            <div class="register-steps register-step3 mt-3">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" id="new_password" placeholder="Enter Password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" id="confirm_password" placeholder="Confirm Password" class="form-control" name="confirmPassword">
                                </div>
                                <div class="form-group text-center"><button type="submit" id="stepThreeSubmitBtn" class="btn login-btn">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        let token = localStorage.getItem('salonToken');
        if (token) {
            debugger;
            window.location.replace('../salon/dashboard.php');
        }

        $(function() {
            let otpTiming = 5;
            let tempToken;
            let signup_post_data = {
                category: 'salon',
                mobile_no: '',
                email_id: '',
                name: '',
            }

            // *****************
            // step 1
            // *****************
            $(".pro-user-type input[name='salonType']").change(function() {
                const checkbox_value = $(this).val();
                $("#input_makeup_artist_name input").val("")
                $("#input_salon_name input").val("")
                if (checkbox_value == 'salon') {
                    $("#input_makeup_artist_name").hide();
                    $("#input_salon_name").show();
                } else {
                    $("#input_makeup_artist_name").show();
                    $("#input_salon_name").hide();
                }
                signup_post_data.category = checkbox_value;
            });

            $("#proRegisterStepOne").validate({
                rules: {
                    makeup_artist_name: {
                        required: true
                    },
                    salon_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    mobile_no: {
                        required: true,
                        number: true,
                        minlength: 10
                    },
                    'g-recaptcha-response': {
                        required: true
                    }
                },
                messages: {
                    makeup_artist_name: {
                        required: "Please enter Makeup artist name"
                    },
                    salon_name: {
                        required: "Please enter Salon name"
                    },
                    email: {
                        required: "Please enter Email id",
                        email: "Please enter valid Email id"
                    },
                    mobile_no: {
                        required: "Please enter Mobile number",
                        number: "Please enter a valid mobile number",
                        minlength: "Your mobile number must be at least 10 characters long"
                    }
                },
                submitHandler: function(form) {
                    signup_post_data.email_id = $("#proRegisterStepOne input[name='email']").val()
                    signup_post_data.mobile_no = $("#proRegisterStepOne input[name='mobile_no']").val()
                    if (signup_post_data.category == 'salon') {
                        signup_post_data.name = $("#proRegisterStepOne input[name='salon_name']").val()
                    } else {
                        signup_post_data.name = $("#proRegisterStepOne input[name='makeup_artist_name']").val()
                    }
                    signup_post_data.captcha = $("#proRegisterStepOne [name='g-recaptcha-response']").val();
                    const url = base_url + 'salon/auth/signup.php';
                    if (!!signup_post_data.captcha) {
                        $("#proRegisterStepOne #proRegisterBtn").attr('disabled', true)
                        $.ajax({
                            url,
                            type: 'POST',
                            dataType: 'JSON',
                            data: JSON.stringify(signup_post_data),
                            success: function(data) {
                                $("#proRegisterStepOne #proRegisterBtn").removeAttr('disabled')
                                $('#proRegisterStepOne').hide();
                                $('#proRegisterStepTwo').show();
                                tempToken = data.token;
                                resendSetInterval();
                            },
                            error: function(error) {
                                toastr.error(error.responseJSON.message);
                                $("#proRegisterStepOne #proRegisterBtn").removeAttr('disabled')

                            }
                        });
                    } else {
                        toastr.error("Please validate Captcha");
                    }
                }
            });
            // *****************
            // step 1 End
            // *****************

            // *****************
            // step 2
            // *****************
            function resendSetInterval() {
                $('.resend-btn').hide();
                $('.resend-seconds').show();
                let resend_seconds = otpTiming;
                $('.resend-seconds span').text(resend_seconds);
                let interval = setInterval(function() {
                    resend_seconds--;
                    if (resend_seconds > 1) {
                        $('.resend-seconds span').text(resend_seconds);
                    } else {
                        $('.resend-seconds').hide();
                        $('.resend-btn').show();
                        clearInterval(interval);
                        return;
                    }
                }, 1000);
            }

            $('.resend-btn').click(function() {
                let post_data = {
                    token: tempToken
                }
                $.ajax({
                    url: base_url + 'salon/auth/resend-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function() {
                        resendSetInterval();
                    }
                });
            });

            $("#proRegisterStepTwo").validate({
                rules: {
                    otp: {
                        required: true,
                        number: true,
                        minlength: 6
                    }
                },
                messages: {
                    otp: {
                        required: "Please enter OTP",
                        number: "Please enter a valid OTP",
                        minlength: "Please enter 6 digit OTP"
                    }
                },
                submitHandler: function(form) {
                    let post_data = {
                        otp: $('#proRegisterStepTwo input[name=otp]').val(),
                        token: tempToken
                    }
                    $("#verifyOTP").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'salon/auth/verify-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(res) {
                            $('#proRegisterStepTwo').hide();
                            $('#proRegisterStepThree').show();
                            toastr.success('OTP successfully validated');
                            $("#verifyOTP").removeAttr('disabled');
                        },
                        error: function(error) {
                            $("#verifyOTP").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            $("#proRegisterStepTwo .go-back-btn").click(function() {
                $('#proRegisterStepOne').show();
                $('#proRegisterStepTwo').hide();
                $("#proRegisterStepOne [name='g-recaptcha-response']").val("");
                grecaptcha.reset();
            })

            // *****************
            // step 2 End
            // *****************

            // *****************
            // step 3
            // *****************
            $("#proRegisterStepThree").validate({
                rules: {
                    password: {
                        required: true
                    },
                    confirmPassword: {
                        required: true
                    }
                },
                messages: {
                    password: {
                        required: "Please enter New Password"
                    },
                    confirmPassword: {
                        required: "Please enter Confirm Password"
                    }
                },
                submitHandler: function(form) {
                    let password = $('#proRegisterStepThree [name=password]').val();
                    let confirmPassword = $('#proRegisterStepThree [name=confirmPassword]').val();
                    if (password == confirmPassword) {
                        let post_data = {
                            token: tempToken,
                            password: password
                        }
                        $("#stepThreeSubmitBtn").attr('disabled', true);
                        $.ajax({
                            url: base_url + 'salon/auth/set-password.php',
                            type: 'POST',
                            dataType: 'JSON',
                            data: JSON.stringify(post_data),
                            success: function(result) {
                                toastr.success('You have successfully Registered');
                                localStorage.setItem("salonToken", result.token);
                                window.location.replace('../salon/dashboard.php');
                                $("#stepThreeSubmitBtn").removeAttr('disabled');
                            },
                            error: function(error) {
                                toastr.error(error.responseJSON.message);
                                $("#stepThreeSubmitBtn").removeAttr('disabled');
                            }
                        });
                    } else {
                        toastr.error('New Password and Confirm Password should be same');
                    }
                }
            });
            // *****************
            // step 3 End
            // *****************
        });
    </script>
</body>

</html>