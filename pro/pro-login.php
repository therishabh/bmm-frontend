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
                    <form class="login-form login-pro-form col-md-5 mx-auto" id="proLoginForm" autocomplete="off">
                        <div class="form-heading">Sign In</div>
                        <ul class="pro-user-type">
                            <li> <label><input type="radio" name="salonType" id="salon" value="salon" checked /> Salon</label></li>
                            <li> <label><input type="radio" name="salonType" id="makeup_artist" value="makeup_artist" /> Makeup Artist</label></li>
                        </ul>
                        <div class="form-group mt-3">
                            <label for="mobile_number_input">Mobile Number / Email id</label>
                            <input type="text" id="mobile_number_input" placeholder="Enter Mobile Number or Email id" class="form-control" name="email_mobile">
                        </div>
                        <div class="form-group">
                            <label for="password_input">Password</label>
                            <input type="password" id="password_input" placeholder="Enter Password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" id="signInBtn" class="btn login-btn">Sign In</button>
                            <div class="or-text">
                                <span>OR</span>
                            </div>
                            <button type="button" id="signin-with-otp-btn" class="btn login-btn">Sign In with OTP</button>
                        </div>
                        <div class="bar-text">
                            <span>Don't Have An Account ?</span>
                        </div>
                        <div class="button-wrap">
                            <a href="pro-register.php">
                                <div class="sign-in-btn btn login-btn">Sign Up</div>
                            </a>
                        </div>
                    </form>

                    <form class="login-form login-pro-form d-custom-none col-md-5 mx-auto" id="proLoginStepTwo">
                        <div class="form-heading">Sign In - Verify OTP</div>
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
                </section>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php' ?>
    <script>
        let token = localStorage.getItem('salonToken');
        if (token) {
            window.location.replace('../salon/dashboard.php');
        }
        $(function() {
            let otpTiming = 60;
            let tempToken;
            $("#proLoginForm").validate({
                rules: {
                    email_mobile: "required",
                    password: "required",
                },
                messages: {
                    email_mobile: "Please enter Mobile Number or Email id",
                    password: "Please enter Password",
                },

                submitHandler: function(form) {
                    let category = $('#proLoginForm input[name=salonType]:checked').val();
                    let post_data = {
                        email_mobile: $('#proLoginForm [name=email_mobile]').val(),
                        password: $('#proLoginForm [name=password]').val(),
                        category: category,
                    }
                    $("#signInBtn").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'salon/auth/login.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            $("#signInBtn").removeAttr('disabled');
                            toastr.success("Sign in successfully");
                            localStorage.setItem("salonToken", result.token);
                            window.location.replace('../salon/dashboard.php');
                        },
                        error: function(error) {
                            $("#signInBtn").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            $("#signin-with-otp-btn").click(function() {
                sendOTPForLogin();
            });

            function sendOTPForLogin() {
                let post_data = {
                    email_mobile: $("#proLoginForm [name=email_mobile]").val(),
                    category: $('#proLoginForm input[name=salonType]:checked').val()
                }
                $("#signin-with-otp-btn").attr('disabled', true);
                debugger;
                if (!!post_data.email_mobile) {
                    $.ajax({
                        url: base_url + 'salon/auth/login-with-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            $("#signin-with-otp-btn").removeAttr('disabled');
                            $("#proLoginStepTwo").show();
                            $("#proLoginForm").hide();
                            toastr.success(result.message);
                            tempToken = result.token;
                            resendSetInterval();
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                        }
                    });
                } else {
                    toastr.error("Please enter Mobile Number or Email id");
                }
            }

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
                sendOTPForLogin();
            });

            $("#proLoginStepTwo .go-back-btn").click(function() {
                $("#proLoginStepTwo").hide();
                $("#proLoginForm").show();
            });

            $("#proLoginStepTwo").validate({
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
                        otp: $('#proLoginStepTwo input[name=otp]').val(),
                        token: tempToken
                    }
                    $("#verifyOTP").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'salon/auth/verify-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            toastr.success('OTP successfully verified');
                            $("#verifyOTP").removeAttr('disabled');
                            localStorage.setItem("salonToken", result.token);
                            window.location.replace('../salon/dashboard.php');
                        },
                        error: function(error) {
                            $("#verifyOTP").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

        });
    </script>
</body>

</html>