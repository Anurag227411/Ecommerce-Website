<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <?php
    include 'header.php';
?>

</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
       
       
     

  <h1 class="text-warning font-monospace text-center my-3">Laptop</h1>
  <?php
  include 'Config.php';
  $Record =mysqli_query($con, "select * from tblproduct");
while( $row=mysqli_fetch_array($Record)){

  $check_page = $row['PCategory'];
  if($check_page==='Laptop'){

  
    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3 '>
    <div class='card m-auto' style='width: 18rem;'>"?>
   <form action = 'Insertcart.php'method= 'POST'>
  <div class="container mx-3 mt-4">
    <img src='../admin/product/<?php echo $row['PImage']?>' width="200" height="200"></div>
    <div class='card-body text-center'>
      <h5 class='card-title text-danger fs-4 fw-bold'><?php $row["PName"]?></h5>
      <p class='card-text text-danger fs-4 fw-bold '><?php echo "Rs:" .$row['PPrice'];?></p>
     <?php echo " 
      <input type='hidden' name='PName' value = '$row[PName]'>
      <input type='hidden' name='PPrice' value = '$row[PPrice]'>
      
      <input type='number' name='PQuantity' value='min= '1'max = '20'' placeholder = 'Quantity'><br><br>
  
      <input type='submit' name='addCart' class = 'btn btn-danger text-white w-100' value= 'Add to cart'>
    </div>
    </form>
  </div>
  </div>
  ";
}
}
?>
  </div>  
    </div>
</div>
</body>
</html>