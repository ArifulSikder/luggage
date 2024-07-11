var baseUrl = $("#base_url").val();

function redirectMe(pageUrl) {
    showLoader();
    window.location.href = baseUrl + pageUrl;
}

function redirectTo(pageUrl, Param) {
    var encryptedData = encryptData(Param);
    window.location.href = baseUrl + pageUrl + '?data=' + encodeURIComponent(encryptedData);
}

function getCoordinates() {
    var locationName = document.getElementById("location_name").value;
    if (locationName.length < 3) {
        return; // Wait until at least 3 characters are entered
    }
    fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + locationName)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            var content = "";
            if (data.length > 0) {
                var dataList = document.getElementById("location_suggestions");
                dataList.innerHTML = ""; // Clear any previous suggestions

                data.forEach((location, index) => {
                    content += "<p class='pointer' onclick='selectOption(\"" + location.display_name + "\", \"" + location.lat + "\", \"" + location.lon + "\")'>" + location.display_name + "</p>";
                    // dataList.innerHTML += content;
                });
                dataList.style.display = 'block';
                dataList.innerHTML = content;
            } else {
                dataList.innerHTML = content;
                dataList.style.display = 'none';
                document.getElementById("location_name").style.borderColor = "red";
                document.getElementById("location_name").focus();
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

function selectOption(name, lat, lon) {
    document.getElementById("location_name").value = name;
    document.getElementById("latvalue").value = lat;
    document.getElementById("lonvalue").value = lon;
    document.getElementById("location_suggestions").innerHTML = ""; // Clear suggestions after selection
    document.getElementById("location_suggestions").style.display = 'none';
}

function encryptData(data) {
    // Placeholder for the encryption function
    // Replace this with your actual encryption logic
    return btoa(data); // Using Base64 encoding for demonstration
}

// function searchLocation() {
//     showLoader();
//     var latvalue = document.getElementById("latvalue").value;
//     var name = document.getElementById("location_name").value;
//     var lonvalue = document.getElementById("lonvalue").value;
//     var checkInDate = document.getElementById("check-in-date").value;
//     var checkOutDate = document.getElementById("check-out-date").value;
//     var bagNumber = document.getElementById("bag-number").value;

//     var data = {
//         name: name,
//         latvalue: latvalue,
//         lonvalue: lonvalue,
//         checkInDate: checkInDate,
//         checkOutDate: checkOutDate,
//         bagNumber: bagNumber
//     };

//     var jsonData = JSON.stringify(data);
//     var encryptedData = encryptData(jsonData);

//     window.location.href = baseUrl + 'Listing?data=' + encodeURIComponent(encryptedData);
// }

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
    const inputElement = document.getElementById('counter' + id);
    const price = document.getElementById('price' + id).value;
    let currentValue = parseInt(inputElement.value, 10);
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    currentValue++;
    inputElement.value = currentValue;
    console.log(price);
    const totalCost = currentValue * price;
    document.getElementById('subTotal' + id).value = totalCost;
    document.getElementById('countluggage').innerHTML = parseInt(document.getElementById('countluggage').innerHTML) + 1 + " luggages";
    getPremiumPrice();
}

function decreaseValue(id) {
    const inputElement = document.getElementById('counter' + id);
    const price = document.getElementById('price' + id).value;
    let currentValue = parseInt(inputElement.value, 10);
    if (isNaN(currentValue)) {
        currentValue = 0;
    }
    currentValue--;
    inputElement.value = currentValue;
    const totalCost = currentValue * price;
    document.getElementById('subTotal' + id).value = totalCost;
    document.getElementById('countluggage').innerHTML = parseInt(document.getElementById('countluggage').innerHTML) - 1 + " luggages";
    getPremiumPrice();
}

function calculateTotalCost(premium = 0) {
    const subTotal1 = parseFloat(document.getElementById('subTotal1').value) || 0;
    const subTotal2 = parseFloat(document.getElementById('subTotal2').value) || 0;
    const subTotal3 = parseFloat(document.getElementById('subTotal3').value) || 0;
    const subTotal4 = parseFloat(document.getElementById('subTotal4').value) || 0;
    const totalCost = subTotal1 + subTotal2 + subTotal3 + subTotal4 + parseFloat(premium);
    console.log("totalCost"+totalCost);
    // Get check-in and check-out date values
    const checkinDate = document.getElementById('checkin-date').value;
    const checkoutDate = document.getElementById('checkout-date').value;

    // Calculate date difference in days
    const diffInMs = new Date(checkoutDate) - new Date(checkinDate);
    const diffInDays = diffInMs / (1000 * 60 * 60 * 24);

    // Calculate total cost including date difference
    const totalCostWithDateDiff = totalCost * diffInDays;

    // Update the displayed total cost
    document.getElementById('totalCost').innerHTML = "$" + totalCostWithDateDiff.toFixed(2);
}

