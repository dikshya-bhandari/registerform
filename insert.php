<?php
include 'dbconn.php';

if(isset($_POST['done'])){
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


$sql = "INSERT INTO form(name , email , phonenumber , password , profile)VALUES('$name' , '$email' , '$phone' , '$password' , '$destfile')";

if($conn->query($sql)===TRUE){
    echo "new record created successfully";
}
else{
    echo "error:" .$sql. "<br>" .$conn->error;
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<br>
<button style="background-color:skyblue; padding:5px; border-radius:5px"><a href="form.php" style="text-decoration:none;">Back</button></a>
<button style="background-color:skyblue; padding:5px; border-radius:5px"><a href="display.php" style="text-decoration:none">Show records</button>
 
</body>
</html>