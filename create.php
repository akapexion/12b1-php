<?php
   include("config/db.php");

if(isset($_POST['saveBtn'])){
    extract($_POST);

    $insert_query = "INSERT INTO users(user_name, user_email) VALUES('$nameField', '$emailField')";

    $execute = mysqli_query($connection, $insert_query);

    echo "<script>
        alert('User added successfully')
    </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="nameField">
        <input type="text" name="emailField">
        
        <button name="saveBtn">SAVE</button>
    </form>


</body>
</html>