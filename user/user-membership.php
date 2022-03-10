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
                                    <h2 class="h2-heading">Membership</h2>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <p>
                                                <b>Type:</b> BMM Gold<br>
                                                <b>Validiy:</b> 1 January 2021<br>
                                                <b>Total Limit:</b> 55000<br>
                                                <b>Balance Amount:</b> 21000<br>
                                            </p>


                                        </div>
                                        <div class="col-md-8">
                                            <div id="canvas-holder">
                                                <canvas id="chart-area"></canvas>
                                            </div>
                                        </div>
                                    </div>


                                    <h2 class="h2-heading">Card Statement</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Date & Time</th>
                                                    <th>Spent Amount/Point</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>5:26 PM, 26/10/2020</td>
                                                    <td>1200 Point</td>
                                                    <td>Hair Cut</td>
                                                </tr>
                                                <tr>
                                                    <td>5:26 PM, 26/10/2020</td>
                                                    <td>1200 Point</td>
                                                    <td>Hair Cut</td>
                                                </tr>
                                                <tr>
                                                    <td>5:26 PM, 26/10/2020</td>
                                                    <td>1200 Point</td>
                                                    <td>Hair Cut</td>
                                                </tr>
                                                <tr>
                                                    <td>5:26 PM, 26/10/2020</td>
                                                    <td>1200 Point</td>
                                                    <td>Hair Cut</td>
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
<script src="assets/js//Chart.min.js"></script>
<script src="assets/js/utils.js"></script>

<script>
    var randomScalingFactor = function() {
        // return Math.round(Math.random() * 100);
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [21000, 55000],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Balance Amount',
                'Total Limit '
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