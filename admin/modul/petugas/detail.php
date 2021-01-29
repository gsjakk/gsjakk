<?php include "header.php"; ?>
<?php
$id_pengguna=$_GET['id_pengguna'];
include "config.php";
$sql="SELECT * FROM petugas WHERE id_pengguna='$id_pengguna'";
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
						<h2>Detail Petugas</h2>
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
											<img src="../img/petugas/<?php echo $r['foto']; ?>" alt="..." class="img-circle profile_img"></center>
										</li>
										<li>.</li>
									</ul>
								</div>
								<h2 class="name"><?php echo$r['nama_lengkap'];?></h2>
								<div class="flex">
									<ul class="list-inline count2">
										<li>
											<span><?php echo$r['email'];?></span>
										</li>
									</ul>
								</div>
								<div class="flex">
									<ul class="list-inline count2">
										<li>
											<span><?php echo$r['telepone'];?></span>
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
							<h2>Edit Petugas<small></small></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form class="form-horizontal form-label-left" action="?m=petugas&s=update" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">ID Petugas</label>
									<div class="col-md-1 col-sm-2 ">
										<input type="text" name="id_pengguna" value="<?php echo $r['id_pengguna'];  ?>"  class="form-control" disabled>
										<input type="hidden" name="id_pengguna" value="<?php echo $r['id_pengguna'];  ?>"  class="form-control" >
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Nama</label>
									<div class="col-md-4 col-sm-2 ">
										<input type="text" class="form-control" name="nama_lengkap" placeholder="Username" value="<?php echo$r['nama_lengkap'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Email</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="email" placeholder="" value="<?php echo$r['email'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Username</label>
									<div class="col-md-2 col-sm-2 ">
										<input type="text" class="form-control" name="username" placeholder="" value="<?php echo$r['username'];?>">
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Password</label>
									<div class="col-md-2 col-sm-2 ">
										<input type="password" class="form-control" placeholder="" name="password" value=""> 
									</div>
									<div class="col-sm-3">
										<small>*Kosongkan jika password tak diganti</small>
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Telepon</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="telepone" placeholder="Username" value="<?php echo$r['telepone'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Alamat</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="alamat" placeholder="Username" value="<?php echo$r['alamat'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Foto</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="file" name="foto" accept="image/*" /><small>*Kosongkan jika foto tak diganti</small>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=petugas" type="button" class="btn btn-primary">Back</a>
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