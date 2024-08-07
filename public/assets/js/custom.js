var baseUrl = $("#base_url").val();

function redirectMe(pageUrl) {
    showLoader();
    window.location.href = baseUrl + pageUrl;
}

function redirectTo(pageUrl, Param) {
    var encryptedData = encryptData(Param);
    window.location.href = baseUrl + pageUrl + '?data=' + encodeURIComponent(encryptedData);
}

function encryptData(data) {
    // Placeholder for the encryption function
    // Replace this with your actual encryption logic
    return btoa(data); // Using Base64 encoding for demonstration
}

function GridView() {
    var listingContainer = document.getElementById('listing-container');
    // Remove all classes
    listingContainer.className = '';
    // Add the 'listing-container' class
    listingContainer.classList.add('listing-container');
    $(".griddesc").show();
    $(".listdesc").hide();
}

function ListView() {
    var listingContainer = document.getElementById('listing-container');
    // Remove all classes
    listingContainer.className = '';
    // Add the 'listing-container' class
    listingContainer.classList.add('listing-container2');
    $(".listdesc").show();
    $(".griddesc").hide();
}

// Get all checkboxes with the class 'unique-checkbox'
const checkboxes = document.querySelectorAll('.unique-checkbox');

// Add an event listener to each checkbox
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', getPremiumPrice);
});

var bagcontent = "";


function showMessage(message, type) {
    const messageSpan = document.getElementById('messageSpan');
    messageSpan.textContent = message;
    if (type === 'success') {
        messageSpan.style.color = 'green';
    } else if (type === 'error') {
        messageSpan.style.color = 'red';
    }
    messageSpan.style.display = 'inline';

    // Hide the message after 5 seconds
    setTimeout(() => {
        messageSpan.style.display = 'none';
    }, 5000);
}



window.onload = function() {
    hideLoader();
};

function showLoader() {
    document.getElementById('loader').style.display = 'flex';
    // document.getElementById('content').style.display = 'none';
}

function hideLoader() {
    document.getElementById('loader').style.display = 'none';
    // document.getElementById('content').style.display = 'block';
}