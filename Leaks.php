<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	// A user has to have logged in order to have this 'username' cookie
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	// If the cookie isn't there, send them back to the login
	if (!$username) {
		header("Location: loginpage.php");
		exit;
	}
?>

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
    <link  rel="stylesheet" href="Leaks.css">
    

<link href="jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
    
<script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        
<script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        

<script src="nality.js"></script>
    
<title>Rap Leaks</title>
</head>
<body onload="loadInfo()">
<?php require 'navbar.php';?>

    <h1 id="title">Rap Leaks</h1>
<div id="wrapper" class="clearhack">
    
<?php include 'player.php'; ?>
    
		<div id="songs">
		<ul id="music">
			<li><img class="record" src="images/kanye.jpg" alt="Hurricane by Kanye West"></li>
			<li><img class="record" src="images/electricity.jpg" alt="Electricity Lil Uzi"></li>
			<li><img class="record" src="images/pierre.jpg" alt="Battle Scars by Lupe Fiasco"></li>
		</ul>
        </div>
    
   
   <h2 id="instructions"></h2>
 
    <button id="logout"><a href='logout.php'>Logout</a></button>
    
    </div>
    
    
     <a class="video" href="video.php">Click here to go to Video page!</a>


    
    
    <div>
        <audio class="songs" id="audio1" controls preload="none"><source src="audio/Hurricane.mp3" type="audio/mpeg"/></audio>
        
        <audio class="songs" id="audio2" controls preload="none"><source src="audio/electricity.mp3" type="audio/mpeg"/></audio>
    
        <audio class="songs" id="audio3" controls preload="none"><source src="audio/BattleScars.m4a" type="audio/mpeg" /></audio>
    </div>
</body>
</html>