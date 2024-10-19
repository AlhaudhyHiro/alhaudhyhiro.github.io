const audioPlayer = document.getElementById('audioPlayer');

if (audioPlayer) {
    audioPlayer.play();
}

const muteButton = document.getElementById('muteButton');

if (muteButton) {
    muteButton.addEventListener('click', () => {
        audioPlayer.muted = !audioPlayer.muted;
        document.getElementById('muteIcon').innerText = audioPlayer.muted 
            ? 'volume_off' // Ikon mute
            : 'volume_up';  // Ikon unmute
    });
}
