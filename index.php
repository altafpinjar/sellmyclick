<?php

include_once("checkUserLoginStatus.php");
if(!$user_ok) {
    header("location: $siteAddress/smclogin.php");
    exit();
}




if(isset($_FILES['filefield']['tmp_name'])){

	

    $name=$_FILES['filefield']['name'];
    $name = preg_replace('#[ ]#i', '_', $name);
$title = $_POST["title"];
$imgcategory =$_POST["imgcategory"];
$description = $_POST["description"];
$price = $_POST["price"];


if ($_FILES['filefield']['tmp_name'] != "") {
//  $newname = "give_some_unique_name.jpg";
 $query = "INSERT INTO images(name,userName,imageCategory,description,imagePrice,image,date_time) values('$title','$log_username','$imgcategory','$description','$price','upload/$name',now())";

 mysqli_query($connect_db,$query) or die(mysqli_error($connect_db));
 move_uploaded_file($_FILES['filefield']['tmp_name'], "upload/$name");
 header("location: $siteAddress");
 
}
exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Upload image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>

    <br><br>
<div class="container-fluid m-0 p-0" >
<br>
<h1 class= "text-center">Upload Your Image</h1><br>
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8 container card" style="background-image: url('images/upload.jpeg'); width:100%;height:auto;">
	
	
		<br>
				<div class="title">
					<h3 class="text-center">Please Fill In The Details Below</h3>
					<hr>


<form class="text-center" method="post" action="index.php" enctype='multipart/form-data'>
<h1>Image Upload</h1>


<label>Enter Image Name </label>
 <input id="title" type="text" name="title" size="30" value="" class="w-50 stsf-b" ><br><br>


<label>Write Image Description</label>
<input id="description" type="text" name="description" size="30"  ><br><br>

  <textarea rows="4" cols="50" id="description" type="text" name="description" form="usrform"  class="w-50 stsf-b">
</textarea><br><br>





<label>Select Image Category</label>
<select name="imgcategory" id="imgcategory" class="w-50 stsf-b" >
<option value="Education">Education</option>
<option value="Technology">Technology</option>
<option value="Architecture">Architecture</option>
<option value="Nature">Nature</option>
<option value="Interior">Interior</option>
<option value="Adventure">Adventure</option>
<option value="Monuments">Monuments</option>
<option value="Photgraphy">Photgraphy</option>
</select><br><br>
  <input type="text" name="imageName" value="" class="w-50 stsf-b" placeholder="Write tags here..." ><br><br>


<label>Image Price</label>
<input type="number" placeholder="Enter Image Price" id="price"  name="price" ><br><br>

<div class="input-group input-group-lg">
<label>Select Image To Upload</label>
 <input type='file'  id="filefield" name='filefield' class="form-control"  />
</div><br><br>


<input type='submit' value='Save name' name='but_upload' id="submitbtn" >
    
    
</form>
</body>
</html>
