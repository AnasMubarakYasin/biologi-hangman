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
</script>