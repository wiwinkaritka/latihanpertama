<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pendatang</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>No surat datang</th><th>Nik</th><th>Nama lengkap</th><th>tanggal datang</th><th>Keterangan</th><th>Desa asal</th><th>kecamatan asal</th><th>Kabupaten asal</th><th>Provinsi datang</th><th>Status datang</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM datang";
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
                                    <td><?= $data['No_surat_datang'] ?></td>
									<td><?= $data['Nik'] ?></td>
									<td><?= $data['Nama_Lengkap'] ?></td>
									<td><?= $data['tanggal_datang'] ?></td>
                                    <td><?= $data['Keterangan'] ?></td>
                                    <td><?= $data['Desa_asal'] ?></td>
                                    <td><?= $data['Kecamatan_asal'] ?></td>
                                    <td><?= $data['Kabupaten_asal'] ?></td>
                                    <td><?= $data['Provinsi_Datang'] ?></td>
                                    <td><?= $data['Status_datang'] ?></td>

                                    <td>
                                        
                                        <a href="?page=datang&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
								
                            
                                        <a href="?page=datang&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=datang&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Pendatang

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

