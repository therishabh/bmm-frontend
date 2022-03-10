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
                                    <h2 class="h2-heading">Manage Branches</h2>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <h5>Manager Details</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <h5>Branch Address</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pin Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-pink float-right">Add Branch</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Manager Name</th>
                                                    <th>Branch Address</th>
                                                    <th>Phone Number</th>
                                                    <th>Email Id</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td>9876543210</td>
                                                    <td>email@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td>9876543210</td>
                                                    <td>email@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td>9876543210</td>
                                                    <td>email@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td>9876543210</td>
                                                    <td>email@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Rohit Verma</td>
                                                    <td>Janakpuri Delhi</td>
                                                    <td>9876543210</td>
                                                    <td>email@gmail.com</td>
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