<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus Memasak</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url('assets/johnathan-macedo-4NQEvxW2_4w-unsplash.jpg'); background-size: cover;">
    <header>
        <h2 class="text-center">Pendaftaran Kursus Memasak</h2>
    </header>
    <div class="wrapper">
        <div class="container bg-white">
            <h2 class="container-header text-center">Tambah Data</h2>
            <form class="form" action="hasil.php" method="post">
                <div class="form-group form-book">
                    <label for="nama">Nama Anda</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group form-book">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" id="no_telepon" name="no_telepon" required>
                </div>
                <div class="form-group form-book">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group form-book">
                    <label for="kyd">Kelas yang Dipilih</label>
                    <select class="form-select" aria-label="Default select example" name="kyd" id="kyd">
                        <?php
                            $kelas_options = ["Dasar", "Menengah", "Lanjutan", "Spesial"];
                            foreach ($kelas_options as $option) {
                                echo "<option value='$option'>$option</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group form-book">
                    <label for="jadwal">Jadwal Kelas:</label>
                    <input type="date" id="jadwal" name="jadwal" required>
                </div>
                <div class="form-group form-book">
                    <label for="keahlian">Keahlian</label>
                    <select class="form-select" aria-label="Default select example" name="keahlian" id="keahlian">
                        <option value="Pemula">Dasar</option>
                        <option value="Menengah">Menengah</option>
                        <option value="Mahir">Lanjutan</option>
                    </select>
                </div>
                <input type="submit" value="Submit" formaction="hasil.php">
            </form>
        </div>
    </div>
</body>
</html>
