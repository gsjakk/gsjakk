<?php include "header.php"; ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
					<div class="x_title">
						<h2>Halaman Petugas</h2>
						<ul class="nav navbar-right panel_toolbox">
							<a href="?m=petugas&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah</a>
						</ul>
						<div class="clearfix"></div>
					</div>
					<table id="datatable" class="table table-striped table-bordered" style="width:100%">	
						<thead>
							<tr bgcolor="#ccc">
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>Telepon</th>
								<th>Alamat</th>
								<th>Opsi</th>
							</tr>
						</thead>
		<?php
		include "config.php";
		$sql = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id_pengguna ASC");
		if(mysqli_num_rows($sql) == 0){ 
			echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>';
		}else{ // jika terdapat entri maka tampilkan datanya
			$no = 1; 
			while($row = mysqli_fetch_assoc($sql)){
			echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['nama_lengkap'].'</td>
								<td>'.$row['username'].'</td>
								<td>'.$row['email'].'</td>
								<td>'.$row['telepone'].'</td>
								<td>'.$row['alamat'].'</td>
								<td><a href="index.php?m=petugas&s=detail&id_pengguna='.$row['id_pengguna'].'"><i class="fa fa-book" title="Edit"></i></a> | <a href="index.php?m=petugas&s=hapus&id_pengguna='.$row['id_pengguna'].'" onclick="return confirm(\'Yakin Akan dihapus?\')"><i class="fa fa-trash"></i></a></td>
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
