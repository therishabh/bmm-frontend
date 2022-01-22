<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body">
    <div class="top-heading">
        <h1>Manage Profile</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Contact Person
                </div>
                <div class="card-body">
                    <form action="" id="contactPersonForm">
                        <div class="row">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="contact_person_name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="contact_person_mobile">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="contact_person_email" disabled>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="category" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="unisex">Unisex</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Are you the Owner or Manager of this place?</label>
                                <select name="i_am_owner" class="form-control">
                                    <option value="0">I'm not the owner/manager</option>
                                    <option value="1"> I'm the owner/manager</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Salon Info
                </div>
                <div class="card-body">
                    <form action="" id="salonInfoForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salon Name</label>
                                    <input type="text" class="form-control" name="salon_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>STD</label>
                                            <input type="text" class="form-control" name="std">
                                        </div>
                                    </div>
                                    <div class="col-md-9 pl-0">
                                        <div class="form-group">
                                            <label>Landline No</label>
                                            <input type="text" class="form-control" name="landline_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salon Website</label>
                                    <input type="text" class="form-control" name="website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Opening Status</label>
                                    <select name="is_salon_open" class="form-control">
                                        <option value="0">This place is opening soon</option>
                                        <option value="1">This place is already open</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" name="address"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" name="pin_code">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TAN Number</label><br>
                                    <input type="text" class="form-control" name="tan_number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TIN Number</label><br>
                                    <input type="text" class="form-control" name="tin_number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PAN Number</label><br>
                                    <input type="text" class="form-control" name="pancard_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('footer.php') ?>

<script>
    $(function() {

        const token = localStorage.getItem("salonToken");
        if (token) {
            const url = `${base_url}/salon/get-info.php`;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    token: token,
                    q: 'info,pan_info',
                },
                success: function(result) {
                    $('[name=contact_person_name]').val(result.result.info.contact_person_name);
                    $('[name=contact_person_mobile]').val(result.result.info.contact_person_mobile);
                    $('[name=contact_person_email]').val(result.result.info.email_id);
                    $('[name=category] option').each(function() {
                        if ($(this).val() == result.result.info.category) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('[name=i_am_owner] option').each(function() {
                        if ($(this).val() == result.result.info.i_am_owner) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('[name=is_salon_open] option').each(function() {
                        if ($(this).val() == result.result.info.is_salon_open) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('[name=salon_name]').val(result.result.info.salon_name);
                    $('[name=website]').val(result.result.info.website);
                    $('[name=address]').val(result.result.info.address);
                    $('[name=city]').val(result.result.info.city);
                    $('[name=state]').val(result.result.info.state);
                    $('[name=pin_code]').val(result.result.info.pin_code);
                    $('[name=std]').val(result.result.info.std);
                    $('[name=landline_no]').val(result.result.info.landline_no);
                    $('[name=pancard_number]').val(result.result.pan_info.pancard_number);
                    $('[name=tin_number]').val(result.result.pan_info.tin_number);
                    $('[name=tan_number]').val(result.result.pan_info.tan_number);
                }
            });


            $('#contactPersonForm').validate({
                rules: {
                    contact_person_name: "required",
                    contact_person_mobile: "required",
                    email_id: "required",
                    category: "required",
                    i_am_owner: "required",
                },
                submitHandler: function(form) {
                    contactPersonSubmit();
                }
            });

            const contactPersonSubmit = function() {
                let post_data = {
                    "token": token,
                    "basic_info": {
                        "contact_person_name": $('[name=contact_person_name]').val(),
                        "contact_person_mobile": $('[name=contact_person_mobile]').val(),
                        "email_id": $('[name=email_id]').val(),
                        "category": $('[name=category] option:selected').val(),
                        "i_am_owner": $('[name=i_am_owner] option:selected').val(),
                    }
                }
                $.ajax({
                    url: `${base_url}/salon/add-info.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: 'Contact Person Info Updated',
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            };

            $('#salonInfoForm').validate({
                rules: {
                    salon_name: "required",
                    std: "required",
                    landline_no: "required",
                    website: "required",
                    is_salon_open: "required",
                    address: "required",
                    city: "required",
                    state: "required",
                    pin_code: "required",
                    pancard_number: "required",
                    tin_number: "required",
                    tan_number: "required",
                },
                submitHandler: function(form) {
                    salonInfoSubmit();
                }
            });

            const salonInfoSubmit = function() {

                let post_data = {
                    "token": token,
                    "basic_info": {
                        "salon_name": $('[name=salon_name]').val(),
                        "std": $('[name=std]').val(),
                        "landline_no": $('[name=landline_no]').val(),
                        "website": $('[name=website]').val(),
                        "is_salon_open": $('[name=is_salon_open] option:selected').val(),
                        "address": $('[name=address]').val(),
                        "city": $('[name=city]').val(),
                        "state": $('[name=state]').val(),
                        "pin_code": $('[name=pin_code]').val(),
                    },
                    "pan_info": {
                        "pancard_number": $('[name=pancard_number]').val(),
                        "tin_number": $('[name=tin_number]').val(),
                        "tan_number": $('[name=tan_number]').val(),
                    },
                }
                $.ajax({
                    url: `${base_url}/salon/add-info.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: 'Salon Info Updated',
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            };

        } else {
            window.location.replace('index.php');
        }

    });
</script>