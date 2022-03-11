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
                                    <h2 class="h2-heading">Refer & Earn</h2>

                                    <h5>Invite your Friend</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-pink float-right">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>email@gmail.com</td>
                                                    <td>9876543210</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>email@gmail.com</td>
                                                    <td>9876543210</td>
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