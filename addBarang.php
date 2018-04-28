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
        <center><h1 class="display-5 mb-4">Add your product</h1></center>
        
<form action="proses/simpanBarang.php" method="post" enctype="multipart/form-data">
    
    <div id="wrap">
        <div id="produk-view">
          <div class="top">
            
            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Nama Produk</label>
                <div class="col-10">
                    <input class="form-control" name="nama" type="text" placeholder="Name" id="text-input">
                </div>
            </div>
             <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Harga</label>
                <div class="col-10">
                    <input class="form-control" name="harga" type="text" placeholder="harga" id="text-input">
                </div>
            </div>
             <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Desc</label>
                <div class="col-10">
                    <input class="form-control" name="desc" type="text" placeholder="desc" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Kategori</label>
                <div class="col-10">
                    <input class="form-control" name="kat" type="text" placeholder="kategori" id="text-input">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-input" class="col-2 col-form-label">Foto</label>
                <div class="col-10">
                    <input type="file" name="gambar">
                </div>
            </div>
            <input type="submit" name="submit" style="width: 100%;">
            
            
            
            
  

</div>
</form>
    
    <hr>
   
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