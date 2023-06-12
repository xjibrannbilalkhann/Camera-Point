<?php
include 'database.php';
if(isset($_Post['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$province=$_POST['province'];
// $chk="";
// foreach ($province as $chk1)
// {
//     $chk.=$chk1.",";
// }

$sql ="insert into signup(name, email, password, mobile, city, province) values('$name','$email','$password','$mobile','$city','$province')";
if(mysqli_query($con,$sql))
{
    echo "<script>alert ('signed up')</script>";
    // echo "<script>window.open('signup.php','_self'>/script>" ;
}
else{
    echo "error: ".mysqli_error($con);
}
mysqli_close($con);
}
?>
