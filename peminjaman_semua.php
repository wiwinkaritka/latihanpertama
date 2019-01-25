<!DOCTYPE html>
<html>
    <head>
        <title>Cetak  Semua Data Keluarga</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Kependudukan pada Kantor Kecamatan Tinggi Raja  </h2>
                        <h4>Jln. Padang sari,kecamatan Tinggi Raja, Kisaran <br> Kabupaten Asahan, Sumatera Utara, 21261</h4>
                        <hr>
                        <h3>DATA KARTU KELUARGA</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%"><center>No KK</center></th><th>Nama Kepkel</th><th>Alamat</th><th>Rt_rw</th><th>Desa kel</th><th>Kecamatan</th><th>Kabupaten</th><th>Kode pos</th><th>Provinsi</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM keluarga";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['No_KK'] ?></td>
									                  <td><?= $data['Nama_Kepkel'] ?></td>
                                                      <td><?= $data['Alamat'] ?></td>
                                                      <td><?= $data['Rt_rw'] ?></td>
                                                      <td><?= $data['Desa_kel'] ?></td>
                                                      <td><?= $data['Kecamatan'] ?></td>
                                                      <td><?= $data['Kabupaten'] ?></td>
                                    <td><?= $data['Kode_pos'] ?></td>
                                                      <td><?= $data['Provinsi'] ?></td>
                                  
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Pemerintahan<strong></u><br>
                                                             
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
