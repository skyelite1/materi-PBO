<?php
    $id = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];

     $koneksi = new PDO("mysql:host=localhost;dbname=pwpb;",'root','');

     $koneksi->query("INSERT INTO `data`(`id`, `username`, `password`) VALUES ('$id','$username','$password')");
?>