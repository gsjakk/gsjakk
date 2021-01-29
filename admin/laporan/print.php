<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 350px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter
		$filter = $_GET['filter']; // Ambil data filder yang dipilih user

		if($filter == '1'){ // Jika filter nya 1 (per tanggal)
			$tanggal_pembelian = date('d-m-y', strtotime($_GET['tanggal']));

			echo '<b>Data Transaksi Tanggal '.$tanggal_pembelian.'</b><br /><br />';

			$query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan WHERE DATE(tanggal_pembelian)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
		}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
			$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

			echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan WHERE MONTH(tanggal_pembelian)='".$_GET['bulan']."' AND YEAR(tanggal_pembelian)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
		}else{ // Jika filter nya 3 (per tahun)
			echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';

			$query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan WHERE YEAR(tanggal_pembelian)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
		}
	}else{ // Jika user tidak memilih filter
		echo '<b>Semua Data Transaksi</b><br /><br />';

		$query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan ORDER BY tanggal_pembelian"; // Tampilkan semua data transaksi diurutkan berdasarkan tanggal
	}
	?>
	<table border="1" cellpadding="8">
	<tr>
		<th>Pelanggan</th>
        <th>Pesanan</th>
        <th>Qty</th>
        <th>Tanggal Pembelian</th>
        <th>DeaLine</th>
		<th>Alamat</th>
		<th>Total Harga</th>
	</tr>

	<?php
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

	if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			$tanggal_pembelian = date('d-m-Y', strtotime($data['tanggal_pembelian'])); // Ubah format tanggal jadi dd-mm-yyyy

			 echo "<tr>";
            echo "<td>".$data['nama_pelanggan']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            echo "<td>".$data['tanggal_pembelian']."</td>";
            echo "<td>".$data['tanggalambil']."</td>";
			echo "<td>".$data['alamat']."</td>";
			echo "<td>".$data['tharga']."</td>";
            echo "</tr>";
		}
	}else{ // Jika data tidak ada
		echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
	}
	?>
	</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require 'plugin/html2pdf/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Transaksi.pdf', 'D');
?>
