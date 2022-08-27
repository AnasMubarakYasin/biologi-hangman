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
    <link rel="icon" href="img/logo-uin.png" type="image/png" />

    {{-- style --}}
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <audio src="music/loby.mp3" autoplay></audio>
    <img src="img/awal.jpg" class="image-awal" alt="">
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
            <div class="custom">
                <h2 class="text-name">YERNI</h2>
                <a href="" class="button"><i class='bx bx-play bx-tada bx-rotate-90'>Play</i></a>
            </div>
            <img src="/img/2.jpg" alt="" class="image-name">
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/style.js"></script>
</body>

</html>
