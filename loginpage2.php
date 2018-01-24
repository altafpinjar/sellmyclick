<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 


</head>


 <body class="sab-sell-form-body2">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->

<!-- START OF CONTAINER FLUID -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" id="sab-login2">
          <center><h3>Login Here</h3></center> 
<!-- FORM CODING -->
 <form>
      <div class="form-group sab-form-group2">
         <label for="email" >Email :</label>
         <input type="E-mail" class="form-control sab-form-control" id="email" placeholder="E-mail id" required=""  >
      </div>
             
      <div class="form-group sab-form-group2">
         <label for="password">Password :</label>
         <input type="password" class="form-control sab-form-control"  id="password" placeholder="password" name="password" required="" >
     </div>
     <a href="smc.php" class="btn btn-lg btn-primary btn-block sab-btn2">Login</a>
          <center><a href="#"><p class="sab-bottom-text2">Forgotton your password?</p></a></center>
          <center><a href="Sellform.php"><p class="sab-bottom-text2">Create an account</p></a></center>

<!-- END OF FORM CODING -->
  </form>
</div>
      <div class="col-md-4">
      </div>


</div>
</div><!-- END OF CONTAINER FLUID -->
<br><br>

    


  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>