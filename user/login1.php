
<?php
$Name=$_POST['name'];
$Password=$_POST['password'];

$Con = mysqli_connect('localhost','root','','ecommerce');
$result = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE (UserName = '$Name' OR Email = '$Name') AND Password = '$Password'");

if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['user']=$Name;

    // echo"
    // <script>
    // alert('Successfully Login');
    // windo.location.href='../index.php';
    // </script>

    // ";
    header('location:index.php');
}
else{
    echo"
    <script>
    alert('incorrect email/username/password');
    windo.location.href='login.php';
    </script>
";
}
?>