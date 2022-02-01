<?php
$servername="localhost";
$username="root";
$password="";
$database="restaurant";

$conn=mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("sorry failed to connect : " . mysqli_connect_error());

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
             /* background-image: url("https://www.itl.cat/pngfile/big/99-996466_background-images-for-restaurants.jpg") ;
             background-repeat: no-repeat;
             background-size: cover; */
             background-color: rgb(179, 174, 174);
   }
   tbody{
     background-color:white;
   }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="food_items.php">food items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="logout.php">logout</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





<!-- <h1>Food_Items<h1> -->

<div class="container my-3 pt-5">
  <h1>Food_Items</h1>
<table class="table table-striped" id="myTable">
    <thead class="table-info ">
        <tr>
            <th>Sno.</th>
            <th>id</th>
            <th>Item</th>
            <th>Type</th>
            <th>Category</th>
            <th>Price</th>
            <th>Select</th>
    
        </tr>
</thead>
     <tbody>
    
            <?php

           

            $sql="SELECT * FROM `menu`";
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
                $v=0;
                while($row=mysqli_fetch_assoc($result))
                { 
                    $value=$value+1;
                   echo "
                   <tr>
                   <td>".$value."</td>
                   <td>".$row['menu_id']."</td>
                   <td>".$row['name']."</td>
                  
                   
                   <td>".$row['type']."</td>
                   <td>".$row['category']."</td>
                   <td class='money'> &#8377;".number_format($row['price'])."</td>
                  <td><a href='payment.php?id=$row[menu_id]&name=$row[name]&type=$row[type]&cat=$row[category]&mon=$row[price]' class='btn btn-sm btn-primary'>select</a>
                  </td>
                   </tr>";
                }
            }
           
            ?>
            
        </tbody>
        </table>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

