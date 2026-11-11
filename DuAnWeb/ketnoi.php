<?php
// Kết nối
$conn = mysqli_connect("localhost", "root", "", "online_shop");
 
if (!$conn) {
    die("kết nối thất bại   ". mysqli_connect_error());
}