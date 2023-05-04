<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./homepage.css">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <h1>Login</h1>
<form method='post'>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name='email'>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name='password'>
    </div>
  </div>
  <div>
    <p>Don't have an acount?<a href="user.php" class='link' style='text-decoration:none;'>Signup</a></p>
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Login</button>
</form>
</div>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        //retrive the user's input
        $sql="SELECT email,password FROM people WHERE email='$email' ";
        $result=$con->query($sql);
        if($result->num_rows>0){
            $row=mysqli_fetch_assoc($result);
            $emaildb=$row['email'];
            $password_hash=$row['password']; 
        } else{
            echo "The user doesn't exist";
        }
      
        //validate the user's credintials
        

        if(password_verify($pass,$password_hash)){
            // start a new session

            session_start();
            //set session variable

            $_SESSION['email']=$email;

            //redirect the user to the homepage

            header('location:display.php');
        }else{
            //Display an error message
          echo "<p>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>