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
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-users icon"></i> Manage Bookings</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
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
                    <div class="manage-user-icon">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                <h2 class="h2-heading">Manage Bookings</h2>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Scheduled</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>No Show</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Cancelled</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Approved</td>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <td>Completed</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <th>60</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-8">
                                <div id="canvas-holder"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                <canvas id="chart-area" style="display: block; width: 403px; height: 201px;" width="403" height="201" class="chartjs-render-monitor"></canvas>
                                            </div>
                                </div>
                                </div>
                                <div class="col-md-12 p-0">

                                    <div class="table-responsive mt-4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date &amp; Time</th>
                                                <th>Customer Name</th>
                                                <th>Services</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10:20 AM, 10/31/2020</td>
                                                <td>Rohit Verma</td>
                                                <td>Hair Cutting</td>
                                                <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                                <td> <b class="text-warning"> Scheduled </b></td>
                                            </tr>
                                            <tr>
                                                <td>10:20 AM, 10/31/2020</td>
                                                <td>Rohit Verma</td>
                                                <td>Hair Cutting</td>
                                                <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                                <td> <b class="text-secondary"> No Show </b></td>
                                            </tr>
                                            <tr>
                                                <td>10:20 AM, 10/31/2020</td>
                                                <td>Rohit Verma</td>
                                                <td>Hair Cutting</td>
                                                <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                                <td> <b class="text-danger"> Cancelled</b></td>
                                            </tr>
                                            <tr>
                                                <td>10:20 AM, 10/31/2020</td>
                                                <td>Rohit Verma</td>
                                                <td>Hair Cutting</td>
                                                <!-- <td><button class="btn btn-pink btn-sm">Create</button></td> -->
                                                <td> <b class="text-info"> Approved </b></td>
                                            </tr>
                                            <tr>
                                                <td>10:20 AM, 10/31/2020</td>
                                                <td>Rohit Verma</td>
                                                <td>Hair Cutting</td>
                                                <td> <b class="text-success"> Completed </b></td>
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
    </section>

    <?php include 'include/footer.php' ?>
</body>
<script src="assets/highslide/highslide-with-gallery.js"></script>

<script>
    var randomScalingFactor = function() {
        // return Math.round(Math.random() * 100);
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [8, 10, 12, 14, 16],
                backgroundColor: [
                    window.chartColors.yellow,
                    window.chartColors.orange,
                    window.chartColors.red,
                    window.chartColors.blue,
                    window.chartColors.green,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Scheduled',
                'No Show',
                'Cancelled',
                'Approved',
                'Completed'
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };



    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });
</script>

</html>