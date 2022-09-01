const button = document.querySelector('.button')
const input = document.querySelectorAll('.input')

button.addEventListener("click", (bt) => {
    input.forEach((inp) => {
        if (inp.value == '') {
            bt.preventDefault();
            inp.classList.add('active')
            inp.placeholder = 'digite algo'
            setTimeout(() => {
                inp.classList.remove("active")
            }, 700);
        } else {
            inp.classList.remove("active")
        }
    })
})