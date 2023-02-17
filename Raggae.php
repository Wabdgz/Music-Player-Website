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
    <link  rel="stylesheet" href="Raggae.css">
    
<link href="jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
        <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        
    
<script src="nality.js"></script>
    
<title>Raggae</title>
</head>
<body  onload="loadInfo()">
<?php require 'navbar.php'?>

    <h1 id="title">The Raggae Station</h1>
<div id="wrapper" class="clearhack">
    
<?php include 'player.php'; ?>
    
		<div id="songs">
		<ul id="music">
			<li><img class="record" src="images/marley.jpg" alt="Three Little Birds"></li>
			<li><img class="record" src="images/love.jpg" alt="One Love"></li>
			<li><img class="record" src="images/jam.jpg" alt="Jamming"></li>
		</ul>
        </div>
    
   
   <h2 id="instructions"></h2>
 
    
</div>  
    
   <!--Audio Files-->
    <div> 
        <audio class="songs" id="audio1" controls preload="none"><source src="audio/Three%20Little%20Birds.m4a" type="audio/mpeg"/></audio>
        
        <audio class="songs" id="audio2" controls preload="none"><source src="audio/One%20Love.m4a" type="audio/mpeg"/></audio>
    
        <audio class="songs" id="audio3" controls preload="none"><source src="audio/Jamming.m4a" type="audio/mpeg" /></audio>
    </div>
</body>
</html>