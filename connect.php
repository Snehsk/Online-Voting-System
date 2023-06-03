<?php

$connect = mysqli_connect("localhost","root", "", "voting") or die("connection failed!");
'if($connect){
    echo "Connected!";
}
else{
    echo "Not Connected!";
}'

?>