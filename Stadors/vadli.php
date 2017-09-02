<?php 
session_start();
require_once "conn.php";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $licon=test_input($_POST['licon']);
  $lipd=test_input($_POST['lipd']);
 $pwordcount= strlen($lipd) + strlen($licon);
 $pwor = $lipd.$pwordcount;
 $pwo = strrev($pwor);
}
 $dfg="SELECT pword FROM pdata WHERE contact = '$licon'";
 $result = $conn->query($dfg);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
     $rester = $row["pword"];
    }
}
if($pwo!==$rester)
{ header("location:mylipage2.php");
}else
{ echo $pwo.$rester;
	}

?>