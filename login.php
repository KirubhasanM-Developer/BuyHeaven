<?php


$c=$_POST['email'];
$m=$_POST['password'];

$con=mysqli_connect("localhost","root","","BuyHeavenContactDetails");


$sql="INSERT INTO LoginForm(email,password)  values('$c','$m')";


$r=mysqli_query($con,$sql);


if($r){
    echo"                  LOGIN SUCCESSFULLY ";

}
else{
    echo "             NOT LOGIN SUCCESSFULLY";
}





?>