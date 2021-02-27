<?php

include 'dbconn.php';

if(isset($_POST['done'])){
    $id=$_GET['id'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['number'];
    $pass= $_POST['password'];
    $file= $_FILES['file'];

    $password=password_hash($pass , PASSWORD_BCRYPT);

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror== 0){
        $destfile = 'upload/'.$filename;
        move_uploaded_file($filepath , $destfile);

    }


$sql = "UPDATE FORM SET  name='$name' , email='$email' , phonenumber='$phone' , password='$password' , profile='$destfile' where id=$id";

$query=mysqli_query($conn , $sql);
header('location:display.php');

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action=" " method="POST" enctype="multipart/form-data">


    <div class="header">
<h2>Update an account</h2>
    <input type="button" value="SignUp with facebook"><hr>
    <h3>Register Now</h3>
    </div>

    <div class="container">
    <input type="text"  name="name" id="name" placeholder="Name" required><br><br>
    <input type="email"  name="email" id="email" placeholder="Email" required><br><br>
    <input type="number"  name="number" id="number"placeholder="Phonenumber" required></br><br>
    <input type="password"  name="password" id="password" placeholder="password" required></br><br>
    </div>

    <div class="profile">
    <label>Choose profile:<br></label><input type="file" name="file" id="file"><br> <br><br>
    </div>

    <div class="button">
    <input type="submit"  name="done" id="submit" value="SignUp">

</form>
</body>
</html>