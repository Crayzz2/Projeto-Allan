let btn = document.getElementById("btn-legibilidade");
let paragraph = document.querySelector('*');

btn.addEventListener('click', ()=>{
    paragraph.classList.toggle('alta-legibilidade');
});