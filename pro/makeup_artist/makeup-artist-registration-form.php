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

<section class="book-appointment-banner">
  <img src="assets/images/registration1.jpg" class="img-fluid">
</section>  
<section class="online-appointment">
  <div class="container">
    <h2 class="text-center">Register as Makeup Artist</h2>
   
    <form action="" method="post">
                    <section class="online-appointment">
                        <div class="container">
                            <form class="online-appointment-form mt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Makeup Artist Full Name" name="full_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control genderList" name="gender" required>
                                                <option value="">Gender</option>
                                                <option value="">Ladies</option>
                                                <option value="">Gents</option>                                               
                                                <option value="other">Other</option>
                                                                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Phone Number" name="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Create Password" name="time" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="time" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn book-appointment-btn">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    </form>
                </div>

  </div>    
</section>
  
    <?php include 'include/footer.php' ?>
</body>

</html>