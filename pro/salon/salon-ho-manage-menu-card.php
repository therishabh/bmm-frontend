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
                                    <h2 class="h2-heading">Manage Menu Card</h2>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><input type="checkbox"></th>
                                                            <th>Service</th>
                                                            <th width="200">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Hair Cut</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Ironing</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Global Colouring</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Blow Dry</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Root Touch Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Shampoo & Conditioning</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Party Make Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Engagement Make Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Bridal & Reception Make Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td> Base Make Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Eye Make Up</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Rebonding</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Perming</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Keratin</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td> Colour Protection</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>Smoothening</td>
                                                            <td><input type="text" class="form-control" value="500"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="float-right">
                                                <button class="btn btn-pink">Delete</button>
                                                <button class="btn btn-pink">Update</button>
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
</body>
<script src="assets/highslide/highslide-with-gallery.js"></script>

</html>