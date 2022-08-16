<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $db->query("DELETE FROM siswa WHERE id='$id'");

if($query){
    header("location:index.php");
}