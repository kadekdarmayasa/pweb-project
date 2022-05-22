<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administrasi</title>
    <link rel="stylesheet" href="../src/css/administrasi.css">

    <script src="https://kit.fontawesome.com/c7301203e1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="dash-1">
        <div class="column-dash1">
            <div class="dash1-title">
                <i class="fa-solid fa-bolt-lightning fa-2x"></i>
                <h1>P R O J E C T</h1>
            </div>
            <div class="dash1-column">
                <div class="isi-dash1">
                    <i class="fa-solid fa-user-check fa-2x"></i>
                    <h1><a href="siswa.php">Siswa</a></h1>
                </div>
                <div class="isi-dash1 active">
                    <i class="fa-regular fa-address-book fa-2x"></i>
                    <h1><a href="administrasi.php">Administrasi</a></h1>
                </div>
                <div class="isi-dash1">
                    <i class="fa-solid fa-file-invoice-dollar fa-2x"></i>
                    <h1><a href="rekening.php">Rekening</a></h1>
                </div>
                <div class="isi-dash1">
                    <i class="fa-regular fa-chart-bar fa-2x"></i>
                    <h1><a href="spp.php">SPP</a></h1>
                </div>
                <div class="isi-dash1">
                    <i class="fa-regular fa-credit-card fa-2x"></i>
                    <h1><a href="admin.php">Admin</a></h1>
                </div>
            </div>
            <div class="log-out">
                <i class="fa-solid fa-right-from-bracket fa-2x"></i>
                <h1><a href="../logout.php">Log Out</a></h1>
            </div>
        </div>
    </div>
    <div class="dash-2">
        <div class="menubar-dash2">
            <div class="menubar-left">
                <h1>Dashboard > Administrasi</h1>
            </div>
            <div class="menubar-right">
                <i class="fa-regular fa-bell fa-2x"></i>
                <div class="profile"></div>
                <h1>Cocomelon</h1>
                <i class="fa-solid fa-angle-down fa-2x"></i>
            </div>
        </div>
        <div class="isibar">
            <div class="isibar-title">
                <div class="isibart-left">
                    <h1>Administrasi</h1>
                </div>
                <div class="isibart-right">
                    <button>CREATE NEW</button>
                </div>
            </div>
            <div class="isibar-box">
                <div class="headbar-box">
                    <div class="hb-1">
                        <h1>What are you looking for ?</h1>
                    </div>
                    <div class="hb-2">
                        <h1>Category</h1>
                    </div>
                    <div class="hb-3">
                        <h1>Status</h1>
                    </div>
                    <div class="hb-4"></div>
                    <div class="hb-5"></div>
                </div>
                <div class="isibari-box">
                    <div class="hb-1">
                        <div class="search">
                            <i class="fa-regular fa-compass fa-2x"></i>
                            <h1>Search for category, name, company, etc</h1>
                        </div>
                    </div>
                    <div class="hb-2">
                        <div class="category">
                            <h1>All</h1>
                            <i class="fa-solid fa-angle-down fa-2x"></i>
                        </div>
                    </div>
                    <div class="hb-3">
                        <div class="status">
                            <h1>All</h1>
                            <i class="fa-solid fa-angle-down fa-2x"></i>
                        </div>
                    </div>
                    <div class="hb-4">
                        <div class="icon-hb">
                            <i class="fa-solid fa-angles-down fa-2x"></i>
                        </div>
                    </div>
                    <div class="hb-5">
                        <div class="button-hb">
                            <button>Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tablebar" id="tablebar">
            <div class="tbhead-box">
                <div class="tb-1">
                    <h1>Administrasi</h1>
                </div>
                <div class="tb-2">
                    <h1>Show</h1>
                    <div class="all-column">
                        <h1>ALL COLUMN</h1>
                        <i class="fa-solid fa-angle-down fa-2x"></i>
                    </div>
                </div>
                <div class="tb-3">
                    <div class="dispatch">
                        <h1>DISPATCH SELECTED</h1>
                    </div>
                </div>
                <div class="tb-4">
                    <div class="numeric">
                        <div class="arrow">
                            <i class="fa-solid fa-angle-left fa-2x"></i>
                        </div>
                        <a href="#" class="target choosen">1</a>
                        <a href="#" class="target">2</a>
                        <a href="#" class="target">3</a>
                        <h1>...</h1>
                        <a>10</a>
                        <div class="arrow"> <i class="fa-solid fa-angle-right fa-2x"></i></div>
                    </div>
                </div>
            </div>
            <div class="base-record">
                <div class="recordbar-box">
                    <div class="rb-1 rb-h1 rb-bold">
                        <h1>Nama Siswa</h1>
                    </div>
                    <div class="rb-2 rb-h1 rb-bold">
                        <h1>Jurusan</h1>
                    </div>
                    <div class="rb-3 rb-h1 rb-bold">
                        <h1>Kelas</h1>
                    </div>
                    <div class="rb-4 rb-h1 rb-bold">
                        <h1>NIS</h1>
                    </div>
                    <div class="rb-5 rb-h1 rb-bold">
                        <h1>DPP</h1>
                    </div>
                    <div class="rb-6 rb-h1 rb-bold">
                        <h1>Asuransi</h1>
                    </div>
                </div>
                <?php
                // $conn = mysqli_connect('localhost', 'root', '', 'Tugas');
                // $result = mysqli_query($conn, 'SELECT * FROM data_pembeli');
                // if (!$result) {
                //     echo mysqli_error($conn);
                // }

                // $i = 1;
                // while ($row = mysqli_fetch_row($result)) :
                ?>
                <!-- <hr width="98%">
                    <div class="recordbar-box rb-fields">
                        <div class="rb-1 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                        <div class="rb-2 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                        <div class="rb-3 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1> 
                        </div>
                        <div class="rb-4 rb-h1"> 
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                        <div class="rb-5 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                        <div class="rb-6 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                        <div class="rb-7 rb-h1">
                            <h1>Ini Masukan Record & Fields</h1>
                        </div>
                    </div> -->
                <?php 
                // endwhile;
                 ?>
            </div>
        </div>
    </div>
</body>

</html>