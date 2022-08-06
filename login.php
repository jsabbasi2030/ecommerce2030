<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    
    <link href="assets_backend/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="assets_backend/vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="assets_backend/css/style.css" rel="stylesheet">

</head>

<?php 

include("config.php");
session_start();

if (isset($_POST['btnsubmit'])) {
    



   $email = $_POST['email'];
   $password = $_POST['password'];


   $query = "SELECT user_email,user_password FROM users WHERE user_email='$email' AND user_password = '$password'";


   $results = mysqli_query($conn,$query);

   $count = mysqli_num_rows($results);


   if ($count == 1) {
    
      

     $_SESSION['email']=$email;

     header("location: dashboard.php");



   }else{

    $error ="Invalid Email or Password";

   }










}











?>




<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>


                                      <?php 

    if (isset($error)) {
        


    ?>


 <div class="alert alert-dismissible alert-success">
  
  <strong><?php echo $error; ?></strong> </a>.
</div>


<?php }  ?>




                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" placeholder="Enter Email" name="email" class="form-control" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" placeholder="Enter Password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            
                                            
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
     <!-- Required vendors -->
    <script src="assets_backend/vendor/global/global.min.js"></script>
    <script src="assets_backend/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="assets_backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    
    <!-- Apex Chart -->
    <script src="assets_backend/vendor/apexchart/apexchart.js"></script>
    <script src="assets_backend/vendor/nouislider/nouislider.min.js"></script>
    <script src="assets_backend/vendor/wnumb/wNumb.js"></script>
    
    <!-- Dashboard 1 -->
    <script src="assets_backend/js/dashboard/dashboard-1.js"></script>

    <script src="assets_backend/js/custom.min.js"></script>
    <script src="assets_backend/js/dlabnav-init.js"></script>
    <script src="assets_backend/js/demo.js"></script>
    <script src="assets_backend/js/styleSwitcher.js"></script>
    <script>
        jQuery(document).ready(function(){
            setTimeout(function() {
                dezSettingsOptions.version = 'dark';
                new dezSettings(dezSettingsOptions);
            },500)
        });
    </script>
</body>
</html>