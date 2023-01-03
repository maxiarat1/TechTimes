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
  </nav>
  <br><br>
   
      
  <div id="Headlines2">
   	Technology
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
     Apple and Tesla: Tech shares tumble amid supply issues
   </b>
   <br>
   <p>
    Both companies have suffered major losses over conserns about supply chain hiccups in China.
   </p>  
    <i>4 MIN READ</i>
      <br>
    <img src="_128138039_gettyimages-1306394025.jpg.webp">
     <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png">
      </div>
      <br>
       <b>
		Musk Is Twitter's 'Singular Solution,' Says Co-Founder Jack Dorsey
     </b>
     <p>The former Twitter CEO calls Musk's bid to take the service private "the correct first step."
        </p>
        
     <i>7 MIN READ</i> <br> <img src="gettyimages-1233275147.webp"> <br>
      <div id="Rectangle">
      <img src="newsbreakborder.png"></div> <br>
       <b>These Nike NFT 'Cryptokicks' Sneakers Sold For $130K</b>
        <p>Nike bought virtual sneaker designer RTFKT (pronounced "artifact") in December. Now, over $11 million has been spent on its first virtual sneaker set.
        </p>
        <i>6 MIN READ</i>
        <br>
        <img src="nike.webp">
        
  <script src="script.js"></script>
</body>

</html>