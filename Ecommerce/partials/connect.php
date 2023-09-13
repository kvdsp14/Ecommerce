<?php
$con = new mysqli("localhost" , "root" ,"" , "ecommerceWebsite");

if($con){
    echo "conncetion is succesful";
}
else{
    die(mysqli_error());
}

?>