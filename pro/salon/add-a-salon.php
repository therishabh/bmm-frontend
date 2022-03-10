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

                        <form action="" method="post" id="addsalonForm">
                            <h2 class="h2-heading">Add a Salon</h2>
                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Basic Info</div>
                                <div class="addaslon-form-body">
                                    <div class="form-group">
                                        <label>Salon Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Salon Name..." name="salon_name">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact Person</label>
                                                <input type="text" class="form-control" placeholder="Enter Contact Person..." name="contact_person_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact Person Phone</label>
                                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="contact_person_mobile" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label><br>
                                                <label for=""><input type="radio" name="category" value="male" checked> <span class="font-weight-normal">Male</span> </label> &nbsp;
                                                <label for=""><input type="radio" name="category" value="female"> <span class="font-weight-normal"> Female</span> </label>
                                                <label for=""><input type="radio" name="category" value="unisex"> <span class="font-weight-normal"> Unisex</span> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Are you the Owner or Manager of this place?</label><br>
                                                <label for=""><input type="radio" name="i_am_owner" value="0"> <span class="font-weight-normal">I'm not the owner/manager</span> </label> &nbsp;
                                                <label for=""><input type="radio" name="i_am_owner" value="1" checked> <span class="font-weight-normal"> I'm the owner/manager</span> </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>STD</label>
                                                        <input type="text" class="form-control" placeholder="STD" name="std">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 pl-0">
                                                    <div class="form-group">
                                                        <label>Landline No</label>
                                                        <input type="text" class="form-control" placeholder="Enter Landline" name="landline_no">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Salon Website</label>
                                                <input type="text" class="form-control" placeholder="Enter Salon Website" name="website">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Opening Status</label><br>
                                        <label for=""><input type="radio" name="is_salon_open" value="1" checked> <span class="font-weight-normal">This place is already open</span> </label> &nbsp;
                                        <label for=""><input type="radio" name="is_salon_open" value="0"> <span class="font-weight-normal"> This place is opening soon</span> </label>
                                    </div>
                                </div>
                            </div>


                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Location</div>
                                <div class="addaslon-form-body">


                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Enter Address" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="Enter City Name..." name="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" placeholder="Enter State" name="state">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pin Code</label>
                                                <input type="text" class="form-control" placeholder="Enter Pin Code" name="pin_code">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Facilities</div>
                                <div class="addaslon-form-body">

                                    <div id="amenities_result">
                                        <div class="row"></div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" name="AC"> &nbsp; AC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" name="SPA"> &nbsp; SPA</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; Sanitization</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; Valet Parking</label>
                                            </div>
                                        </div>


                                    </div> -->


                                </div>
                            </div>

                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Services</div>
                                <div class="addaslon-form-body">


                                    <div id="ServiceWrapper"></div>

                                    <!-- <div class="row mb-3">
                                        
                                        <div class="col-md-12 mb-3">
                                            <h5 class="text-pink">LADIES</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Styling</h6>
                                                <label> <input type="checkbox" name="Hair Cut"> &nbsp; Hair Cut</label><br>
                                                <label> <input type="checkbox" name="Ironing"> &nbsp; Ironing</label><br>
                                                <label> <input type="checkbox"> &nbsp; Global Colouring</label><br>
                                                <label> <input type="checkbox"> &nbsp; Blow Dry</label><br>
                                                <label> <input type="checkbox"> &nbsp; Root Touch Up</label><br>
                                                <label> <input type="checkbox"> &nbsp; Shampoo &amp; Conditioning</label><br>
                                                <label> <input type="checkbox"> &nbsp; Head Massage</label><br>
                                                <label> <input type="checkbox"> &nbsp; Roller Setting</label><br>
                                                <label> <input type="checkbox"> &nbsp; Oiling</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Make Up</h6>
                                                <label> <input type="checkbox" name="Party Make Up"> &nbsp; Party Make Up</label><br>
                                                <label> <input type="checkbox"> &nbsp; Engagement Make Up</label><br>
                                                <label> <input type="checkbox"> &nbsp; Bridal &amp; Reception Make Up</label><br>
                                                <label> <input type="checkbox"> &nbsp; Base Make Up</label><br>
                                                <label> <input type="checkbox"> &nbsp; Eye Make Up</label><br>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Texture</h6>
                                                <label> <input type="checkbox"> &nbsp; Rebonding</label><br>
                                                <label> <input type="checkbox"> &nbsp; Perming</label><br>
                                                <label> <input type="checkbox"> &nbsp; Keratin</label><br>
                                                <label> <input type="checkbox"> &nbsp; Colour Protection</label><br>
                                                <label> <input type="checkbox"> &nbsp; Smoothening</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Treatments</h6>
                                                <label> <input type="checkbox"> &nbsp; Spa Treatments</label><br>
                                                <label> <input type="checkbox"> &nbsp; Volumizing</label><br>
                                                <label> <input type="checkbox"> &nbsp; Advanced Hair Moisturising</label><br>
                                                <label> <input type="checkbox"> &nbsp; Scalp Treatments</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Facials &amp; Rituals</h6>
                                                <label> <input type="checkbox"> &nbsp; Bleach</label><br>
                                                <label> <input type="checkbox"> &nbsp; Luxury Facials/Rituals</label><br>
                                                <label> <input type="checkbox"> &nbsp; Clean Ups</label><br>
                                                <label> <input type="checkbox"> &nbsp; Body Polishing/Rejuvenation</label><br>
                                                <label> <input type="checkbox"> &nbsp; Threading</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hand &amp; Feet</h6>
                                                <label> <input type="checkbox"> &nbsp; Manicure</label><br>
                                                <label> <input type="checkbox"> &nbsp; Spa Pedicure</label><br>
                                                <label> <input type="checkbox"> &nbsp; Pedicure</label><br>
                                                <label> <input type="checkbox"> &nbsp; Waxing</label><br>
                                                <label> <input type="checkbox"> &nbsp; Spa Manicure</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Nail Care</h6>
                                                <label> <input type="checkbox"> &nbsp; Nail Paint</label><br>
                                                <label> <input type="checkbox"> &nbsp; Nail Art</label><br>
                                                <label> <input type="checkbox"> &nbsp; Nail Filling</label><br>
                                            </div>
                                        </div>

                                    </div> -->

                                    <!-- <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h5 class="text-pink">GENTS</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Cut &amp; Finish</h6>
                                                <label> <input type="checkbox"> &nbsp; Cut and Hair Care</label><br>
                                                <label> <input type="checkbox"> &nbsp; Shampoo &amp; Conditioning</label><br>
                                                <label> <input type="checkbox"> &nbsp; Head Massage</label><br>
                                                <label> <input type="checkbox"> &nbsp; Beard Styling</label><br>
                                                <label> <input type="checkbox"> &nbsp; Hair/Beard Colouring</label><br>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Colour</h6>
                                                <label> <input type="checkbox"> &nbsp; Hi - Lites</label><br>
                                                <label> <input type="checkbox"> &nbsp; Beard Colour</label><br>
                                                <label> <input type="checkbox"> &nbsp; Hair Colour
                                                    (Ammonia &amp; Ammonia Free)</label><br>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Texture</h6>
                                                <label> <input type="checkbox"> &nbsp; Straightening</label><br>
                                                <label> <input type="checkbox"> &nbsp; Smoothening</label><br>
                                                <label> <input type="checkbox"> &nbsp; Rebonding</label><br>
                                                <label> <input type="checkbox"> &nbsp; Perming</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Hair Treatments</h6>
                                                <label> <input type="checkbox"> &nbsp; Hair Spa</label><br>
                                                <label> <input type="checkbox"> &nbsp; Advanced Moisturising</label><br>
                                                <label> <input type="checkbox"> &nbsp; Scalp Treatments</label><br>
                                                <label> <input type="checkbox"> &nbsp; Colour Protection</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Skin Care</h6>
                                                <label> <input type="checkbox"> &nbsp; Clean Ups</label><br>
                                                <label> <input type="checkbox"> &nbsp; Facials</label><br>
                                                <label> <input type="checkbox"> &nbsp; Organic Treatments</label><br>
                                                <label> <input type="checkbox"> &nbsp; Manicure</label><br>
                                                <label> <input type="checkbox"> &nbsp; Pedicure</label><br>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group all-checkbox-label">
                                                <h6>Beard Grooming</h6>
                                                <label> <input type="checkbox"> &nbsp; Beard Trim</label><br>
                                                <label> <input type="checkbox"> &nbsp; Beard Colour</label><br>
                                                <label> <input type="checkbox"> &nbsp; Beard Styling</label><br>
                                                <label> <input type="checkbox"> &nbsp; Shave</label><br>
                                                <label> <input type="checkbox"> &nbsp; Luxury Shave &amp; Beard Spa</label><br>
                                            </div>
                                        </div>
                                    </div> -->



                                </div>
                            </div>

                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Timings</div>
                                <div class="addaslon-form-body">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group all-checkbox-label">

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Monday"> Monday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Tuesday"> Tuesday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Wednesday"> Wednesday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Thursday"> Thursday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Friday"> Friday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Saturday"> Saturday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="day-box">
                                                    <label> <input type="checkbox" name="day" value="Sunday"> Sunday</label>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="openAt">
                                                                    <option>Open At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="closeAt">
                                                                    <option>Close At</option>
                                                                    <option value="01:00:00">01:00</option>
                                                                    <option value="01:30:00">01:30</option>
                                                                    <option value="02:00:00">02:00</option>
                                                                    <option value="02:30:00">02:30</option>
                                                                    <option value="03:00:00">03:00</option>
                                                                    <option value="03:30:00">03:30</option>
                                                                    <option value="04:00:00">04:00</option>
                                                                    <option value="04:30:00">04:30</option>
                                                                    <option value="05:00:00">05:00</option>
                                                                    <option value="05:30:00">05:30</option>
                                                                    <option value="06:00:00">06:00</option>
                                                                    <option value="06:30:00">06:30</option>
                                                                    <option value="07:00:00">07:00</option>
                                                                    <option value="07:30:00">07:30</option>
                                                                    <option value="08:00:00">08:00</option>
                                                                    <option value="08:30:00">08:30</option>
                                                                    <option value="09:00:00">09:00</option>
                                                                    <option value="09:30:00">09:30</option>
                                                                    <option value="10:00:00">10:00</option>
                                                                    <option value="10:30:00">10:30</option>
                                                                    <option value="11:00:00">11:00</option>
                                                                    <option value="11:30:00">11:30</option>
                                                                    <option value="12:00:00">12:00</option>
                                                                    <option value="12:30:00">12:30</option>
                                                                    <option value="13:00:00">13:00</option>
                                                                    <option value="13:30:00">13:30</option>
                                                                    <option value="14:00:00">14:00</option>
                                                                    <option value="14:30:00">14:30</option>
                                                                    <option value="15:00:00">15:00</option>
                                                                    <option value="15:30:00">15:30</option>
                                                                    <option value="16:00:00">16:00</option>
                                                                    <option value="16:30:00">16:30</option>
                                                                    <option value="17:00:00">17:00</option>
                                                                    <option value="17:30:00">17:30</option>
                                                                    <option value="18:00:00">18:00</option>
                                                                    <option value="18:30:00">18:30</option>
                                                                    <option value="19:00:00">19:00</option>
                                                                    <option value="19:30:00">19:30</option>
                                                                    <option value="20:00:00">20:00</option>
                                                                    <option value="20:30:00">20:30</option>
                                                                    <option value="21:00:00">21:00</option>
                                                                    <option value="21:30:00">21:30</option>
                                                                    <option value="22:00:00">22:00</option>
                                                                    <option value="22:30:00">22:30</option>
                                                                    <option value="23:00:00">23:00</option>
                                                                    <option value="23:30:00">23:30</option>
                                                                    <option value="24:00:00">24:00</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">PAN Info</div>
                                <div class="addaslon-form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>TAN Number</label><br>
                                                <input type="text" class="form-control" name="tan_number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>TIN Number</label><br>
                                                <input type="text" class="form-control" name="tin_number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PAN Number</label><br>
                                                <input type="text" class="form-control" name="pancard_number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="addaslon-form-box">
                                <div class="addaslon-form-header">Payment</div>
                                <div class="addaslon-form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for=""><input type="radio" name="person-type" checked> <span class="font-weight-normal" name="Debit Cards/Credit Card"> Debit Cards/Credit Card</span> </label> &nbsp;
                                                <label for=""><input type="radio" name="person-type"> <span class="font-weight-normal" name="Membership Card"> Membership Card</span> </label> &nbsp;
                                                <label for=""><input type="radio" name="person-type"> <span class="font-weight-normal" name="Cash only"> Cash only</span> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-pink float-right">Add Salon</button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>

    <div id="gents_beardGrooming_result"></div>

