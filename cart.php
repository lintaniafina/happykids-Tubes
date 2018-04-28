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

            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Nama</label>
                <div class="col-10">
                    <input class="form-control" type="text" placeholder="Name" id="text-input">
                </div>
            </div>
             <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Alamat</label>
                <div class="col-10">
                    <input class="form-control" type="text" placeholder="alamat" id="text-input">
                </div>
            </div>
             <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                    <input class="form-control" type="email" placeholder="email" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Telp</label>
                <div class="col-10">
                    <input class="form-control" type="tel" placeholder="no telp" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Methode Pembayaran</label>
                <div class="col-10">
                     <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">Transfer</option>
                        <option value="2">Kredit</option>
                        <option value="3">COD</option>
                </select>
                </div>
            </div>
            
            
  

</div>
    <hr>
    <h3 class="panel-title"><strong>Order summary</strong></h3>

    <table class="table table-bordered table-striped" style="margin-top: 30px;">
    <thead>
        <tr>
            <th class="coText">№</th>
            <th class="coText">Nama product</th>
            <th class="coText">Kode product</th>
            <th class="coText">Warna</th>
            <th class="coText">Ukuran</th>
            <th class="coText">Qty</th>
            <th class="coText">Harga</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td id="no1" class="coText"></td>
            <td id="nama1" class="coText"></td>
            <td id="kode1" class="coText"></td>
            <td id="warna1" class="coText"></td>
            <td id="ukuran1" class="coText"></td>
            <td id="qty1" class="coText"></td>
            <td id="harga1" class="coText"></td>
            <!-- <td class="coText">
           <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">Edit</button>
            </td> -->
        </tr>
        <tr>
            <td id="no2" class="coText"></td>
            <td id="nama2" class="coText"></td>
            <td id="kode2" class="coText"></td>
            <td id="warna2" class="coText"></td>
            <td id="ukuran2" class="coText"></td>
            <td id="qty2" class="coText"></td>
            <td id="harga2" class="coText"></td>

            <!-- <td class="coText">
           <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">Edit</button>
            </td> -->
        </tr>
        
        <tr>
            <td id="no3" class="coText"></td>
            <td id="nama3" class="coText"></td>
            <td id="kode3" class="coText"></td>
            <td id="warna3" class="coText"></td>
            <td id="ukuran3" class="coText"></td>
            <td id="qty3" class="coText"></td>
            <td id="harga3" class="coText"></td>
        </tr>
        <tr>
            <td class="coText" colspan="5">
                <button class="btn btn-success"  contenteditable="false" style="width: 100%;" onclick="location.href='invoice.php'">Bayar</button>
            </td>
            <td id="totalqty" class="coText"></td>
            <td id="total" class="coText"></td>
        </tr>
    </tbody>
</table>
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