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
    <link rel="stylesheet" href="/css/finish.css">
</head>

<body>
    <audio id="music" autoplay loop>
        <source src="/music/loby.mp3" type="audio/mp3">
    </audio>
    <img src="/img/finish.jpg" class="image-awal" alt="">
    <div class="awal-clock">
        <div class="clock">
            <div class="clockwise hours"></div>
            <div class="clockwise minutes"></div>
            <div class="clockwise seconds"></div>
        </div>
    </div>
    <div class="container">
        {{-- <div id="particle-canvas"></div> --}}
        <div class="card">
            <div class="header">
                <div class="score-true">
                    Benar <br>
                    {{ session()->get('correct', 0) }}
                </div>
                <div class="score-false">
                    Salah <br>
                    {{ session()->get('incorrect', 0) }}
                </div>
            </div>
            <div class="card-finish">
                <div class="text-falsh">
                    @foreach (session()->get('answers', []) as $question => $answer)
                        <div>{{ $question }}. {{ $answer }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
</body>

</html>
