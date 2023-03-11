<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into `karya`(name,roll,email,password) value('$name','$roll','$email','$password')";

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

<body id="bd">


        <form method="post" >
        <div class="form" >
            <label for="name"> Student Name:</label><br>
             <input type="text" name="name" id="name"><br>
            <label for="email"> Registeration No.: </label><br>
            <input type="text" name="roll" id="roll"><br>
            <label for="roll"> Email Id: </label><br>
            <input type="email" name="email" id="email"><br>
            <label for="password"> Password:</label><br>
             <input type="password" name="password"id="password"><br>
            <label for="re-enter"> Re-enter:</label><br>
             <input type="password"id="re-password"><br>
            
            <button type="submit" name="submit">Submit</button>
            <button type="reset" name="reset">reset</button><br>
            </div>
        </form>
   
    
</body>

</html>