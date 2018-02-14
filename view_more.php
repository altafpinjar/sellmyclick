    <?php

include_once("checkUserLoginStatus.php");
// if(!$user_ok) {
//     header("location: $siteAddress/loginpage.php");
//     exit();
// }

    ?>
    <?php


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
            $imageArray .= "<img src=".$image_path." height=100><span onclick=\"like_event('$image_id')\" id=\"$image_id\" ><i class=\"material-icons\" >favorite_border</i></span>  <a onclick=\"download_event('$image_id')\" id=\"$image_id\" id=\"download\" href=\"$image_path\" download=\"$image_path\">Download</a>";
    }
?>







    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Images</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

    <a href="main_page.php"><button>home</button></a><br><br>
    
     <!-- <a href="http://localhost/SellMyClick/fetch_image.php?&filter=uploaded" style="padding-right:10px" >recently uploaded images </a>
     <a href="http://localhost/SellMyClick/fetch_image.php?&filter=liked" style="padding-right:10px">most liked images </a>
     <a href="http://localhost/SellMyClick/fetch_image.php?&filter=topuploaded">Top uploaded images </a><br><br> -->
       <div>
            <?php echo $imageArray; ?>
           
       </div>


         <!-- script -->
    <?php include_once("script.php"); ?>

<script>
  function like_event(elem)
  {

// _("likebtn").style.display = "none";
//   status.innerHTML = 'please wait ...';
  var ajax = ajaxObj("POST", "view_more.php");
  ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
          if(ajax.responseText != "like_success"){
              alert(ajax.responseText);
            //   status.style.display = "block";
            //   _("likebtn").style.display = "block";
          } else {
             _(elem).innerHTML = "<i class=\"material-icons\" style.color=\"#ff0000\" >favorite</i>";
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
  var ajax = ajaxObj("POST", "view_more.php");
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
   