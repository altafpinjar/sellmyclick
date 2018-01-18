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

    <style>

/******star ratings*******/
.checked {
    color: orange;
}
/*************/

      .carousel-fade .carousel-item {
  display: block;
  position: relative;
  opacity: 0;
  transition: opacity .75s ease-in-out;
}


.carousel-fade .carousel-item.active {
  opacity: 1;
  display: block;
}

.carousel {
  position: relative;
  background-color: lightskyblue;
}
.carousel-inner {
  background-color: pink;
  height: 100%;
}
.carousel-item {
  background-color:;
  opacity .5;
}
a.carousel-control-next:link, a.carousel-control-prev:link {
  background-color: transparent;
  text-decoration: none;
  opacity: .5;
}
a.carousel-control-next:hover, a.carousel-control-prev:hover  {
  background-color: transparent;
  text-decoration: none;
  opacity: 1;
}


/*carousel content*/
.carousel-caption {
  position: absolute;
  bottom: 10%;
  left: 10%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}


/*buotton*/

.popcat img
{
 height: 200px;
 width: 310px;
}


/********************************************************************HOVER EFFECT*******************************************************************************/
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(75,75,75,0.7);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
  background-color: rgba(48, 152, 157, 0.4);
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(155px);
  -ms-transform: translateY(155px);
  transform: translateY(155px);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(5px);
  -ms-transform: translateY(5px);
  transform: translateY(5px);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  font-weight: normal;
  margin: -32px 0 0 0;
  padding: 72px 100px;
}

.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect a.info:hover {
  box-shadow: 0 0 1px #fff;
}



/**********************************************************************************************************************************************************/


</style>

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

<!--
<div id="section2" class="container-fluid" style="padding-top:10px;padding-bottom:2px">
    <center><h2>Editorial</h2><br><h4>Get Picture Perfect Click With-In 3 Steps!</h4></center>
<div class="row">
<div class="col-md-4"><center><img src="images/sumaiya/upload.png"></center></div>
<div class="col-md-4"><center><img src="images/sumaiya/edited.png"></center></div>
<div class="col-md-4"><center><img src="images/sumaiya/done.png"></center></div>
</div>
 <div style="float: right;padding-right: 10px;"><button class="btn btn-md" role="button">Try Now!</button></div>
</div>

 -->


<div class="container-fluid">
  
</div>
<div id="section1" class="container-fluid" style="padding-top:10px;padding-bottom:10px;">
     <div aria-label="breadcrumb">
  <ol class="breadcrumb">
    <h5>Have a look now!</h5>&nbsp;&nbsp;
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Recent Images</a></li>
    <li class="breadcrumb-item"><a href="#">Most liked</a></li>
    <li class="breadcrumb-item"><a href="#">Top uploads</a></li>
  </ol>
  
</div>
    
      <div class="row">
        <div class="col-md-2"><img src="images/sumaiya/1.jpeg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/2.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/3.jpeg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/4.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/5.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/6.jpg" style="height: 140px; width: 200px;"></div>
      </div><br>
      <div class="row">
        <div class="col-md-2"><img src="images/sumaiya/7.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/8.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/9.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/10.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/11.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="images/sumaiya/4.jpg" style="height: 140px;width: 200px;"></div>
      </div>
       <a href="imagegrids.php" > <div style="float: right;padding-right: 10px; margin-top: 10px;"><button class="btn btn-sm" role="button">view more</button></div></a>

    </div>
   
<!--
<div id="section3" class="container-fluid" style="padding-top:20px;padding-bottom:10px">
  <h5>Most Liked</h5><br>
     <div class="row">
        <div class="col-md-2"><img src="img/1.jpeg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/2.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/3.jpeg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/4.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/5.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/6.jpg" style="height: 140px; width: 200px;"></div>
      </div><br>
      <div class="row">
        <div class="col-md-2"><img src="img/7.jpg" style="height: 140px; width: 200px;"></div>
        <div class="col-md-2"><img src="img/8.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="img/9.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="img/10.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="img/11.jpg" style="height: 140px;width: 200px;"></div>
        <div class="col-md-2"><img src="img/bg.jpg" style="height: 140px;width: 200px;"></div>
      </div>
    </div>
    <div style="float: right;padding-right: 10px;"><button class="btn btn-sm" role="button">view more</button></div>

</div>
-->

 <div id="section4" class="container-fluid" style="padding-top:20px;padding-bottom:10px">
<h5>Our Popupar Categories</h5>
<div class="row popcat">
  <div class="col-md-3">
      <div class="hovereffect">
    <img src="images/sumaiya/1.jpeg" >
    <div class="overlay">
       <h2>Education</h2>
           <a class="info" href="#">VIEW</a>
  </div>
</div>
</div>


  <div class="col-md-3">
      <div class="hovereffect">
    <img src="images/sumaiya/3.jpeg">
            <div class="overlay">
           <h2>Technology</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
      <div class="hovereffect">
    <img src="images/sumaiya/7.jpg" >
            <div class="overlay">
           <h2>Architecture</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect">
    <img src="images/sumaiya/5.jpg">
        <div class="overlay">
           <h2>NATURE</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
</div>
</div>

<br>
<div class="row popcat">
  <div class="col-md-3">
<div class="hovereffect">
    <img src="images/sumaiya/6.jpg" >
          <div class="overlay">
           <h2>Animals</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
<div class="hovereffect">
    <img src="images/sumaiya/1.jpeg" >
          <div class="overlay">
           <h2>Science</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect">
    <img src="images/sumaiya/2.jpg" >
        <div class="overlay">
           <h2>Monuments</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect">
    <img src="images/sumaiya/4.jpg" >
        <div class="overlay">
           <h2>Streets</h2>
           <a class="info" href="#">VIEW</a>
        </div>
    </div>
  </div>
</div>

</div>






<div id="section4" class="container-fluid" style="padding-top:10px;padding-bottom:10px">
<center><h3>Our Contributors</h3></center><br>
<div class="row">
  <div class="col-md-3"><center><img src="images/sumaiya/6.jpg" class="rounded-circle" width="150" height="120"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/6.jpg" class="rounded-circle" width="150" height="120"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/6.jpg" class="rounded-circle" width="150" height="120"><h5>Lorem Ipsum</h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/6.jpg" class="rounded-circle" width="150" height="120"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
</div>
</div><br>

    


  <!--footer--> 
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>