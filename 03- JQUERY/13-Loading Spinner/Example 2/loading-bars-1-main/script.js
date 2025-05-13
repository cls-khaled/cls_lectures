// get elements
const button = document.querySelector('.btn');
const loadingBox = document.querySelector('.loading-box');

let isLoading = false;

// event listener
button.addEventListener('click', () => {
    // console.log('clicked')

    if (!isLoading) {
        startLoadingAnimation();
    } else if (isLoading) {
        stopLoadingAnimation();
    }
    changeButtonText();
}

);

// start animation
function startLoadingAnimation() {
    isLoading = true;

    loadingBox.style.display = 'grid';
    loadingBox.classList.add('rotate');

}

function stopLoadingAnimation() {
    isLoading = false;

    loadingBox.style.display = 'none';
    loadingBox.classList.remove('rotate');
}

function changeButtonText() {
    if (isLoading) {
        button.textContent = 'Stop animation'
    } else if (!isLoading) {
        button.textContent = 'Start animation'
    }}