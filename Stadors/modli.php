<?php
session_start();
$uid = $_SESSION['uid'];
$nam = $_SESSION['f']." ".$_SESSION['l'];
	require_once "conn.php";
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
  if (isset($_POST['submit']))
  { $conumber = test_input($_POST['contactno']);
  if(strlen($conumber) !== 11){ header("Location:phpli.php");
	  }
	  $uploadimg = $_FILES["ppic"]["tmp_name"];
  $target_dir = "/xampp/htdocs/Stadors/uploads/";
$target_file = $target_dir . basename($_FILES["ppic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
switch($_FILES['ppic']['type'])
 {
 case 'image/jpeg': $ext = 'jpg'; break;
 case 'image/gif': $ext = 'gif'; break;
 case 'image/png': $ext = 'png'; break;
 case 'image/tiff': $ext = 'tif'; break;
 default: $ext = ''; break;
 }
    $check = getimagesize($_FILES["ppic"]["tmp_name"]);
    if($check !== false) {
               $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$dpath = $target_dir.$uid.$nam."dpic.".$ext;
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ppic"]["tmp_name"], $dpath)) {
        echo "Your profile picture has been uploaded";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

   $hob1 = test_input($_POST['int1']);
   $hob2 = test_input($_POST['int2']);
   $hob3 = test_input($_POST['int3']);
   $ile = test_input($_POST['ht']);
   $role = test_input($_POST['rolemodel']);
   $meni = test_input($_POST['uni']);
   $descrip = test_input($_POST['ys']);
	  $v= implode(",",$_POST['Subjects']);
	  $s = "INSERT INTO mpdata(id,name,subjects,hob1,hob2,hob3,ht,rm,university,description,path,ppic) VALUES 
	  ('$uid','$nam','".$v."','$hob1','$hob2','$hob3','$ile','$role','$meni','$descrip','$dpath','$uploadimg')  " ;
mysqli_query($conn,$s) or die (mysqli_connect_error() );
 
  


}
?>