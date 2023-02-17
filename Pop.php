<!DOCTYPE html>
<!--
Walter Beardman
wabdgz
12/6/19
challenge: Final Project
-->
<html lang="en">
<head>
<!-- Reference
Using the Record Example from lecture as said we are allowed to.
-->  
<meta charset="utf-8">
    <link  rel="stylesheet" href="Pop.css">
    
<link href="jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
        <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        
    
<script src="nality.js"></script>
    
<title>Pop</title>
</head>
<body onload="loadInfo()">
 <?php require 'navbar.php'?>
    
    <h1 id="title">The Pop Station</h1>
<div id="wrapper" class="clearhack">
    
<?php include 'player.php'; ?>
    
		<div id="songs">
		<ul id="music">
			<li><img class="record" src="images/beyonce.jpg" alt="Single ladies"></li>
			<li><img class="record" src="images/BEP.jpg" alt="Boom Boom Pow"></li>
			<li><img class="record" src="images/thriller.jpg" alt="Thriller"></li>
		</ul>
        </div>
    
   
   <h2 id="instructions"></h2>
 
    
</div>  
    
    <!--Audio Files-->
    <div>
        <audio class="songs" id="audio1" controls preload="none"><source src="audio/Single%20Ladies.m4a" type="audio/mpeg"/></audio>
        
        <audio class="songs" id="audio2" controls preload="none"><source src="audio/Boom%20Boom%20Pow.m4a" type="audio/mpeg"/></audio>
    
        <audio class="songs" id="audio3" controls preload="none"><source src="audio/Thriller.m4a" type="audio/mpeg" /></audio>
    </div>
</body>
</html>