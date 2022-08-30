<script>
    // sessionStorage.setItem('question', {{ $question }});
    @if ($question != session()->get('question'))
        // sessionStorage.setItem('question', {{ session()->get('question') }});
        location.replace('/quiz/question/{{ session()->get('question') }}')
    @endif
    // console.log('question', {{ $question }})
    // console.log('session question', sessionStorage.getItem('question'))
    // window.onbeforeunload = function(event) {
    //     console.log(event);
    //     return '';
    // };
    // window.addEventListener('beforeunload', (event) => {
    //     console.log(event);
    //     event.preventDefault();
    //     return 'pause';
    // })
</script>
