<?php
require_once './class_nilai_mahasiswa.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    
    $nilaiMahasiswa = new NilaiMahasiswa($nim, $matkul, $nilai);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Input Nilai Mahasiswa
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nim">NIM</label> 
                                <input id="nim" name="nim" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="matkul">Mata Kuliah</label> 
                                <select id="matkul" name="matkul" class="custom-select">
                                    <option value="BD">Basis Data</option>
                                    <option value="PW">Pemrograman Web 2</option>
                                    <option value="FE">Pemrograman Frontend</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nilai">Nilai</label> 
                                <input id="nilai" name="nilai" type="number" class="form-control">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <hr>
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($nilaiMahasiswa)) : ?>
                    <div class="card">
                        <div class="card-header">
                            Hasil Input
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?= $nilaiMahasiswa->nim ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Mata Kuliah</td>
                                    <td>:</td>
                                    <td><?= $nilaiMahasiswa->matkul ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai</td>
                                    <td>:</td>
                                    <td><?= $nilaiMahasiswa->nilai ?></td>
                                </tr>
                                <tr>
                                    <td>Hasil Ujian</td>
                                    <td>:</td>
                                    <td><?= $nilaiMahasiswa->hasil() ?></td>
                                </tr>
                                <tr>
                                    <td>Grade</td>
                                    <td>:</td>
                                    <td><?= $nilaiMahasiswa->kelulusan() ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="alert alert-info" role="alert">
                        Belum ada nilai yang terkirim!
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>
</html>
