<?php
$conn=new mysqli("localhost","root","","electronic_store");
if(isset($_POST['submit'])){
$username=$_POST['username'];
$mobile_nbr=$_POST['number'];
$password=$_POST['pswd'];

$sql="INSERT INTO login VALUES('','$username','$mobile_nbr','$password')";

$result=mysqli_query($conn,$sql);
if(!$result){
    die('Failed to connect');
}else{
    echo"Connection successfully";
}
}
?>