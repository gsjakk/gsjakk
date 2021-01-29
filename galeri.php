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
                        <h2>Galeri GSJA Kristus Kekal  </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Latest Sermons -->
			<?php
				include 'koneksi.php';
				$sql=mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY nogaleri DESC LIMIT 8");
				if(mysqli_num_rows($sql) == 0){ 
					echo '
					<p>Data Tidak Ada>';
				}else{
					while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
					echo '
					<div class="col-5 col-sm-3 col-lg-3">
						<div class="single-latest-sermons mb-100">
							<div class="sermons-thumbnail">
								<a href="#"><img src="img/galeri/'.$row['foto'].'" alt=""></a>
							</div>
							<h5>'.$row['namagaleri'].'</h5>	
						</div>
					</div>
					';
					} 
				}
			?>
			
            </div>
        </div>
    </section>

<?php include "footer.php";?>
