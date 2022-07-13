

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Register</title>
  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5 m-auto bg white shadownfont-monospace border border-info">
        <p class="text-warning text-center fs-3 fw-bold my-3"> User Register</p>
        <form action="insert.php" method="POST">
        <div class="mb-3">
        <label for="">UserName:</label>
        <input type="text" name="name" Placeholder="Enter user Name" class="form-control">
        </div>
        <div class="mb-3">
        <label for="">UserEmail:</label>
        <input type="email" name="email"  Placeholder="Enter user Email" class="form-control">
        </div>
        <div class="mb-3">
        <label for="">UserNumaber:</label>
        <input type="number" name="number"  Placeholder="Enter user Numaber" class="form-control">
        </div>
        <div class="mb-3">
        <label for="">Userpassword:</label>
        <input type="Password" name="password" Placeholder="Enter user Password" class="form-control">
        </div>
        <div class="mb-3">
        <button name="submit" class="w-100 bg-warning fs-4 text-white">REGISTER</button>
        </div>
        <div class="mb-3">
        <button class="w-100 bg-danger fs-4 text-white"><a href="login.php" class="text-decoration text-white"> ALREADY ACCOUNT</a></button>
        </div>
</form>
</div>
</div>
</div>
</body>
</html>