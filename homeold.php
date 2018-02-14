

<?php
include_once("checkUserLoginStatus.php");

?>
<?php
    //  <------- by default below code display only uploded images -- need to sho oly recently uploaded----->
         $imageList = "";
        $select_path="SELECT * FROM images ";

        $var = mysqli_query($connect_db,$select_path);
        
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                $image_name=$row["name"];
                $image_path=$row["image"];  
                $image_id = $row["id"];
                $imageList .= "<img src=".$image_path." height=100>";
        }
// <--------below code displays recently uploded images---------->

if(isset($_GET['filter']) && $_GET['filter']=="uplod") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images ";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}


// <--------below code displays most  liked images---------->
if(isset($_GET['filter']) && $_GET['filter']=="liked")
{
    $select_path = "SELECT images.image FROM images JOIN like_dislike ON images.id=like_dislike.imageId WHERE imageId>= 3";

    $var=mysqli_query($connect_db,$select_path);
    $sql_num_rows = mysqli_num_rows($var);

    if($sql_num_rows>0) {

      
    }
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            // $image_name=$row["name"];
            $image_path=$row["image"];  
            // $image_id = $row["imageId"];
            $imageList .= "<img src=".$image_path." height=100>";
    }
}

//<--------below code dispays top uploded images--->
// writecode



// <----- below code is to display education category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="education") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Education'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}

// <----- below code is to display interior category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="interior") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Interior'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display architecture category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="architec") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Architecture'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display adventure category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="adventure") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Adventure'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display nature category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="nature") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Nature'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display technology  category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="tech") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Technology'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display monuments category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="monuments") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Monuments'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
// <----- below code is to display photography category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="photography") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Photgraphy'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= "<img src=".$image_path." height=100><br>";
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>SMC</title>
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
    <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost:8080/sellmyclick/home.php?&filter=uplod">Recent Images</a></li>
    <li class="breadcrumb-item"><a href="http://localhost:8080/sellmyclick/home.php?&filter=liked">Most liked</a></li>
    <li class="breadcrumb-item"><a href="http://localhost:8080/sellmyclick/home.php?&filter=topup">Top uploads</a></li>
  </ol>
  
</div>
    <div class="display-uploaded-images">
      <div class="row photos">



        <div class="col-md-2">

    <div class="hovereffect">
     <!--  <?php echo $imageList; ?> -->
        <img class="img-responsive" src="images/new/2.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="image2desc.php">
                        <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
           
          
    </div>
</div>
        <div class="col-md-2">
   <div class="hovereffect">
        <img class="img-responsive" src="images/new/3.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div>
         </div>
        <div class="col-md-2">
   <div class="hovereffect">
        <img class="img-responsive" src="images/new/16.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div>
         </div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/4.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/5.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/6.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
      </div><br>
      <div class="row photos">
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/7.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/8.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/9.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                       <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/10.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                     <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/11.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/15.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
      </div>
       <a href="imagegrids.php" ><button class="btn btn-sm" role="button">view more</button></a>

    </div>
    </div>

 <div id="section4" class="container-fluid section_2">
<h5>Our Popular Categories</h5>
<div class="row popcat">
  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/Education.png">
    <div class="overlay_s">
       <h2>Education</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
  </div>
</div>
</div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/technology.png">
            <div class="overlay_s">
           <h2>Technology</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/architecture.png" >
            <div class="overlay_s">
           <h2>Architecture</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/nature.png">
        <div class="overlay_s">
           <h2>NATURE</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
</div>
</div>

<br>
<div class="row popcat">
  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/interior.png" >
          <div class="overlay_s">
           <h2>Interior</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/adventure.png" >
          <div class="overlay_s">
           <h2>Adventure</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/monuments.png" >
        <div class="overlay_s">
           <h2>Monuments</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/photography.png" >
        <div class="overlay_s">
           <h2>Photography</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>
</div>

</div>






<div id="section4" class="container section_1" style="padding-top:10px;padding-bottom:10px">
<center><h3>Our Top Contributors</h3></center><br>
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