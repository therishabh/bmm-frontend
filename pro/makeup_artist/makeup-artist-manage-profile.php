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
                        <a href="#" class="makeup-artist-opener"><span><i class="fas fa-user icon"></i> Manage Profile</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
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
                                <h2 class="h2-heading">Manage Profile</h2>
                            </div>
                            <div class="col-md-3">
                                <span class="user"><i class="fas fa-user icon icon"></i></span>
                            </div>
                            <div class="col-md-9">
                                <div class="user-text">
                                    <h5>Priyanka Sharma</h5>
                                    <p><b>Email:</b> email@gmail.com</p>
                                    <p><b>Mobile:</b> 9876543210</p>
                                    <p><b>Date of Birth:</b> mm/dd/yyyy</p>
                                    <p><b> Description:</b><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

</p>
                                    <a href="user-edit-form.php" class="user-edit"><i class="far fa-edit icon"></i> EDIT</a>
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