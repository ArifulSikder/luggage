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

function searchLocation() {
    showLoader();
    var latvalue = document.getElementById("latvalue").value;
    var name = document.getElementById("location_name").value;
    var lonvalue = document.getElementById("lonvalue").value;
    var checkInDate = document.getElementById("check-in-date").value;
    var checkOutDate = document.getElementById("check-out-date").value;
    var bagNumber = document.getElementById("bag-number").value;

    var data = {
        name: name,
        latvalue: latvalue,
        lonvalue: lonvalue,
        checkInDate: checkInDate,
        checkOutDate: checkOutDate,
        bagNumber: bagNumber
    };

    var jsonData = JSON.stringify(data);
    var encryptedData = encryptData(jsonData);

    window.location.href = baseUrl + 'Listing?data=' + encodeURIComponent(encryptedData);
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

function increaseValue(id) {
    // Enable the reserve button
    $('.reserve').prop('disabled', false);
    
    // Get the input element and its value
    const $inputElement = $('#counter' + id);
    const price = parseFloat($('#price' + id).val());
    let currentValue = parseInt($inputElement.val(), 10);
    
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    
    // Increment the value
    currentValue++;
    $inputElement.val(currentValue);
    
    // Calculate the total cost
    const totalCost = currentValue * price;
    $('#subTotal' + id).val(totalCost);
    // Update the count of luggages
    const $countLuggage = $('#countluggage');
    const currentLuggageCount = parseInt($countLuggage.text(), 10);
    $countLuggage.text((currentLuggageCount + 1) + " luggages");
    
}



function decreaseValue(id) {
    const inputElement = document.getElementById('counter' + id);
    const price = document.getElementById('price' + id).value;
    let currentValue = parseInt(inputElement.value, 10);
    
    // Ensure the current value is a valid number
    if (isNaN(currentValue)) {
        currentValue = 1;  // Set default to minimum value if current value is not a number
    }
    
    // Decrease the value only if it's greater than the minimum value
    if (currentValue > 0) {
        currentValue--;
        inputElement.value = currentValue;
        
        const totalCost = currentValue * price;
        document.getElementById('subTotal' + id).value = totalCost;
        
        const countLuggageElement = document.getElementById('countluggage');
        const newCountLuggage = parseInt(countLuggageElement.innerHTML) - 1;
        countLuggageElement.innerHTML = newCountLuggage + " luggages";
        
        if (newCountLuggage === 0) {
            $('.reserve').attr('disabled', true);
        }

    }
}



// Example usage when the dates change (assuming the dates are changed elsewhere and trigger an event)
// document.getElementById('checkin-datetime').addEventListener('change', calculateTotalCost);
// document.getElementById('checkout-datetime').addEventListener('change', calculateTotalCost);


// Get all checkboxes with the class 'unique-checkbox'
const checkboxes = document.querySelectorAll('.unique-checkbox');

// Add an event listener to each checkbox
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', getPremiumPrice);
});

var bagcontent = "";
function increaseValues(id) {
    const inputElement = document.getElementById('counter' + id);
    // const price = document.getElementById('price' + id).value;
    let currentValue = parseInt(inputElement.innerHTML, 10);
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    currentValue++;
    if (currentValue < 0) {
        currentValue = 0;
    }
    inputElement.innerHTML = currentValue;
    getBagcountValue();

    // document.getElementById('bag-number').value = bagcontent;
}

function decreaseValues(id) {
    const inputElement = document.getElementById('counter' + id);
    let currentValue = parseInt(inputElement.innerHTML, 10);
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    currentValue--;
    if (currentValue < 0) {
        currentValue = 0;
    }
    inputElement.innerHTML = currentValue;
    getBagcountValue();
    // document.getElementById('bag-number').value = bagcontent;
}

function getBagcountValue() {
    const counters = [
        { label: 'Small', value: document.getElementById('counter1').innerHTML },
        { label: 'Medium', value: document.getElementById('counter2').innerHTML },
        { label: 'Large', value: document.getElementById('counter3').innerHTML },
        { label: 'Extra Large', value: document.getElementById('counter4').innerHTML },
    ];

    const bagContentArray = counters
        .filter(counter => parseInt(counter.value, 10) > 0)
        .map(counter => `${counter.label} - ${counter.value}`);

    const bagContent = bagContentArray.join(', ');
    document.getElementById('bag-number').value = bagContent;
    console.log(bagContent); // For testing purposes, you can remove or replace this line with the desired action
}

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