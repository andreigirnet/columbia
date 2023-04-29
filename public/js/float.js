const image = document.getElementById('floatImg');
const bitCoins = document.getElementsByClassName('cryptoCoin');
const bitCoinsDown = document.getElementsByClassName('cryptoCoinDown');
let isMovingUp = true;

// Function to move the image up and down
function moveImage() {
    const verticalDistance = isMovingUp ? '-25px' : '0';
    image.style.transform = `translateY(${verticalDistance})`;
    isMovingUp = !isMovingUp;
}

bitCoins.forEach((element)=>{
    const verticalDistance = isMovingUp ? '-50px' : '0';
    element.style.transform = `translateY(${verticalDistance})`;
    isMovingUp = !isMovingUp;
})

bitCoinsDown.forEach((element)=>{
    const verticalDistance = isMovingUp ? '+50px' : '0';
    element.style.transform = `translateY(${verticalDistance})`;
    isMovingUp = !isMovingUp;
})

// Start the animation
setInterval(moveImage, 1000); // Adjust the interval duration as needed
