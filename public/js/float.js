const image = document.getElementById('floatImg');
let isMovingUp = true;

// Function to move the image up and down
function moveImage() {
    const verticalDistance = isMovingUp ? '-50px' : '0';
    image.style.transform = `translateY(${verticalDistance})`;
    isMovingUp = !isMovingUp;
}

// Start the animation
setInterval(moveImage, 1000); // Adjust the interval duration as needed
