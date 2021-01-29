<?php
// Load file koneksi.php
include "koneksi.php";
?>

<html>
<head>
	<link rel="icon" href="../img/icon.png" type="image/png" />
    <title>Data Transaksi UZIANA CAKE & BAKERY</title>
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
    <script src="js/jquery.min.js"></script> <!-- Load file jquery -->
</head>
<body>
    <h2>Data Transaksi UZIANA CAKE & BAKERY</h2><hr>

    <form method="get" action="">
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />

        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>

        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>

        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                $query = "SELECT YEAR(tanggal_pembelian) AS tahun FROM pembelian GROUP BY YEAR(tanggal_pembelian)"; // Tampilkan tahun sesuai di tabel transaksi
                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                    echo '<option value="'.$data['tahun'].'">'.$data['tahun'].'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

		 <button type="submit">Tampilkan</button>
        <a href="index.php">Reset Filter</a>
    </form>
    <hr />

    <?php
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
        $filter = $_GET['filter']; // Ambil data filder yang dipilih user

        if($filter == '1'){ 
			// Jika filter nya 1 (per tanggal)
            $tanggal_pembelian = date('d-m-y', strtotime($_GET['tanggal']));

            echo '<b>Data Transaksi Tanggal '.$tanggal_pembelian.'</b><br /><br />';
            echo '<a href="index.php?m=laporan&s=print&filter=1&tanggal='.$_GET['tanggal'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan WHERE DATE(tanggal_pembelian)='".$_GET['tanggal']."'"; // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
        }else if($filter == '2'){
			include "index.php?m=laporan&s=awal";			// Jika filter nya 2 (per bulan)
            $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

            echo '<b>Data Transaksi Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="index.php?m=laporan&s=print&filter=2&bulan='.$_GET['bulan'].'&tahun='.$_GET['tahun'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggann WHERE MONTH(tanggal_pembelian)='".$_GET['bulan']."' AND YEAR(tanggal_pembelian)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
        }else{ // Jika filter nya 3 (per tahun)
			include "index.php?m=laporan&s=awal";
            echo '<b>Data Transaksi Tahun '.$_GET['tahun'].'</b><br /><br />';
            echo '<a href="index.php?m=laporan&s=print&filter=3&tahun='.$_GET['tahun'].'">Cetak PDF</a><br /><br />';

            $query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat, a.keterangan, c.nama_pelanggan
		from (pembelian a LEFT JOIN pembelian_produk b on a.id_pembelian=b.id_pembelian)   JOIN pelanggan c on a.id_pelanggan=c.id_pelanggan WHERE YEAR(tanggal_pembelian)='".$_GET['tahun']."'"; // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
        }
    }else{ // Jika user tidak mengklik tombol tampilkan
        echo '<b>Semua Data Transaksi</b><br /><br />';
        echo '<a href="?m=laporan&s=print">Cetak PDF</a><br /><br />';

        $query = "SELECT  a.id_pembelian, a.id_pelanggan, b.nama,  b.jumlah, b.tharga, a.tanggal_pembelian, a.total_pembelian, a.tanggalambil, a.alamat,  a.keterangan, c.nama_pelanggan
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
            $tgl = date('d-m-Y', strtotime($data['tanggal_pembelian'])); // Ubah format tanggal jadi dd-mm-yyyy

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

    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
    <script src="plugin/jquery-ui/jquery-ui.min.js"></script> <!-- Load file plugin js jquery-ui -->
</body>
</html>
