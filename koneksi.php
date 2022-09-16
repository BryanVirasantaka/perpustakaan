<?php
$conn=mysqli_connect('localhost','root','','perpus_php');
/*Check Connection */
if(mysqli_connect_error()){
    printf("Connect failed %s\n", mysqli_connect_error());
    exit();
}
?>