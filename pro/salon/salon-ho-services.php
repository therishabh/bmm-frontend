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
                                    <h2 class="h2-heading">Servicess</h2>

                                    <div id="ServiceWrapper"></div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>333333222222
    <script>
        $(function() {
            var intoSlug = function(str) {
            return str.toLowerCase().split(' ').join('-').replace('&', '');
        }
        const tokanInfoConst = localStorage.getItem("token");
            $.ajax({
                url: base_url + 'common/get-services.php?token=' + tokanInfoConst + '',
                type: 'GET',
                dataType: 'JSON',
                success: function(data, item) {
                    for (let key in data) {
                        $("#ServiceWrapper").append('<div class="row mb-3"><div class="col-md-12 mb-3"><h5 class="text-pink">' + key.toUpperCase() + '</h5></div><div class="category-wrapper row m-0"></div></div>');
                        for (let category in data[key]) {
                            $("#ServiceWrapper .category-wrapper").append(`<div class="col-md-4">
                              <div class="form-group all-checkbox-label">
                                  <h6>${category}</h6>
                                  <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                              </div>
                        </div>`)
                            data[key][category].forEach(val => {
                                var x = `#ServiceWrapper .category-wrapper .${intoSlug(category)}`;
                                $(x).append('<label> <input type="checkbox" value="' + val.id + '"> &nbsp; ' + val.name + '</label></br>');
                            })
                        }
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>
</body>

</html>