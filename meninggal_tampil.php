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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Meninggal</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>No surat meninggal</th><th>Nik</th><th>No surat lahir</th><th>No KK</th><th>Hari meninggal</th><th>Tanggal meniggal</th><th>Tutup usia</th><th>alamat meninggal</th><th>Penyebab meninggal</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM meninggal";
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
                                    <td><?= $data['No_surat_meninggal'] ?></td>
									<td><?= $data['Nik'] ?></td>
									<td><?= $data['No_surat_lahir'] ?></td>
									<td><?= $data['No_KK'] ?></td>
                                    <td><?= $data['Hari_meninggal'] ?></td>
                                    <td><?= $data['Tanggal_meninggal'] ?></td>
                                    <td><?= $data['Tutup_usia'] ?></td>
                                    <td><?= $data['Alamat_meninggal'] ?></td>
                                    <td><?= $data['Penyebab_meninggal'] ?></td>

                                    <td>
                                      
                                        <a href="?page=meninggal&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
								
                            
                                        <a href="?page=meninggal&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td >
                                    <a href="?page=meninggal&actions=tambah " class="btn btn-info btn-sm">
                                        Tambah meninggal

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

