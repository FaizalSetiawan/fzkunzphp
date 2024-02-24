<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Dunia Kerja</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!---FOTO YAYASAN ASSALAAM-->
    <center>
        <div class="mt-4 mb-3">
            <img src="img/picture.png" width="200rem" alt="">
        </div>
                <h2>PENGGAJIHAN</h2>
                <div><h2>GURU/KARYAWAN YAYASAN ASSALAAM<h2></div>
</center>
    <!---FOTO YAYASAN ASSALAAM-->
<!--Content-->
        </div>
        <div class="card mt-5 ml-5 mr-5 bg-light text-dark">
        <div class="card-header" align="left">
            Data Penggajihan
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputName1">No</label>
                    <input type="name" class="form-control" name="no" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Nama</label>
                    <input type="name" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2"> Pendidikan</label>
                    <select class="form-control" name= "pendidikan">
                        <option>                                      </option>
                        <option>TK</option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Tanggal Gaji</label>
                    <input type="date" class="form-control" name="tanggal_gaji">
                </div>
                <div class="row">
                <div class="col-md-6">
                <h2><center> Gaji </center></h2>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Jabatan</label>
                    <select class="form-control" name= "jabatan">
                        <option>Kepala Sekolah</option>
                        <option>Wakasek</option>
                        <option>Guru      </option>
                        <option>Karyawan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Lama Kerja</label>
                    <input type="name" class="form-control" name="lama_kerja">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Status Kerja</label>
                    <select class="form-control" name= "status_kerja">
                        <option></option>
                        <option>Tetap</option>
                        <option>Kontrak</option>
                    </select>
                </div>
                </div>
               <div class="col-md-6">
               <h2><center> Potongan </center></h2>
                <div class="form-group">
                    <label for="exampleInputName2">BPJS</label>
                    <input type="name" class="form-control" name="bpjs">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Pinjaman</label>
                    <input type="name" class="form-control" name= "pinjaman">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Tabungan</label>
                    <input type="name" class="form-control" name= "tabungan">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Lainnya</label>
                    <input type="name" class="form-control" name= "lainnya">
                </div>
                <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
            </form>
        </div>
    </div>
</div>
    <!---/content--->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

<!--PHP-->
<?php
if(isset($_POST['daftar'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $pendidikan = $_POST['pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    
    // Menghitung gaji sesuai dengan jabatan
    if($jabatan == "Kepala Sekolah") {
        $gaji = 5000000;
    } elseif($jabatan == "Wakasek") {
        $gaji = 4000000;
    } elseif($jabatan == "Guru") {
        $gaji = 3000000;
    } elseif($jabatan == "Karyawan") {
        $gaji = 2000000;
    } else {
        $gaji = 0; // 
    }
    
    // Menghitung bonus dari Kerja
    if($status_kerja == "Tetap") {
        $bonus = 1000000;
    } else {
        $bonus = 0;
    }
    
    // Menghitung gaji bersih
    $gaji_bersih = ($gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya);
}

// Menampilkan hasil
class Hasil {
    public function pengambilan($no2, $nama2, $pendidikan2, $tanggal_gaji2, $jabatan2, $lama_kerja2, $status_kerja2, $bpjs2, $pinjaman2, $tabungan2, $lainnya2, $gaji_bersih2, $gaji2, $bonus2) {
        ?>
        <center><div class="card border-primary mb-3 mx-auto" style="max-width: 25rem;">
            <div class="card-header"><h3>Muhammad Faizal Setiawan</h3></div>
            <div class="card-body  card text-primary">
                <h2 class="card-title">STRUK GAJI</h2>
                <table>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><?php echo $no2 ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $nama2 ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><?php echo $pendidikan2 ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Gaji</td>
                        <td>:</td>
                        <td><?php echo $tanggal_gaji2 ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?php echo $jabatan2 ?></td>
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td><?php echo $gaji2 ?></td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo $lama_kerja2 ?></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td><?php echo $status_kerja2 ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Bonus</td>
                        <td>:</td>
                        <td><?php echo $bonus2 ?></td>
                    </tr>
                    <tr>
                        <td>BPJS</td>
                        <td>:</td>
                        <td><?php echo $bpjs2 ?></td>
                    </tr>
                    <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td><?php echo $pinjaman2 ?></td>
                    </tr>
                    <tr>
                        <td>Tabungan</td>
                        <td>:</td>
                        <td><?php echo $tabungan2 ?></td>
                    </tr>
                    <tr>
                        <td>Lainnya</td>
                        <td>:</td>
                        <td><?php echo $lainnya2 ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td>:</td>
                        <td><?php echo $gaji_bersih2 ?></td>
                    </tr>
                </table>
            </div>
        </div></center>
    <?php
    }
}

//
$cetak = new Hasil();

if(isset($_POST['daftar'])) {
    echo $cetak->pengambilan($no, $nama, $pendidikan, $tanggal_gaji, $jabatan, $lama_kerja, $status_kerja, $bpjs, $pinjaman, $tabungan, $lainnya, $gaji_bersih, $gaji, $bonus);
}
?>

