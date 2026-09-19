<?php
if(isset($_POST['save'])){
    $name = $_POST['nameField'];
    $email = $_POST['emailField'];

    echo $name . " " . $email;
}
else {
    echo "Form Not Submitted";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <form action="logics.php" method="POST">
        <input type="text" name="nameField">
        <input type="email" name="emailField">

        <button name="save">SAVE</button>
    </form>


</body>
</html>