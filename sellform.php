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
    




<br><br>


<body class="sab-sell-form-body" >

<style>
  
.sab-sell-form-body{
  background-image:url("images/pexels-photo-265152.jpeg"); 
  background-size:cover;



}
@media only screen and (max-width: 900px) {
   .sab-sell-form-body{
        background-image: none;
    }

   

}

#sab-sell-signup{
background-color:#fff;
  
  padding-top:15px; 
  padding-left:25px;
  padding-right:25px;  
border-radius:6px;
box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.50);  
margin-top:22px;
 
}

.form-group{
  line-height:5px; 
}
 
</style>

<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" id="sab-sell-signup">

      <h3>Join the community and start selling.</h3>

      <form>
          
         <div class="form-group">
      <label for="Name"></label>
      <input type="text" class="form-control" id="email" placeholder="full-name">
      <p style="font-size:15px; margin-top:6px;line-height:20px; ">Please provide your legal name</p>
    </div>
    <div class="form-group">
      <label for="displayname"></label>
      <input type="displayname" class="form-control" id="email" placeholder="Display Name" >
      <p style="font-size:15px; margin-top:6px;line-height:20px; ">Choose the name you want customers to see.</p>
    </div>
     <div class="form-group">
      <label for="email"></label>
      <input type="E-mail" class="form-control" id="email" placeholder="E-mail" >
  
    </div>
             
             <div class="form-group">
      <label for="password"></label>
      <input type="password" class="form-control"  id="password" placeholder="password" name="password"   >
    </div>
   <p> Passwords must be at least 8 characters long.</p>

 <p><input type="checkbox" >&nbsp;I certify that I am 18 or older and I agree to the terms and</p>
 <button type="button" class="btn btn-danger btn-block " style="cursor:pointer; ">Submit</button>
 <p>already have an account <a href="loginpage.php" style="color:#249CC9">sign in</a></p>
 
  </form>

</div>
 <div class="col-md-4">
    </div>

</div>
</div>
  <br>  














  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>