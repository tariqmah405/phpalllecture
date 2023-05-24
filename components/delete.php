

<?php include_once "db.php";

$ID = $_GET["hello"];
$sql = "DELETE FROM `mydata` WHERE id = '$ID' ";

$query = mysqli_query($con, $sql);

if($query) {
    header("location:class2.php");
}

?>