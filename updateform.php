<?php
$servername = "sql303.epizy.com";
$username = "epiz_32958264";
$password = "biyvlnYKPfdQ";
$dbname = "epiz_32958264_datasantribaru";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$nohandphone = $_POST['NoHandphone'];
$tanggallahir = $_POST['TanggalLahir'];
$motivasi = $_POST['Motivasi'];



$sql="INSERT INTO `datasantribaru` ( `id`, `Nama`, `Alamat`, `Email`, `Password`, `No Handphone`, `Tanggal Lahir`, `Motivasi`) VALUES (NULL, '$nama', '$alamat', '$email', '$password', '$nohandphone', '$tanggallahir', '$motivasi')";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

$conn->close();


?>

