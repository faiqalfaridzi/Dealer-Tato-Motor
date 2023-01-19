<?php require 'connect_db.php'; ?>
<?php 
// mengaktifkan session php
session_start();

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){	
	$uraidata = mysqli_fetch_array($data);
	$level = $uraidata['status']; //

	if($level === 'owner'){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "owner";
		header("location:owner_index.php");		
	}
	else{
        header("location:owner_login.php?pesan=gagal");
	}
}
else{
	header("location:owner_login.php?pesan=gagal");
}
?>