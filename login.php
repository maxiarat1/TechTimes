<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="anasayfa2.css" />
</head>
<body>
<div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div class=center-screen>
<b>
<?php

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

		if(isset($_SESSION["user"])){
			session_unset();
		}


if($email == "admin" && $pass == "admin"){
	echo "Hello " . $email . " welcome!";
	$_SESSION["user"] = $email;
}
else if($email == "admin"){
	echo "wrong password!";
}
else{
	echo "Invalid credientials!";
}

?>
</b>
<script>
        var timer = setTimeout(function() { //a simple timer in js
            window.location='index.php'
        }, 3000);
</script>

<br>
<br>

You will be redirected in 5 seconds...
</body>


</html>