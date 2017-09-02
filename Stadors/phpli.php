<?php 
session_start();
$_SESSION['f']=  $_POST["stadfn"];
$_SESSION['l'] = $_POST["lastname"];
$_SESSION['em'] = $_POST["contact"];
$_SESSION['st'] = $_POST["state"];
$_SESSION['bd'] = $_POST["bday"];
$_SESSION['g'] = $_POST["gender"];
 require_once "conn.php"  ;
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname =  test_input($_POST["stadfn"]);
  $lname = test_input($_POST["lastname"]);
  $email = test_input($_POST["contact"]);
  $state = test_input($_POST["state"]);
  $bday = test_input($_POST["bday"]);
 $pword = test_input($_POST["password"]);
 $sex = test_input($_POST["gender"]);
 $pwordcount= strlen($pword) + strlen($email);
 $pwor = $pword.$pwordcount;
 $pwo = strrev($pwor);
};


if(!empty($lname))
{
   $st="INSERT INTO pdata(fn,ln,location,contact,bday,pword,sex) 
   VALUES ('$fname','$lname','$state','$email','$bday','$pwo','$sex')";
         if ($conn->query($st) === TRUE) 
		 {
          } else 
		  {
           echo "Error: " . $st . "<br>" . $conn->error;
          }

}
   else{  header("location:Stadli.php");
	}
$fn = $_SESSION['f'];
$l= $_SESSION['l'];
$em = $_SESSION['em'];
$st= $_SESSION['st'];
$bd = $_SESSION['bd'];
$g = $_SESSION['g'];
 $t = "SELECT id FROM pdata WHERE fn = '$fn' ";
 $result = $conn->query($t);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     $_SESSION['uid'] = $row["id"];
    }
} 
?>
<html>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" href="style/Stadstyle.css">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/animate.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stadors-Let us know you more</title>
</head>

<body class="w3-responsive" >
 <div class="stadname w3-responsive w3-red w3-xxxlarge" style="text-align:center">
 <font color="gold">CONQUISTADORS</font>
   </div>
     
<div class=" w3-container w3-yellow w3-card-4 w3-large w3-responsive " style="padding:10px; margin-top:3px">
 <?php echo  $fn ." ,welcome to conquistadors. We will love to know you more." ?>
 </div>
<div class="w3-row c" style="margin-top:5px;"> 
 <form action="modli.php" enctype="multipart/form-data" method="post">
<div class="w3-yellow w3-col m6 l4" style="padding:10px; height:100px;">
      <div onClick="myFunction()" class="w3-white w3-card-4 "  style="padding:4px;"><h3 align="center"><font color="#1B80BC">Your subjects </font></h3></div>
   <table id="demo" class=" w3-text-blue-grey w3-table w3-bordered w3-striped w3-blue animated bounceInLeft w3-dropdown-content w3-col m4 l4 " width="30%">
   

     <tr>
       <td><label>
         <input required type="checkbox" name="Subjects[]" value="English" id="Subjects_0" />
         English</label></td>
      <td><label>
         <input type="checkbox" name="Subjects[]" value="Mathematics" id="Subjects_1" required />
         Maths</label></td>
     
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Biology" id="Subjects_2" />
         Biology</label></td>
		 <td><span onClick="myFunction()" style="color:red;"  class="w3-closebtn">&#9989;</span></td>
    </tr><tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Physics" id="Subjects_3" />
         Physics</label></td>
     

       <td><label>
         <input type="checkbox" name="Subjects[]" value="Chemistry" id="Subjects_4" />
         Chemistry</label></td>
 
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Literature" id="Subjects_5" />
        Literature</label></td>
    <tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Government" id="Subjects_6" />
         Govt.</label></td>
     
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Economics" id="Subjects_7" />
         Economics</label></td>
     
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Commerce" id="Subjects_8" />
         Commerce</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="C.R.K" id="Subjects_9" />
         C.R.K</label></td>

       <td><label>
         <input type="checkbox" name="Subjects[]" value="Agricultural science" id="Subjects_10" />
         Agricultural science</label></td>
   
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Geography" id="Subjects_11" />
         Geography</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Accounting" id="Subjects_12" />
         Accounting</label></td>
 
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Further Maths" id="Subjects_13" />
         Further Maths</label></td>
     
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Civics" id="Subjects_14" />
         Civics</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Photography" id="Subjects_15" />
         Photography</label></td>
     
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Yoruba" id="Subjects_16" />
         Yoruba</label></td>
       <td><label>
         <input type="checkbox" name="Subjects[]" value=" Garment making" id="Subjects_17" />
         Garment making</label></td>
     </tr>
    
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Catering" id="Subjects_19" />
         Catering</label></td>
   
       <td><label>
         <input type="checkbox" name="Subjects[]" value="I.R.K" id="Subjects_20" />
         I.R.K</label></td>
   
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Food & Nut." id="Subjects_21" />
         Food & Nut.</label></td>
     </tr>
     <tr>
       <td><label>
         <input type="checkbox" name="Subjects[]" value="Cosmetology" id="Subjects_22" />
         Cosmetology</label></td>
    
       <td><label>
         <input type="checkbox" name="Subjects[]" value="T.d" id="Subjects_23" />
         T.d</label></td>
    
       <td><label>
         <input type="checkbox" name="Subjects[]" value="History" id="Subjects_24" />
         History</label></td>
     </tr>
     
   </table>
   
