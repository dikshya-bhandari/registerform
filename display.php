<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>phonenumber</th>
    <th>profile</th>
    <th>operation</th></tr>

    <tbody>
    <?php
    include 'dbconn.php';

    $selectquery= "select * from form";
    $query= mysqli_query($conn , $selectquery);
    
    while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['name'];?></td>
        <td><?php echo $result['email'];?></td>
        <td><?php echo $result['phonenumber'];?></td>
        <td><img src="<?php echo $result['profile'];?>" style="width:50px; height:50px;"></td>
        <td><a href="delete.php?id=<?php echo $result['id']?>"><input type="button" value="DELETE" style="background-color:red; border-radius:3px; color:white;"></a>
       <a href="edit.php?id=<?php echo $result['id']?>"><input type="button" value="EDIT" style="background-color:green; border-radius:3px; color:white;"></a></td></tr>
        <?php
    }
    ?>

    </table>
</body>
</html>