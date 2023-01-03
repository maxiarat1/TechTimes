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
   	Health
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
     Parents Often Bring Children to Psychiatric E.R.s to Subdue Them, Study Finds
   </b>
   <br>
   <p>
    Many parents bring children to emergency rooms to manage aggressive behaviors. But the visits offer little long-term benefit, doctors said.
   </p>  
    <i>11 MIN READ</i>
      <br>
    <img src="jumbo.jpg">
     <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png">
      </div>
      <br>
       <b>
     Epidemics That Weren’t: How Countries Shut Down Recent Outbreaks
     </b>
     <p>Some of the most fragile health systems in the world can teach us ways to respond to public health threats early and effectively.
        </p>
        
     <i>4 MIN READ</i> <br> <img src="00SCI-pandemics.jpg"> <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png"></div> <br>
       <b>The I.C.U. Nurse: A Symbol of Endurance</b>
        <p>Caring for seriously ill patients needing round-the-clock attention during the pandemic has added layers of commitment.
        </p>
        <i>7 MIN READ</i>
        <br>
        <img src="merlin.jpg">
        
  <script src="script.js"></script>
</body>

</html>