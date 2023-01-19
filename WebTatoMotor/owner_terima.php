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

$query = "UPDATE penjualan set status_motor='belum terjual'
WHERE id_motor = $id_motor";
$result = mysqli_query($con,$query);
echo "
<script type='text/javascript'>
function load(){
   window.location='owner_index.php';
}
setTimeout('load()',100);
</script>"
?>