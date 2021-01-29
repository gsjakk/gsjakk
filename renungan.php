<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>

<br>
    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Renungan Gereja  </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Latest Sermons -->
			<?php
				include 'koneksi.php';
				$sql=mysqli_query($koneksi, "SELECT * FROM renungan ORDER BY norenungan DESC LIMIT 4");
				if(mysqli_num_rows($sql) == 0){ 
					echo '
					<p>Data Tidak Ada>';
				}else{
					while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
					echo '
					<div class="col-3 col-md-3">
                            <div class="single-blog-post mb-20">
                                <div class="post-thumbnail">
                                    <a href="renungandetail.php?norenungan='.$row['norenungan'].'"><img src="img/renungan/'.$row['foto'].'" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="renungandetail.php?norenungan='.$row['norenungan'].'" class="post-title">
                                        <h4>'.$row['judul'].'</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$row['pic'].'</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp '.date("d M Y", strtotime($row['tanggal'])).'</a>
                                    </div>
                                    <p class="post-excerpt">'.substr ($row ['isi1'], 0, 40).'...<a href="renungandetail.php?norenungan='.$row['norenungan'].'">[Selengkapnya]</a></p>
                                </div>
                            </div>
                        </div>
					';
					} 
				}
			?>			
            </div>
			
        </div>
    </section>
	<br><br><br><br>

<?php include "footer.php";?>
