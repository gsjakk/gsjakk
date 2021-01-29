<?php include "header.php"; ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
               <h3>Selamat Datang</h3>
            </div>
        </div>

        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Form Input Mahaiswa</h2>
						<div class="clearfix"></div>
						</div>
                            <form class="form-horizontal form-label-left" action="?m=admin&s=simpan" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">ID Petugas :</label>
									<div class="col-md-1 col-sm-1 ">
										<input type="text" class="form-control" name="nimkandidat" >
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Username :</label>
									<div class="col-md-2 col-sm-1 ">
										<input type="text" class="form-control" name="username" placeholder="Admin" >
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Password :</label>
									<div class="col-md-1 col-sm-1 ">
										<input type="password" class="form-control" placeholder="" name="password" >
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Nama :</label>
									<div class="col-md-3 col-sm-1 ">
										<input type="text" class="form-control" name="nama" >
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Jabatan :</label>
									<div class="col-md-2 col-sm-1 ">
										<input type="text" class="form-control" name="jabatan" placeholder="Administrator" >
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Email</label>
									<div class="col-md-3 col-sm-4 ">
										<input type="text" class="form-control" name="email">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Telepon</label>
									<div class="col-md-2 col-sm-4 ">
										<input type="text" class="form-control" name="hp">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Hak Akses</label>
									<div class="col-md-2 col-sm-4 ">
										<input type="text" class="form-control" name="hakakses" placeholder="Admin">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-2 col-sm-2 ">Foto</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="file" name="foto" accept="image/*" />
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-2 col-sm-2 ">Switch</label>
									<div class="col-md-9 col-sm-9 ">
										<div class="">
											<label>
												<input type="checkbox" name="aktif" class="js-switch" value="Y" /> Aktifkan User
											</label>
										</div>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=admin" type="button" class="btn btn-primary">Back</a>
										<button type="reset" class="btn btn-primary">Reset</button>
										<button type="submit" name="simpan" value="Save"" title="Simpan" class="btn btn-success">Simpan</button>
									</div>
								</div>
							</form>
                        </div>
				</div>
            </div>			
    </div>
</div>
<?php include "footer.php"; ?>