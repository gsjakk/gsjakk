<?php include "header.php"; ?>
<?php
$norenungan=$_GET['norenungan'];
include "config.php";
$sql="SELECT * FROM renungan WHERE norenungan='$norenungan'";
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
						<h2>Detail Renungan</h2>
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
											<img src="../img/renungan/<?php echo $r['foto']; ?>" alt="..." class="img-circle profile_img"></center>
										</li>
										<li>.</li>
									</ul>
								</div>
								<h2 class="name"><?php echo$r['judul'];?></h2>
								<div class="flex">
									<ul class="list-inline count4">
										<li>
											<span><?php echo$r['pic'];?></span>
										</li>
									</ul>
								</div>
								<div class="flex">
									<ul class="list-inline count4">
										<li>
											<span><?php echo$r['tanggal'];?></span>
										</li>
									</ul>
								</div>
								<div class="flex">
									<ul class="list-inline count4">
										<li>
											<span><?php echo$r['judul'];?></span>
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
							<h2>Edit Renungan<small></small></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form class="form-horizontal form-label-left" action="?m=renungan&s=update" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">ID renungan</label>
									<div class="col-md-1 col-sm-2 ">
										<input type="text" class="form-control" name="norenungan" placeholder="kosongkan jika tidak diubah" value="<?php echo$r['norenungan'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Judul</label>
									<div class="col-md-6 col-sm-3 ">
										<input type="text" class="form-control" name="judul" placeholder="Username" value="<?php echo$r['judul'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Tanggal</label>
									<div class="col-md-4 col-sm-6 ">
										<input type="date" class="form-control" name="tanggal" placeholder="" value="<?php echo$r['tanggal'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Penulis</label>
									<div class="col-md-4 col-sm-3 ">
										<input type="text" class="form-control" name="pic" placeholder="" value="<?php echo$r['pic'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Artikel 1</label>
									<div class="col-md-8 col-sm-3 ">
										<input type="text" class="form-control" name="isi1" placeholder="" value="<?php echo$r['isi1'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Artikel 2</label>
									<div class="col-md-8 col-sm-9 ">
										<input type="text" class="form-control" name="isi2" placeholder="" value="<?php echo$r['isi2'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Ayat</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" class="form-control" name="ayat" placeholder="" value="<?php echo$r['ayat'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Status :</label>
									<div class="col-md-6 col-sm-1 ">
										<select name="status" class="form-control" required>
											<option value="<?php echo$r['status'];?>"> <?php echo$r['status'];?> </option>
											<option value="Aktif">Aktif</option>
											<option value="Non Aktif">Non Aktif</option>
										</select>
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-3 ">Foto</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="file" name="foto" accept="image/*" /><small>*Kosongkan jika foto tak diganti</small>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=renungan" type="button" class="btn btn-primary">Back</a>
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