<?php include "header.php"; ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
               <h3>Tambah Petugas </h3>
            </div>
        </div>

        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Form Input Petugas</h2>
						<div class="clearfix"></div>
						</div>
                            <form class="form-horizontal form-label-left" action="?m=petugas&s=simpan" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
								<label class="control-label col-md-1 col-sm-1 ">ID Petugas :</label>
									<div class="col-md-1 col-sm-2 ">
										<input type="text" class="form-control" name="id_pengguna" placeholder="" autocomplete="off">
									</div>
									<label class="control-label col-md-1 col-sm-1 ">Nama :</label>
									<div class="col-md-4 col-sm-2 ">
										<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off">
									</div>
									<label class="control-label col-md-1 col-sm-1 ">Username :</label>
									<div class="col-md-2 col-sm-1 ">
										<input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" >
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Email :</label>
									<div class="col-md-3 col-sm-1 ">
										<input type="email" class="form-control" name="email" placeholder="" autocomplete="off">
									</div>
									<label class="control-label col-md-1 col-sm-1  ">Password :</label>
									<div class="col-md-4 col-sm-1 ">
										<input type="password" class="form-control" name="password" placeholder="" autocomplete="off">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1  ">Telepon</label>
									<div class="col-md-5 col-sm-4 ">
										<input type="text" class="form-control" name="telepone" autocomplete="off">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1  ">Alamat</label>
									<div class="col-md-5 col-sm-4 ">
										<input type="text" class="form-control" name="alamat" autocomplete="off">
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1  ">Foto</label>
									<div class="col-md-9 col-sm-9 ">
										<input type="file" name="foto" accept="image/*" />
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=petugas" type="button" class="btn btn-primary">Back</a>
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