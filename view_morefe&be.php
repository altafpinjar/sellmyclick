    <?php

include_once("checkUserLoginStatus.php");
// if(!$user_ok) {
//     header("location: $siteAddress/loginpage.php");
//     exit();
// }

    ?>
    <?php


//     for ($j=0; $j<$rows; ++$j)
// {
//     $row = mysql_fetch_row($imageArray);
//     echo $row[1] . "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
// //    echo "<img src='$row[1]' />";
// }


if(isset($_POST["elem"])){
    // if(isset($_SESSION["userName"])){
    //         $userName = $_SESSION["userName"];
    // }else {
    //     echo "6578";
    // }
    $userName = "$log_username";
    $elem = $_POST['elem'];
	// -------------------------------------------
	$sql = "SELECT id FROM like_dislike WHERE imageId='$elem' AND userName='$userName' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
	$l_check = mysqli_num_rows($query);
	 if ($l_check > 0){
        $sql = "DELETE FROM `like_dislike` WHERE imageId='$elem' AND userName='$userName' ";
        $query = mysqli_query($connect_db, $sql);

    $uid = mysqli_insert_id($connect_db);
        // echo "You Have Already Liked This Image.";
        // echo trim(ob_get_clean());
		exit();
	} 
       
		$sql = "INSERT INTO `like_dislike` (`imageId`,`userName`,`date_time`) VALUES ('$elem','$userName',now())";
		$query = mysqli_query($connect_db, $sql);
		$uid = mysqli_insert_id($connect_db);



		echo "like_success";
		echo trim(ob_get_clean());
		exit();
	}



    // <-------------to store downloaded images entry in databse------------>
    if(isset($_POST["downloadImage"])){
        // if(isset($_SESSION["userName"])){
        //         $userName = $_SESSION["userName"];
        // }else {
        //     echo "6578";
        // }
        $userName = "$log_username";
        $elem = $_POST['downloadImage'];
        // -------------------------------------------
        //$sql = "SELECT id FROM like_dislike WHERE imageId='$elem' AND userName='$userName' LIMIT 1";
        // $query = mysqli_query($connect_db, $sql);
        // $l_check = mysqli_num_rows($query);
        //  if ($l_check > 0){
        //     $sql = "DELETE FROM `like_dislike` WHERE imageId='$elem' AND userName='$userName' ";
        //     $query = mysqli_query($connect_db, $sql);
    
        // $uid = mysqli_insert_id($connect_db);
        //     // echo "You Have Already Liked This Image.";
        //     // echo trim(ob_get_clean());
        //     exit();
         
           
            $sql = "INSERT INTO `download` (`imageId`,`userName`,`date_time`) VALUES ('$elem','$userName',now())";
            $query = mysqli_query($connect_db, $sql);
            $uid = mysqli_insert_id($connect_db);
    
            echo "download_success";
            echo trim(ob_get_clean());
            exit();
        }

    $select_path="select * from images";

    $var=mysqli_query($connect_db,$select_path);
    
    $imageArray = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageArray .= " <div class=\"hovereffect\">
        <img class=\"img-responsive\" src=".$image_path."  style=\"width\": 300px;>
            <div class=\"overlay\">
               
                <p class=icon-links>
                    <a href=\"#\">
                        <span class=\"fa fa-heart\" onclick=\"like_event('$image_id')\" id=\"$image_id\"></span>
                    </a>
                    <a href=\"#\">
                        <span class=\"fa fa-share-alt fa-inverse\"></span>
                    </a>
                    <a href=\"#\">
                        <span class=\"fa fa-download\" onclick=\"download_event('$image_id')\" id=\"$image_id\" id=\"download\" download=\"$image_path\"></span>
                    </a>
                </p>  
            </div>
    </div> ";
}
?>






<!doctype html>
<html lang="en">
  <head>
    <title>SMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--styles css-->  
