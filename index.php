<?php
$baglan = mysqli_connect("localhost", "root", "", "surucu_kurs");

if(!$baglan){
    die("connection failed:" . mysqli_connect_error());
}else{
    echo "connection successful";
}


?>