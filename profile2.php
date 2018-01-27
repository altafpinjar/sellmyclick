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
    <style type="text/css">

   /*<example>*/
.profile {
  width: 100%;
  height: 80%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.profile .ovprofile {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.profile img {
  display: block;
  position: relative;
}


.profile:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.profile a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.profile a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.profile h2,
.profile p {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.profile .ovprofile:before {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40%;
  height: 70%;
  border: 2px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
}

.profile p {
  width: 100%;
  text-transform: none;
  font-size: 25px;
  line-height: 2;
}

.profile p a {
  color: #fff;
}

.profile p a:hover,
.profile p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.profile  a i {
  opacity: 0;
  filter: alpha(opacity=);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 0px 5px;
}

.profile:hover .ovprofile:before {
  opacity: 1;
  filter: alpha(opacity=100);
  background-color: rgba(0,0,0,0.2);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-135deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-135deg) scale3d(1,1,1);
}

.profile:hover p i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}
</style>
    <body>
    <!--navbar-->
    <?php include_once "header.php"; ?>
    <!--end of navbar-->
    <br>
    <br>
    <br>
    <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <center><img  class="img-fluid"  src="images/hrx.jpg" style="border-radius:50%;width:150px;height:150px;"></center>
          </div>
       </div>
        <center><h4 align="center">MaktumHusen</h4>
      
        <i class="fa fa-facebook-f fa-2x" style="padding-right: 5px;"></i>
          
        <i class="fa fa-twitter fa-2x" style="padding-right: 5px;"></i>
    
        <i class="fa fa-instagram fa-2x"></i></center><br>
        <hr width="700px;" color="green">
        <div class="row">
          <div class="col-md-4">
         <center>   <h3>Uploads</h3></center> <br>

    <div class="hovereffect profile">
        <img class="img-responsive" src="images/3.jpg" alt="">
            <div class="overlay ovprofile">
               
                <a href="imagegrids.php"><p>
                   Show Photos
                </p></a>
            </div>
    </div>

          </div>
          <div class="col-md-4">
           <center>  <h3>Downloaded</h3></center><br>
                <div class="hovereffect profile">
        <img class="img-responsive" src="images/3.jpg" alt="">
            <div class="overlay ovprofile">
              
               <a href="imagegrids.php"> <p>
                Show Photos
                </p></a>
            </div>
    </div>
          </div>
          <div class="col-md-4">
           <center>  <h3>Buy</h3></center>  <br>
                <div class="hovereffect profile">
        <img class="img-responsive" src="images/3.jpg" alt="">
            <div class="overlay ovprofile">
              
                <a href="imagegrids.php"><p>
               Show Photos
                </p></a>
            </div>
    </div>
          </div>
        </div>
        </div>
 
<br>
<br><br>

    <!--footer-->
    <?php include_once "footer.php"; ?>
    <!-- end of footer-->    
    <?php include_once "script.php"; ?>
    </body>
  </html>