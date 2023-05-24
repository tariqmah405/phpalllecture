<?php
session_start(); 
if (!isset($_SESSION['name'])) {
    header('location:login.php');
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./testapp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php 
    include_once "db.php"; ?>
    <h1>Welocme
        <?php 
        // session_start();
        if(isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        ?>
    </h1>
<ul>

    <?php 

    include_once "db.php";



    $sql='SELECT * FROM mydata';
    $query = mysqli_query($con, $sql);
    if (mysqli_num_rows($query) > 0)
    while($row = mysqli_fetch_assoc($query)) {
        echo "<li>$row[ID] | $row[name] | $row[email] | $row[password]</li>";
    } else {
        echo "sorry";
    }; 
    ?>

</ul>




    <!-- // $conect = "testapp.php";

    // if ($conect) {
    //     echo "data conected";
    // }else {
    //     echo "data not conceted";
    // }; -->
    
    <h1>my php class</h1>
    <div class="main">

        <div class="grid3">
            <div class="box">
                <h3>london </h3>
                <p>my new php test app</p>
                <button>
                    view detailes
                </button>
            </div>
        </div>
        <div class="grid3">
            <div class="box">
                <h3>london </h3>
                <p>my new php test app</p>
                <button>
                    view detailes
                </button>
            </div>
        </div>
        <div class="grid3">
            <div class="box">
                <h3>london </h3>
                <p>my new php test app</p>
            <button>
                view detailes
            </button>
        </div>
    </div>
</div>
<a href="logout.php">LOG OUT</a>
</body>
</html>