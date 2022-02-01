<?php
// $servername="localhost";
// $username="root";
// $password="";
// $database="restaurant";

// $conn = mysqli_connect($servername, $username, $password,$database);

// if(!$conn){
//     die("sorry failed to connect : " . mysqli_connect_error());

// }
// else{
   
//     //echo "connection successfull<br>";
// }
// error_reporting(0);
// $id=$_GET['id'];
// $sql = "SELECT * FROM `itemlist` where id='$id'";
// $result=mysqli_query($conn,$sql);
// $num=mysqli_num_rows($result);
// for($i=0;$i<$num;$i++)
// {
//     $row=mysqli_fetch_assoc($result);
//     $id=$row['id'];
//     $uname=$row['firstname'];
//     $lname=$row['lastname'];
//     $email=$row['email'];
//     $date_time=$row['date_time'];

// }
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
        
    body{
        background-color:rgb(105, 94, 94);
    }
    td{
        color:white;
    }
    table{
        box-shadow: 0px 0px 12px 3px red ;
    }
    </style>
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
                <a class="nav-link" href="/tryp/ahome.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/tryp/chefs.php">chefs details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tryp/achef.php">add chef</a>
              </li>
          <li class="nav-item">
            <a class="nav-link " href="/tryp/aupdate.php">update chef</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tryp/customer.php">customer details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="#">->more details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tryp/logout.php">logout</a>
          </li>
         
          
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
















<div class="container">

<table class="table table-striped" id="myTable">
    <thead class="table-info">
        <tr>
            <th>Sno.</th>
            <th>id</th>
            <th>Item_Id</th>
            <th>username</th>
            <th>Item_name</th>
            <th>Type</th>
            <th>category</th>
            <th>Amount_Payed</th>
            
        </tr>
</thead>
     <tbody>
            <?php

            $servername="localhost";
            $username="root";
            $password="";
            $database="restaurant";

            $conn=mysqli_connect($servername,$username,$password,$database);

            if(!$conn)
            {
                die("sorry failed to connect : ".mysqli_connect_error());
            }
            else
            {
               // echo "connected successfully";
            }

            error_reporting(0);
            $id=$_GET['id'];
            $sql = "SELECT * FROM `itemlist` where id='$id'";
            $result=mysqli_query($conn,$sql);

            //find the number of records returne
            $num = mysqli_num_rows($result);
           // echo $num."<br>";

            if($num>0)
            {
                // $row = mysqli_fetch_assoc($result);
                // echo var_dump($row);
                // echo '<br>';
                $value=0;
                while($row=mysqli_fetch_assoc($result))
                { 
                    $value=$value+1;
                   echo "
                   <tr>
                   <td>".$value."</td>
                   <td>".$row['id']."</td>
                   <td>".$row['item_id']."</td>

                   <td>".$row['username']."</td>
                   <td>".$row['item_name']."</td>
                   <td>".$row['type']."</td>
                   <td>".$row['cat']."</td>
                   <td>".$row['money']."</td>

                  
                   </tr>";
                 




                }
            }
            ?>
        </tbody>
        </table>
        </div>


















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        


</body>
</html>