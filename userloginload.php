<?php
session_start();

$conn= mysqli_connect("localhost", "root","",'travel_and_tour');

//$conn=mysqli_select_db($con, 'travel_and_tour');

$email=$_POST['email'];
$password=$_POST['password'];

$query="select *from register where email='$email' and password='$password' ";

$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    setcookie('email',$email,time()+60*60*1);
    setcookie('pass',$password,time()+60*60*1);
    $row= mysqli_fetch_assoc($result);
    $_SESSION['username']= $row['username'];
    echo'success';
}
else{
    echo'error';
}

?>