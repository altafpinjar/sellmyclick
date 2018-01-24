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
    <div class="col-lg-3" >
      <div class="jumbotron" style="color:#1ABC9C; background-color: black;">
      <h6 class="text-center">Uploaded By: Maktum Husen</h6>
  
        <form style="padding-left: 75px;">
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
<center><button type="button" class="btn btn-outline-success">Download</button><br><br>
    <button type="button" class="btn btn-outline-success" ><i class="fa fa-heart" aria-hidden="true" ></i></button>
      
            
                    
            <button href="#" data-toggle="dropdown" class="btn btn-outline-success dropdown-toggle share">
              <span class="fa fa-share-alt fa-inverse"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                  <a data-original-title="Twitter" rel="tooltip"  href="#" class="btn btn-twitter" data-placement="left">
                <i class="fa fa-twitter"></i>
              </a>
              </li>
              <li>
                <a data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook" data-placement="left">
                <i class="fa fa-facebook"></i>
              </a>
              </li>         
              <li>
                <a data-original-title="Google+" rel="tooltip"  href="#" class="btn btn-google" data-placement="left">
                <i class="fa fa-google-plus"></i>
              </a>
              </li>
               <li>
                <a  data-original-title="Email" rel="tooltip" class="btn btn-mail" data-placement="left">
                <i class="fa fa-envelope"></i>
              </a>
              </li>
                    </ul></center>
  </div>
    </div>
    <div class="col-lg-9">
   <center> <img src="images/2.jpg" style="width:800px; height: 400px;"></center>
  </div>
</div>
<br>
<center> <h3>Similar Photos</h3></center><br>
<div class="row">

  <div class="col-lg-2">
      <img src="images/11.jpg" style="height:150px; width:100%">
    </div>
    <div class="col-lg-2">
    <img src="images/2.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/13.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/12.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/book.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/Download.jpg" style="height:150px; width:100%"> 
  </div>
</div><br>
<div class="row">

  <div class="col-lg-2">
      <img src="images/2.jpg" style="height:150px; width:100%">
    </div>
    <div class="col-lg-2">
    <img src="images/11.jpg" style=" height:150px;width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/12.jpg" style=" height:150px;width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/13.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/book.jpg" style="height:150px; width:100%">
  </div>
   <div class="col-lg-2">
    <img src="images/rails.jpg" style="height:150px;width:100%"> 
  </div>
</div>


</div><hr color="gray">


<!--footer-->

<?php include_once "footer.php"; ?>
<!-- end of footer-->    
     <?php include_once "script.php"; ?>
  </body>
</html>