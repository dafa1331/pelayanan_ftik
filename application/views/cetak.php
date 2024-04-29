<html>
<head>
	<title>Cetak PDF</title>
	<style>
    .table {
        border-collapse:collapse;
        table-layout:fixed;width: 630px;
    }
    .table th {
        padding: 5px;
    }
    .table td {
        word-wrap:break-word;
        width: 20%;
        padding: 5px;
    }
	</style>
</head>
<body>
    <h4 style="margin-bottom: 5px;">Data Transaksi</h4>
	<?php echo $label ?>

	<table class="table-responsive" border="1" width="100%" style="margin-top: 10px;">
		<tr>
            <th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Keperluan</th>
            <th>Tim Kerja</th>
		</tr>

		<?php
        $no = 1;
        if(empty($layanan)){ // Jika data tidak ada
            echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
        }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            foreach($layanan as $data){ // Looping hasil data transaksi
                $tgl = date('d-m-Y', strtotime($data->tanggal_pengajuan)); // Ubah format tanggal jadi dd-mm-yyyy

                echo "<tr>";
                echo "<td style='width: 5px;'>".$no++."</td>";
                echo "<td style='width: 80px;'>".$tgl."</td>";
                echo "<td style='width: 100px;'>".$data->nama."</td>";
                echo "<td style='width: 300px;'>".$data->keperluan."</td>";
                echo "<td style='width: 300px;'>".$data->bagian."</td>";
                echo "</tr>";
            }
        }
		?>
	</table>
</body>
</html>
