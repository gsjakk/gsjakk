<!DOCTYPE html>
<html lang="en">
<?php include "header.php";
include "koneksi.php";
$sql="SELECT * FROM ibadah WHERE status='Aktif'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Ibadah</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
<br>
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="Ibadah-details-area">

                        <!-- Ibadahs Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h3 class="post-title mb-30"><?php echo$r['judul'];?></h3>
                                <iframe width="720" height="315" src="<?php echo$r['link'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- Catagory & Share -->
                                <p>"<?php echo$r['isi'];?>"</p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6><span>Bacaan Ayat :</span></h6>
                                        <h6><?php echo$r['ayat'];?></h6>
                                    </div>
                                </blockquote>
                                <p><?php echo$r['kesimpulan'];?></p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">
                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">							
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
								<div class="Ibadahs-meta-data">
                                    <p><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp <?php echo$r['tanggal'];?></span></p>
                                </div>
                                <a href="#" class="post-title">
                                    <h6><?php echo$r['ayat'];?></h6>
                                </a>
                                <div class="Ibadahs-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Penulis: <span><?php echo$r['pic'];?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>

<?php include "footer.php";?>