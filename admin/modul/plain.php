<?php include "header.php"; ?>
<?php include "../config.php"; ?>
        <!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
               <h2>SIPRESMA- Administrator</h2>
            </div>
        </div>
		<div class="clearfix"></div>
			<div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon">
							<i class="fa fa-users"></i>
						</div>
							<?php
							include_once "../config.php";
							$sql="SELECT count(nimmahasiswa) as jkelas FROM mahasiswa";
							$query=mysqli_query($koneksi,$sql);
							$r=mysqli_fetch_assoc($query); ?>
						<div class="count"><?php echo$r['jkelas'];?></div>
						<h3>Mahasiswa</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon">
							<i class="fa fa-user"></i>
						</div>
							<?php
							$sql="SELECT count(nimkandidat) as jumlah FROM kandidat WHERE aktif='Y'";
							$query=mysqli_query($koneksi,$sql);
							$r=mysqli_fetch_assoc($query); ?>
						<div class="count"><?php echo$r['jumlah'];?></div>
						<h3>Kandidat</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon">
							<i class="fa fa-mobile"></i>
						</div>
							<?php
							$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE memilih='1' or memilih='2'";
							$query=mysqli_query($koneksi,$sql);
							$r=mysqli_fetch_assoc($query); ?>
						<div class="count"><?php echo$r['jumlah'];?></div>
						<h3>Sudah Memilih</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon">
							<i class="fa fa-remove"></i>
						</div>
							<?php
							$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE memilih='0'";
							$query=mysqli_query($koneksi,$sql);
							$r=mysqli_fetch_assoc($query); ?>
						<div class="count"><?php echo$r['jumlah'];?></div>
						<h3>Belum Memilih</h3>
                    </div>
                </div>
				
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<p>Grafik SIPRESMA <small></small></p>
						<div class="clearfix"></div>
						</div>
						<div class="row clearfix">
                                <div class="col-md-2">
									<?php									
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE fakultas='Teologi' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#9C27B0"
										readonly>
									<br>
									<p>Mahasiswa Fakultas Teologi</p>
                                </div>
                                <div class="col-md-2">
									<?php
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE fakultas='teknik' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#00BCD4"
										readonly>
									<br>
									<p>Mahasiswa Fakultas Teknik</p>
                                </div>
                                <div class="col-md-2">
									<?php
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE fakultas='ekonomi' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#FF9800"
										readonly>
									<br>
									<p>Mahasiswa Fakultas Ekonomi</p>
                                </div>
								<div class="col-md-2">
									<?php
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE memilih='1' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#E91E63"
										data-anglearc="250" data-angleoffset="-125" readonly>
									<br>
									<p>Memilih Kandidat No.1</p>
                                </div>
                                <div class="col-md-2">
									<?php
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE memilih='2' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#E91E63"
										data-anglearc="250" data-angleoffset="-125" readonly>
									<br>
									<p>Memilih Kandidat No.2</p>
                                </div>
                                <div class="col-md-2">
									<?php
										$sql="SELECT count(nimmahasiswa) as jumlah FROM mahasiswa WHERE memilih='0' ";
										$query=mysqli_query($koneksi,$sql);
										$r=mysqli_fetch_assoc($query); ?> 
									<input type="text" class="knob" value="<?php echo$r['jumlah'];?>" data-width="125" data-height="125" data-thickness="0.25" data-fgColor="#009688"
										data-anglearc="250" data-angleoffset="-125" readonly>
									<br>
									<p>Mahasiswa Belum Memilih</p>
                                </div>
                            </div>
					</div>
				</div>
            </div>			
    </div>
</div>
<!-- /page content -->
<?php include "footer.php"; ?>