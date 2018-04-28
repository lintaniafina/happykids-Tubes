<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!doctype html>
<html lang="en">
<?php include("head.php") ?>
<body>
<?php include("nav.php") ?>
<div class="d-flex">
    <?php include("katalog.php") ?>
    <div class="content p-4"> <!--kalau mau ganti ukuran contentnya cek stylepage1.css-->
        <center><h1 class="display-5 mb-4">Your Baby Cart</h1></center>
    <div id="wrap">
        <div id="produk-view">
          <div class="top">
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-md-center">
                            <h2>Nomor Invoice #33221</h2>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 col-md-4 col-lg-4 float-md-left">
                                <div class="card  height">
                                    <div class="card-header">Billing Details</div>
                                    <div class="card-block" style="margin-left: 10px;">
                                        <strong>Nama : John Connor</strong><br>
                                        Alamat : 1111 Army Navy Drive<br>
                                       <strong>Email : ini@gmail.com</strong><br>
                                       No Telp : 032323<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-md-4 col-lg-4">
                                <div class="card  height">
                                    <div class="card-header">Payment Information</div>
                                    <div class="card-block" style="margin-left: 10px;">
                                        <strong>Card Name:</strong> Visa<br>
                                        <strong>Card Number:</strong> ***** 42<br>
                                        <strong>Exp Date:</strong> 09/2020<br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-md-4 col-lg-4 float-md-right">
                                <div class="card  height">
                                    <div class="card-header">Ship Details</div>
                                    <div class="card-block" style="margin-left: 10px;">
                                        <strong>Nama : John Connor</strong><br>
                                        Alamat : 1111 Army Navy Drive<br>
                                       <strong>Email : ini@gmail.com</strong><br>
                                       No Telp : 032323<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="produk-info">           
<div class="bottom"> 
</div>
<br>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bsadmin.js"></script>
</body>
</html>