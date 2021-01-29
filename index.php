<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">GSJA Kristus Kekal</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Mari bergabung dan rasakan hadirat Tuhan serta indahnya persekutuan dalam ibadah dan kegiatan jemaat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/2.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">GSJA Kristus Kekal</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Mari bergabung dan rasakan hadirat Tuhan serta indahnya persekutuan dalam ibadah dan kegiatan jemaat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Renungan harian Jemaat </h2>
                        <p>Mari bergabung dan rasakan hadirat Tuhan serta indahnya persekutuan dalam ibadah dan kegiatan jemaat.</p>
                    </div>
                </div>
            </div>

            <div class="row about-content justify-content-center">
                <?php
					include 'koneksi.php';
					$sql=mysqli_query($koneksi, "SELECT * FROM renungan ORDER BY norenungan ASC");
					if(mysqli_num_rows($sql) == 0){ 
						echo '
						<p>Data Tidak Ada>';
					}else{
						while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
						echo '
                <!-- Single About Us Content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-content mb-100">
                        <img src="img/renungan/'.$row['foto'].'" alt="">
                        <div class="about-text">
                            <h4>'.$row['judul'].'</h4>
                            <p>'.$row['ayat'].'</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
					';
				} 
			}?>
				
            </div>
        </div>
    </section>

<?php include "footer.php";?>
