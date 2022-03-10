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
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-image icon"></i> Manage Pics & Videos</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
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
                    <div class="manage-user-icon makeup-artist-pics">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="h2-heading">Manage Pics &amp; Videos</h2>
                                    <h5 class="float-left">Photos</h5>
                                    <a href="#" class="btn btn-pink float-right">Upload Photos</a>
                                    <div class="clearfix"></div>
                                    <div class="row mt-4 makeup-artist-images">
                                        <div class="col-md-3">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                        </div>
                                    </div>


                                    <hr>
                                    <h5 class="float-left">Videos</h5>
                                    <a href="#" class="btn btn-pink float-right">Upload Videos</a>
                                    <div class="clearfix"></div>
                                    <section class="beauty-advice">
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="https://www.youtube.com/watch?v=UpU8sAXzYEs" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-2.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-3.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-4.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

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