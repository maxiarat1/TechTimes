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
  </nav>
  <br><br>
   
   
  <div id="Headlines2">
   	Entertaiment
  </div>


  
 <div class="buttons">
  <button onclick="window.location.href='Register.html'" class="register-btn">Register</button>
  <button onclick="window.location.href='Login.html'" class="login-btn">Login</button>
 </div> 
 <br>
<div id="Rectangle">
  <img src="newsbreakborder.png">
</div>
    <br>
   <b>
     You Didn’t Make It to St. Louis, but Your Bags Did. Here’s What to Do.
   </b>
   <br>
   <p>
    Disruptions from winter storms have not only caused flight delays and cancellations, but have also separated many passengers from their luggage. Here are some ways to make reuniting easier. 
   </p>  
    <i>9 MIN READ</i>
      <br>
    <img src="27xp-lost-luggage-1-b7b8-jumbo-v2.jpg">
     <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png">
      </div>
      <br>
       <b>
     Babies in First Class: Which Side of the Aisle Are You On?
     </b>
     <p>For some travelers, nothing can kill that premium-cabin buzz quicker than an infant next to them. But for parents, despite the overwhelming opposition (and glaring side-eye), seats in the front of the plane can be golden.
        </p>
        
     <i>10 MIN READ</i> <br> <img src="29babies-on-plane-illo-videoLarge.jpg"> <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png"></div> <br>
       <b>You’re Going to Need a Smaller Boat: Island Hopping in the Grenadines</b>
        <p>Forget about flying if you want to visit many of these stunning specks of land sprinkled across the Caribbean. Hop on a sailboat or a ferry, or you can always swim.
        </p>
        <i>17 MIN READ</i>
        <br>
        <img src="00Travel-Grenadines-1-630c-videoLarge.jpg">
        
  <script src="script.js"></script>
</body>

</html>