<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .text-light{
            color:#fff;
            text-decoration:none;
        }
        .oper{
          margin:0.5em;  
        }
        .oper button{
            float:left;
            margin-left:0.5em;
        }
        #download{
          float:right;
          margin-left:.5em;
          margin-top:3em;
        }
        #button{
          float:left;
        }
    </style>
</head>
<body>

   <div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
    <button class="btn btn-primary my-5" id='button'><a href="user.php" class="text-light">Add User</a></button>
    <form action="download.php" method="post">
       <button class="btn btn-primary" id='download' type='submit' name='download'><a href="download.php?format='PDF'" class="text-light">Download In Pdf</a></button>
      <button class="btn btn-primary" id='download' type='submit' name='download'><a href="download.php?format='XLS'" class="text-light">Download In Xls</a></button>
    </form>
<table class="table table-hoverable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Names</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
 $sql="SELECT * from people ;";
 $result=$con->query($sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['fullname'];
        $email=$row['email'];
        $mobile=$row['phone_number'];
        $gender=$row['gender'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$gender.'</td>
        <td class="oper">
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
    };
 }
?>
     
  </tbody>
</table>
   </div> 
</body>
</html>