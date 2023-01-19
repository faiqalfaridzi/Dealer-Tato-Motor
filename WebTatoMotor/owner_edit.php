<?php require 'connect_db.php'; ?>
<?php 
    include('komponen/head_owner_sess.php');
?>
<?php 
    if($_SESSION['status']!="owner"){
        header("location:owner_login.php");}
    
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
	if (!$_GET) {
		}
	else{ 
		$id_motor     = $_GET['id_motor'];
		$query  = "SELECT * FROM penjualan WHERE id_motor=$id_motor";
		$result  = mysqli_query($con,$query);
		$results = mysqli_fetch_assoc($result);
	}
	?>
  <?php 
    if(isset($_POST['update'])){
        $username = $results['username'];
        $username = rtrim($username);
        
        $nama_motor = $_POST['nama_motor'];
        $nama_motor = rtrim($nama_motor);
        
        $harga_motor = $_POST['harga_motor'];
        $harga_motor = rtrim($harga_motor);
        
        $kelengkapan_motor = $_POST['kelengkapan_motor'];
        $kelengkapan_motor = rtrim($kelengkapan_motor);

        $pajak_motor = $_POST['pajak_motor'];
        $pajak_motor = rtrim($pajak_motor);

        $kondisi_motor = $_POST['kondisi_motor'];
        $kondisi_motor = rtrim($kondisi_motor);

        $kilometer_motor = $_POST['kilometer_motor'];
        $kilometer_motor = rtrim($kilometer_motor );

        $transmisi_motor = $_POST['transmisi_motor'];
        $transmisi_motor = rtrim($transmisi_motor);

        $plat_motor = $_POST['plat_motor'];
        $plat_motor = rtrim($plat_motor );

        $alamat_motor = $_POST['alamat_motor'];
        $alamat_motor = rtrim($alamat_motor );
        
        $status_motor = $results['status_motor'];
        $status_motor = rtrim($status_motor );
        
        $gambar1_tmp = $_FILES['gambar_1_motor']['tmp_name'];
        $gambar1_name = $_FILES['gambar_1_motor']['name'];   
		if($gambar1_name === ''){                                            
			$gambar1_namanya = $results['gambar_1_motor'];}
		else{
			$file = $results['gambar_1_motor'];
			$gambar1_destination = 'data_gambar/'.date('Ymdhi') . $gambar1_name;
			$gambar1_namanya = 'data_gambar/'.date('Ymdhi') . $gambar1_name; 
			move_uploaded_file($gambar1_tmp, $gambar1_destination);                                              
		}
		
     
        
        $gambar2_tmp = $_FILES['gambar_2_motor']['tmp_name'];
        $gambar2_name = $_FILES['gambar_2_motor']['name'];    
		if($gambar1_name === ''){                                            
			$gambar2_namanya = $results['gambar_2_motor'];}
		else{
			$file = $results['gambar_2_motor'];
			$gambar2_destination = 'data_gambar/'.date('Ymdhi') . $gambar2_name;
			$gambar2_namanya = 'data_gambar/'.date('Ymdhi') . $gambar2_name; 
			move_uploaded_file($gambar2_tmp, $gambar2_destination);                                         
		}                                                   
                
		$query = "UPDATE penjualan set username='$username', nama_motor='$nama_motor', harga_motor='$harga_motor',
		kelengkapan_motor='$kelengkapan_motor', pajak_motor='$pajak_motor', kondisi_motor='$kondisi_motor',
		kilometer_motor='$kilometer_motor', transmisi_motor='$transmisi_motor', plat_motor='$plat_motor',
		alamat_motor='$alamat_motor', status_motor='$status_motor', gambar_1_motor='$gambar1_namanya',gambar_2_motor='$gambar2_namanya'
		WHERE id_motor = $id_motor";
		$result = mysqli_query($con,$query);
        echo "
        <script type='text/javascript'>
        function load(){
          window.location='owner_index.php';
        }
        setTimeout('load()',100);
        </script>
        ";
    }
    ?>
    <div class="row row-whith-wide-cards mt-5 d-flex align-items-center justify-content-center">
      <div class="col-8">
        <div class="card">          
          <div class="card-body text-center">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col">            
                  <div class="form-group">
                    <label for="exampleFormControlFile1"><b>Upload Foto Motor 1</b></label><br/>
                    <img id="thumbnil" src="<?php echo $results['gambar_1_motor']; ?>" class="img-fluid" ><br/>
                    <input type="file" class="form-control-file mt-2" name="gambar_1_motor" onchange="showMyImage(this)" value="<?php $results['gambar_1_motor']; ?>" id="exampleFormControlFile1">
                  </div>
                </div>
                <div class="col">  
                  <div class="form-group">
                    <label for="exampleFormControlFile1"><b>Upload Foto Motor 2</b></label><br/>
                    <img id="thumbnil1"  src="<?php echo $results['gambar_2_motor']; ?>" class="img-fluid" ><br/>
                    <input type="file" class="form-control-file mt-2" name="gambar_2_motor" onchange="showMyImage1(this)" value="<?php $results['gambar_2_motor']; ?>" id="exampleFormControlFile1">
                  </div>  
                </div>   
              </div>                     
              <div class="mb-3">                
                <input type="text" class="form-control" id="nama_motor" name="nama_motor" value="<?php echo $results['nama_motor']; ?>" placeholder="Nama Motor" required>    
              </div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="harga" name="harga_motor" value="<?php echo $results['harga_motor']; ?>" placeholder="Harga" required>    
              </div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="kelengkapan" name="kelengkapan_motor" value="<?php echo $results['kelengkapan_motor']; ?>" placeholder="Kelengkapan" required>    
              </div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="pajak" name="pajak_motor" value="<?php echo $results['pajak_motor']; ?>" placeholder="Pajak" required>    
              </div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="kondisi" name="kondisi_motor" value="<?php echo $results['kondisi_motor']; ?>" placeholder="Kondisi" required>    
              </div>
			  <div class="mb-3">                
                <input type="text" class="form-control" id="kilometer_motor" name="kilometer_motor" value="<?php echo $results['kilometer_motor']; ?>" placeholder="Kilometer" required>    
              </div>
			  <div class="form-group">
				<select id="transmisi_motor" name="transmisi_motor" class="form-control">
				<?php
					$datas = array('-', 'Matic', 'Manual');
					$current_datas = $results['transmisi_motor'];
					
					foreach($datas as $data) {
						if($data == $current_datas) {
						echo '<option selected="selected">'.$data.'</option>';
						} else {
						echo '<option>'.$data.'</option>';
						}
					}
					?>
				</select>                                                                                                                                                                                   
			</div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="plat" name="plat_motor" value="<?php echo $results['plat_motor']; ?>" placeholder="Plat" required>    
              </div>
              <div class="mb-3">                
                <input type="text" class="form-control" id="alamat" name="alamat_motor" value="<?php echo $results['alamat_motor']; ?>" placeholder="Alamat" required>    
              </div>
              <div class="col-sm-12 text-center">
                <input id="btn2" type="submit" name="update" value="Update" class="btn btn-secondary btn-md center-block font-weight-bold"  Style="width: 150px;background-color: rgba(32, 48, 103, 1);">
                <a role="button" href="owner_index.php" id="btn2" class="btn btn-secondary btn-md center-block ml-3 font-weight-bold" Style="width: 150px;background-color: rgba(237, 178, 62, 1);" >Batal</a>
            </div>              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
    function showMyImage(fileInput) {
           var files = fileInput.files;
           for (var i = 0; i < files.length; i++) {           
               var file = files[i];
               var imageType = /image.*/;     
               if (!file.type.match(imageType)) {
                   continue;
               }           
               var img=document.getElementById("thumbnil");            
               img.file = file;    
               var reader = new FileReader();
               reader.onload = (function(aImg) { 
                   return function(e) { 
                       aImg.src = e.target.result; 
                   }; 
               })(img);
               reader.readAsDataURL(file);
           }    
       }
</script>
<script>
    function showMyImage1(fileInput) {
           var files = fileInput.files;
           for (var i = 0; i < files.length; i++) {           
               var file = files[i];
               var imageType = /image.*/;     
               if (!file.type.match(imageType)) {
                   continue;
               }           
               var img=document.getElementById("thumbnil1");            
               img.file = file;    
               var reader = new FileReader();
               reader.onload = (function(aImg) { 
                   return function(e) { 
                       aImg.src = e.target.result; 
                   }; 
               })(img);
               reader.readAsDataURL(file);
           }    
       }
</script>
<?php 
include('komponen/bottom.php');
?>