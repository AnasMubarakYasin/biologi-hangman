<script>
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
