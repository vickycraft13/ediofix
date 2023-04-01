<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME | Edioo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="./css/home.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
        <div class="container-fluid cont-nav">
        <a class="navbar-brand brand-name" href=".">EDIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-menu">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=".">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about.php">ABOUT AUTHOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./simulasi.php">SIMULATION</a>
            </li>
            </ul>
        </div>
        <div class="right-side-desc">
            <p>Educational Website for Video Learning</p>
        </div>
        </div>
    </nav>
    <div class="container-fluid cont-content">
        <div class="rect"></div>
        <div class="row row-1">
            <div class="col-lg-6 rc-11 order-lg-1 order-2">
                <h1>Belajar Teknik Videografi bersama EDIO</h1>
                <p>Dalam melakukan proses pembuatan video, seorang Videografer harus terlebih dahulu memahami teknik-teknik pengambilan gambar. Sebuah video terdiri dari 3 unsur diantaranya Ukuran Bingkai (Frame Size), Sudut Kamera (Camera Angle), dan Pergerakan Kamera (Camera Movement). EDIO hadir sebagai simulasi dan media pembelajaran untuk para videografer sebelum melakukan pengambilan gambar menggunakan kamera sungguhan.</p>
                <a href="./simulasi.php" class="btn mulai-simulasi">Mulai Simulasi -></a>
            </div>
            <div class="col-lg-6 rc-12 order-lg-2 order-1">
                <video class="vid-1" muted autoplay loop> <source src='./video/landing-page.mp4' id='videotrick'> Your browser does not support the video tag.</video>
            </div>
        </div>
        <div class="rect right-rect"></div>
        <hr class="hr-middle">
        <div class="row">
            <div class="col-lg-6 rc-21">
                <center><img class="img-rcrd" src="./img/recordd.png" ></center>
            </div>
            <div class="col-lg-6 rc-22">
                <h1>Apa itu EDIO?</h1>
                <p>EDIO dirancang sebagai media pembelajaran siswa SMK dalam menunjang pembelajaran videografi. Dengan menggunakan website sebagai media publikasi, maka pembelajaran teknik pengambilan gambar pada videografi tersebut dapat diakses oleh khalayak publik dan digunakan oleh siswa dari berbagai program keahlian yang berbeda. Diharapkan EDIO dapat mempermudah siswa dan guru di sekolah manapun dalam melakukan pembelajaran videografi.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 rc-31">
                <div class="rect rect-3 ms-auto"></div>
                <h1>Pembelajaran Videografi di SMK</h1>
                <p>Videografi merupakan sub-konsentrasi pada mata pelajaran yang ada di Sekolah Menengah Kejuruan (SMK). Beberapa kompetensi keahlian yang memiliki pembelajaran Videografi diantaranya.</p>
                <ol>
                    <li>Desain Komunikasi Visual</li>
                    <li>Produksi dan Siaran Program Televisi</li>
                    <li>Produksi Film</li>
                </ol>
                <a href="https://drive.google.com/drive/folders/1VHIQ__4pEgRhku-hVUlQ1p5MhXOAH6RN?usp=share_link" target="blank" class="btn mulai-simulasi mt-2">Unduh ATP</a>
            </div>
            <div class="col-lg-6 rc-32">
                <img class="img-tutwuri" src="./img/tutwuri.png" width="400" height="auto" alt="">
            </div> 
        </div>
        <center><hr class="hr-bottom"></center>
        <center><span class="footer">© 2023 EDIO All Right Reserves</span></center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>