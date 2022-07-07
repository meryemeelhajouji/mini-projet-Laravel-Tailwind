
let i = 1

let step = document.querySelector("#step")

let affichage = () => {
    step.textContent = i+1;
    console.log(i)
}
affichage()