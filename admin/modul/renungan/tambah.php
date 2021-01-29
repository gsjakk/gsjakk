<?php include "header.php"; ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
               <h3>Tambah Renungan </h3>
            </div>
        </div>

        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Form Input Renungan</h2>
						<div class="clearfix"></div>
						</div>
                            <form class="form-horizontal form-label-left" action="?m=renungan&s=simpan" method="post" enctype="multipart/form-data">
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Judul :</label>
									<div class="col-md-6 col-sm-2 ">
										<input type="text" class="form-control" name="judul" placeholder="" autocomplete="off">
									</div>
									<label class="control-label col-md-1 col-sm-1 ">Tanggal :</label>
									<div class="col-md-2 col-sm-1 ">
										<input type="date" class="form-control" placeholder="" name="tanggal"  >
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Penulis :</label>
									<div class="col-md-6 col-sm-1 ">
										<input type="text" class="form-control" placeholder="" name="pic" autocomplete="off" >
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Artikel 1:</label>
									<div class="col-md-6 col-sm-1 ">
										<textarea class="form-control" name="isi1" placeholder="" autocomplete="off"></textarea>
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Artikel 2:</label>
									<div class="col-md-6 col-sm-1 ">
										<textarea class="form-control" name="isi2" placeholder="" autocomplete="off"></textarea>
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1  ">Ayat Alkitab:</label>
									<div class="col-md-6 col-sm-4 ">
										<input type="text" class="form-control" name="ayat" autocomplete="off">
									</div>
									<label class="control-label col-md-1 col-sm-1  ">Foto</label>
									<div class="col-md-4 col-sm-4 ">
										<input type="file" name="foto" accept="image/*" />
									</div>
								</div>
								<div class="form-group row ">
									<label class="control-label col-md-1 col-sm-1 ">Status :</label>
									<div class="col-md-6 col-sm-1 ">
										<select name="status" class="form-control" required>
											<option value=""> ----- </option>
											<option value="Aktif">Aktif</option>
											<option value="Non Aktif">Non Aktif</option>
										</select>
									</div>
								</div>
								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-9 col-sm-9  offset-md-3">
										<a href="?m=renungan" type="button" class="btn btn-primary">Back</a>
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