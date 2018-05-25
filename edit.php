<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title> Aplikasi Remas </title>
</head>

<body>
    <?php 
        include ('header.php');
    ?>
    
    <?php
        require_once('koneksi.php');

        if($_GET['nim']!=null){
            $nim        = $_GET['nim'];
            $koneksiObj = new Koneksi();
            $koneksi    = $koneksiObj->getKoneksi();
            
            if($koneksi->connect_error){
                echo "Gagal Koneksi : ". $koneksi->connect_error;
            }
            
            $query = "select * from mahasiswa where nim='$nim'";
            $data = $koneksi->query($query);
        }
    
        if($data->num_rows <= 0){
            echo "Data tidak ditemukan!";
        } else{
            while($row = $data->fetch_assoc()){
                $nim           = $row['nim'];
                $nama          = $row['nama'];
                $jenis_kelamin = $row['jenis_kelamin'];
                $semester      = $row['semester'];
                $prodi         = $row['prodi'];
                $alamat        = $row['alamat'];
                $no_hp         = $row['no_hp'];
            }
        }
    ?>

    <div class="row">
        <div class="container">
            <br>
            <h2>Data Mahasiswa <i class="fa fa-angle-double-right"></i> Edit Data</h2>
            <hr>
            <br>

            <!-- start form edit data -->
            <form class="form-horizontal" method="post" action="update.php">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <div>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="nim" value="<?php echo $nim;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <div>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $nama;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-Laki" <?php echo $jenis_kelamin=='Laki-Laki'? 'selected':''; ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php echo $jenis_kelamin=='Perempuan'? 'selected':''; ?>>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label>
                    <div>
                        <select name="semester" class="form-control">
                            <option value="">-- Pilih Semester --</option>
                            <?php 
                                for($i=1;$i<=8;$i++){ ?>
                                    <option value="<?php echo $i;?>" <?php echo $semester==$i ? 'selected':'';?>><?php echo $i;?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <div>
                        <select name="prodi" class="form-control">
                            <option value="">-- Pilih Prodi --</option>
                            <option value="D4 Teknik Informatika" <?php echo $prodi=='D4 Teknik Informatika' ? 'selected':'';?>>D4 Teknik Informatika</option>
                            <option value="D3 Kebidanan" <?php echo $prodi=='D3 Kebidanan' ? 'selected':'';?>>D3 Kebidanan</option>
                            <option value="D3 Farmasi" <?php echo $prodi=='D3 Farmasi' ? 'selected':'';?>>D3 Farmasi</option>
                            <option value="D3 Akuntansi" <?php echo $prodi=='D3 Akuntansi' ? 'selected':'';?>>D3 Akuntansi</option>
                            <option value="D3 Teknik Komputer" <?php echo $prodi=='D3 Teknik Komputer' ? 'selected':'';?>>D3 Teknik Komputer</option>
                            <option value="D3 Teknik Mesin" <?php echo $prodi=='D4 Teknik Mesin' ? 'selected':'';?>>D3 Teknik Mesin</option>
                            <option value="D3 Teknik Elektro" <?php echo $prodi=='D4 Teknik Elektro' ? 'selected':'';?>>D3 Teknik Elektro</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $alamat;?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="no_hp">Nomor HP</label>
                    <div>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp" value="<?php echo $no_hp;?>">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        <a href="index.php" class="btn btn-danger"><i class="fa fa-ban"></i> Batal</a>
                    </div>
                </div>
                            
            </form>
        </div>
    </div>

    <?php 
        include 'footer.php';
    ?>

</body>
</html>
