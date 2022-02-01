<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    .btn:hover{
        box-shadow:0px 0px 0px 3px gray;   
        
    }


    </style>





</head>
<body>
    <div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>sno</th>
            <th>name</th>
            <th>email</th>
            <th>concern</th>
            <th>dt</th>
            <th>update</th>
            <th>delete</th>
        </tr>
</thead>
     <tbody>
            <?php

            $servername="localhost";
            $username="root";
            $password="";
            $database="contacts";

            $conn=mysqli_connect($servername,$username,$password,$database);

            if(!$conn)
            {
                die("sorry failed to connect : ".mysqli_connect_error());
            }
            else
            {
                echo "connected successfully";
            }

            $sql="SELECT * FROM `contactus`";
            $result=mysqli_query($conn,$sql);

            //find the number of records returne
            $num = mysqli_num_rows($result);
            echo $num."<br>";

            if($num>0)
            {
                // $row = mysqli_fetch_assoc($result);
                // echo var_dump($row);
                // echo '<br>';

                while($row=mysqli_fetch_assoc($result))
                {
                   echo '
                   <tr>
                   <td>'.$row['sno'].'</td>
                   <td>'.$row['name'].'</td>
                   <td>'.$row['email'].'</td>
                   <td>'.$row['concern'].'</td>
                   <td>'.$row['dt'].'</td>
                   <td><a class="btn btn-sm btn-primary">updata</a></td>
                   <td><a class="btn btn-sm btn-danger">Remove</a></td>
                  
                   </tr>
                   ';

                }
            }

            ?>


        </tbody>
        </table>
 
        <a class="btn btn-primary mx-auto" type="button" href="/tryp/form_post.php">add a person</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>






<!-- //SELECT * FROM `details` -->


