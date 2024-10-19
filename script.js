let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}

function plusSlides(n) {
    slideIndex += n;
    if (slideIndex < 0) {
        slideIndex = 0; // Tidak mengizinkan mundur di slide pertama
    } else if (slideIndex >= document.getElementsByClassName("slide").length) {
        slideIndex = document.getElementsByClassName("slide").length - 1; // Tidak mengizinkan melanjutkan setelah slide terakhir
    }
    showSlides();
}

// Memastikan slide pertama ditampilkan ketika tombol diklik
document.querySelector('a[href="main.php"]').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah perilaku default link
    slideIndex = 0; // Set slide ke slide pertama
    const audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.play(); // Memulai pemutaran audio saat tombol diklik
    showSlides(); // Tampilkan slide pertama
});

// Menampilkan slide pertama saat halaman dimuat
showSlides(); 

// Kontrol mute/unmute
const muteButton = document.getElementById('muteButton');
const audioPlayer = document.getElementById('audioPlayer');

if (muteButton) {
    muteButton.addEventListener('click', () => {
        audioPlayer.muted = !audioPlayer.muted;
        muteButton.innerHTML = audioPlayer.muted 
            ? '<span class="material-icons">volume_off</span>' 
            : '<span class="material-icons">volume_up</span>';
    });
}
