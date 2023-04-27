const buzzingElement = document.getElementsByClassName('buzz');
const attentionElement = document.getElementById('attention');

function buzz() {
    this.classList.add('buzzAnimation');
    setTimeout(() => {
        this.classList.remove('buzzAnimation');
    }, 500); // Adjust the duration as needed
}
function buzzAttention() {
    attentionElement.classList.add('buzzAnimation');
    setTimeout(() => {
        attentionElement.classList.remove('buzzAnimation');
    }, 500); // Adjust the duration as needed
}

for(let i = 0; i<buzzingElement.length; i++){
     buzzingElement[i].addEventListener('mouseover', buzz);
}

window.addEventListener("load",()=>{
   setInterval(buzzAttention,3000)
})
