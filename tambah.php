<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <title> Aplikasi Remas </title>
</head>

<body>
    <?php 
        include ('header.php');
    ?>
    
    <!-- start form tambah data -->
    <div class="container">
        <br>  
        <h2>Data Mahasiswa <i class="fa fa-angle-double-right"></i> Tambah Data</h2>
        <hr>
        <br>

        <form class="form-horizontal" method="post" action="simpan.php">
            <div class="form-group">
                <label for="nim">NIM</label>
                <div>
                    <input type="text" onkeypress="return hanyaAngka(event, false)"  maxlength="9" class="form-control" id="nim" name="nim">
                </div>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <div>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <div>
                    <select name="semester" class="form-control">
                        <option value="">-- Pilih Semester --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="prodi">Prodi</label>
                <div>
                    <select name="prodi" class="form-control">
                        <option value="">-- Pilih Prodi --</option>
                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                        <option value="D3 Kebidanan">D3 Kebidanan</option>
                        <option value="D3 Farmasi">D3 Farmasi</option>
                        <option value="D3 Akuntansi">D3 Akuntansi</option>
                        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
                        <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                        <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <div>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>
            
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <div>
                    <input type="text" class="form-control" id="no_hp" name="no_hp">
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
    <!-- end form tambah data -->
 
    <?php 
        include 'footer.php';
    ?>

    <script language="javascript">
        function hanyaAngka(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else
        if (e) {
            key = e.which;
        } else return true;
    
        keychar = String.fromCharCode(key);
        if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
            return true;
        } else
        if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else
        if (decimal && (keychar == ".")) {
            return true;
        } else return false;
        }
    </script>

</body>
</html>
