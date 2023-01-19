
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

    <div class="row row-whith-wide-cards mt-5">
      <div class="col-12">
        <div class="card">          
          <div class="card-body text-center">            
            <p class="card-text">
            <span class="fas fa-check-circle fa-lg mb-4" aria-hidden="true" style="color:green;font-size:35px;"></span><br>
            <strong class="mt-2">Motor Anda Berhasil Di Terima </strong></br>
            Silahkan Hubungi Kontak Tato Motor Untuk Informasi Lebih Lanjut </br>
            Atau Datang Langsung Ke Dealer Untuk Dicek Motornya
            </p>
            <div class="col-sm-12 text-center">
                <a  role="button" type="button" class="btn btn-light" aria-label="Right Align"><span class="fa fa-whatsapp fa-lg" aria-hidden="true"></span> 0895-3800-3642-1</a>
                <a  role="button" href="user_daftar.php" type="button" class="btn btn-light" aria-label="Right Align"><span class="fa fa-phone" aria-hidden="true"></span> 0815-4218-6181</a>
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