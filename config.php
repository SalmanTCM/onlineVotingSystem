<?php

$con=new mysqli("localhost","root","password","votingsystem");
if(!$con){
    die(mysqli_error($con));
}
?>