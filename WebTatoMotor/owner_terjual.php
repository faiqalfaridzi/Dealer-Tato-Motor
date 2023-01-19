<?php require 'connect_db.php'; ?>

<?php 
include('komponen/head_owner_sess.php');
?>

<?php 
$id_motor     = $_GET['id_motor'];
$query  = "SELECT * FROM penjualan WHERE id_motor=$id_motor";
$result  = mysqli_query($con,$query);
$results = mysqli_fetch_assoc($result);

$query = "UPDATE penjualan set status_motor='terjual'
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