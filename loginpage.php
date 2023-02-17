

<!DOCTYPE html>
<!--
Walter Beardman
wabdgz
12/6/19
challenge: Final Project
-->
<html lang="en">
  <head>
<title>Login Page </title>
      <meta charset="utf-8">
    <script src="nality.js"></script>
    <link href="login.css" rel="stylesheet">
  </head>
    <script>
   $(function(){
            $("input[type=submit]").button();
        });
    </script>
    
<body>
<?php require 'navbar.php';?>
    <div>
       
    <form id="container" action="login.php" method="post">
      <h1>PLEASE SIGN IN</h1>
        
    <input type="hidden" name="action" value="do_login">
        
      <label>Username</label>
      <input id="username" type="text" name="username" autofocus value="<?php print $username; ?>"/>
      <label>Password</label>
      <input type="password" name="password"/>
        <br>
        <input type="submit" value="Login"/>
        <input id="username" type="hidden" name="submitted" value="1">
    </form>
        
         <div id="error">
        <?php
          print "<div>$error</div>";
        ?>
        </div>
    
</div>
</body>
</html>
    