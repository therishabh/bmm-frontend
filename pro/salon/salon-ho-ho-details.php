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
                                    <h2 class="h2-heading">Ho Details</h2>
                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Key Person</th>
                                                    <th>Number of Branches</th>
                                                    <th>Number of employees</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td id="key_person"></td>
                                                    <td id="branches"></td>
                                                    <td id="employee"></td>
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
<script>
        $(function() {
            $.ajax({
                url: base_url + 'salon/get-info.php?token=SXd3b0hRaElVSXgvMFo1ZUZuTjdUUT09&q=info,services,amenities,timings',
                type: 'GET',
                dataType: 'JSON',
                success: function(result) {
                    let resultNew = result.result;
                    $('#key_person').text(resultNew.info.salon_name);
                    $('#branches').text(resultNew.info.branches);
                    $('#employee').text(resultNew.info.employee);
                    // console.log(resultNew);
                    // for(let result in resultNew){
                    //     $('table').append('<tr><td>' + result.salon_name + '</td></tr>')
                        // console.log(info.info);
                    // }
                }
            });
        });
    </script>
</html>