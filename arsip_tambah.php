<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="No_KK" class="col-sm-3 control-label">No KK</label>
                               <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="No_KK" class="form-control" id="inputEmail3" placeholder=" Inputkan No_KK" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Nama_Lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Lengkap" class="form-control" id="inputEmail3" placeholder="Inputkan Nama_Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama" required>
                            </div>
                        </div>
						 


                        <!--Status-->

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
                        <!--Akhir Status-->


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan data penduduk</button>
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
    $sql="INSERT INTO penduduk VALUES ('','$No_KK','$Nama_Lengkap','$Alamat','$Agama','$Status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
