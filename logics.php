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