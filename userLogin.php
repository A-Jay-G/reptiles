<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="container">
<div class="header">
</div>

<div class="info">
<h4>Login</h4>
<form id="userLogin" method="post" action="userLogin.php">
<div class="main">
    <div class="label">
    <label>Email Address:</label>
    </div>
    <div class="inputbox">
    <input type="text" name="email" value="<?php $email;?>" >
    </div>
<br>
    <div class="label">
    <label>Password:</label>
    </div>
    <div>
    <input type="text" name="password" value="<?php $password;?>" >
    </div>
<br>
<form id="print" method="POST" action="userLogin.php">
    <input type="submit" name="final" value="Login"/>
</form>
<p>Not registered yet? <a href='userRegister.php'>Register Here</a></p>


</form>
</div>

</div>
</body>
</html>

<?php

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
           $password = filter_input(INPUT_POST, 'password');




           if(isset($_POST['final'])){
              echo "Submitted <hr />";
              echo $email;
              echo "<hr />";
              echo $password;              
              echo "<hr />";

               
           };