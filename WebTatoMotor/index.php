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
body {
  background-image: url('assets/img/bg.jpg');
  background-repeat: no-repeat;
}
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

    <div class="row row-whith-wide-cards mt-5">
      <div class="col-12">
        <div class="card">          
          <div class="card-body text-center">
            <p class="card-text" style="opacity:100%;"><strong>Selamat Datang di Dealer Motor Bekas Tato Motor</strong></p>
            <p class="card-text">Dealer Motor Bekas Tato Motor Merupakan Tempat dimana anda bisa menjual
                atau membeli motor, yang berlokasi di purwokerto, Dealer ini hanya menjual atau membeli motor
                yang berasal dari Purwokerto dan sekitarnya, terdapat berbagai motor bekas berbagai merek dengan kondisi
                siap pakai, istimewa, dan no minus
            </p>
            <div class="col-sm-12 text-center">
                <p><strong>Keperluan ?</strong></p>
                <a role="button" href="user_login.php" id="btnjual" class="btn btn-light btn-md center-block font-weight-bold" Style="width: 150px;background-color: rgba(245, 245, 245, 0.7);" >Jual</a>
                <a role="button" href="user_beli.php" id="btnbeli" class="btn btn-light btn-md center-block ml-3 font-weight-bold" Style="width: 150px;background-color: rgba(245, 245, 245, 0.7);" >Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php 
include('komponen/bottom.php');
?>