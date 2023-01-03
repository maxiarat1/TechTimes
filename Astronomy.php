<!-- 
Online HTML, CSS and JavaScript editor to run code online.
-->
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="anasayfa2.css" />
</head>

<body>
  <div class="container">

  
  <div id="Header1">
           <img src=header_1.png>
  </div>

  <nav class="topnav">
    <div style="padding-top:0.4%;"> 
    <a style="color: white;" href="index.php">Home</a>
   	<a style="color: white;" href="Technology.php">Technology</a>
    <a style="color: white;" href="Science.php">Science</a>
    <a style="color: white;" href="Astronomy.php">Astronomy</a>
    <a style="color: white;" href="Health.php">Health</a>
    <a style="color: white;" href="Entertaiment.php">Entertainment</a>
	<a style="color: cyan;"> User: 
	<?php
		if(isset($_SESSION["user"])){
		 echo $_SESSION["user"];
		}
		else{
			echo "Not logged in.";
		}
	?>
	</a>
    
   </div>
  </nav><br><br>
  
    <div id="Headlines2">
      Astronomy
   </div>
  </div>
  <div class="buttons">
    <button onclick="window.location.href='Register.html'" class="register-btn">Register</button>
    <button onclick="window.location.href='Login.html'" class="login-btn">Login</button>
   </div>

 

<br>
<div id="Rectangle">
  <img src="rectangle_4.png">
</div>
    <br>
   <a onclick="window.location.href='Register.html'">
     <b>The Sky This Week: Mercury and Venus take center stage</b>
   </a>
   <br>
   <p>
    Enjoy deep-sky observing as the planets put on an intricate dance from December 23 to 30.
   </p>  
    <i>6 MIN READ</i>
      <br>
    <img src="christmastree.jpg">
     <br>
      <div id="Rectangle">
      <img src="rectangle_4.png">
      </div>
      <br>
      <a onclick="window.location.href='Register.html'">
       <b>Hubble captures star-studded clouds in Lagoon Nebula</b>
     </a>
     <p>Roiling clouds of interstellar gas and dust give a smoky appearance to this nearby nebula.
        </p>
        
     <i>15MIN READ</i> <br> <img src="LagoonNebula.jpg"> <br>
      <div id="Rectangle">
      <img src="rectangle_4.png"></div> <br>
       <b>Why the universe is always changing</b>
        <p>If science has taught us anything, it's that nothing lasts forever.
        </p>
        <i>12 MIN READ</i>
        <br>
        <img src="ASYBB1222_01.jpg">
      </div>
  <script src="script.js"></script>
</body>

</html>