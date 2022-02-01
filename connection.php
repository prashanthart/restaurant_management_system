<?php
$servername="localhost";
$username="root";
$password="";
$database="prashanth";
// $database="prashanth";

$conn = mysqli_connect($servername, $username, $password,$database);




if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
else{
    echo "connection successfull<br>";
}
$sql="CREATE DATABASE dbprashanth1";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo "db was created <br>";
   
}
else{
    echo "db already exist<br>".mysqli_error($conn);
}
echo "<br>";
// $sql="CREATE TABLE `phptrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

$n="nani";
$p="hyd";
$sql="insert into `phptrip` (`name`,`dest`) values ('$n','$p')";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "the inserted into table<br>";
}
else{
    echo "not inserted created <br>".mysqli_error($conn);
}

?>