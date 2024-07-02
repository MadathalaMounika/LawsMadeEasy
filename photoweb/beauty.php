<?php
$server="localhost";
    $user="root";
    $password="";
    $dbname="login_db";
    $port=4306;
    $con =mysqli_connect($server,$user,$password,$dbname,$port);
    if(!$con)
    {
        die("Error : :  ".mysqli_connect_error());}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];
//$email=$_REQUEST['email'];
//$phno=(float)$_REQUEST['phone'];
 $query = "INSERT INTO form VALUES('$name','$password')";
mysqli_query($con,$query);
$query1="select * from form";
$result = mysqli_query($con,$query1);
}
$con->close();
?>