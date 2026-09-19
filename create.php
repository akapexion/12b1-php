<?php
    include("./config/db_connection.php");

    if(isset($_POST['save'])){
        $name = $_POST['nameField'];
        $email = $_POST['emailField'];

        $insert_query = "INSERT INTO users(user_name, user_email) VALUES('$name', '$email')";

        $execute = mysqli_query($connection, $insert_query); 

        echo "<script>
            alert('User Added Successfully');
        </script>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    
    <form method="POST">
        <input type="text" name="nameField">
        <input type="email" name="emailField">

        <button name="save">SAVE</button>
    </form>


</body>
</html>