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
  <body style="background-color: #d3d3d3;">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
    

<body class="sab-sell-form-body">

<style>
  
.sab-sell-form-body{
  background-image:url("images/pexels-photo-196656.jpeg"); 
  background-size:cover;



}
@media only screen and (max-width: 900px) {
   .sab-sell-form-body{
        background-image: none;
    }

   

}

#sab-login{
background-color:#fff;
  
  padding-top:30px; 
  padding-left:30px; 
  padding-right:30px; 
  padding-bottom:20px; 

border-radius:6px;
box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.50);  
margin-top:8%;
 
}

.form-group{
  line-height:5px; 
}
 







</style>







<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" id="sab-login">

      <center><h3 style="background-color:#3CB371;box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);margin-bottom:30px;padding-bottom:4px;     ">Login Here</h3></center> 

      <form>
          
   

     <div class="form-group">
      <label for="email"></label>
      <input type="E-mail" class="form-control" id="email" placeholder="E-mail id" required=""  >
  
    </div>
             
             <div class="form-group">
      <label for="password"></label>
      <input type="password" class="form-control"  id="password" placeholder="password" name="password" required="">
    </div>


<a class="btn btn-danger btn-lg  text-white btn-block" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.50);cursor: pointer;margin-top:35px;   " >Login</a>
<center><a href="#"><p style="margin-top:15px;color: #249CC9 ">forgot your password?</p></a></center>

<center><a href="http://localhost/NewDesign_DCentMASS/Sellform.php#"><p style="margin-top:15px;color: #249CC9 ">Create an account</p></a></center>


  </form>
</div>
 <div class="col-md-4">
    </div>
</div>
</div>
<br><br>






    


  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>