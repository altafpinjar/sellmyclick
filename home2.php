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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>


<a  href="smcedit.php"><button>login</button><br><br></a>
<select name="forma" onchange="location = this.options[this.selectedIndex].value;">
 <option value="index.php">Free Upload</option>
 <option value="index.php">Sell Ypur Photo</option>
</select>


<a href="http://localhost/SellMyClick/main_page.php?&filter=uplod"><button>recently Uploaded Images</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=liked"><button>Most Liked images</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=topup"><button>Top Uploaded Images</button></a><br><br>



<!-- TODO: REMOVE ONCLICK EVENTS -->
<!-- <div class="display-uploaded-images">dd</div> -->

<div class="display-uploaded-images">
 
    <?php echo $imageList; ?>


</div>
<a href="view_more.php">view more   </a>
<h1>select catogories to view images</h1>
<a href="http://localhost/SellMyClick/main_page.php?&filter=education"><button>Education</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=nature"><button>Nature</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=monuments"><button>Monuments</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=photography"><button>Photograpy</button></a><br><br>
<a href="http://localhost/SellMyClick/main_page.php?&filter=tech"><button>technology</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=interior"><button>Interior</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=adventure"><button>Adventure</button></a>
<a href="http://localhost/SellMyClick/main_page.php?&filter=architec"><button>Architecture</button></a><br>
<!-- scripts -->
<?php include_once("script.php"); ?>
<script>

  </script>
</body>
</html>