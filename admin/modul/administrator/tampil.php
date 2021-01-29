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
							<a href="?m=admin&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah</a>
						</ul>
						<div class="clearfix"></div>
					</div>
					<table id="datatable" class="table table-striped table-bordered" style="width:100%">	
						<thead>
							<tr bgcolor="#ccc">
								<th>No</th>
								<th>Nama</th>
								<th>Jabatan</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Aktif</th>
								<th>Opsi</th>
							</tr>
						</thead>
		<?php
		include "../config.php";
		$sql = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY idpengguna ASC");
		if(mysqli_num_rows($sql) == 0){ 
			echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>';
		}else{ // jika terdapat entri maka tampilkan datanya
			$no = 1; 
			while($row = mysqli_fetch_assoc($sql)){
			echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['nama'].'</td>
								<td>'.$row['jabatan'].'</td>
								<td>'.$row['hp'].'</td>
								<td>'.$row['email'].'</td>
								<td>'.$row['aktif'].'</td>
								<td><a href="index.php?m=admin&s=detail&idpengguna='.$row['idpengguna'].'"><i class="fa fa-book" title="Edit"></i></a></td>
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
