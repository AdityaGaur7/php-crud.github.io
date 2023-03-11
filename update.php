<?php

include 'connect.php';
$id = $_GET["updateid"];
$sql = "Select * from `karya` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$roll = $row['roll'];
$email = $row['email'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "update `karya` set id=$id,name='$name',roll='$roll',email='$email',password='$password' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <form method="post">
        <div class="form">
            <label for="name"> Student Name:</label><br>
            <input type="text" name="name" id="name" value=<?php echo $name ?>><br>
            <label for="email"> Registeration No.: </label><br>
            <input type="text" name="roll" id="roll" value=<?php echo $roll ?>><br>
            <label for="roll"> Email Id: </label><br>
            <input type="email" name="email" id="email" value=<?php echo $email ?>><br>
            <label for="password"> Password:</label><br>
            <input type="password" name="password" id="password" value=<?php echo $password ?>><br>
            <label for="re-enter"> Re-enter:</label><br>
            <input type="password" id="re-password"><br>

            <button type="submit" name="submit">Update</button> <button><a href="display.php">Check</a></button>

        </div>
    </form>

    <script src="script.js"></script>

</body>

</html>