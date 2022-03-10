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

    <section class="user-manage-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include 'include/salon_menu.php' ?>
                </div>
                <div class="col-md-9">
                    <div class="manage-user-icon">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="h2-heading">Manage Brand</h2>
                                </div>
                                <!-- <div class="col-md-3">
                                    <img src="assets/images/salon-logo-1.png" alt="" class="img-thumbnail">
                                </div> -->
                                <div class="col-md-12">
                                    <form action="" id="profileForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Salon Name</label>
                                                    <input type="text" class="form-control" name="salon_name" value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email_id" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact Person</label>
                                                    <input type="text" class="form-control" name="contact_person_name" value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact Person Phone</label>
                                                    <input type="text" class="form-control" maxlength="10" name="contact_person_mobile" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-pink float-right">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <div class="user-text">
                                        <h5>Hair Masters</h5>
                                        <p>Contact Person: Rohit Verma</p>
                                        <p>Email: verma6641@gmail.com</p>
                                        <p>Mobile: 9876543210</p>
                                        <a href="#"><i class="fas fa-lock icon"></i> CHANGE PASSWORD</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        $(function() {
            const tokanInfoConst = localStorage.getItem("token");
            $.ajax({
                url: base_url + 'salon/get-info.php?token= ' + tokanInfoConst + ' &q=info,services,amenities,timings',
                type: 'GET',
                dataType: 'JSON',
                success: function(result) {
                    console.log(result);
                    $('[name=salon_name]').val(result.result.info.salon_name);
                    $('[name=email_id]').val(result.result.info.email_id);
                    $('[name=contact_person_name]').val(result.result.info.contact_person_name);
                    $('[name=contact_person_mobile]').val(result.result.info.contact_person_mobile);
                }
            });

            $('#profileForm').validate({
                rules: {
                    salon_name: 'required',
                    contact_person_name: 'required',
                    contact_person_mobile: {
                        required: true,
                        number: true,
                        minlength: 10
                    }
                },
                messages: {
                    salon_name: 'Enter Salon Name',
                    contact_person_name: 'Enter Contact Person Name',
                    contact_person_mobile: {
                        required: "Please enter contact person phone",
                        number: "Please enter a valid phone number",
                        minlength: "Phone number must be at least 10 characters long"
                    }
                },
                submitHandler: function(form) {
                    profileSubmit();
                }
            });

            const profileSubmit = function() {
                let post_data = {
                    "token": tokanInfoConst,
                    "basic_info": {
                        "salon_name": $('[name=salon_name]').val(),
                        "contact_person_name": $('[name=contact_person_name]').val(),
                        "contact_person_mobile": $('[name=contact_person_mobile]').val(),
                    },
                }
                profileAjex(post_data);
            }

            const profileAjex = function(post_data) {
                $.ajax({
                    url: base_url + 'salon/add-info.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        message = result.message;
                        toastr.success(message);
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    }
                })
            }

        });
    </script>
</body>

</html>