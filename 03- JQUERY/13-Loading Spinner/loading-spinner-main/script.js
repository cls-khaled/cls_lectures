const button = document.querySelector('.loading-btn');
const loadingElement = document.querySelector('.loading-spinner__circle');

let isLoading = false;

button.addEventListener('click', function() {
    // console.log('clicked');

    // show loading spinner and change text
    isLoading = !isLoading;

    if (isLoading) {
        button.textContent = 'Stop Loading'
        toggleLoadingSpinner();
    }

    if (!isLoading) {
        button.textContent = 'Start Loading'
        toggleLoadingSpinner();
    }
})

function toggleLoadingSpinner() {
    if (isLoading) {
        loadingElement.classList.add('loading')
    }

    if (!isLoading) {
        loadingElement.classList.remove('loading')
    }
}