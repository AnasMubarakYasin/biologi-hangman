<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Biologi - Hangman</title>
    <link rel="icon" href="/img/logo-uin.png" type="image/png" />

    {{-- style --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <audio id="music" autoplay loop>
        <source src="/music/loby.mp3" type="audio/mp3">
    </audio>
    <img src="/img/awal.jpg" class="image-awal" alt="">
    <div class="awal-clock">
        <div class="clock">
            <div class="clockwise hours"></div>
            <div class="clockwise minutes"></div>
            <div class="clockwise seconds"></div>
        </div>
    </div>
    <div class="container">
        <div class="btn">
            <button id="btn-music"><i class='bx bx-play-circle'></i></button>
        </div>
        <div class="btn-full">
            <button class="full" onclick="toggleFullScreen ();"><i class='bx bx-exit-fullscreen'></i></button>
        </div>
        {{-- <div id="particle-canvas"></div> --}}
        <div class="card">
            <div class="custom">
                <h2 class="text-name">YERNI</h2>
                <a href="/quiz/start" class="button"><i class='bx bx-play bx-tada bx-rotate-90'>Play</i></a>
            </div>
            <img src="/img/2.jpg" alt="" class="image-name">
        </div>
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
    <script>
        function toggleFullScreen() {
            if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        }
    </script>
</body>

</html>
