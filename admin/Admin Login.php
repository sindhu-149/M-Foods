<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8ed35a3507.js" crossorigin="anonymous"></script>
</head>
<style>
    .panel{
        height: 500px;
        width:  500px;
        margin: 350px 200px 200px 700px
    }
    </style>
<body>

<?php 

session_start();
$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error())
{
    echo "<script>
        alert('Cannot connect to database');
        window.location.href='mycart.php';
        </script>";
        exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo "<script>
                alert('Login Successfull');
                window.location.href='Admin Panel.php';
                </script>
                ";
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
}
?>

<form class="panel" method="POST">

<h1 class="text-center">Admin Login</h1>
<br>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="username" name="username" id="form2Example1" class="form-control" placeholder="Username" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" />
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

</form>
</body>
</html>