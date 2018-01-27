<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">

   .manju{
   	border:1px solid grey;
   	height: 250px;
   	width: 450px;
   }

	.manju img:hover {
  opacity:.8;
  cursor:pointer;
  overflow:hidden;
  transition-duration:1s;
  transform:scale(1.1);
   } 


   /*<example>*/
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
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
  padding: 10px;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect hr {
  width: 40%;
  opacity: 0;
  filter: alpha(opacity=0);
  border: 1px solid #FFF;
}

.hovereffect  hr:nth-child(3) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,90deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,90deg) scale3d(0,0,1);
}

.hovereffect  hr:nth-child(4) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,180deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1, 180deg) scale3d(0,0,1);
}

.hovereffect h2, .hovereffect hr {
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
}

.set1, .set2 {
  left: 50%;
  position: absolute;
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

.set1 {
  top: 40%;
}

.set2 {
  top: 60%;
}

.hovereffect p {
  width: 30%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 10px;
  font-size: 20px;
}

.set1 a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

.set1 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

.set2 a:first-child i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

.set2 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

.hovereffect:hover hr:nth-child(3) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-90deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-90deg) scale3d(1,1,1);
}

.hovereffect:hover hr:nth-child(4) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-180deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-180deg) scale3d(1,1,1);
}

.hovereffect:hover .set1 i:empty, .hovereffect:hover .set2 i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}
</style>
<body>





<!-- As a link -->
<div class="main-container">
<nav class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="#">
  	
      <div class="container-fluid">
  		<div class="row">
  		<img  class="img-fluid"  src="men.jpg" style="border-radius:50%;width:150px;height:150px;margin-left:690px;">
  	    </div>
     </div>
      <h4 align="center">Bruce mars</h4>
      <center><div class="row" style="margin-left:650px;">
      <div class="col-1">
      <i class="fa fa-facebook-f"></i>
      	</div>
      	<div class="col-1">
      <i class="fa fa-twitter"></i>
      </div>
      <div class="col-1">
      <i class="fa fa-instagram"></i>
      </div>
     </div></center>
  </a><br>
  <div class="container">
  <div class="row">
  	<div class="col-4">
  	<a href="#" style="text-decoration:none;"> Uploads</a>
  	</div>
  	<div class="col-4">
  	<a href="#" style="text-decoration:none;"> Saved</a>
  	</div>
  	<div class="col-4">
  	<a href="#" style="text-decoration:none;" >Buy</a>
  	</div>
  </div>
  </div>
</nav><br><br>
<div class="container-fluid" style="background-color:#d3d3d3;">
	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="images/3.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="2.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="3.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
	</div><br>
	 
    <div class="row">
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="7.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="6.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="7.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="6.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
	</div><br>


    <div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="8.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="9.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="10.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
	</div><br>
 

   <div class="row">
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="4.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="2.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="3.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="hovereffect">
        <img class="img-fluid" src="4.jpg" alt="">
            <div class="overlay">
                <h2></h2>
                <p class="set1">
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </p>
                <hr>
                <hr>
                <p class="set2">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </p>
            </div>
    </div>
		</div>
	</div><br>


  <!-- <example> -->
  
     
</div>
</div>
</body>
</html>