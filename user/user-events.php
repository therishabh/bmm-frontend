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
                                    <h2 class="h2-heading">Events</h2>

                                    <div class="table-responsive user-event">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Event Name</th>
                                                    <th>Date &amp; Time</th>
                                                    <th>Venue</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BMM Event</td>
                                                    <td>11 AM, 1/1/2021</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td><a href="#" class="btn btn-pink btn-sm">Book Now</a></td>
                                                </tr>
                                                <tr>
                                                    <td>BMM Event</td>
                                                    <td>11 AM, 1/1/2021</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td><a href="#" class="btn btn-pink btn-sm">Book Now</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
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