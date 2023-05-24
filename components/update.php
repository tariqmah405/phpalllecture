

<?php 
include_once"db.php";

if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ID = $_POST['ID'];
    echo $ID;
    $sql2 = "UPDATE `mydata` SET `name`='$name', `email`='$email', `password`='$password' WHERE ID = $ID";
    $query2 = mysqli_query($con, $sql2);

    if($query2) {
        header("location: class2.php");
    }else {
        echo "DATA NOT INSERTED";
    }
}


?>

