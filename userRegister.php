


<!DOCTYPE html>
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
<form id="print" method="POST" action="userLogin.php">
    <input type="submit" name="final" value="Register"/>
</form>
<p>Already have an account? <a href='userLogin.php'>Login Here</a></p>


</form>
</div>

</div>
</body>
</html>

<?php 
include __DIR__ . '/model/model_users.php';


  //  $fName = filter_input(INPUT_POST, 'fName');
   // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    //$password = filter_input(INPUT_POST, 'password');
    //$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

    $fName = filter_input(INPUT_POST, 'fName');
    $lName = filter_input(INPUT_POST, 'lName');
    $userName = filter_input(INPUT_POST, 'userName');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $result = addUser ($fname, $lname,$userName,$email,$password,$date);


    function validation($fName, $email, $password,$confirmPassword){
        if($fName =="" || $email =="" || $password =="" || $confirmPassword ==""){
            $fName= "Please enter a first name!";
            $email= "Invalid Email Address!";
            $password= "Please enter a password!";
            $confirmPassword= "Please re-enter your password!";


        };

    };


    if(isset($_POST['final'])){
        
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $userName = filter_input(INPUT_POST, 'userName');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
    
        $result = addUser ($fname, $lname,$userName,$email,$password,$date);
       echo "Submitted <hr />";
       echo $fName;
       echo "<hr />";
       echo $lName;
       echo "<hr />";
       echo $email;
       echo "<hr />";
       echo $password;                  
       echo "<hr />";
       echo $userName;              
       
      
        
    };