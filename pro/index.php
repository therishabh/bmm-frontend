<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>

    <section class="slide-section">
        <div id="slides" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/pro-slide1.jpg" alt="">
                </div>
            </div>

            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slides" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section class="pro-benefits-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../assets/images/pro-benefit-img.png" class="img-fluid" alt="" />
                </div>
                <div class="col-md-5  offset-md-1">
                    <h2>BMM PRO Benefits</h2>
                    <ul class="common-list mt-4">
                        <li>Free Listing</li>
                        <li>Branding of Your Salon</li>
                        <li>Brand Promotions</li>
                        <li>Booking Management System</li>
                        <li>Free Leads & Queries</li>
                        <li>24*7 Toll Free Number</li>
                        <li>Discounts & Deals</li>
                        <li>Genuine Makeup Products</li>
                        <li>Trainings & Workshops</li>
                        <li>GST Benefits</li>
                        <li>Product launch & Events</li>
                        <li>Cobranding with Book MY Makeup</li>
                        <li>Book MY Makeup Cards</li>
                        <li>Influencers & Makeup Artists endorsements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="get-started">
        <div class="container">
            <h4 class="text-center">Join BMM PRO</h4>
            <div class="row get-started-row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="../assets/images/get-started-step-1.png" class="img-fluid">
                        <h5 class="mb-0 mt-3">Register</h5>
                        <p class="pt-2">Are you a salon owner or a Makeup Artist,Register with us for a free listing.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="../assets/images/get-started-step-2.png" class="img-fluid">
                        <h5 class="mb-0 mt-3">Validation</h5>
                        <p class="pt-2">Share your business details <br>with us to validate !</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="../assets/images/get-started-step-3.png" class="img-fluid">
                        <h5 class="mb-0 mt-3">Approved</h5>
                        <p class="pt-2"> Once approved,Start getting <br>bookings and earn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-partners pt-5 pb-5">
        <div class="container">
            <h2 class="text-center h2-heading">BMM PRO Partners</h2>

            <div class="our-partners-slider owl-carousel owl-theme">

                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-4.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-5.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="partner-logo-box">
                        <img src="../assets/images/pro-brand-logo-6.png" alt="" />
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="pro-join-btn">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a href="pro-register.php" class="btn btn-pink btn-block btn-lg">JOIN NOW</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        let token = localStorage.getItem('salonToken');
        if (token) {
            window.location.replace('../salon/dashboard.php');
        }
    </script>
</body>

</html>