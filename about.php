<?php include "header.php";?>
<?php
include "koneksi.php";
$sql="SELECT * FROM profil ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
<div class="about-us-area about-page section-padding-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="about-content">
                        <h2>Sejarah</h2>
                        <p><?php echo$r['sejarah'];?></p>
                        <div class="opening-hours-location mt-30 d-flex align-items-center">
                            <!-- Opening Hours -->
                            <div class="opening-hours">
                                <h6><i class="fa fa-clock-o"></i> Jam Operasional</h6>
                                <p>Senin - Sabtu 08:00 - 16:00 <br>Minggu at 09:00 - 19:00</p>
                            </div>
                            <!-- Location -->
                            <div class="location">
                                <h6><i class="fa fa-map-marker"></i> Lokasi</h6>
                                <p><?php echo$r['alamat'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail">
                        <img src="img/gereja2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Why Choose Us Area Start ##### -->
    <div class="why-choose-us bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>IBADAH</h2>
                        <p>Ibadah di GSJA Kristus Kekal ada 3 Ibadah</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why1.png" alt="">
                        <h4>Ibadah Raya Pagi</h4>
                        
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why2.png" alt="">
                        <h4>Ibadah Raya Anak</h4>
                        
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why3.png" alt="">
                        <h4>Ibadah Youth </h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Why Choose Us Area End ##### -->

    <!-- ##### Subscribe Area End ##### -->
<?php include "footer.php";?>