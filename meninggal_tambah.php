<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Meninggal</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="No_surat_meninggal" class="col-sm-3 control-label">No_surat_meninggal</label>
                               <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="No_surat_meninggal" class="form-control" id="inputEmail3" placeholder="Inputkan No_surat_meninggal" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Nik " class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nik" class="form-control" id="inputEmail3" placeholder="Inputkan Nik" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="No_surat_lahir" class="col-sm-3 control-label">No_surat_lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_surat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan No_surat_lahir" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="No_KK" class="col-sm-3 control-label">No_KK</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_KK" class="form-control" id="inputEmail3" placeholder="Inputkan No_KK" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="Hari_meninggal" class="col-sm-3 control-label">Hari_meninggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Hari_meninggal" class="form-control" id="inputEmail3" placeholder="Inputkan Hari_meninggal" required>
                            </div>
                        </div>
 <div class="form-group">
                            <label for="Tanggal_meninggal" class="col-sm-3 control-label">Tanggal_meninggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="Tanggal_meninggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal_meninggal" required>
                            </div>
                        </div>
 <div class="form-group">
                            <label for="Tutup_usia" class="col-sm-3 control-label">Tutup_usia</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tutup_usia" class="form-control" id="inputEmail3" placeholder="Inputkan Tutup_usia" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Alamat_meninggal" class="col-sm-3 control-label">Alamat_meninggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat_meninggal" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat_meninggal" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Penyebab_meninggal" class="col-sm-3 control-label">Penyebab_meninggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Penyebab_meninggal" class="form-control" id="inputEmail3" placeholder="Inputkan Penyebab_meninggal" required>
                            </div>
                        </div>
                        <!--Status-->
                        <!--Akhir Status-->


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=meninggal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $No_surat_meninggal=$_POST['No_surat_meninggal'];
  $Nik=$_POST['Nik'];
  $No_surat_lahiro=$_POST['No_surat_lahir'];
  $No_KK=$_POST['No_KK'];
  $Hari_meninggal=$_POST['Hari_meninggal'];
  $Tanggal_meninggal=$_POST['Tanggal_meninggal'];
  $Tutup_usia=$_POST['Tutup_usia'];
  $Alamat_meninggal=$_POST['Alamat_meninggal'];
  $Penyebab_meninggal=$_POST['Penyebab_meninggal'];
    //buat sql
    $sql="INSERT INTO meninggal VALUES ('','$No_surat_meninggal','$Nik','$No_surat_lahir','$No_KK','$Hari_meninggal','$Tanggal_meninggal','$Tutup_usia','$Alamat_meninggal','$Penyebab_meninggal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=meninggal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
