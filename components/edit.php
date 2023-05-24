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
    include_once "db.php";
    
    $ID= $_GET["id"];
    
    $sql = "SELECT * FROM mydata WHERE ID = '$ID'";
    $query = mysqli_query($con, $sql);
    
    ?>
    
    
    <?php while( $row = mysqli_fetch_assoc($query)) { ?>
    
        <form action="update.php" method="POST">
                <div class="mainform">
                    <div class="title">
                        <h1>LOG IN</h1>
                    </div>
                    <span>NAME</span>
                    <input type="text" name="name" placeholder="ENTER NAME" value="<?php echo $row['name']; ?>">
                    <span>EMAIL</span>
                    <input type="email" name="email" placeholder="ENTER EMAIL" value="<?php echo $row['email']; ?>">
                    <span>PASSWORD</span>
                    <input type="password" name="password" placeholder="PASSWORD" value="<?php echo $row['password']; ?>">
                    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                    <input type="submit" name="submit">            
                </div>
            </form>
    
    <?php } ?>
    
</body>
</html>










