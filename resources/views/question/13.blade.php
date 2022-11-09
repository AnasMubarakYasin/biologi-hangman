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
            <div class="number">13</div>
            <div id="content">
                Pergerakan otot untuk membengkokkan persendian membentuk sudut yang lebih kecil disebut …
            </div>
            <div class="content-soal">
            </div>
            <form autocomplete="off" action="/quiz/answer" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" hidden name="question" value="13">
                @foreach ($answer as $data)
                    @if ($data == ' ')
                        <input type="text" name="answer[]" value="{{ old('answer.' . $loop->index) }}" disabled
                            class="input-question disable">
                    @else
                        <input oninput="next(this)" type="text" name="answer[]"
                            value="{{ old('answer.' . $loop->index) }}" class="input-question">
                    @endif
                @endforeach
                <button class="btn-soal" type="submit">Cek</button>
                <x-failed.question />
            </form>
            <div id="particle-canvas"></div>
        </section>
    </section>

    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
    <script>
        function next(e) {
            e.value = e.value[e.value.length - 1]?.toLowerCase()
            e.nextElementSibling.focus()
        }

        var input = document.querySelectorAll('.input-question')
        for (const element of input) {
            element.addEventListener('keydown', hapus)
        }

        function hapus(e) {
            console.log(e);
            if (e.key == 'Unidentified') {
                e.preventDefault()
                e.stopPropagation()
                if (e.target.value) {

                    e.target.value = ""
                    e.target.focus()
                } else {}
            }
            if (e.key == 'Backspace') {
                e.preventDefault()
                var target = e.target
                if (target.previousElementSibling.disabled) {
                    target.value = ''
                    target = target.previousElementSibling
                }
                target.value = ''
                target.previousElementSibling.focus()
            }
        }
    </script>
</body>

</html>
