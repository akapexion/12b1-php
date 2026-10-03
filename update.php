<?php
   include("config/db.php");

if(isset($_POST['saveBtn'])){
    extract($_POST);

    
    $update_query = "UPDATE users SET user_name = '$nameField', user_email = '$emailField' WHERE user_id = $_GET[uid]";
    $execute = mysqli_query($connection, $update_query);

    echo "<script>
        alert('User updated successfully');
        location.assign('read.php');
    </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <h1>Updating User - <?php echo $_GET['uid'];?></h1>

    <?php
        $select_query = "SELECT * FROM users WHERE user_id = $_GET[uid]";
        $execute = mysqli_query($connection, $select_query);
        $display = mysqli_fetch_array($execute);
    ?>
    <form method="post">
        <input type="text" name="nameField" value="<?php echo $display['user_name'] ?>">
        <input type="text" name="emailField" value="<?php echo $display['user_email'] ?>">
        m 
        <button name="saveBtn">SAVE</button>
    </form>


</body>
</html>