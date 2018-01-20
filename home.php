<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
      <link rel="stylesheet" href="css/animate.css">
    <?php include_once "styles.php"; ?>
    <!--styles css--> 

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!--navbar-->
  <?php include_once "header.php";?>
  <!--end of navbar-->


<div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/sumaiya/snap.png" alt="First slide" style="height: 100%">
                 
        </div> <!-- close carousel-item 1 -->
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <img class="d-block w-100" src="images/sumaiya/edit.png" alt="Second slide">
         
        </div> <!-- close carousel-item 2 -->
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <img class="d-block w-100" src="images/sumaiya/earn.png" alt="Third slide">
       
        </div> <!-- close carousel-item 3 -->
      </div> <!-- close carousel-inner -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

    </div> <!-- close carousel -->


<div class="container-fluid">
  
</div>
<div id="section1" class="container-fluid section_1">
     <div aria-label="breadcrumb">
  <ol class="breadcrumb">
    <h5>Have a look now!</h5>&nbsp;&nbsp;
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Recent Images</a></li>
    <li class="breadcrumb-item"><a href="#">Most liked</a></li>
    <li class="breadcrumb-item"><a href="#">Top uploads</a></li>
  </ol>
  
</div>
    
      <div class="row photos">
        <div class="col-md-2"><img src="images/sumaiya/1.jpeg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/2.jpg" style="border-radius: 4px;">  </div>
        <div class="col-md-2"><img src="images/sumaiya/3.jpeg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/4.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/5.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/6.jpg" style="border-radius: 4px;"></div>
      </div><br>
      <div class="row photos">
        <div class="col-md-2"><img src="images/sumaiya/7.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/8.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/9.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/10.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/11.jpg" style="border-radius: 4px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/4.jpg" style="border-radius: 4px;"></div>
      </div>
       <a href="imagegrids.php" ><button class="btn btn-sm" role="button">view more</button></a>

    </div>

 <div id="section4" class="container-fluid section_2">
<h5>Our Popular Categories</h5>
<div class="row popcat">
  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/1.jpeg" >
    <div class="overlay_s">
       <h2>Education</h2>
           <a class="info" href="#">VIEW</a>
  </div>
</div>
</div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/3.jpeg">
            <div class="overlay_s">
           <h2>Technology</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/7.jpg" >
            <div class="overlay_s">
           <h2>Architecture</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/5.jpg">
        <div class="overlay_s">
           <h2>NATURE</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
</div>
</div>

<br>
<div class="row popcat">
  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/6.jpg" >
          <div class="overlay_s">
           <h2>Animals</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/1.jpeg" >
          <div class="overlay_s">
           <h2>Science</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/2.jpg" >
        <div class="overlay_s">
           <h2>Monuments</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/4.jpg" >
        <div class="overlay_s">
           <h2>Streets</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>
</div>

</div>






<div id="section4" class="container section_1" style="padding-top:10px;padding-bottom:10px">
<center><h3>Our Contributors</h3></center><br>
<div class="row">
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>

   <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum</h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
</div>
</div><br><br>

    


  <!--footer--> 
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>