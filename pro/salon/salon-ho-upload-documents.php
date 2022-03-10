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
                                    <h2 class="h2-heading">Upload Documents</h2>

                                    <h5 class="text-pink">Salon Documents</h5>
                                    <table class="table table-bordered documents-table">
                                        <thead>
                                            <tr>
                                                <th>Document Name</th>
                                                <th>Document Type</th>
                                                <th>Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="document-name">GST Certificate</td>
                                                <td class="document-type">GST Certificate</td>
                                                <td><input type="file" class="" name="document" /></td>
                                                <td><button type="button" class="btn btn-pink uploadDocumentForm">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td class="document-name">Certificate of Incorporation</td>
                                                <td class="document-type">Certificate of Incorporation</td>
                                                <td><input type="file" class="" name="document" /></td>
                                                <td><button type="button" class="btn btn-pink uploadDocumentForm">Submit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5 class="text-pink">Contact Person Documents</h5>
                                    <table class="table table-bordered documents-table">
                                        <thead>
                                            <tr>
                                                <th>Document Name</th>
                                                <th>Document Type</th>
                                                <th>Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="document-name">
                                                    <select name="document-name-select" class="form-control">
                                                        <option value="ID Proof">ID Proof</option>
                                                        <option value="Address Proof">Address Proof</option>
                                                    </select>
                                                </td>
                                                <td class="document-type">
                                                    <select name="document-type-select" class="form-control">
                                                        <option value="Aadhar Card">Aadhar Card</option>
                                                        <option value="Pan Card">Pan Card</option>
                                                        <option value="Driving License">Driving License</option>
                                                        <option value="Voter ID Card">Voter ID Card</option>
                                                        <option value="Passport">Passport</option>
                                                    </select>
                                                </td>
                                                <td><input type="file" class="" name="document" /></td>
                                                <td><button type="button" class="btn btn-pink uploadPersonalDocumentForm">Submit</button></td>
                                            </tr>
                                            <tr>
                                                <td class="document-name">
                                                    <select name="document-name-select" class="form-control">
                                                        <option value="ID Proof">ID Proof</option>
                                                        <option value="Address Proof">Address Proof</option>
                                                    </select>
                                                </td>
                                                <td class="document-type">
                                                    <select name="document-type-select" class="form-control">
                                                        <option value="Aadhar Card">Aadhar Card</option>
                                                        <option value="Pan Card">Pan Card</option>
                                                        <option value="Driving License">Driving License</option>
                                                        <option value="Voter ID Card">Voter ID Card</option>
                                                        <option value="Passport">Passport</option>
                                                    </select>
                                                </td>
                                                <td><input type="file" class="" name="document" /></td>
                                                <td><button type="button" class="btn btn-pink uploadPersonalDocumentForm">Submit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5 class="text-pink">Documents List</h5>
                                    <table class="table table-bordered mt-3" id="documentData">
                                        <tr>
                                            <th>Document Name</th>
                                            <th>Document Type</th>
                                            <th>Document</th>
                                        </tr>
                                    </table>



                                    <!-- <form action="" id="uploadDocumentForm" enctype="multipart/form-data">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>GST Certificate </label><br>
                                                    <input type="file" class="" name="gst_certificate" id="gst_certificate" data-type="GST Certificate" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Certificate of Incorporation</label><br>
                                                    <input type="file" class="" name="incorporation_certificate" id="incorporation_certificate" data-type="Incorporation Certificate">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-pink float-right">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form> -->

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

        $.ajax({
            url: base_url + 'salon/get-document-info.php?token= ' + tokanInfoConst + '',
            type: 'GET',
            dataType: 'JSON',
            success: function(result) {
                var trHTML = '';
                $.each(result.result, function(key, value) {
                    trHTML +=
                        '<tr><td>' + value.document_name +
                        '</td><td>' + value.document_type +
                        '</td><td>' + `<img src="${value.url}" class="img-thumbnail" />` +
                        '</td></tr>';
                });
                $('#documentData').append(trHTML);
            }
        });

        $('.uploadDocumentForm').click(function() {
            var fd = new FormData();
            var files = $(this).parents('tr').find('[name=document]')[0].files;
            var document_name = $(this).parents('tr').find('.document-name').text();
            var document_type = $(this).parents('tr').find('.document-type').text();

            if (files.length > 0) {
                fd.append('token', tokanInfoConst);
                fd.append('document', files[0]);
                fd.append('document_name', document_name);
                fd.append('document_type', document_type);

                $.ajax({
                    url: base_url + 'salon/upload-document.php',
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
            } else {
                toastr.error("Please select a file.");
            }
        });

        $('.uploadPersonalDocumentForm').click(function() {
            var fd = new FormData();
            var files = $(this).parents('tr').find('[name=document]')[0].files;
            var document_name = $(this).parents('tr').find('.document-name').find('[name=document-name-select] option:selected').val();
            var document_type = $(this).parents('tr').find('.document-type').find('[name=document-type-select] option:selected').val();

            if (files.length > 0) {
                fd.append('token', tokanInfoConst);
                fd.append('document', files[0]);
                fd.append('document_name', document_name);
                fd.append('document_type', document_type);

                $.ajax({
                    url: base_url + 'salon/upload-document.php',
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
            } else {
                toastr.error("Please select a file.");
            }
        });
    });
</script>

</html>