</div>
  <div class=" w3-blue-grey w3-col m6 l4" style="padding:10px; height:100px;">
    <p>
      <input id="numb3"  align="middle" type="number" name="contactno" maxlength="11" pattern="[0-9]{11}" title="please input 11 digits"  placeholder="Your phone number" class=" w3-border-0 stadlicf w3-white w3-card-4" onBlur="validate()"  style="padding:7px; width:95%; height:50px;" required><span id="kool"></span></p>
  </div>
<div class="  w3-red w3-col m6 l4" style="padding:10px; height:100px;">
 <div class=" w3-white w3-card-4"  style="padding:3px;" onClick="myFunction1()">
 <h3 align="center" ><font color="#0066CC">Your Interests</font></h3></div>
   <div class="w3-dropdown-content w3-red animated bounceInRight" id="sup"> <span onClick="myFunction1()"  class="w3-closebtn">&times;</span>
   <input align="middle"  placeholder="Your Interests" name="int1" class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4 "  style="padding:7px; width:92%">
    <input align="middle"  placeholder="Your Interests" name="int2" class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4 "  style="padding:7px; width:92%">
    <input align="middle"  placeholder="Your Interests" name="int3" class=" w3-margin-4 w3-border-0 stadlicf w3-white w3-card-4 "  style="padding:7px; width:92%">
    </div>
  </div>
<div class=" w3-blue-grey w3-col m6 l4 w3-padding-8" style="height:100px;"  >
<input required class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4 " style="padding:7px; height:50px; width:95%" name="ht" placeholder="Your hometown">
</div> 
<div class=" w3-red w3-col m6 l4 w3-padding-8"  style="height:100px;" >
<input required class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4" style="padding:7px; height:50px; width:95%" name="rolemodel" placeholder="Your rolemodel">
</div> 
<div class=" w3-yellow w3-col m6 l4 w3-padding-8"  style="height:100px;" >
<input required class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4" style="padding:7px; height:50px; width:95%" name="uni" placeholder="Your preferred University">
</div> 
 </div>
 <div class=" w3-cyan w3-padding-8 w3-col m8 l8"  ><textarea type="text" class=" w3-margin-4  w3-border-0 stadlicf w3-white w3-card-4" style="padding:7px; height:150px; width:95%" name="ys" placeholder="More about Yourself"></textarea>
 </div>
<div style="min-height:124px;" class="w3-blue-grey w3-padding-8 w3-col m4 l4">

<input type="file" name="ppic" id="file-2" style="display:none" class="inputfile inputfile-5" required  />
					<label for="file-2"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure><span>Choose a profile picture</span></label>
				</div>
</div>
 <input class="w3-red w3-col s11 m11 l6 w3-card-4 w3-margin-12 w3-border-0 w3-center w3-large" style="height:55px;" name="submit" type="submit" value="Submit">
  </form>
 </div>
 
</body>
<script>
function validate() {
	var value = document.getElementById('numb3').value;
	if (value.length != 11 ){
		document.getElementById("kool").innerHTML = "<div class='w3-deep-orange' style='width:100%;'><font color='cyan' size=+1>Number invalid</font></div>";
return false
	}else{
		document.getElementById("kool").innerHTML = "";
		return true}
	}
function myFunction() {
    document.getElementById("demo").classList.toggle("w3-show");
}
function myFunction1() {
    document.getElementById("sup").classList.toggle("w3-show");
}
/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
</script>
</html> 

