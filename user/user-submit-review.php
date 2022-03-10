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
                <?php include 'include/user_menu.php' ?>
                </div>
                <div class="col-md-9">
                    <div class="manage-user-icon">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="h2-heading">Submit Review</h2>

                                    <div class="form-group">
                                        <div class="submit-review-stars">
                                            <i class="fa fa-star fa-2x"></i>
                                            <i class="fa fa-star fa-2x"></i>
                                            <i class="fa fa-star fa-2x"></i>
                                            <i class="fa fa-star fa-2x"></i>
                                            <i class="fa fa-star fa-2x"></i>
                                        </div>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control mt-3" placeholder="Type your review..."></textarea>
                                    </div>

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