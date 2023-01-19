<?php require 'connect_db.php'; ?>
<?php 
    include('komponen/head_owner_sess.php');
?>
<style>
    .card-img-top {
    width: 100%;
    max-height: 250px;
    object-fit: cover;
}
</style>
<div class="container mt-5">
    <div class="row">
        <?php 
            $query   = "SELECT * FROM penjualan WHERE status_motor='belum terjual' ORDER BY id_motor DESC";
            $res     = mysqli_query($con,$query);	      
            $no = 0;          
            while($results = mysqli_fetch_assoc($res)){     
            $no = $no+1;                                     
            echo"
            <div class='col-lg-4 col-sm-6 col-xs-6 mt-3'>
            <a href='owner_detail.php?id_motor=".$results['id_motor']."' style='color: white;text-decoration:none; color: inherit;'>
            <div class='card' style='border: 1px solid #edb23e !important;'>
                <img
                    src='{$results['gambar_1_motor']}'
                    class='card-img-top'
                    alt='img'>
                <div class='card-body'>
                    <h5 class='card-title'>{$results['nama_motor']}</h5>
                    <p style='font-weight: normal;'>
                        <strong style='color: #203067;'>Rp. {$results['harga_motor']}</strong>
                        <br>
                        Kelengkapan : {$results['kelengkapan_motor']}
                        <br>
                        Pajak : {$results['pajak_motor']}
                        <br>
                        Kondisi : {$results['kondisi_motor']}
                        <br>
                        Kilometer : {$results['kilometer_motor']}
                    </p>
                </div>
            </div>
            <div class='col-sm-12 text-center'>                        
            <a role='button' href='owner_hapus.php?id_motor=".$results['id_motor']."' class='btn btn-danger'>Hapus</a>
            <a role='button' href='owner_edit.php?id_motor=".$results['id_motor']."' class='btn btn-secondary'>Edit</a>
            <a role='button' href='owner_terjual.php?id_motor=".$results['id_motor']."' class='btn btn-primary'>Terjual</a>
            </div>
            </a>
        </div>
        ";}
        ?>
    </div>
</div>
<?php 
include('komponen/bottom.php');
?>