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
                                    <h2 class="h2-heading">Manage Pics & Videos</h2>
                                    <form method='post' action='' enctype="multipart/form-data">
                                        <input type="file" id="fileInput" multiple>
                                        <button type="button" class="btn btn-pink float-right" id="uploadPhotos">Upload Photos</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <div class="row mt-4" id="imageData">

                                    </div>

                                    <!-- <hr>
                                    <h5 class="float-left">Videos</h5>
                                    <a href="#" class="btn btn-pink float-right">Upload Videos</a>
                                    <div class="clearfix"></div>
                                    <section class="beauty-advice salon-ho-manage-video">
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="https://www.youtube.com/watch?v=UpU8sAXzYEs" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-2.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-3.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-12 m-10">
                                                    <a href="#" target="_blank" class="box-shadow">
                                                        <img src="assets/images/bmm-tv-thumb-4.jpg" class="img-fluid">

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section> -->

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
        const tokanInfoConst = localStorage.getItem("token");


        $('body').on('click', '.upload-img-box span', function() {
            var status = confirm("Are you sure you want to delete ?");
            if (status == true) {
                var imageId = $(this).parents('.upload-img-box').find('img').attr('id');
                let deleteFile = {
                    'token' : tokanInfoConst,
                    'image_id' : imageId,
                }
                $.ajax({
                    url: base_url + 'salon/delete-gallery-image.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(deleteFile),
                    success: function(response) {
                            message = response.message;
                            toastr.success(message);
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                    },
                    error: function(error){
                        toastr.error(message);
                    }
                });
            }
        });

        $.ajax({
            url: base_url + 'salon/get-gallery-image-list.php?token= ' + tokanInfoConst + '',
            type: 'GET',
            dataType: 'JSON',
            success: function(result) {
                var srcValue = '';
                $.each(result.result, function(key, value) {
                    srcValue += `<div class="col-md-3">
                           <div class="upload-img-box">
                               <img src="${value.url}" class="img-thumbnail" id="${value.id}" />
                               <span><i class="fa fa-trash-alt"></i></span>
                            </div>
                     </div>`
                });
                $('#imageData').append(srcValue);
            }
        });

        $('#uploadPhotos').click(function() {
            var fd = new FormData();

            fd.append('token', tokanInfoConst);
            var totalFiles = document.getElementById('fileInput').files.length;
            for (var i = 0; i < totalFiles; i++) {
                fd.append('files[]', document.getElementById('fileInput').files[i]);
            }
            $.ajax({
                url: base_url + 'salon/upload-gallery-image.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        message = response.message;
                        toastr.success(message);
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        toastr.error(message);
                    }
                },
            });
        });
    });
</script>

</html>