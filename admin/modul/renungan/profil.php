<?php include "header.php"; ?>
<?php
$id=$_SESSION['id_produk'];
include "../config.php";
$sql="SELECT * FROM produk WHERE id_produk='$id'";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
					<div class="x_title">
						<h2>Portfolio Produk Uziana</h2>
						<div class="clearfix"></div>
					</div>
                <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
						<div class="col-md-3   widget widget_tally_box">
							<div class="x_panel fixed_height_390">
							<div class="x_content">
								<div class="flex">
									<ul class="list-inline widget_profile_box">
										<li>.</li>
										<li>
											<img src="../img/product/<?php echo $r['foto']; ?>" alt="..." class="img-circle profile_img"></center>
										</li>
										<li>.</li>
									</ul>
								</div>
								<h2 class="name"><?php echo$r['nama'];?></h2>
								<div class="flex">
									<ul class="list-inline count2">
										<li>
											<span><?php echo$r['idpengguna'];?></span>
										</li>
										<li>
											<span><?php echo$r['username'];?></span>
										</li>
										<li>
											<span><?php echo$r['jabatan'];?></span>
										</li>
									</ul>
								</div>
                            </div>
							</div>
						</div>

                    </div>
                    <div class="col-md-9 ">
						<div class="x_panel">
						<div class="x_title">
							<h2>Edit Profil<small></small></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form class="form-horizontal form-label-left" action="?m=produk&s=update" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">No Petugas</label>
									<div class="col-md-1 col-sm-1 ">
										<input type="text" class="form-control" name="idpengguna" placeholder="kosongkan jika tidak diubah" value="<?php echo$r['idpengguna'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Username</label>
									<div class="col-md-3 col-sm-3 ">
										<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo$r['username'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Password</label>
									<div class="col-md-3 col-sm-3 ">
										<input type="password" class="form-control" placeholder="" name="password" value=""> 
									</div>
									<div class="col-sm-3">
										<small>*Kosongkan jika password tak diganti</small>
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Nama</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="nama" placeholder="" value="<?php echo$r['nama'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Jabatan</label>
									<div class="col-md-3 col-sm-3 ">
										<input type="text" class="form-control" name="jabatan" placeholder="" value="<?php echo$r['jabatan'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Telepon</label>
									<div class="col-md-3 col-sm-3 ">
										<input type="text" class="form-control" name="hp" placeholder="" value="<?php echo$r['hp'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Email</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="email" placeholder="Username" value="<?php echo$r['email'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Hak Akses</label>
									<div class="col-md-2 col-sm-2 ">
										<input type="text" class="form-control" name="hakakses" placeholder="Username" value="<?php echo$r['hakakses'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-3 col-sm-3 ">Foto</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="file" name="foto" accept="image/*" /><small>*Kosongkan jika foto tak diganti</small>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3 col-sm-3 ">Switch</label>
									<div class="col-md-9 col-sm-9 ">
										<div class="">
											<label>
												<input type="checkbox" name="aktif" class="js-switch" value="Y" checked /> Aktifkan User
											</label>
										</div>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=produk" type="button" class="btn btn-primary">Back</a>
										<button type="submit" name="simpan" value="Save"" title="Edit" class="btn btn-success">Edit</button>
									</div>
								</div>
							</form>
						</div>
						</div>
					</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>