    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> --}}
        <title>Biologi - Hangman</title>
        <link rel="icon" href="img/logo-uin.png" type="image/png" />

        {{-- style --}}
        <link rel="stylesheet" href="/css/question.css">
    </head>

    <body>
        {{-- <audio src="music/game.mp3" autoplay loop></audio> --}}
        <img src="/img/3.jpg" class="bg" alt="">
        <section class="container">
            <div id="clock">
                <div class="awal-clock">
                    <div class="clock">
                        <div class="clockwise hours"></div>
                        <div class="clockwise minutes"></div>
                        <div class="clockwise seconds"></div>
                    </div>
                </div>
            </div>
            <section id="question">
                <div id="content">
                    1. Parenkim adalah jaringan dasar yang utama. Sel-sel parenkim ditemukan pada akar dan batang
                    terutama sebagai pengisi bagian korteks batang, daun, bunga, buah dan biji. Jaringan parenkim
                    memiliki ciri khas yaitu ada yang berklorofil dan bersifat meristematis.
                </div>
                <div id="particle-canvas"></div>
            </section>
        </section>

        <script src="/js/app.js"></script>
        <script src="/js/style.js"></script>
    </body>

    </html>
