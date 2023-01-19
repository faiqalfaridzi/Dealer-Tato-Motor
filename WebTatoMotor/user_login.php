<?php require 'connect_db.php'; ?>
<?php 
	session_start();
	if(isset($_SESSION['status'])){
		header("location:user_jual.php");
	}
?>
<?php 
   if(isset($_GET['pesan'])){
   	if($_GET['pesan'] == "gagal"){
   		echo '<script type="text/javascript">alert("Username atau Password Salah");</script>';
   	}else if($_GET['pesan'] == "logout"){
   		echo '<script type="text/javascript">alert("Berhasil Logout");</script>';
   	}else if($_GET['pesan'] == "belum_login"){
   		echo '<script type="text/javascript">alert("Silahkan Login Dulu");</script>';
   	}
   }
   ?>

<?php 
include('komponen/head.php');
?>
<style>
.row-whith-wide-cards .card {
  width: 100%;  
}
.card { background-color: rgba(245, 245, 245, 0.7); }
.card-header, .card-footer { opacity: 1}

#btn1,
#btn2{
    display: inline-block;
    vertical-align: top;
}
</style> 
<main>
  <div class="container">

    <div class="row row-whith-wide-cards mt-5 d-flex align-items-center justify-content-center">
      <div class="col-6">
        <div class="card">          
          <div class="card-body text-center">
            <form method="post" action="cek_login.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="username" class="form-label"><strong>Login User</strong></label>
                <input type="username" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Username">    
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
              </div>
              <div class="col-sm-12 text-center">
                <input id="btn1" type="submit" name="submit" value="Login" class="btn btn-secondary btn-md center-block font-weight-bold"  Style="width: 150px;background-color: rgba(32, 48, 103, 1);"></input>
                
                <a role="button" id="btn2"  href="user_daftar.php" class="btn btn-secondary btn-md center-block ml-3 font-weight-bold" Style="width: 150px;background-color: rgba(237, 178, 62, 1);" OnClick="btnClear_Click" >Daftar</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php 
include('komponen/bottom.php');
?>