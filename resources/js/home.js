const img = document.querySelector(".img-dinamic")
const arrows = document.querySelector(".arrows")
    // const imgRight = document.querySelector(".img-right")
    // const imgLeft = document.querySelector(".img-left")

let num = imgs.length

let index = 0
img.innerHTML = `
<img src="arquivos/${imgs[0].title}" alt="">
<h1>sites dinamicos</h1>`

if (index > num) {

    index++

    img.innerHTML = `
    <img src="arquivos/${imgs[index].title}" alt="">
    <h1>sites dinamicos</h1>
`

}