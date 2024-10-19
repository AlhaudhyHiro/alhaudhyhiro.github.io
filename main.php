<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Ulang Tahun</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="slideshow-container">
        <!-- Slide 1: Ucapan -->
        <div class="slide">
            <div class="container-animation">
                <div class="text">Ucapan Spesial</div>
                <p>Waktu berjalan begitu cepat, ya? Seperti kemarin kita masih berada di... [isi lengkap ucapan seperti sebelumnya].</p>
                <a class="next" onclick="plusSlides(1)">Next Slide</a>
            </div>
        </div>

        <!-- Slide 2: Galeri Foto -->
        <div class="slide">
            <div class="container-animation">
                <div class="text">Galeri Kenangan Kita di umur 21 tahun kamu</div>
                <div class="gallery">
                    <img src="folder foto/1.jpg" alt="Foto 1" class="gallery-image">
                    <img src="folder foto/2.jpg" alt="Foto 2" class="gallery-image">
                    <img src="folder foto/3.jpg" alt="Foto 3" class="gallery-image">
                    <img src="folder foto/4.jpg" alt="Foto 4" class="gallery-image">
                    <img src="folder foto/5.jpg" alt="Foto 5" class="gallery-image">
                    <img src="folder foto/6.jpg" alt="Foto 6" class="gallery-image">
                    <img src="folder foto/7.jpg" alt="Foto 7" class="gallery-image">
                    <img src="folder foto/8.jpg" alt="Foto 8" class="gallery-image">
                    <img src="folder foto/9.jpg" alt="Foto 9" class="gallery-image">
                    <img src="folder foto/10.jpg" alt="Foto 10" class="gallery-image">
                </div>
                <a class="prev" onclick="plusSlides(-1)">Previous Slide</a>
                <a class="next" onclick="plusSlides(1)">Next Slide</a>
            </div>
        </div>

        <!-- Slide 3: Harapan -->
        <div class="slide">
            <div class="container-animation">
                <div class="text">Harapan untukmu</div>
                <p>Semoga semua impianmu tercapai di tahun yang baru ini!</p>
                <a class="prev" onclick="plusSlides(-1)">Previous Slide</a>
                <!-- Tidak ada Next Slide di sini -->
            </div>
        </div>
    </div>

    <!-- Menambahkan audio player -->
    <audio id="audioPlayer" preload="auto">
        <source src="musik/pam-milad.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script src="script.js"></script>
</body>
</html>
