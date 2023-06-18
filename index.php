<?php
if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
    die("connection to this database failded due to " . mysqli_connect_error());
   }
   //echo "Success connecting to the db";
   $name = $_POST['name'];
   $gender  = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
   


   $sql = "    INSERT INTO `travel'.'trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp(); ";
   
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <img class="bg" src="images/o-TRAVELING-facebook.jpg" alt="Travelling website">
    <div class="container">
<h1>Welcome to IIT Kharagpur US Trip form</h1>
<p>Enter your details and submit this form to confirm your participation in this trip</p>
<p class="submitmsg">Thank you for submitting your form. We are happy to see you joining us.</p>
<form action="index.php" methods="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="text" name="age" id="age" placeholder="Enter your age">
    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
    <button class="btn">Submit</button>
   
</form>
    </div>
    <script src="javascript/index.js"></script>
</body>
</html>