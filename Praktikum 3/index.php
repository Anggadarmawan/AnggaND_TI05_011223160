<?php 
    // Pastikan variabel $domisili dan $program_studi sudah didefinisikan sebelum digunakan.
    $domisili = ["Jakarta", "Bogor", "depok","tanggerang","bekasi"];
    $program_studi = ["Teknik Informatika", "Sistem Informasi", "bisnis digital"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    form{
        background-color:beige;
    }
</style>
</head>
<body>
    <div class="container m-5">
        <h2 class="mt-5 mb-3">Form Registrasi</h2>
        <form method="POST" class="p-5">
            <div class="form-group row ">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row ">
                <label for="name" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                    <input id="name" name="name" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row  ">
                <label class="col-4">Gender</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Male">
                        <label for="gender_0" class="custom-control-label">laki laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Female">
                        <label for="gender_1" class="custom-control-label">perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row  ">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select" required="required">
                        <?php foreach($domisili as $dom) { ?>
                            <option value="<?php echo $dom; ?>"><?php echo $dom; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row ">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="program_studi" name="program_studi" class="custom-select" required="required">
                        <?php foreach($program_studi as $prodi) { ?>
                            <option value="<?php echo $prodi; ?>"><?php echo $prodi; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skills_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skills_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skills[]" id="skills_2" type="checkbox" class="custom-control-input" value="JavaScript">
                        <label for="skills_2" class="custom-control-label">JavaScript</label>
                    </div>
                    <!-- Tambahkan checkbox untuk skill lainnya sesuai kebutuhan -->
                </div>
            </div>
            <div class="form-group row ">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row ">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <br><br>
        <!-- Tabel akan ditampilkan hanya setelah tombol submit ditekan -->
        <?php if(isset($_POST['submit'])) { 
            // Ambil nilai dari inputan formulir menggunakan $_POST
            $nim = $_POST['nim'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $domisili = $_POST['domisili'];
            $program_studi = $_POST['program_studi'];
            $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
            $email = $_POST['email'];
        ?>
            <table class="table table-bordered">
                <tr class="table-primary">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Domisili</th>
                    <th>Program Studi</th>
                    <th>Skill Programming</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?php echo $nim; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $domisili; ?></td>
                    <td><?php echo $program_studi; ?></td>
                    <td><?php echo implode(', ', $skills); ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
            </table>
        <?php } ?>
    </div>
</body>
</html>