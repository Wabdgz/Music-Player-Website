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
    <link  rel="stylesheet" href="sheet.css">
    
<link href="jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
        <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        
    
<script src="nality.js"></script>
    
<title>Classic Rock</title>
</head>
<body  onload="loadInfo()">
    
<?php require 'navbar.php'; ?>

    <h1 id="title">The Classic Rock Station</h1>
<div id="wrapper" class="clearhack">
    
<?php include 'player.php'; ?>

		<div id="songs">
		<ul id="music">
			<li><img class="record" src="images/ACDC.jpg" alt="ACDC"></li>
			<li><img class="record" src="images/boston.jpg" alt="Boston"></li>
			<li><img class="record" src="images/jovi.jpg" alt="Bon Jovi"></li>
		</ul>
        </div>
    
   
   <h2 id="instructions"></h2>
 
    
</div>  
    
    <!--Audio Files-->
    <div>
        <audio class="songs" id="audio1" controls preload="none"><source src="audio/BackInBlack.m4a" type="audio/mpeg"/></audio>
        
        <audio class="songs" id="audio2" controls preload="none"><source src="audio/MoreThanAFeeling.m4a" type="audio/mpeg"/></audio>
    
        <audio class="songs" id="audio3" controls preload="none"><source src="audio/LivinOnAPrayer.m4a" type="audio/mpeg" /></audio>
    </div>
</body>
</html>