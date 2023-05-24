<?php 



session_start();

if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}








    include_once "db.php";
    
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        $sql2 = "INSERT INTO mydata(name, email, password) VALUES ('$name' , '$email', '$password')";
        $query2 = mysqli_query($con, $sql2);


        if ($query2) {
            header("location: class2.php");
        }else {
            echo "data not inserted";
        }
    }
    ?>