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

<div class="row gridimg"> 
  <div class="column">
    <a href="image2desc.php"><img src="images/2.jpg" ></a>
    <a href="image11desc.php"><img src="images/11.jpg" ></a>
   <a href="image12desc.php"> <img src="images/12.jpg" ></a>
   <a href="image11desc.php"> <img src="images/13.jpg" ></a>
   <a href="image11desc.php"> <img src="images/book.jpg" ></a>
  <a href="image11desc.php">  <img src="images/rails.jpg" ></a> 
  </div>
  <div class="column">
    <img src="images/class.jpeg" >
    <img src="images/class1.jpeg" >
    <img src="images/download (2).jpg" >
    <img src="images/download.jpg" >
    <img src="images/rocks.jpg" >
    <img src="images/park.jpg" >
  </div>  
  <div class="column">
    <img src="images/12.jpg" >
    <img src="images/rocks.jpg" >
    <img src="images/tunnel.jpg" >
    <img src="images/sky.jpg" >
    <img src="images/2.jpg" >
    <img src="images/11.jpg" >
    
  </div>
  <div class="column">
    <img src="images/11.jpg" >
    <img src="images/12.jpg" >
    <img src="images/13.jpg" >
    <img src="images/2.jpg" >
    <img src="images/rocks.jpg" >
    <img src="images/download.jpg" >
  </div>
</div><br>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
<br>

<!--footer-->

<?php include_once "footer.php"; ?>
<!-- end of footer-->    
     <?php include_once "script.php"; ?>
  </body>
</html>