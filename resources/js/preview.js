
const placeholder = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM='
const thumbInput = document.getElementById('thumb')
const preview = document.getElementById('preview')
thumbInput.addEventListener('input', () => {
    const url = thumbInput.value;
    preview.src = url ? url : placeholder;
})