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
<link rel="stylesheet" href="Leaks.css" >
</head>
  <body>
  <div class="video"> 
<iframe width="560" height="315" src="https://www.youtube.com/embed/NPRdNXvg2-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <a class="video" href="Leaks.php"s>Back to Leaks</a>
</div>
     
<form class="video" method="post">
     <label class="video">Type your name.</label>
      <input type="text" name="name">
 <input type="submit" value="Submit Name">
<?php
$name = $_POST['name'];
echo "<h3> Hello $name Hope you're enjoying the Music! </h3>";
?>  
</form>
    
</body>     
</html>