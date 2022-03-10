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
                <a href="#" class="makeup-artist-opener"><span><i class="fas fa-pen"></i> Edit Profile</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
                <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="user-manage-profile.php"><i class="fas fa-user icon"></i> Manage Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-wishlist.php"><i class="far fa-bookmark icon"></i> Wishlist</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-my-bookings.php"><i class="fas fa-user icon"></i> My Bookings</a>
                                        </li>
                                        <!-- <li class="nav-item">
                            <a class="nav-link" href="user-my-orders.php"><i class="fas fa-bookmark icon"></i> My Orders</a>
                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-offers.php"><i class="fa fa-money-bill-wave icon"></i> Offers for you</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-membership.php"><i class="fa fa-user-plus icon"></i> Membership</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-payments.php"><i class="fa fa-rupee-sign icon"></i> Payments</a>
                                        </li>
                                        <li class="nav-item">
                                <a class="nav-link" href="user-makeup-consultant.php"><i class="far fa-comment-dots icon"></i> Makeup Consultant </a>
                            </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-bmm-network.php"><i class="fas fa-network-wired icon"></i> BMM Network</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-bmm-tv.php"><i class="fa fa-tv icon"></i> BMM TV</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-events.php"><i class="far fa-calendar-check icon"></i> Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-refer-earn.php"><i class="fa fa-share-alt icon"></i >Refer & Earn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-my-pics.php"><i class="fa fa-users icon"></i> My Pics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user-submit-review.php"><i class="far fa-star icon"></i> Submit Review</a>
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
                                <h2 class="h2-heading">Edit Profile</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="Rohit verma">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="test@gmail.com" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="9876543210" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" value="17-aug-1991">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group float-right">
                                     <button class="btn btn-pink">Update</button>
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