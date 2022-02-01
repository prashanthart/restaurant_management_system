<?php
$servername="localhost";
$username="root";
$password="";
$database="restaurant";
// $database="prashanth";

$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
else{
    //echo "connection successfull<br>";
}
session_start();
$email= $_SESSION['username'];
$sql="SELECT * FROM `signup` where email='$email' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
for($i=0; $i<$num;$i++){
$row=mysqli_fetch_assoc($result);

echo "ename ".$row['email'];

}
// session_start();
// echo $_SESSION['username'];

?>