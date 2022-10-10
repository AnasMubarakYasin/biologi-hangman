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
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/sweetalert2/sweetalert2.min.css" />
    <script src="/sweetalert2/sweetalert2.min.js"></script>
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
            <div class="number">10</div>
            <div id="content">
                Persendian tulang yang masih memungkinkan adanya sedikit gerakan kedua ujung tulang yang dihubungkan
                oleh tulang seperti pada persendian antara ruas-ruas tulang belakang, dan persendian antara tulang
                belakang dengan tulang Iga. Persendian tersebut adalah ...
            </div>
            <div class="content-soal">
            </div>
            <form autocomplete="off" action="/quiz/answer" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" hidden name="question" value="10">
                <input type="text" autofocus class="input" name="answer" value="{{ old('answer') }}">
                <button class="btn-soal" type="submit">Cek</button>
                <x-failed.question />
            </form>
            <div id="particle-canvas"></div>
        </section>
    </section>

    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
</body>

</html>
