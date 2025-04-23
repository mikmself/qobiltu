document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 1200,
    });
    const coverSection = document.querySelector('.cover-section');
    const mainSection = document.querySelector('.main-section');
    const actionButton = document.querySelector('.action-button');
    const mainImage = document.querySelector('.main-image');
    const playButton = document.querySelector('.play-button');
    const bgAudio = new Audio('/assets/music/bg.mp3');
    bgAudio.loop = true
    const playMusic = document.querySelector('.play-button');
    const playIcon = playMusic.querySelector('.play-icon');

    mainImage.classList.add('initial-state');
    document.body.style.backgroundColor = '';
    document.body.style.overflow = 'hidden';

    setTimeout(() => {
        mainImage.classList.remove('initial-state');
        mainImage.classList.add('final-state');
        setTimeout(() => {
            coverSection.style.filter = 'brightness(80%)';
            const elementsToShow = document.querySelectorAll('.invitation-title, .details-container, .recipient-name, .action-button, .logo-container');
            elementsToShow.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('animate');
                }, index * 200);
            });
        }, 200);
    }, 100);


    document.body.addEventListener('click', playAudioOnce, { once: true });

    function playAudioOnce() {
        bgAudio.play()
            .then(() => {
                console.log("Audio berhasil diputar");

            })
            .catch(err => {
                console.error("Gagal memutar audio:", err);
            });
    }

    actionButton.addEventListener('click', function () {

        bgAudio.play().catch(err => {
            console.warn("Audio gagal diputar :", err);
        });

        coverSection.classList.add('slide-up');
        document.body.style.overflow = '';
        setTimeout(() => {
            mainSection.classList.add('show');
            setTimeout(() => {
                AOS.refreshHard();
            }, 100);

        }, 700);
    });


    let isPlaying = true;

    playMusic.addEventListener('click', function (event) {
        event.preventDefault();
        if (isPlaying) {
            bgAudio.pause();
            playIcon.src = '/assets/icons/play.png';
            playButton.querySelector('.button-label').textContent = 'PLAY';
        } else {
            bgAudio.play();
            playIcon.src = '/assets/icons/pause.png';
            playButton.querySelector('.button-label').textContent = 'PAUSE';
        }
        isPlaying = !isPlaying;
    });
});

const weddingDate = new Date('2025-05-20T09:00:00').getTime();
const countdown = setInterval(function () {
    const now = new Date().getTime();
    const distance = weddingDate - now;
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance <= 0) {
        clearInterval(countdown);
        document.querySelector('.countdown-timer').innerHTML = 'WEDDING DAY!, CONGRATULATIONS!';
    } else {
        document.querySelector('.timer-number[data-unit="days"]').textContent = days;
        document.querySelector('.timer-number[data-unit="hours"]').textContent = hours;
        document.querySelector('.timer-number[data-unit="minutes"]').textContent = minutes;
        document.querySelector('.timer-number[data-unit="seconds"]').textContent = seconds;
    }
}, 1000);

function copyToClipboard(id) {
    const text = document.getElementById(id).innerText;
    const tempTextArea = document.createElement('textarea');

    tempTextArea.value = text;
    document.body.appendChild(tempTextArea);
    tempTextArea.select();

    try {
        const successful = document.execCommand('copy');
        if (successful) {
            showSnackbar('Nomor rekening berhasil disalin!');
        } else {
            showSnackbar('Gagal menyalin nomor rekening');
        }
    } catch (err) {
        console.error('Gagal menyalin: ', err);
        showSnackbar('Terjadi kesalahan saat menyalin');
    } finally {
        document.body.removeChild(tempTextArea);
    }
}

function showSnackbar(message) {
    const snackbar = document.createElement('div');
    snackbar.className = 'snackbar';
    snackbar.textContent = message;
    document.body.appendChild(snackbar);

    setTimeout(() => {
        snackbar.remove();
    }, 2000);
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href'))
            .scrollIntoView({ behavior: 'smooth' });
    });
});


document.addEventListener('DOMContentLoaded', function () {

    window.scrollTo(0, 50);
    setTimeout(() => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 100);
});
