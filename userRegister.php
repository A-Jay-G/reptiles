<?php
        
        include __DIR__ . '/model/model_users.php';
        include __DIR__ . '/functions.php';

        if(isset($_POST['final'])){
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $userName = filter_input(INPUT_POST, 'userName');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $result = addUser ($fName, $lName,$userName,$email,$password,$date);
           
       }
    ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="container">
<div class= "header">
</div>

<div class="info">
    <h4>Registration</h4>
<form id="userRegister" method="post" action="userRegister.php">
<div class="main">
    <div class="label">
    <label>First Name:</label>
    </div>
    <div>
    <input type="text" name="fName" value="fname" ><br>
    </div>
<br>
    <div class="label">
    <label>Email Address:</label>
    </div>
    <div>
    <input type="text" name="email" value="email" >
    </div>
<br>
    <div class="label">
    <label>Password:</label>
    </div>
    <div>
    <input type="text" name="password" value="password" >
    </div>
<br>
<div class="label">
    <label>Confirm Password:</label>
    </div>
    <div>
    <input type="text" name="confirmPassword" value="confirmPassword" >
    </div>
<br>
</div>
<form id="print" method="POST" action="userRegister.php">
    <input type="submit" name="final" value="Register"/>

</form>
<p>Already have an account? <a href='userLogin.php'>Login Here</a></p>



</form>
</div>

</div>
</body>
</html>

