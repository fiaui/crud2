<?php
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$db = new PDO("mysql:host=localhost;dbname=sekolah3", 'root', '');
$query = $db->query("INSERT INTO siswa VALUES('', '$nama', '$kelas')");

if($query){
    header("location:index.php");
}