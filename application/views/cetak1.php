<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="generator" content="Aspose.Words for .NET 24.3.0" />
  <title></title>
  <style type="text/css">
  body { 
    line-height:108%; 
    font-family:Calibri; 
    font-size:11pt }
    p { 
      margin:0pt 0pt 8pt 
      }
    table 
      { margin-top:0pt; 
        margin-bottom:8pt 
        }
        .Header { 
          margin-bottom:0pt; 
          line-height:normal; 
          font-size:14pt; 
          font-weight:bold 
          }
          span.HeaderChar { 
            font-size:14pt; 
            font-weight:bold 
            }
            .GridTable4Accent1 {  }
            .TableGrid {  }
          </style>
        </head>
        <body>
          <div>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:16pt">
              <span style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1">
                <img src="assets/images/logoitera.jpeg" width="113" height="117" alt="" style="margin-top:14.7pt; margin-left:-77.7pt; -aw-left-pos:-5.7pt; -aw-rel-hpos:margin; -aw-rel-vpos:page; -aw-top-pos:36pt; -aw-wrap-type:none; position:absolute" />
              </span>
              <span style="font-family:'Times New Roman'; font-weight:normal">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:16pt">
              <span style="font-family:'Times New Roman'; font-weight:normal">RISET, DAN TEKNOLOGI</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center">
              <span style="font-family:'Times New Roman'; font-weight:normal">INSTITUT TEKNOLOGI SUMATERA</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:12pt">
              <span style="font-family:'Times New Roman'; font-weight:normal">FAKULTAS TEKNOLOGI INFRASTRUKTUR DAN KEWILAYAHAN</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:12pt">
              <span style="font-family:'Times New Roman'; font-weight:normal">Jalan Terusan Ryacudu Way Hui, Kecamatan Jati Agung, Lampung Selatan 35365</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:12pt">
              <span style="font-family:'Times New Roman'; font-weight:normal">Telepon: (0721) 8030188</span>
            </p>
            <p class="Header" style="margin-left:72pt; text-align:center; font-size:12pt">
              <span style="font-family:'Times New Roman'; font-weight:normal">Email: ftik@itera.ac.id, Website : http://ftik.itera.ac.id</span>
            </p>
            <p class="Header" style="font-size:12pt">
              <span style="height:0pt; display:block; position:absolute; z-index:1">
                <img src="assets/images/garis.png" width="650" height="14" alt="" style="margin-top:4.9pt; margin-left:-1.5pt; -aw-left-pos:1.5pt; -aw-rel-hpos:margin; -aw-rel-vpos:paragraph; -aw-top-pos:7.9pt; -aw-wrap-type:none; position:absolute" />
              </span>
              
              <span style="font-family:'Times New Roman'; font-weight:normal; -aw-import:spaces">&#xa0;</span>
            </p>
            <p style="line-height:108%; font-size:12pt">
              <span style="font-family:'Times New Roman'; font-weight:bold">Data Layanan</span>
            </p>
            <p>
              <span style="font-family:'Times New Roman'"><?php echo $label?></span>
            </p>
            <table class="table-responsive" border="1" width="100%" style="margin-top: 10px;">
            <tr>
            <th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Keperluan</th>
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
                echo "<td style='width: 100px;'>".$data->nama_pemohon."</td>";
                echo "<td style='width: 300px;'>".$data->keperluan."</td>";
            }
        }
		?>
        </table>
        <p>
          <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
        </p>
        <p style="margin-left:324pt">
          <span style="font-family:'Times New Roman'">Dekan </span>
        </p>
        <p style="margin-left:324pt">
          <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
        </p>
        <p style="margin-left:324pt">
          <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
        </p>
        <p style="margin-left:324pt; margin-bottom:0pt">
          <span style="font-family:'Times New Roman'">Arif Rohman</span>
        </p>
        <p style="margin-left:324pt; margin-bottom:0pt">
          <span style="font-family:'Times New Roman'">NIP. 198703012012121002</span>
        </p>
      </div>
    </body>
    </html>