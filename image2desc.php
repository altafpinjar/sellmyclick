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
  <body >
    <!--navbar-->
    <?php include_once "header.php"; ?>
    <!--end of navbar-->
   <br>
  <br>
  <br>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3" style="padding-left: 100px;">
      <h6>Uploaded By: Maktum Husen</h6>
  
        <form>
    <div class="radio">
      <label><input type="radio" name="optradio">size:1920 x 1280</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">size:1024 x 512</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="optradio">size:640 x 426</label>
    </div>
  </form>
<button type="button" class="btn btn-outline-success">Download</button><br><br>
    <button type="button" class="btn btn-outline-success"><i class="fa fa-gratipay" aria-hidden="true"></i></button>
    </div>
    <div class="col-lg-9">
    <img src="images/2.jpg" style="width:100%">
  </div>
</div>

</div><br><br><br><br><br>
<!--footer-->

<?php include_once "footer.php"; ?>
<!-- end of footer-->    
     <?php include_once "script.php"; ?>
  </body>
</html>