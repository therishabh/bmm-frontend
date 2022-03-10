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
                                    <h2 class="h2-heading">Timings</h2>

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

                                                <button type="submit" class="btn btn-pink float-right">Update Timing</button>

                                            </div>
                                        </div>
                                    </div>

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
            $('.day-box label input').click(function() {
                // alert($(this).val());
                $('.day-box .form-group').hide();
                $(this).parents('.day-box').find('.form-group').toggle();
            });

            addSalonSubmit();

            const addSalonSubmit = function() {
                const tokanInfoConst = localStorage.getItem("token");
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
                let post_data = {
                    "token": tokanInfoConst,
                    "timings": timingOutput,
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
</body>

</html>