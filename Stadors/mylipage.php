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

</head>

<body>
<div class=" stadli w3-red w3-card-4">
   <div class="stadname w3-red w3-xxxlarge"><font color="gold">
CONQUISTADORS</font>
   </div>
     
<form  action="vadli.php" method="post">
<input class="stadlitfpn" name="licon"  placeholder="Email" type="email" required /><br/><br/>
<input placeholder="Password" name="lipd" type="password" class="stadlitf" required /><br/>
<p style="color:yellow">Don't have an account? <a href="Stadli.php">Sign up  </a></p>
<input class="stadlisub" name="Submit" type="submit" value="Submit" />

</form>
</div>
</body>

</html>