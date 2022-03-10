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
                    <form class="login-form col-md-5 mx-auto" id="proLoginForm">
                        <div class="form-group"><label>Sign In</label>
                            <ul class="pro-user-type">
                                <li> <label><input type="radio" name="salonType" id="salon" value="salon" checked /> Salon</label></li>
                                <li> <label><input type="radio" name="salonType" id="makeup_artist" value="makeup_artist" /> Makeup Artist</label></li>
                            </ul>

                            <div class="form-group mt-3">
                                <input type="text" placeholder="Enter Email/Phone" class="form-control form-field" name="email_mobile">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control form-field" name="password">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn login-btn">Sign In</button>
                            </div>
                            <p class="text-white">Don't Have An Account ? <a class="text-white" href="pro-register.php">Join Now</a></p>
                        </div>
                </section>

                <!-- <section class="login">
                    <form class="login-form col-md-5 mx-auto">
                        <div class="form-group">
                            <label class="mb-3">Enter Your MPIN</label>
                          
                            <div class="create-mpin login-process-box">
                                <input type="text" placeholder="9999" class="form-control" maxlength="4">
                            <div class="text-center">
                                <button type="button" class="btn login-btn" onclick="window.open('user-manage-profile.php','_self')">Sign In</button>
                            </div>
                            </div>

                            <div class="enter-otp login-process-box d-custom-none">
                                <input type="text" placeholder="999999" class="form-control" maxlength="6">
                            <div class="text-center">
                                <p class="resend-otp">Resend OTP</p>
                                <button type="button" class="btn login-btn" id="enterOtpBtn" disabled>Enter OTP</button>
                            </div>
                            </div>

                            <p class="text-white">Don't Have An Account ? <a href="register.php" class="text-white"> Join Now</a></p>
                        </div>
                    </form>
                </section> -->

            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        let token = localStorage.getItem('token');
        if (token) {
            window.location.replace('salon/salon-ho-manage-brand.php');
        }
        $(function() {
            $("#proLoginForm").validate({
                rules: {
                    salonType: "required",
                    email_mobile: "required",
                    password: "required",
                },
                messages: {
                    email_mobile: "Please enter email/phone",
                    password: "Please enter password",
                },

                submitHandler: function(form) {
                    loginSubmit();
                }
            });

            var loginSubmit = function() {
                let category = $('input[name=salonType]:checked').val();
                let post_data = {
                    email_mobile: $('[name=email_mobile]').val(),
                    password: $('[name=password]').val(),
                    category: category,
                }
                loginAjaxCall(post_data);
            }

            var loginAjaxCall = function(post_data) {
                $.ajax({
                    url: base_url + 'auth/login.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        toastr.success(result.message);
                        localStorage.removeItem('temp_token');
                        localStorage.setItem("token", result.token);
                        window.location.replace('salon/salon-ho-manage-brand.php');
                    },
                    error: function(error) {
                        toastr.error(error.responseJSON.message);
                    }
                });
            }
        });
    </script>
</body>

</html>