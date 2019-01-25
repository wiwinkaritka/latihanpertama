<?php
$id=$_GET['id'];
$ambil=mysqli_query($koneksi,"SELECT * FROM datang WHERE id='$id'") or die ("SQL Edit error");
$data=mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah pendatang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="No_surat_datang" class="col-sm-3 control-label">No surat datang</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_surat_datang" class="form-control" id="inputEmail3" placeholder="No KK">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nik" class="form-control" id="inputEmail3" placeholder="Nama_Kepkel">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Nama_Lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Lengkap" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="tanggal_datang" class="col-sm-3 control-label">tanggal datang</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_datang" class="form-control" id="inputEmail3" placeholder="Rt_rw">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Keterangan" class="form-control" id="inputEmail3" placeholder="Desa_kel">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="Desa_asal" class="col-sm-3 control-label">Desa asal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Desa_asal" class="form-control" id="inputEmail3" placeholder="Desa_kel">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Kecamatan_asal" class="col-sm-3 control-label">Kecamatan asal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kecamatan_asal" class="form-control" id="inputEmail3" placeholder="Kecamatan">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="Kabupaten_asal" class="col-sm-3 control-label">Kabupaten asal</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kabupaten_asal" class="form-control" id="inputEmail3" placeholder="Kabupaten">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="Provinsi_Datang" class="col-sm-3 control-label">Provinsi Datang</label>
                            <div class="col-sm-9">
                                <input type="text" name="Provinsi_Datang" class="form-control" id="inputEmail3" placeholder="Kode_pos">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="Status_datang" class="col-sm-3 control-label">Status datang</label>
                            <div class="col-sm-9">
                                <input type="text" name="Status_datang" class="form-control" id="inputEmail3" placeholder="Provinsi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendatang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $No_surat_datang=$_POST['No_surat_datang'];
    $Nik=$_POST['Nik'];
    $Nama_Lengkap=$_POST['Nama_Lengkap'];
    $tanggal_datang=$_POST['tanggal_datang'];
    $Keterangan=$_POST['Keterangan'];
    $Desa_asal=$_POST['Desa_asal'];
    $Kecamatan_asal=$_POST['Kecamatan_asal'];
    $Kabupaten_datang=$_POST['Kabupaten_datang'];
    $Provinsi_Datang=$_POST['Provinsi_Datang'];
    $Status_datang=$_POST['Status_datang'];
    
    
    //buat sql
    
    $sql="UPDATE  datang  SET No_surat_datang='$No_surat_datang',Nik='$Nik',Nama_Lengkap='$Nama_Lengkap',tanggal_datang='$tanggal_datang',Keterangan='$Keterangan',Desa_asal='$Desa_asal',Kecamatan_asal='$Kecamatan_asal',Kabupaten_datang='$Kabupaten_datang',Provinsi_Datang='$Provinsi_Datang',Status_datang='$Status_datang' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
    if ($query){
        echo "<script>window.location.assign('?page=datang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
 