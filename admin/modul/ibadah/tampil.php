<?php include "header.php"; ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
					<div class="x_title">
						<h2>Halaman Ibadah</h2>
						<ul class="nav navbar-right panel_toolbox">
							<a href="?m=ibadah&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah</a>
						</ul>
						<div class="clearfix"></div>
					</div>
					<table id="datatable" class="table table-striped table-bordered" style="width:100%">	
						<thead>
							<tr bgcolor="#ccc">
								<th>No</th>
								<th>Judul</th>
								<th>Tanggal</th>
								<th>Link</th>
								<th>Ayat</th>
								<th>Isi</th>
								<th>Status</th>
								<th>PIC</th>
								<th>Opsi</th>
							</tr>
						</thead>
							<?php
							include "config.php";
							$sql = mysqli_query($koneksi, "SELECT * FROM ibadah ORDER BY noibadah ASC");
							if(mysqli_num_rows($sql) == 0){ 
								echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>';
							}else{ // jika terdapat entri maka tampilkan datanya
								$no = 1; 
								while($row = mysqli_fetch_assoc($sql)){
								echo '
									<tr>
										<td>'.$no.'</td>
										<td>'.$row['judul'].'</td>
										<td>'.$row['tanggal'].'</td>
										<td>'.substr ($row ['link'], 0, 20).'...<a href="index.php?m=ibadah&s=detail&noibadah='.$row['noibadah'].'">[Selengkapnya]</a></td>
										<td>'.substr ($row ['ayat'], 0, 40).'...<a href="index.php?m=ibadah&s=detail&noibadah='.$row['noibadah'].'">[Selengkapnya]</a></td>
										<td>'.substr ($row ['isi'], 0, 40).'...<a href="index.php?m=ibadah&s=detail&noibadah='.$row['noibadah'].'">[Selengkapnya]</a></td>
										<td>'.$row['status'].'</td>
										<td>'.$row['pic'].'</td>
										<td><a href="index.php?m=ibadah&s=detail&noibadah='.$row['noibadah'].'"><i class="fa fa-book" title="Edit"></i></a> | <a href="index.php?m=ibadah&s=hapus&noibadah='.$row['noibadah'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-trash"></i></a></td>
									</tr>';
									$no++;
									}
							}
							?>

						</table> 
						</div>
				</div>
            </div>			
    </div>
</div>
<?php include "footer.php"; ?>
