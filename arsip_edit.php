<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penduduk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="No_KK" class="col-sm-3 control-label">No KK</label>
                            <div class="col-sm-2 col-xs-9">
                                <input type="text" name="No_KK" value="<?=$data['No_KK']?>"class="form-control" id="inputEmail3" placeholder="No_KK">   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Nama_Lengkap" class="col-sm-3 control-label">Nama_Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Lengkap" value="<?=$data['Nama_Lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat" value="<?=$data['Alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" value="<?=$data['Agama']?>"class="form-control" id="inputEmail3" placeholder="Agamat">
                            </div>
                        </div>
						
							
                       <div class="form-group">
                            <label for="Status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="Status" class="form-control">
                                   <option value="pelajar/mahasiswa">pelajar/mahasiswa</option>
                                    <option value="sudah_menikah">sudah menikah</option>
                                    <option value="belum_menikah">belum menikah</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data penduduk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data penduduk
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
    $Nama_Lengkap=$_POST['Nama_Lengkap'];
	$Alamat=$_POST['Alamat'];
    $Agama=$_POST['Agama'];
    $Status=$_POST['Status'];
    //buat sql
    $sql="UPDATE penduduk SET No_KK='$No_KK',Nama_Lengkap='$Nama_Lengkap',Alamat='$Alamat',Agama='$Agama',Status='$Status' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



