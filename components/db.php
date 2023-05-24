


<?php 

$host="localhost";
$username="root";
$password="";
$dbname="tariqprogrammer";

$con=mysqli_connect($host,$username,$password,$dbname);

if($con){
    echo "CONNECTED ";
}else{
    echo "NOT CONNECTED OOOPS";
}



?>