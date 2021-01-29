<?php include "header.php"; ?>
<?php
$nogaleri=$_GET['nogaleri'];
include "config.php";
$sql="SELECT * FROM galeri WHERE nogaleri='$nogaleri'";
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
						<h2>Detail Galeri</h2>
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
											<img src="../img/galeri/<?php echo $r['foto']; ?>" alt="..." class="img-circle profile_img"></center>
										</li>
										<li>.</li>
									</ul>
								</div>
								<h2 class="name"><?php echo$r['namagaleri'];?></h2>
								<div class="flex">
									<ul class="list-inline count2">
										<li>
											<span><?php echo$r['status'];?></span>
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
							<h2>Edit galeri<small></small></h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form class="form-horizontal form-label-left" action="?m=galeri&s=update" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">No Galeri</label>
									<div class="col-md-1 col-sm-2 ">
										<input type="text" name="nogaleri" value="<?php echo $r['nogaleri'];  ?>"  class="form-control" disabled>
										<input type="hidden" name="nogaleri" value="<?php echo $r['nogaleri'];  ?>"  class="form-control" >
									</div>								
									<label class="control-label col-md-2 col-sm-2 ">Tanggal</label>
									<div class="col-md-4 col-sm-6 ">
										<input type="date" class="form-control" name="tanggalgaleri" placeholder="" value="<?php echo$r['tanggalgaleri'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Nama</label>
									<div class="col-md-6 col-sm-2 ">
										<input type="text" class="form-control" name="namagaleri" placeholder="Username" value="<?php echo$r['namagaleri'];?>">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Status :</label>
									<div class="col-md-2 col-sm-1 ">
										<select name="status" class="form-control" required>
											<option value="<?php echo$r['status'];?>"> <?php echo$r['status'];?> </option>
											<option value="Aktif">Aktif</option>
											<option value="Non Aktif">Non Aktif</option>
										</select>
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
										<a href="?m=galeri" type="button" class="btn btn-primary">Back</a>
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