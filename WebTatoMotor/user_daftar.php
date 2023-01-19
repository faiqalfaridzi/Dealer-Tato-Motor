<?php require 'connect_db.php'; ?>
<?php 
	session_start();
	if(isset($_SESSION['status'])){
		include('komponen/head_sess.php');
	}
  else{
    include('komponen/head.php');
  }
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
  <?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = rtrim($username);

        $password = $_POST['password'];
        $password = rtrim($password);

        $no_telp = $_POST['no_telp'];
        $no_telp = rtrim($no_telp);

        $status = "user";
        $status = rtrim($status);
               
        
        $query = "INSERT INTO user(username,no_telp,password,status) values('$username','$no_telp','$password','$status')";
        $result = mysqli_query($con,$query);
        echo "
        <script type='text/javascript'>
        function load(){
          window.location='user_login.php';
        }
        setTimeout('load()',100);
        </script>
        ";
    }?>
    <div class="row row-whith-wide-cards mt-5 d-flex align-items-center justify-content-center">
      <div class="col-6">
        <div class="card">          
          <div class="card-body text-center">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="username" class="form-label"><strong>Daftar User</strong></label>
                <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username">    
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="no_telp" aria-describedby="no_telp" placeholder="No. Telp">    
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="col-sm-12 text-center">
              <input id="btn2" type="submit" name="submit" value="Submit" class="btn btn-secondary btn-md center-block font-weight-bold"  Style="width: 150px;background-color: rgba(32, 48, 103, 1);">
                <a role="button" href="index.php" id="btn2" class="btn btn-secondary btn-md center-block ml-3 font-weight-bold" Style="width: 150px;background-color: rgba(237, 178, 62, 1);" >Batal</a>
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