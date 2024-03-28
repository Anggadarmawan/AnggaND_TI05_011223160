<?php
require_once './class_mahasiswa.php';

$adi = new Mahasiswa('02011', 'adi');
$azarr = new Mahasiswa('02012', 'azzar N F');
$Hilman = new Mahasiswa('02012', 'hilman');
$angga = new Mahasiswa('02012', 'angga');

$adi->prodi = 'TI';
$adi->thn_angkatan = '2000';
$adi->ipk = 3.0;

$azarr->prodi = 'TI';
$azarr->thn_angkatan = '2008';
$azarr->ipk = 2.8;

$Hilman->prodi = 'TI';
$Hilman->thn_angkatan = '2009';
$Hilman->ipk = 3.9;

$angga->prodi = 'TI';
$angga->thn_angkatan = '2010';
$angga->ipk = 4.0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 2px solid #5F9EA0;
            text-align: left;
            padding: 9px;
        }

        th {
            background-color: #0000FF;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat IPK</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $adi->nim; ?></td>
            <td><?php echo $adi->nama; ?></td>
            <td><?php echo $adi->prodi; ?></td>
            <td><?php echo $adi->thn_angkatan; ?></td>
            <td><?php echo $adi->ipk; ?></td>
            <td><?php echo $adi->predikat_ipk(); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $azarr->nim; ?></td>
            <td><?php echo $azarr->nama; ?></td>
            <td><?php echo $azarr->prodi; ?></td>
            <td><?php echo $azarr->thn_angkatan; ?></td>
            <td><?php echo $azarr->ipk; ?></td>
            <td><?php echo $azarr->predikat_ipk(); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $Hilman->nim; ?></td>
            <td><?php echo $Hilman->nama; ?></td>
            <td><?php echo $Hilman->prodi; ?></td>
            <td><?php echo $Hilman->thn_angkatan; ?></td>
            <td><?php echo $Hilman->ipk; ?></td>
            <td><?php echo $Hilman->predikat_ipk(); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $angga->nim; ?></td>
            <td><?php echo $angga->nama; ?></td>
            <td><?php echo $angga->prodi; ?></td>
            <td><?php echo $angga->thn_angkatan; ?></td>
            <td><?php echo $angga->ipk; ?></td>
            <td><?php echo $angga->predikat_ipk(); ?></td>
        </tr>
    </table>
</body>
</html>
