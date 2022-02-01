<?php
$servername="localhost";
$user="root";
$password="";
$database="restaurant";

$conn=mysqli_connect($servername,$user,$password,$database);
if(!$conn)
{
    die("sorry failed to connect : ".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    th{
      color:white;
      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      
    }
    /* table{
        border-radius: 50%;
    } */
    </style>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
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
                <a class="nav-link active" href="/tryp/chefs.php">chefs details</a>
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




<?php
error_reporting(0);
?>
    <!-- chefs table -->
<div class="container ">
<h1 class="text-center text-white mt-5 pt-3">chef data</h3>
    <table class="table  table-striped">
   
        <thead class="table-dark" >
            
                <tr >
                    <th>s.no</th>
                    <th>Cook_id</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>salary</th>
                    <th>Gender</th>
                    <th>Bdate</th>
                    <th>Join_Date</th>
                    <th>Specialization</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
        </thead>
        <tbody>
            <?php


                $sql="SELECT * FROM `chef`";
                $result=mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                error_reporting(0);
                 if($num>0)
                 {
                    $val=0;
                    while($row=mysqli_fetch_assoc($result))
                    { 
                        $val=$val+1;
                       echo "
                       <tr class='text-muted'>
                       <td>".$val."</td>
                       <td>".$row['Cook_Id']."</td>
                       <td>".$row['Fname']."</td>
                       <td>".$row['Lname']."</td>
                       <td>".$row['Contact']."</td>
                       <td>".$row['Address']."</td>
                       <td>".$row['Salary']."</td>
                       <td>".$row['gender']."</td>
                       <td>".$row['Bdate']."</td>
                       <td>".$row['Join_Date']."</td>
                       <td>".$row['Specialization']."</td>>

                       <td><a class='btn btn-sm btn-primary' href='aupdate.php?id=$row[Cook_Id]&fn=$row[Fname]&ln=$row[Lname]&con=$row[Contact]&add=$row[Address]&Salary=$row[Salary]&gen=$row[gender]&Bdate=$row[Bdate]&jdate=$row[Join_Date]&spe=$row[Specialization]'>updata</a></td>
                   <td><a class='btn btn-sm btn-danger' type='submit' href='chefs.php?id=$row[Cook_Id]'>Remove</a></td>
                  
                       </tr>";
                     
    
    
    
    
                    }
                }
            ?>
        </tbody>


    </table>
            </div>
            <?php
            error_reporting(0);
            $id=$_GET['id'];
            $sql="DELETE FROM `chef` WHERE `chef`.`Cook_Id` = '$id'";
            $result=mysqli_query($conn,$sql);

            ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>