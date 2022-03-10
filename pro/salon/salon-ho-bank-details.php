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
                                    <h2 class="h2-heading">Bank Details</h2>

                                    <form id="bankInfoForm">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" class="form-control" name="bank_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Account Holder Name</label>
                                                    <input type="text" class="form-control" name="account_holder_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input type="text" class="form-control" name="account_number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> IFSC Code</label>
                                                    <input type="text" class="form-control" name="ifsc_code">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-pink float-right">Add Bank</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <table class="table table-bordered mt-3" id="bankData">
                                           <tr>
                                               <th>Primary Bank</th>
                                               <th>Bank Name</th>
                                               <th>Account Holder Name</th>
                                               <th>Account Number</th>
                                               <th>IFSC Code</th>
                                               <th>Action</th>
                                           </tr>             
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
    <script>
        $(function() {
            const tokanInfoConst = localStorage.getItem("token");
         
            $.ajax({
                url: base_url + 'salon/get-bank-info.php?token= '+ tokanInfoConst +'',
                type: 'GET',
                dataType: 'JSON',
                success: function(result) {
                    var trHTML = '';
                     $.each(result.result, function(key,value){
                        trHTML +=
                        '<tr><td class="text-center">' + '<span class="primary-bank-span" id=' + value.is_primary + '>Primary</span>' + 
                        '</td><td>' + value.bank_name + '<span class="bank-id">'+ value.id +
                        '</td><td>' + value.account_holder_name + 
                        '</td><td>' + value.account_number + 
                        '</td><td>' + value.ifsc_code + 
                        '</td><td><span class="remove-bank" title="Remove Bank"><i class="fa fa-trash-alt"></i></span><span><i class="far fa-edit"></i></span></td></tr>';     
                     });
                     $('#bankData').append(trHTML);
                }
            });

            $('body').on('click','.primary-bank-span',function(){
                var bankId = $(this).parents('tr').find('td span.bank-id').text();
                let deleteFile = {
                    'token' : tokanInfoConst,
                    'bank_id' : bankId,
                }
                $.ajax({
                    url: base_url + 'salon/set-bank-primary.php',
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
            });

            $('body').on('click','.remove-bank',function(){
                var status = confirm("Are you sure you want to delete ?");
            if (status == true) {
                var bankId = $(this).parents('tr').find('td span.bank-id').text();
                let deleteFile = {
                    'token' : tokanInfoConst,
                    'bank_id' : bankId,
                }
                $.ajax({
                    url: base_url + 'salon/delete-bank-info.php',
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

            $('#bankInfoForm').validate({
                rules: {
                    bank_name: 'required',
                    account_holder_name: 'required',
                    account_number: 'required',
                    ifsc_code: 'required',
                },
                submitHandler: function(form) {
                    bankInfoSubmit();
                }
            });

            const bankInfoSubmit = function() {
                // const tokanInfoConst = localStorage.getItem("token");
                let post_data = {
                    "token": tokanInfoConst,
                    "bank_name": $('[name=bank_name]').val(),
                    "ifsc_code": $('[name=account_holder_name]').val(),
                    "account_holder_name": $('[name=account_number]').val(),
                    "account_number": $('[name=ifsc_code]').val(),
                }
                bankInfoAjex(post_data);
            }
            
            const bankInfoAjex = function(post_data) {
                $.ajax({
                    url: base_url + 'salon/add-bank-info.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        console.log(result);
                        toastr.success('Bank Info Updated');
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    },
                    error: function(error) {
                        toastr.error(error.responseJSON.message);
                    }
                });
            }

        });
    </script>
</body>

</html>