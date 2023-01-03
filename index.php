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
      Home
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
     <b>‘Tragic Battle’: On the Front Lines of China’s Covid Crisis</b>
   </a>
   <br>
   <p>
    Medical staff are outnumbered and working sick as the nation’s health care system buckles under the strain of a spiraling crisis.
   </p>  
    <i>14 MIN READ</i>
      <br>
    <img src="27southwestchaos-02-1-97fb-videoLarge.jpg">
     <br>
      <div id="Rectangle">
      <img src="rectangle_4.png">
      </div>
      <br>
      <a onclick="window.location.href='Register.html'">
       <b>An Alternate Reality: How Russia's State TV Spins the Ukraine War</b>
     </a>
     <p>On a frigid night, we accompanied Ukrainian soldiers as they used a thermal sight to find enemy positions miles away.
        </p>
        
     <i>13 MIN READ</i> <br> <img src="107170422-16717337232022-12-22t182143z_934003418_rc25by9yeknw_rtrmadp_0_ukraine-crisis-russia-putin.jpeg"><br>
      <div id="Rectangle">
      <img src="rectangle_4.png"></div> <br>
       <b>Russian City Mourns Its Lost Soldiers, but Doesn’t Resent Putin’s War</b>
        <p>Ryazan, not far from Moscow, regularly sends young men off to fight. Some are now buried in the local cemetery, but there is no surge of outrage against Russian leaders.
        </p>
        <i>15 MIN READ</i>
        <br>
        <img src="27russia-ryazan-top-1-f7f1-jumbo.jpg">
      </div>
  <script src="script.js"></script>
</body>

</html>