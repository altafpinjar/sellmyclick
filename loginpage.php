<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    
</head>
 <body class="sab-sell-form-body1">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->

<!-- START OF CONTAINER FLUID-->
<div class="container-fluid">
<div class="row">
     <div class="col-md-4">
     </div>
     <div class="col-md-4" id="sab-login1">
     <center><h2>Login Here</h2></center>
     <!-- START OF FORM --> 
     <form>
      <div class="form-group sab-form-group1">
     <label for="email"></label>
     <input type="E-mail" class="form-control" id="email" placeholder="E-mail id" required=""  >
     </div>
             
     <div class="form-group sab-form-group1">
     <label for="password"></label>
     <input type="password" class="form-control"  id="password" placeholder="password" required="">
     </div>
     <a href="home.php" class="btn btn-danger btn-lg  text-white btn-block sab-btn1">Login</a>
     <center><a href="#"><p class="sab-bottom-text1" style=" ">forgot your password?</p></a></center>
     <center><a href="Sellform.php"><p class="sab-bottom-text1">Create an account</p></a></center>
     <!-- END OF FORM -->
     </form>
      
     </div>
     <div class="col-md-4">
     </div>
</div>
</div><!-- END OF CONTAINER-FLUID -->
<br><br>
 <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>