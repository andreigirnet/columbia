window.addEventListener('scroll', function() {
    const imageContainer = document.querySelector('#backImage');
    const scrollPosition = window.scrollY;
    if (scrollPosition > 11000 && scrollPosition < 13500){
        console.log(scrollPosition)
        const translateY = scrollPosition - 12500;
        imageContainer.style.transform = `translateY(-${translateY}px)`;
    }
});
