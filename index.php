<?php

$n=$_POST['name'];
$c=$_POST['email'];
$m=$_POST['msgContent'];

$con=mysqli_connect("localhost","root","","BuyHeavenContactDetails");


$sql="INSERT INTO ContactForm(name,email,msgContent)  values('$n','$c','$m')";


$r=mysqli_query($con,$sql);


if($r){
    echo" CONTACT DETAILS ADDED SUCCESSFULLY ";

}
else{
    echo " CONTACT DETAILS NOT ADDED SUCCESSFULLY";
}





?>