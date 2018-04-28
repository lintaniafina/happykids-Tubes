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
    <?php include("carousel.php") ?>
        <main class="main" role="main">
            <div class="main-inner wrapper">
                <ul class="product-list ul-iyah">
                    <?php 
                        include 'db.php';
                        $sql = "Select * from barang";
                        $q = mysqli_query($con, $sql);

                        while ($data = mysqli_fetch_array($q)){
                        
                     ?>
                    <li class="product-item ib">
                        <section class="product-item-inner">
                            <!-- <img src="img/" alt=""> -->
                            <?php echo "<img src='img/".$data['barang_pict']."' <style='width: 100%;height: auto;display: block;'>"; ?>
                            <!-- /.product-item-image -->
                            <h1 class="product-item-title">
                                <?=$data['barang_nama'] ?>
                          </h1>
                          <!-- /.product-item-title -->
                          <div class="product-item-rrp-price-saving">
                            <div class="product-item-price">
                                Rp <?=$data['barang_harga']  ?>,-
                                <br><br><br>
                            </div>
                            <!-- /.product-item-price -->
                        </div>
                        <!-- /.product-item-rrp-price-saving -->
                        <div class="product-item-lower">
                            <div class="product-item-desc-short">
                                <?=$data['barang_desc'] ?>
                            </div>
                            <!-- /.product-item-desc-short -->
                            <!-- cara masukan link ke tab baru -->
                            <!-- onclick="window.open('index-t.html', '_blank')" -->
                            <input type="submit" value="Add to Cart" class="product-item-cart" onclick="window.open('detail.php', '_blank')">
                        </div>
                        <!-- /.product-item-lower -->
                    </section>
                    <!-- /.product-item-inner -->
                </li><?php } ?>

            <!-- /.product-item ib -->
        </ul>
        <!-- /.product-list ul-iyah -->
    </div>
    <!-- /.main-inner wrapper -->
    </div>
</main>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bsadmin.js"></script>
</body>
</html>