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
                                    <h2 class="h2-heading">Amenities</h2>

                                    <div id="amenities_result">
                                        <div class="row"></div>
                                    </div>

                                    <!-- <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; AC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; SPA</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; Sanitization</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; Valet Parking</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; Pick & Drop</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; SPA Rooms</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; Steam</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; Sauna</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; TV</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; Washroom</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox"> &nbsp; Baby Care</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> <input type="checkbox" checked> &nbsp; Shower</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <a href="#" class="btn btn-pink float-right">Update</a>
                                        </div>
                                    </div> -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        $(function() {
            const tokanInfoConst = localStorage.getItem("token");
            $.ajax({
                url: base_url + 'common/get-amenities.php?token=' + tokanInfoConst + '',
                type: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    $.each(data, function(index) {
                        $("#amenities_result .row").append(`
                        <div class="col-md-3">
                            <div class="form-group">
                                    <label><input type="checkbox" name="" value="${data[index].id}"> ${data[index].name} </label>
                            </div>
                        </div>`);
                    });
                }
            });
        });
    </script>
</body>

</html>