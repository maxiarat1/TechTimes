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
    Science
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
   <b>
     The Webb Telescope Is Just Getting Started
   </b>
   <br>
   <p>
    The first scientific results are coming in, and the $10 billion instrument is working even better than astronomers had dared to hope.
   </p>  
    <i>6 MIN READ</i>
      <br>
    <img src="webb.jpg">
     <br>
      <div id="Rectangle">
      <img src="rectangle_4.png">
      </div>
      <br>
       <b>
     A Cathedral Tried to Approach Heaven, but the Earth Held a Deep Secret
     </b>
     <p>Flows of spring water cut the planned height of St. John the Divine in half and prompted studies to illuminate the church’s watery past and future.
        </p>
        
     <i>4 MIN READ</i> <br> <img src="cathedral.jpg"><br>
      <div id="Rectangle">
      <img src="rectangle_4.png"></div> <br>
       <b>Something About This Mysterious Fossil Graveyard Was Fishy</b>
        <p>For decades, paleontologists have tried to explain what they assumed was a 230-million-year-old scene of mass death.
        </p>
        <i>2 MIN READ</i>
        <br>
        <img src="fossil-graveyard.jpg">
        
  <script src="script.js"></script>
</body>

</html>