// Example usage when the dates change (assuming the dates are changed elsewhere and trigger an event)
// document.getElementById('checkin-date').addEventListener('change', calculateTotalCost);
// document.getElementById('checkout-date').addEventListener('change', calculateTotalCost);

function getPremiumPrice() {
    // Get all checkboxes with the class 'unique-checkbox'
    const checkboxes = document.querySelectorAll('.unique-checkbox');
    let total = 0;

    // Iterate over each checkbox
    checkboxes.forEach(checkbox => {
        // If the checkbox is checked, add its value to the total
        if (checkbox.checked) {
            total += parseFloat(checkbox.value);
        }
    });
    calculateTotalCost(total.toFixed(2));
}

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

function registerUser() {
    // Get form values by ID
    showLoader();
    const name = document.getElementById('nameInput').value;
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;
    const retypePassword = document.getElementById('retypePasswordInput').value;
    const messageSpan = document.getElementById('messageSpan');

    // Basic validation
    if (password !== retypePassword) {
        showMessage('Passwords do not match!', 'error');
        return;
    }

    // Prepare data for AJAX
    const formData = {
        name: name,
        email: email,
        password: password
    };

    // Send AJAX request
    $.ajax({
        url: baseUrl + 'UserRegister/register',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                showMessage('Registration successful!', 'success');
                hideLoader();
                // Redirect or perform other actions as needed
            } else {
                showMessage('Registration failed: ' + response.message, 'error');
            }
        },
        error: function() {
            showMessage('An error occurred during registration.', 'error');
        }
    });
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

function loginUser() {
    showLoader();
    // Get form values by ID
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;
    const messageSpan = document.getElementById('messageSpan');

    // Prepare data for AJAX
    const formData = {
        email: email,
        password: password
    };

    // Send AJAX request
    $.ajax({
        url: baseUrl + 'Userlogin/login',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            console.log("status :: "+response.status);
            if (response.status == 200) {
                console.log(response.status);
                showMessage('Login successful!', 'success');
                redirectMe('Home');
                // Redirect or perform other actions as needed
            } else {
                showMessage('Login failed: ' + response.message, 'error');
            }
        },
        error: function() {
            showMessage('An error occurred during login.', 'error');
        }
    });
}


function StartBooking() {
    // Check if user is logged in
    showLoader();
    $.ajax({
        url: baseUrl+'Hub/checkUserSession',
        method: 'POST',
        success: function(response) {
            response = JSON.parse(response);
            console.log(response.loggedIn);
            if (response.loggedIn) {
                // User is logged in, proceed with booking
                let checkInDate = document.getElementById('checkin-date').value;
                let checkOutDate = document.getElementById('checkout-date').value;
                let smallBags = document.getElementById('counter1').value;
                let mediumBags = document.getElementById('counter2').value;
                let largeBags = document.getElementById('counter3').value;
                let extraLargeBags = document.getElementById('counter4').value;
                let hub_id = document.getElementById('hub_id').value;
                let premiumServices = [];

                $('.unique-checkbox').each(function() {
                    if ($(this).is(':checked')) {
                        premiumServices.push($(this).val());
                    }
                });

                $.ajax({
                    url: baseUrl+'Hub/bookLuggage',
                    method: 'POST',
                    data: {
                        checkInDate: checkInDate,
                        checkOutDate: checkOutDate,
                        smallBags: smallBags,
                        mediumBags: mediumBags,
                        largeBags: largeBags,
                        extraLargeBags: extraLargeBags,
                        premiumServices: premiumServices,
                        hub_id: hub_id
                    },
                    success: function(response) {
                        response = JSON.parse(response);
                        console.log(response.success);
                        if (response.success) {
                            alert("Your booking is successfully placed.")
                            window.location.href = baseUrl;
                        } else {
                            alert('Booking failed, please try again.');
                        }
                    }
                });
            } else {
                // User not logged in, redirect to login page
                window.location.href = baseUrl+'Userlogin';
            }
        }
    });
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