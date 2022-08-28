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
    <link rel="icon" href="/img/logo-uin.png" type="image/png" />

    {{-- style --}}
    <link rel="stylesheet" href="/css/question.css">
</head>

<body>
    <audio autoplay loop>
        <source src="/music/game.mp3" type="audio/mp3">
    </audio>
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
                <ul style="margin: 0; padding: 0 16px;">
                    <li>Fungsi utama dari jaringan epidermis yaitu sebagai pelindung paling luar pada setiap organ
                        tumbuhan.
                        Selain itu, epidermis menjadi jaringan tempat pertukaran zat dan menghambat hilangnya air karena
                        penguapan.</li>
                    <li>Jaringan mesofil adalah jaringan yang tersusun dari sel-sel parenkim atau jaringan dasar dan
                        berfungsi
                        sebagai pengisi antara jaringan lain</li>
                    <li>Endodermis membatasi bagian dalam akar dengan korteks. Endodermis juga mencegah keluarnya air
                        dari
                        stele ke korteks, fungsi lain dari endodermis yaitu mengatur masuknya zat ke dalam pembuluh akar
                    </li>
                </ul>
            </div>
            <div class="content-soal">
                Dari ketiga jaringan diatas merupakan hasil difrensiasi dari jaringan …
            </div>
            <form action="">
                <input type="text" class="input">
                <button class="btn-soal" type="submit">Cek</button>
            </form>
            <div id="particle-canvas"></div>
        </section>
    </section>

    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
</body>

</html>
