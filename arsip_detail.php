<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM penduduk WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No_KK</td> <td><?= $data['No_KK'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama_Lengkap</td> <td><?= $data['Nama_Lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['Alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Agama</td> <td><?= $data['Agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['Status'] ?></td>
                        </tr>
                        <tr>
                           
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data penduduk </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

