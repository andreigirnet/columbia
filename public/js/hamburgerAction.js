const hamButton = document.getElementById("hamButton");
const responsiveMenu = document.getElementById("responsiveNav");
const links = document.getElementsByClassName('responsiveNavItem');
let show = false;

hamButton.addEventListener("click", () => {
   if (show === false){
       responsiveMenu.style.display = "flex";
       hamButton.style.transform = "rotate(90deg)";
       show = true;
   }else{
       responsiveMenu.style.display = "none";
       hamButton.style.transform = "rotate(0deg)";
       show = false;
   }
})

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function() {
        show = false
        responsiveMenu.style.display = "none";
        hamButton.style.transform = "rotate(0deg)";
    });
}
