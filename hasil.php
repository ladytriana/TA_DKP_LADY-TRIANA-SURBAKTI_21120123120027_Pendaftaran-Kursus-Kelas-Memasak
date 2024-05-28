<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Memasak</title>
    <link rel="stylesheet" href="hasil.css">
</head>
<body>
    <div class="container">
        <?php
        class PendaftaranKursus {
            private $nama;
            private $no_telepon;
            private $email;
            private $kelas_yang_dipilih;
            private $jadwal_kelas;
            private $keahlian;

            public function setNama($nama) {
                $this->nama = $nama;
            }

            public function getNama() {
                return $this->nama;
            }

            public function setNoTelepon($no_telepon) {
                $this->no_telepon = $no_telepon;
            }

            public function getNoTelepon() {
                return $this->no_telepon;
            }

            public function setEmail($email) {
                $this->email = $email;
            }

            public function getEmail() {
                return $this->email;
            }

            public function setKelasYangDipilih($kelas_yang_dipilih) {
                $this->kelas_yang_dipilih = $kelas_yang_dipilih;
            }

            public function getKelasYangDipilih() {
                return $this->kelas_yang_dipilih;
            }

            public function setJadwalKelas($jadwal_kelas) {
                $this->jadwal_kelas = $jadwal_kelas;
            }

            public function getJadwalKelas() {
                return $this->jadwal_kelas;
            }

            public function setKeahlian($keahlian) {
                $this->keahlian = $keahlian;
            }

            public function getKeahlian() {
                return $this->keahlian;
            }

            public function simpanData() {
                $data = [
                    $this->getNama(),
                    $this->getNoTelepon(),
                    $this->getEmail(),
                    $this->getKelasYangDipilih(),
                    $this->getJadwalKelas(),
                    $this->getKeahlian()
                ];
                $file = fopen("pendaftaran_kursus.csv", "a");
                fputcsv($file, $data);
                fclose($file);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pendaftaran = new PendaftaranKursus();

            $pendaftaran->setNama($_POST["nama"]);
            $pendaftaran->setNoTelepon($_POST["no_telepon"]);
            $pendaftaran->setEmail($_POST["email"]);
            $pendaftaran->setKelasYangDipilih($_POST["kyd"]);
            $pendaftaran->setJadwalKelas($_POST["jadwal"]);
            $pendaftaran->setKeahlian($_POST["keahlian"]);

            $pendaftaran->simpanData();

            echo "<div class='success-message'>";
            echo "<h2>Pendaftaran Berhasil!</h2>";
            echo "<p>Terima kasih, " . $pendaftaran->getNama() . ", telah mendaftar untuk kelas " . $pendaftaran->getKelasYangDipilih() . " pada tanggal " . $pendaftaran->getJadwalKelas() . ".</p>";
            echo "<p>Kami akan menghubungi Anda segera melalui email di " . $pendaftaran->getEmail() . " atau nomor telepon " . $pendaftaran->getNoTelepon() . " untuk informasi lebih lanjut.</p>";
            echo "</div>";
            echo "<div class='button-container'>";
            echo "<a href='index.php'><button>Kembali</button></a>";
            echo "</div>";
        } else {
            header("Location: index.php");
            exit();
        }
        ?>
    </div>
</body>
</html>
