<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./class2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class 2</title>
</head>
<body>
    <header>
    <div class="header">
        <div class="logo">TARIQ.COM</div>
        <nav class='nav'>
            <ul>
                <li>Home</li>
                <li>About us</li>
                <li>contect</li>
            </ul>
        </nav>
        <button class="btn1">
            <button><a href="login.php">LOG IN</a></button>
        </button>
       </div>
    </header>
    <h1>class 2</h1>
    <ul>
        
        <h1>database<?php include_once "db.php"; ?></h1>
        <form action="insert.php" method ="POST">
            <div class="mainform">
                <div class="title">
                    <h1>LOG IN</h1>
                </div>
                <span>NAME</span>
                <input type="text" name="name" placeholder="ENTER NAME">
                <span>EMAIL</span>
                <input type="email" name="email" placeholder="ENTER EMAIL">
                <span>PASSWORD</span>
                <input type="password" name="password" placeholder="PASSWORD">
                <input type="hidden" name="id">
                <input type="submit" name="submit">            
            </div>
        </form>
        
    </ul>
    <?php 
    include_once "db.php";


    $sql='SELECT * FROM mydata ';
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0)
        while($row = mysqli_fetch_assoc($query)) {
            echo "<li>$row[ID] |$row[name] | $row[email] | $row[password] |
            <a href='delete.php?hello=$row[ID]'>Delete</a>
            <a href='edit.php?id=$row[ID]'>edite</a></li>";
        } else {
            echo "sorry";
        }; 
        
    
    ?>
</body>
</html>