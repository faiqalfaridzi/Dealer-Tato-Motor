<?php require 'connect_db.php'; ?>
<?php 
	session_start();
	if($_SESSION['status']!="owner"){
		header("location:owner_login.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <!--import bootstrap cdn-->
        <script src="https://kit.fontawesome.com/64b96f94df.js" crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">
        <!--import jquery cdn-->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
            
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Tato Motor - Jual Beli Motor Purwokerto</title>
        <link rel="icon" type="image/png"  href="assets/img/logo.png">
    </head>
    <header style=" background: white;">
        <div class="col-12 topnav">
            <center>
                <img class="card-img-top mt-3" src="assets/img/logo.png" alt="logo" style="width: 250px;">
            </center> 
            <a href="#" style="padding-right:0;color: white;text-decoration:none; color: #203067;float:right;"><?php echo $_SESSION['status']?>
            </span>
            </a>    <br>          
            <a href="owner_logout.php" style="padding-right:0;color: white;text-decoration:none; color: #EB4E3B;float:right;">Logout
                <span class="fas fa-sign-out fa-lg"> </span>
            </a>         
        </div>

        <div class="col-12 midnav" style="display: flex; align-items: center; /* Vertical center alignment */justify-content: center; ">
            <div>
                <a target="_blank" href="https://www.google.com/maps/place/Tato+Motor/@-7.4225708,109.2555844,15z/data=!4m5!3m4!1s0x0:0x7ac90d457d4b0343!8m2!3d-7.4225748!4d109.2555852" style="color: white;text-decoration:none; color: inherit;"><span style="white-space: nowrap"><i class="fa fa-location-dot"></i> Lokasi Tato Motor</span></a>
                <a href="#" style="color: white;text-decoration:none; color: inherit;"><span style="white-space: nowrap"><i class="fa fa-phone"></i> 0815-4218-6181</span></a>
                <a href="https://wa.me/62895380036421" target="_blank" style="color: white;text-decoration:none; color: inherit;"><span style="white-space: nowrap"><i class="fab fa-whatsapp fa-lg"></i> 0895-3800-3642-1</span></a>
            </div>
        </div>
        <div class="col-12 bottomnav"style="display: flex; align-items: center; /* Vertical center alignment */justify-content: center; ">
            <div>
                <a href="owner_index.php" style="padding-right:0;text-decoration:none; color: black;margin-right:0">Home</a>
                <select class="ml-2" onchange="javascript:handleSelect(this)" style="text-align: center; text-align-last: center;-moz-text-align-last: center;">
                    <option value="" selected disabled hidden>Motor Bekas</option>
                    <option value="owner_upload" value="Matic" style="font-size:14px;">Upload Motor</option>
                    <option value="owner_motor_masuk"  style="font-size:14px;">Motor Masuk</option>
                </select>
                <a href="owner_unit_terjual.php" style="padding-right:0;text-decoration:none; color: black;">Unit Terjual</a>
            </div>
        </div>
    </header>
    <body>
    <script type="text/javascript">
  function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>