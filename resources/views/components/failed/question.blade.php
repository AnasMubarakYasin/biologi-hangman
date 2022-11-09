<script>
    function next(e) {
        e.value = e.value[e.value.length - 1]?.toLowerCase()
        e.nextElementSibling.focus();
        if ('disabled' in e.nextElementSibling.dataset) {
            e.nextElementSibling.value = "_";
            e.nextElementSibling.nextElementSibling.focus()
        }
    }

    var input = document.querySelectorAll('.input-question')
    for (const element of input) {
        element.addEventListener('keydown', hapus)
    }

    function hapus(e) {
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
            if ('disabled' in target.previousElementSibling.dataset) {
                target.value = ''
                target = target.previousElementSibling
            }
            target.value = ''
            target.previousElementSibling.focus()
        }
    }

    @error('errors')
        @if (session()->get('chance') == 0)
            setTimeout(() => {
                location.replace('/quiz/question/{{ old('question') + 1 }}')
            }, 2000);
        @endif
        Swal.fire({
            title: 'Opps!',
            @if (session()->get('chance') == 0)
                text: 'Jawaban kamu masih salah, kesempatan kamu sudah habis',
            @else
                text: 'Jawaban kamu masih salah, kesempatan kamu tinggal {{ session()->get('chance') }} lagi',
            @endif
            imageUrl: '/img/salah.png',
            imageHeight: 200,
            imageAlt: 'Custom image',
            showConfirmButton: false,
            timer: 4000,
        })
    @enderror
</script>
