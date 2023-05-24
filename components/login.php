

<h1><?php
session_start();
if(isset($_SESSION['name'])) {
    header("location:testapp.php");
}

include_once"db.php";
?></h1>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./class2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$NameError = "";
$EmailError = "";
$PasswordError = "";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql ="SELECT * FROM `mydata` WHERE name='$name' AND email = '$email' AND password='$password'";
    $query =mysqli_query($con, $sql); 

    if(empty($name) || empty($email) || empty($password)) {
        $NameError = "ENTER YOUR SET NAME";
        $EmailError = "ENTER YOUR SET EMAIL";
        $PasswordError = "ENTER YOUR SET PASSWORD";
    }else {
        if(mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];

            }
            
            header("location:testapp.php");
        }
        else {
            echo "NOT RESULT FOUND";
        }
    }



}
?>

<form action="login.php" method ="POST">
            <div class="mainform">
                <div class="title">
                    <h1>LOG IN</h1>
                </div>
                <span>NAME</span>
                <input type="text" name="name" placeholder="ENTER NAME">
                <?php echo $NameError; ?>
                <span>EMAIL</span>
                <input type="email" name="email" placeholder="ENTER EMAIL">
                <?php echo $EmailError; ?>
                <span>PASSWORD</span>
                <input type="password" name="password" placeholder="PASSWORD">
                <?php echo $PasswordError; ?>
                <input type="hidden" name="id">
                <input type="submit" name="submit">            
            </div>
        </form>
</body>
</html>










