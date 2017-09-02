<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stadors</title>
<link rel="stylesheet" href="style/Stadstyle.css">
<link rel="stylesheet" href="style/w3.css">
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<div class=" stadli w3-red w3-card-4">
   <div class="stadname w3-red w3-xxxlarge"><font color="gold">
CONQUISTADORS</font>
   </div>
     
<form  action="phpli.php" method="post">
<input autofocus="autofocus" class="stadlitf" name="stadfn" type="text" placeholder="First name" pattern="?[A-Z][a-z]"  required />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="stadlitf yellow" name="lastname" type="text" placeholder="Last name" pattern="?[A-Z][a-z]" required /><br/>
<input class="stadlitfpn yellow" name="contact"  placeholder="Email" type="email" required /><br/>
<input placeholder="Password" name="password" type="password" class="stadlitf yellow" required /><br/>
<div class=" w3-large " style="color:yellow;">LOCATION </div>  
<select  required class="stadlitf yellow"  name="state" id="jumpMenu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <option value="Abia">Abia</option>
  <option value="Akwa Ibom">Akwa Ibom</option>
<option value="Bauchi">Bauchi</option>
<option value="Bayelsa">Bayelsa</option>
<option value="Benue">Benue</option>
<option value="Borno">Borno</option>
<option value="Cross River">Cross River</option>
<option value="Delta">Delta</option>
<option value="Ebonyi">Ebonyi</option>
<option value="Enugu">Enugu</option>
<option value="Edo">Edo</option>
<option value="Ekiti">Ekiti</option>
<option value="Gombe">Gombe</option>
<option value="Imo">Imo</option>
<option value="Jigawa">Jigawa</option>
<option value="Kaduna">Kaduna</option>
<option value="Kano">Kano</option>
<option value="Katsina">Katsina</option>
<option value="Kebbi">Kebbi</option>
<option value="Kogi">Kogi</option>
<option value="Kwara">Kwara</option>
<option value="Lagos">Lagos</option>
<option value="Nasarawa">Nasarawa</option>
<option value="Niger">Niger</option>
<option value="Ogun">Ogun</option>
<option  value="Ondo">Ondo</option>
<option value="Osun">Osun</option>
<option value="Oyo">Oyo</option>
<option value="Plateau">Plateau</option>
<option value="Rivers">Rivers</option>
<option value="Sokoto">Sokoto</option>
<option value="Taraba">Taraba</option>
<option value="Yobe">Yobe</option>
<option value="Zamfara">Zamfara</option>
<option >F.C.T</option>
</select><br/>
<div class="w3-large " style="color:yellow;">WHEN WERE YOU BORN </div>
<input required="required" class="stadlitf yellow" name="bday" type="date" placeholder="format y-m-d in no."><br>
<p>
<div class="w3-large"> Gender</div> 
  <label >
    <input class="yellow"  required="required" type="radio" name="gender" value="m" id="Gender_0" />
    Male</label>
  <br />
  <label>
    <input class="yellow" required="required" type="radio" name="gender" value="f" id="Gender_1" />
    Female</label>
<br />
</p>
<p style="color: yellow"><a href="mylipage.php">Already have an account?</a> </p>
<input class="stadlisub" name="Submit" type="submit" value="Submit" />

</form>
</div>
</body>

</html>