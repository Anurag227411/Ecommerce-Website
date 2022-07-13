<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:login.php");
}
?>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand"><h2> Mystore</h2></a>
    <span>
      Hello, |
      <?php echo $_SESSION['admin']; ?>
      <a href="logout.php"
      class="text-decoration-none text-white"> Logout</a> |
      <a href="" class="text-decoration-none text-white"> Userpanel</a>


</span>
  
  </div>
</nav>
<div>
    <h2 class = "text-center"> Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto"> 
    <a href="product/index.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post </a>
    <!-- it is use for user panel -->
    <!-- <a href=""class="text-white text-decoration-none fs-4 fw-bold px-5"> Users</a> -->

</div>


</body>
</html>

