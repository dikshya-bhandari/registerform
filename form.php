<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action="insert.php" method="POST" enctype="multipart/form-data">


    <div class="header">
    <h2>Create an account</h2>
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