<?php include_once "styles.php"; ?>

          <style type="text/css">
      .hovereffect {
    margin-left: 20px;
    margin-top: 20px;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}
.hovereffect .overlay {
    width: 100%;
    position: absolute;
    overflow: hidden;
    left: 0;
  top: auto;
  bottom: 0;
  padding: 0em;
  height: 2em;
  background: #79FAC4;
  color: #3c4a50;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
  

}

.hovereffect img {
    display: block;
    position: relative;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.hovereffect:hover img {
-webkit-transform: translate3d(0,-10%,0);
  transform: translate3d(0,-10%,0);
}


.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
  color: #fff;
  border: 0px solid #fff;
  margin: 20px 0 0 0;
  background-color: transparent;
}
.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}


.hovereffect p.icon-links a {
  float: center;
  color: #3c4a50;
  font-size: 1.1em;
}

.hovereffect:hover p.icon-links a:hover,
.hovereffect:hover p.icon-links a:focus {
  color: #252d31;
}

.hovereffect h2,
.hovereffect p.icon-links a {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,200%,0);
  transform: translate3d(0,200%,0);
  visibility: visible;
}

.hovereffect p.icon-links a span:before {
  display: inline-block;
  padding: 8px 20px;
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


.hovereffect:hover .overlay,
.hovereffect:hover h2,
.hovereffect:hover p.icon-links a {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover h2 {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

.hovereffect:hover p.icon-links a:nth-child(3) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

.hovereffect:hover p.icon-links a:nth-child(2) {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.hovereffect:hover p.icon-links a:first-child {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

    </style>
    
    
    <!--styles css--> 

  </head>
  <body >

    <!--navbar-->
    <?php include_once "header.php"; ?>

    <!--end of navbar-->
    
<br>
<br><br>
   <!--  <a href="main_page.php"><button>home</button></a><br><br> -->
    
     <!-- <a href="http://localhost/SellMyClick/fetch_image.php?&filter=uploaded" style="padding-right:10px" >recently uploaded images </a>
     <a href="http://localhost/SellMyClick/fetch_image.php?&filter=liked" style="padding-right:10px">most liked images </a>
     <a href="http://localhost/SellMyClick/fetch_image.php?&filter=topuploaded">Top uploaded images </a><br><br> -->

     

 <div class="display-uploaded-images">
      <div class="row photos" style="margin-left: 0px;">
            <?php echo $imageArray; ?>
           
       </div>
     </div>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="imagegrids.php">1</a>
  <a href="imagegrids2.php">2</a>
  <a href="imagegrids.php">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
<br>

<!--footer-->

<?php include_once "footer.php"; ?>

         <!-- script -->
    <?php include_once("script.php"); ?>

<script>
  function like_event(elem)
  {

// _("likebtn").style.display = "none";
//   status.innerHTML = 'please wait ...';
  var ajax = ajaxObj("POST", "view_morefe&be.php");
  ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
          if(ajax.responseText != "like_success"){
              alert(ajax.responseText);
            //   status.style.display = "block";
            //   _("likebtn").style.display = "block";
          } else {
             _(elem).innerHTML = "<i class=\"material-icons\" style.color=\"#ff0000\">favorite</i>";
          }
      }
  }
  
  ajax.send("elem="+elem);
}

// <=------------download_event-->
function download_event(elem)
{
// _("likebtn").style.display = "none";
//   status.innerHTML = 'please wait ...';
  var ajax = ajaxObj("POST", "view_morefe&be.php");
  ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
          if(ajax.responseText != "download _success"){
              alert(ajax.responseText);
            //   status.style.display = "block";
            //   _("likebtn").style.display = "block";
          } else {
            //  _(elem).innerHTML = "<i class=\"material-icons\" style.color=\"#000000\" >favorite</i>";
          }
      }
  }
  ajax.send("downloadImage="+elem);
}
</script>

    </body>
    </html>
   