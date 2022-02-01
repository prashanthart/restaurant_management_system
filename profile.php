<?php

$servername="localhost";
$username="root";
$password="";
$database="restaurant";

$conn=mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

}
session_start();
$email=$_SESSION['username'];
$sql="SELECT * FROM `signup` where email='$email'";
$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_assoc($result);
    $id=$row['id'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $date_time=$row['date_time'];

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
    

    <style>
        .h1{
            text-transform:capitalize;
        }
        
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark  mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="profile.php">Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/tryp/logout.php">logout</a>
        </li>
    </div>
        
        
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- $id=$row['id'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $date_time=$row['date_time']; -->
<?php 

// session_start();
// $email=$_SESSION['username'];
$sql="SELECT * FROM `signup` where email='$email'";
$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysqli_fetch_assoc($result);
    // $id=$row['id'];
    // $fname=$row['firstname'];
    // $lname=$row['lastname'];
    // $email=$row['email'];
    // $date_time=$row['date_time'];
    
echo "
<div class='container'>
    <div>
<h1 class='h1'>id : ".$row['id']."</h1>
<h1 class='h1'>firstname :  ".$row['firstname']."</h1>
<h1 class='h1'>lastname :  ".$row['lastname']."</h1>
<h1 class='h2'>Email :  ".$row['email']."</h1>
</div>
<td><a class='btn btn-sm btn-primary' href='update.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]&psw=$row[password]'>updata</a></td>
<td><a class='btn btn-sm btn-danger' type='submit' href='profile.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]' title='your acount will delete'>Remove</a></td>

</div>";
   

}

?>

 
<?php
                   //    if($_GET['submit'])
                   //    {
                   //        echo $id=$_GET['id'];
                   //    }
           
                   error_reporting(0);
            // if(isset($_POST['submit']))       
            
           $id=$_GET['id'];
           $fn=$_GET['fn'];
           $ln=$_GET['ln'];
           $em=$_GET['em'];
           $psw=$_GET['psw'];
           
           $sql="DELETE FROM `signup` WHERE `signup`.`id` = '$id'";
           $result=mysqli_query($conn,$sql);
           
    // header("location:home.php");
            


?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>