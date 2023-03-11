<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operation</title>

    
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <button><a href="index.php" class="btn">ADD STUDENT</a></button>

        <table class="table" border="0px" border-radius="10px" cellpadding="10px" >
            <thead>
                <tr id="head">
                    <th>ID NO.</th>
                    <th>NAME</th>
                    <th>ROLL NO.</th>
                    <th>EMAIL ID</th>
                    <th>PASSWORD</th>
                    <th>OPERATION</th>
                </tr>
            </thead>
            <tbody id="cell">
                <?php
                $sql = "Select * from `karya`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $roll = $row['roll'];
                        $email = $row['email'];
                        $password = $row['password'];

                        echo '
            <tr>
            <th>' .$id. '</th>
            <td>' .$name. '</td>
            <td>' .$roll. '</td?>
            <td>' .$email. '</td?>
            <td>' .$password. '</td?>
            <td>
                    <button >
                        <a href="update.php?updateid='.$id.'">Update</a>
                    </button>
                    <button >
                        <a href="delete.php?deleteid='.$id.'">Delete</a>
                    </button>
            </td>
           </tr>';
                    }
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>