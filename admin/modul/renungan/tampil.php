<?php include "header.php"; ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
					<div class="x_title">
						<h2>Halaman Renungan</h2>
						<ul class="nav navbar-right panel_toolbox">
							<a href="?m=renungan&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah</a>
						</ul>
						<div class="clearfix"></div>
					</div>
					<table id="datatable" class="table table-striped table-bordered" style="width:100%">	
						<thead>
							<tr bgcolor="#ccc">
								<th>No</th>
								<th>Judul</th>
								<th>Tanggal</th>
								<th>PIC</th>
								<th>Isi1</th>
								<th>Isi2</th>
								<th>Status</th>
								<th>Opsi</th>
							</tr>
						</thead>
		<?php
		include "config.php";
		$sql = mysqli_query($koneksi, "SELECT * FROM renungan ORDER BY norenungan ASC");
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
								<td>'.$row['pic'].'</td>
								<td>'.substr ($row ['isi1'], 0, 40).'...<a href="index.php?m=renungan&s=detail&norenungan='.$row['norenungan'].'">[Selengkapnya]</a></td>
								<td>'.substr ($row ['isi2'], 0, 40).'...<a href="index.php?m=renungan&s=detail&norenungan='.$row['norenungan'].'">[Selengkapnya]</a></td>
								<td>'.$row['status'].'</td>
								<td><a href="index.php?m=renungan&s=detail&norenungan='.$row['norenungan'].'"><i class="fa fa-book" title="Edit"></i></a> | <a href="index.php?m=renungan&s=hapus&norenungan='.$row['norenungan'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-trash"></i></a></td>
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
