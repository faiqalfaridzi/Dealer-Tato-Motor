<?php require 'connect_db.php'; ?>
<?php 
include('komponen/head_owner_sess.php');
?>

<div class='container mt-5'>    
    <div class='row'>
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
        <div class='col-lg-8 col-sm-12 col-xs-12 mt-3'>
            <div class='card' style='border: 1px solid #edb23e !important;'>
                <div class='card-body'>
                    <!-- SLIDER -->
                    <div id='carouselExampleIndicators' class='carousel slide carousel-fade' data-ride='carousel'>
                        <ol class='carousel-indicators'>
                        <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
                        <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                        </ol>
                        <div class='carousel-inner rounded-left'>
                        <div class='carousel-item active'>
                            <img src='<?php echo $results['gambar_1_motor']; ?>' class='d-block w-100'>
                        </div>
                        <div class='carousel-item'>
                            <img src='<?php echo $results['gambar_2_motor']; ?>' class='d-block w-100'>
                        </div>
                        </div>
                    </div>
                    <!-- END SLIDER -->
                </div>
            </div>
        </div>

        <div class='col-lg-4 col-sm-12 col-xs-12 mt-3'>
            <div class='card' style='border: 1px solid #edb23e !important;'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $results['nama_motor']; ?></h5>
                    <p style='font-weight: normal;'>
                        <strong style='color: #203067;'>Rp. <?php echo $results['harga_motor']; ?></strong>
                        <br>
                        Kelengkapan : <?php echo $results['kelengkapan_motor']; ?>
                        <br>
                        Pajak : <?php echo $results['pajak_motor']; ?>
                        <br>
                        Kondisi : <?php echo $results['kondisi_motor']; ?>
                        <br>
                        Kilometer : <?php echo $results['kilometer_motor']; ?>
                    </p>
                </div>
            </div>
            <div class='card mt-2' style='border: 1px solid #edb23e !important;'>          
                <div class='card-body text-center'>            
                    <p class='card-text'>                    
                    <strong class='mt-2'>Informasi Lebih Lanjut </strong></br>
                    Silahkan Hubungi Kontak Tato Motor Untuk Informasi Lebih Lanjut </br>
                    Atau Datang Langsung Ke Dealer
                    </p>
                    <div class='col-sm-12 text-center'>                        
                        <button onclick='Copy()' type='button' class='btn btn-light' aria-label='Right Align'><span class='fas fa-share-alt fa-lg' aria-hidden='true' ></span> Bagikan</button>                        
                        <a role="button" target="_blank" href="https://wa.me/62895380036421" id="btn2" class="btn btn-light" aria-label='Right Align'><span class='fa fa-whatsapp fa-lg' aria-hidden='true'></span> 0895-3800-3642-1</a>
                        <button type='button' class='btn btn-light' aria-label='Right Align'><span class='fa fa-phone' aria-hidden='true'></span> 0815-4218-6181</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<textarea hidden id='url' rows='1' cols='30'></textarea>
<script>
function Copy() {
  // Get the text field
  var copyText = document.getElementById('url');
  var text = window.location.href;
  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices
   // Copy the text inside the text field
  navigator.clipboard.writeText(text);
  // Alert the copied text
  alert('Url Telah Di Salin : ' + text);
}</script>
<?php 
include('komponen/bottom.php');
?>