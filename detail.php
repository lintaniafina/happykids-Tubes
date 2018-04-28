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
        <center><h1 class="display-5 mb-4">Product Detail</h1></center>
    <div id="wrap">
        <div id="produk-view">
          <div class="top">
              <div class="product_images">
                <div class="product_image_1">
                  <img src="img/img_pr/bouncer.jpg"/>
              </div>
          </div>
          <div class="produk-info">
              <h4>Floral and Denim Dress</h4>
              <h4>Price : Rp 1000000,-</h4>
              <h4>Stock : Ready <i class="fa fa-check"></h4></i>


              <div class="product_description">
                  <p>Dekripsi detail barang</p>
                  
              </div>
              <div class="info-relasi">
                 <span class="sku">SKU:1234567</span><span class="qty">QTY:85</span>
             </div>
             <div class="options">
               <div class="opsi-beli">
                   <div class="select">
                       <select id="color">
                         <option value = "1">Yellow</option>
                         <option value = "2">Red</option>
                         <option value = "3">Blue</option>
                         <option value = "4">Floral</option>
                     </select>
                 </div>
                 <div class="select">
                   <select id="size">
                     <option value = "1">Small</option>
                     <option value = "2">Medium</option>
                     <option value = "3">Large</option>
                     <option value = "4">X-Large</option>
                 </select>
             </div>
         </div>
         <div class="beli">
           <div class="qty">
             <label for="qty">QTY:</label>
             <input type="text">
         </div>
         <div class="cart">
             <a href="cart.php" class="add">Add to Cart <i class="fa fa-shopping-cart fa-lg"></i></a>
         </div>
     </div>
 </div>
</div>
</div>
<div class="bottom">
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bsadmin.js"></script>
</body>
</html>