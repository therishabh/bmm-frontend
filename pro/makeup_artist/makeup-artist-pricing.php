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
                    <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="far fa-money-bill-alt icon"></i> Pricing</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-manage-profile.php"><i class="fas fa-user icon"></i> Manage Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-location.php"><i class="fa fa-map-marker-alt icon"></i> Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-bookings.php"><i class="fa fa-users icon"></i> Manage Bookings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-services.php"><i class="fa fa-cog icon"></i> Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-pricing.php"><i class="far fa-money-bill-alt icon"></i> Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-payments.php"><i class="fa fa-rupee-sign icon"></i>Manage Payments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-bank-details.php"><i class="fa fa-university icon"></i> Bank Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-upload-documents.php"><i class="fa fa-file-alt icon"></i> Upload Documents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-agreement.php"><i class="far fa-calendar-check icon"></i>Agreement </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="makeup-artist-manage-pics.php"><i class="fa fa-image icon"></i>Manage Pics & Videos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-power-off icon"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="manage-user-icon">
                        <div class="col-md-12">
                            <div class="row">
                            <div class="col-md-12">
                                <h2 class="h2-heading">Pricing</h2>
                            </div>
                        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>AirBrush Bridal Makeup</label>
                                            <input type="text" class="form-control" placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bridal Makeup</label>
                                            <input type="text" class="form-control" placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Guest Makeup</label>
                                            <input type="text" class="form-control" placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Trial Makeup</label>
                                            <input type="text" class="form-control" placeholder="Enter Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Travel Policy</label>
                                            <input type="text" class="form-control" placeholder="Enter Travel Policy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payment Policy</label>
                                            <input type="text" class="form-control" placeholder="Enter Payment Policy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cancellation Policy</label>
                                            <input type="text" class="form-control" placeholder="Cancellation Policy">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-pink float-right">Submit</button>
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
</body>
<script src="assets/highslide/highslide-with-gallery.js"></script>

</html>