<?php
$id=$_GET['id'];
$ambil=mysqli_query($koneksi,"SELECT * FROM Keluarga WHERE id='$id'") or die ("SQL Edit error");
$data=mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="No_KK" class="col-sm-3 control-label">No KK</label>
                             <div class="col-sm-9">
                                <input type="text" name="No_KK" value="<?=$data['No_KK']?>"class="form-control" id="inputEmail3" placeholder="No KK" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nama_Kepkel" class="col-sm-3 control-label">Nama Kepkel</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Kepkel" value="<?=$data['Nama_Kepkel']?>"class="form-control" id="inputEmail3" placeholder="Nama_Kepkel">
                            </div>
                        </div>
                          <div class="form-group">
                         <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat" value="<?=$data['Alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                         <label for="Rt_rw" class="col-sm-3 control-label">Rt_rw</label>
                            <div class="col-sm-9">
                                <input type="text" name="Rt_rw" value="<?=$data['Rt_rw']?>"class="form-control" id="inputEmail3" placeholder="Rt_rw">
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="Desa_kel" class="col-sm-3 control-label">Desa Kel</label>
                            <div class="col-sm-9">
                                <input type="text" name="Desa_kel" value="<?=$data['Desa_kel']?>"class="form-control" id="inputEmail3" placeholder="Desa kel">
                            </div>
                        </div>
                          <div class="form-group">
                         <label for="Kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kecamatan" value="<?=$data['Kecamatan']?>"class="form-control" id="inputEmail3" placeholder="Kecamatan">
                            </div>
                        </div>
                         <div class="form-group">
                         <label for="Kabupaten" class="col-sm-3 control-label">Kabupaten</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kabupaten" value="<?=$data['Kabupaten']?>"class="form-control" id="inputEmail3" placeholder="Kabupaten ">
                            </div>
                        </div>
                        <div class="form-group">
                         <label for="Provinsi" class="col-sm-3 control-label">Provinsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="Provinsi" value="<?=$data['Provinsi']?>"class="form-control" id="inputEmail3" placeholder="Provinsi">
                            </div>
                        </div>
                         <div class="form-group">
                         <label for="kode_pos" class="col-sm-3 control-label">Kode pos</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kode_pos" value="<?=$data['Kode_pos']?>"class="form-control" id="inputEmail3" placeholder="Kode_pos">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data KK</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Keluarga
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $No_KK=$_POST['No_KK'];
    $Nama_Kepkel=$_POST['Nama_Kepkel'];
    $Alamat=$_POST['Alamat'];
    $Rt_rw=$_POST['Rt_rw'];
    $Desa_kel=$_POST['Desa_kel'];
    $Kecamatan=$_POST['Kecamatan'];
    $Kabupaten=$_POST['Kabupaten'];
    $Kode_pos=$_POST['Kode_pos'];
    $Provinsi=$_POST['Provinsi'];
    
    //buat sql
    $sql="UPDATE Keluarga SET No_KK = '$No_KK', Nama_Kepkel='$Nama_Kepkel', Alamat='$Alamat', Rt_rw='$Rt_rw', Desa_kel='$Desa_kel',
    Kecamatan='$Kecamatan',Kabupaten = '$Kabupaten', Kode_pos='$Kode_pos', Provinsi='$Provinsi' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>