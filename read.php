<?php
    include("config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
            $select_query = "SELECT * FROM users";
            $execute = mysqli_query($connection, $select_query); 
            while($display = mysqli_fetch_array($execute)){
        ?>
        <tr>
            <td> <?php echo $display['user_id']  ?>  </td>
            <td> <?php echo $display['user_name']  ?>   </td>
            <td>  <?php echo $display['user_email']  ?>   </td>
            <td>
                <button>
                    <a href="update.php?uid=<?php echo $display['user_id']?>">Edit</a>
                </button>
                <button>
                    <a href="">Delete</a>
                </button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>


</body>
</html>