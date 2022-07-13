
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
  <?php
  session_start();
  $count = 0;
  if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
  }
  $login=false;
if(isset($_SESSION['user'])){
  $login=true;
}
  
  ?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="logo.png" alt="" width="110px"></a>
    
    <div class="d-flex">
  
    <a href="index.php" class="text-warning test-decoration-none pe-2">Home</a>
    <a href="viewCart.php" class="text-warning test-decoration-none pe-2">Cart(<?php echo $count; ?>)|</a>
    <span class="text-warning pe-2">

    
    <?php
  if (isset($_SESSION['user'])){
    
    echo"
    <a href='logout.php'class='text-warning test-decoration-none pe-2'>Logout|</a>
    ";
  }if(!$login){
    ?>
    <a href="login.php"class="text-warning test-decoration-none pe-2">Login</a><?php }?>
    <!-- <a href="../admin/mystore.php"class="text-warning test-decoration-none pe-2">Admin</a> -->

    </span>
    </nav>
  </div>
  <div class="bg-danger font monospace">
      <ul class="list-unstyled d-flex justify-content-center">
          <li><a href="Laptop.php"class="test-decoration-none text-white fw-bold fs-4 px-5">LAPTOP</a></li>
          <li><a href="Mobile.php"class="test-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
          <li><a href="Bag.php"class="test-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
          
</ul>
</div>
</body>
</html>