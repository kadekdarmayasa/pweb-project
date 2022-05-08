<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c7301203e1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="rekening.css">
    <title>Form</title>
</head>

<body>
    <section id="inputpage">
        <div class="profilepage">
            <div class="profilebar">
            </div>
            <div class="profilepages">
                <div class="profilebars">
                    <div class="profimg">
                        <div class="profileimg">
                        </div>
                    </div>

                    <div class="ptext1">
                        <div class="profiletext">
                            <!-- Ini bisa diganti sesuai username -->
                            <h1>Rico Tastrawan</h1>
                            <p>ricotastrawan@gmail.com</p>
                        </div>
                    </div>
                    <div class="ptext2">
                        <div class="profiletext">
                            <a href="">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="profilemenu">
                    <ul>
                        <li><a href="siswa.php">Siswa</a></li>
                        <li><a href="administrasi.php">Administrasi</a></li>
                        <li><a href="rekening.php">Rekening</a></li>
                        <li><a href="spp.php">SPP</a></li>
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                </div>
                <div class="textjudul">
                    <h1>Siswa</h1>
                    <p>Please enter your current password to change your password.</p>
                </div>
                <div class="form">
                    <form action="">
                        <div class="input">
                            <label for="Nama">Nama</label>
                            <input type="text" placeholder="Nama">
                        </div>
                        <div class="input">
                            <label for="Jurusan">Jurusan</label>
                            <input type="text" placeholder="Jurusan">
                        </div>
                        <div class="input">
                            <label for="Kelas">Kelas</label>
                            <input type="text" placeholder="Kelas">
                        </div>
                        <div class="input">
                            <label for="NIS">NIS</label>
                            <input type="text" placeholder="NIS">
                        </div>
                        <div class="input">
                            <label for="NoRekening">No Rekening</label>
                            <input type="text" placeholder="No Rekening">
                        </div>
                        <div class="input">
                            <label for="RiwayatTransaksi">Riwayat Transaksi</label>
                            <input type="text" placeholder="Riwayat Transaksi">
                        </div>
                        <div class="input">
                            <label for="TanggalTransaksi">Tanggal Transaksi</label>
                            <input type="text" placeholder="Tanggal Transaksi">
                        </div>
                        <div class="inputbutton">
                            <div class="button">
                                <input type="button" value="Cancel">
                                <input type="button" value="Update Password">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
</body>

</html>