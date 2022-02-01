<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap CSS -->
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css.css"> -->
    

    <title>Document</title>
   
   
    <!-- <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->
    

    <style>
    .btn:hover{
        box-shadow:0px 0px 0px 3px gray;   
        
    }
    </style>





</head>
<body>
    <div class="container  my-5">
    <a class="btn btn-primary mb-2" type="button" href="/tryp/signup.php">add a person</a>
    <div class="row">
        <div class="col-md-12 table-responsive-md">
<table class="table table-striped" id="myTable">
    <thead class="table-info">
        <tr>
            <th>Sno.</th>
            <th>id</th>
            <th>First Name</th>
            <th>Second name</th>
            <th>Email</th>
            <th>Password</th>
            <th>date</th>
            <th>update</th>
            <th>delete</th>
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

            $sql="SELECT * FROM `signup`";
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
                   <td>".$row['firstname']."</td>
                   <td>".$row['lastname']."</td>
                   <td>".$row['email']."</td>
                   <td>".$row['password']."</td>
                   <td>".$row['date_time']."</td>
                   <td><a class='btn btn-sm btn-primary' href='update.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]&psw=$row[password]'>updata</a></td>
                   <td><a class='btn btn-sm btn-danger' type='submit' href='showsignup.php?id=$row[id]&fn=$row[firstname]&ln=$row[lastname]&em=$row[email]'>Remove</a></td>
                  
                   </tr>";
                 




                }
            }
            ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>
       
        <?php
                   //    if($_GET['submit'])
                   //    {
                   //        echo $id=$_GET['id'];
                   //    }
           
                   error_reporting(0);
           $id=$_GET['id'];
           $fn=$_GET['fn'];
           $ln=$_GET['ln'];
           $em=$_GET['em'];
           $psw=$_GET['psw'];
           
           $sql="DELETE FROM `signup` WHERE `signup`.`id` = '$id'";
           $result=mysqli_query($conn,$sql);
           
           
?>




        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
         <script>
              $(document).ready( function () {
    $('#myTable').DataTable();
            } ); -->
            
           



            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        





</body>
</html>






<!-- //SELECT * FROM `details` -->


