<?php require 'connect_db.php'; ?>

<?php 
	session_start();
	if($_SESSION['status']!="owner"){
		header("location:owner_login.php?pesan=belum_login");
	}
?>

<?php 
$id_motor     = $_GET['id_motor'];
$query  = "SELECT * FROM penjualan WHERE id_motor=$id_motor";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

unlink($results['gambar_1_motor']);
unlink($results['gambar_2_motor']);
$query      = "DELETE FROM penjualan WHERE id_motor=$id_motor";

mysqli_query ($con,$query);
header ('location:owner_index.php');
?>