</body>
<script src="assets/highslide/highslide-with-gallery.js"></script>

<script>
    $(function() {

        var intoSlug = function(str) {
            return str.toLowerCase().split(' ').join('-').replace('&', '');
        }

        const tokanInfoConst = localStorage.getItem("token");
        $.ajax({
            url: base_url + 'salon/get-info.php?token= ' + tokanInfoConst + ' &q=info,services,amenities,timings',
            type: 'GET',
            dataType: 'JSON',
            success: function(result) {
                $('[name=salon_name]').val(result.result.info.salon_name);
                $('[name=email_id]').val(result.result.info.email_id);
                $('[name=contact_person_name]').val(result.result.info.contact_person_name);
                $('[name=contact_person_mobile]').val(result.result.info.contact_person_mobile);
                $('[name=website]').val(result.result.info.website);
                $('[name=address]').val(result.result.info.address);
                $('[name=city]').val(result.result.info.city);
                $('[name=state]').val(result.result.info.state);
                $('[name=pin_code]').val(result.result.info.pin_code);
                $('[name=std]').val(result.result.info.std);
                $('[name=landline_no]').val(result.result.info.landline_no);
                // $('[name=pancard_number]').val(result.result.pan_info.pancard_number);
                // $('[name=tin_number]').val(result.result.pan_info.tin_number);
                // $('[name=tan_number]').val(result.result.pan_info.tan_number);
            }
        });


        $.ajax({
            url: base_url + 'common/get-services.php?token= ' + tokanInfoConst + '',
            type: 'GET',
            dataType: 'JSON',
            success: function(data, item) {
                for (let key in data) {
                    $("#ServiceWrapper").append('<div class="row mb-3"><div class="col-md-12 mb-3"><h5 class="text-pink">' + key.toUpperCase() + '</h5></div><div class="category-wrapper row m-0"></div></div>');
                    for (let category in data[key]) {
                        $("#ServiceWrapper .category-wrapper").append(`<div class="col-md-4">
                              <div class="form-group all-checkbox-label">
                                  <h6>${category}</h6>
                                  <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                              </div>
                        </div>`)
                        data[key][category].forEach(val => {
                            var x = `#ServiceWrapper .category-wrapper .${intoSlug(category)}`;
                            $(x).append('<label> <input type="checkbox" value="' + val.id + '"> &nbsp; ' + val.name + '</label></br>');
                        })
                    }
                }
            },
            error: function(error) {
                console.log(error);
            }
        });

        $.ajax({
            url: base_url + 'common/get-amenities.php?token=' + tokanInfoConst + '',
            type: 'GET',
            dataType: 'JSON',
            success: function(data) {
                $.each(data, function(index) {
                    $("#amenities_result .row").append(`
                        <div class="col-md-3">
                            <div class="form-group">
                                    <label><input type="checkbox" name="" value="${data[index].id}"> ${data[index].name} </label>
                            </div>
                        </div>`);
                });
            }
        });

        $('.day-box label input').click(function() {
            // alert($(this).val());
            $('.day-box .form-group').hide();
            $(this).parents('.day-box').find('.form-group').toggle();
        });

        $('#addsalonForm').validate({
            rules: {
                salon_name: "required",
                username: "required",
                std: "required",
                landline_no: "required",
                pin_code: "required",
                city: "required",
                state: "required",
                country: "required",
                address: "required",
                email_id: "required",
                website: "required",
            },
            messages: {
                salon_name: 'Enter Salon Name',
                username: 'Enter Contact Person',
                std: "Enter STD",
                landline_no: "Enter Phone Number",
                pin_code: "Enter Pin Code",
                city: "Enter City",
                state: "Enter State",
                country: "Select Country",
                address: "Enter Address",
                email_id: "Enter Email",
                website: "Enter Website",
            },

            submitHandler: function(form) {
                addSalonSubmit();
            }
        });

        const addSalonSubmit = function() {
            // const tokanInfoConst = localStorage.getItem("token");
            debugger;
            var dayCheckboxes = $('.day-box label input');
            var timingOutput = [];
            var openAtVal = '';
            var closeAtVal = '';
            for (var i = 0, n = dayCheckboxes.length; i < n; i++) {
                if (dayCheckboxes[i].checked) {
                    openAtVal = '';
                    closeAtVal = '';
                    openAtVal += dayCheckboxes.parents('.day-box').find('[name=openAt] option:selected').val();
                    closeAtVal += dayCheckboxes.parents('.day-box').find('[name=closeAt] option:selected').val();
                    timingOutput.push({
                        "day": dayCheckboxes[i].value,
                        "open_at": openAtVal,
                        "close_at": closeAtVal
                    });
                    // timingOutput.push(dayCheckboxes[i].value + dayObject);
                }
            }
            console.log(timingOutput);

            var checkboxes = $('#amenities_result input');
            var amenitiesVals = [];
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                if (checkboxes[i].checked) {
                    amenitiesVals.push(parseInt(checkboxes[i].value));
                }
            }

            var serviceCheckboxes = $('#ServiceWrapper input');
            var serviceVals = [];
            for (var i = 0, n = serviceCheckboxes.length; i < n; i++) {
                if (serviceCheckboxes[i].checked) {
                    serviceVals.push(parseInt(serviceCheckboxes[i].value));
                }
            }

            let post_data = {
                "token": tokanInfoConst,
                "basic_info": {
                    "salon_name": $('[name=salon_name]').val(),
                    "contact_person_name": $('[name=username]').val(),
                    "category": $('[name=category]:checked').val(),
                    "std": $('[name=std]').val(),
                    "landline_no": $('[name=landline_no]').val(),
                    "i_am_owner": $('[name=i_am_owner]:checked').val(),
                    "is_salon_open": $('[name=is_salon_open]:checked').val(),
                    "pin_code": $('[name=pin_code]').val(),
                    "city": $('[name=city]').val(),
                    "state": $('[name=state]').val(),
                    "country": $('[name=country]').val(),
                    "address": $('[name=address]').val(),
                    "email_id": $('[name=email_id]').val(),
                    "website": $('[name=website]').val()
                },
                "services": serviceVals,
                "amenities": amenitiesVals,
                "timings": timingOutput,
                "pan_info": {
                    "pancard_number": $('[name=pancard_number]').val(),
                    "tin_number": $('[name=tin_number]').val(),
                    "tan_number": $('[name=tan_number]').val(),
                },
            }
            $.ajax({
                url: base_url + 'salon/add-info.php',
                type: 'POST',
                dataType: 'JSON',
                data: JSON.stringify(post_data),
                success: function(data, item) {
                    toastr.success('Salon Added');
                    setTimeout(function() {
                        location.reload();
                    }, 1000)
                },
                error: function(error) {
                    toastr.error(error.responseJSON.message);
                }
            });
        };

    });
</script>

</html>