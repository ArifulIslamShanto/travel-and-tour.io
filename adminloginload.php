<?php

$conn= mysqli_connect("localhost", "root","",'travel_and_tour');

//$conn=mysqli_select_db($con, 'travel_and_tour');

$email=$_POST['email'];
$password=$_POST['password'];

$query="select *from admin where email='$email' and password='$password' ";

$result= mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
    echo'success';
}
else{
    echo'error';
}

?>