<?php

try{
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . 
    ";dbname=". $dbname, $username,$pass);
    $koneksi->exec("set names utf8");

    $sql = "SELECT * FROM kursus";
    $result = $koneksi->query($sql)->fetch();
    
    var_dump($result);

}catch(PDOException $exception){
    echo "Database could not be connected: " . $exception->getMessage();
}

?>