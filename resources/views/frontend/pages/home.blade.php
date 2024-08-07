@extends('frontend.layouts.frontend_main')

@section('content')
    <div class="container hero-content">
        <div class="row banner">
            <div class="col-md-8 mx-auto">
                <h1>Store your <span class="text-primary">luggage hassle</span> free with us</h1>
                <p>Welcome to our luggage storing platform. Enjoy hassle-free travel with our secure and convenient
                    storage solutions.</p>
                <form id="search-form" novalidate>

                    <div class="search-form">
                        <input id="pick_up_location_name" name="pick_up_location_name" required="" type="hidden" />
                        <input id="drop_off_location_name" name="drop_off_location_name" required="" type="hidden" />
                        <div class="row g-2">
                            <div class="col-md pick_up">
                                <input type="text" class="form-control" id="location_name" placeholder="Pick-up location"
                                    autocomplete="off" required>
                            </div>
                            <div class="col-md d-none drop_up">
                                <input type="text" class="form-control" id="location_name_drop"
                                    placeholder="Drop-off location" autocomplete="off">
                            </div>

                            <div class="col-md">
                                <input type="datetime-local" class="form-control" id="check-in-date" placeholder="Add dates"
                                    autocomplete="off" required>
                      
                                <input type="datetime-local" class="form-control" id="check-out-date"
                                    placeholder="Add dates" autocomplete="off" required>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control bag-number" id="bag-number"
                                    placeholder="Select Bags" autocomplete="off" required>
                            </div>
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="card col-md-4 mt-3 bg-primary text-white">
                    <div class="form-check text-left m-1">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Drop off at a different location
                        </label>
                    </div>
                </div>
                <div id="location_suggestions"></div>
                <div class="floating-box">
                    <div class="room-selector">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Small - 18-22 inches</span>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="decreaseValue('1')">-</button>
                                <span class="mx-2 counter" id="counter1">0</span>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="increaseValue('1')">+</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Medium - 24-26 inches</span>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="decreaseValue('2')">-</button>
                                <span class="mx-2 counter" id="counter2">0</span>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="increaseValue('2')">+</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Large - 28-32 inches</span>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="decreaseValue('3')">-</button>
                                <span class="mx-2 counter" id="counter3">0</span>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="increaseValue('3')">+</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Extra Large - 30-34 inches</span>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="decreaseValue('4')">-</button>
                                <span class="mx-2 counter" id="counter4">0</span>
                                <button class="btn btn-sm btn-outline-secondary btn-circle"
                                    onclick="increaseValue('4')">+</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <button type="button" class="btn btn-success close_bag">Done</button>
                        </div>
                    </div>
                </div>

                <div class="ratings">
                    <img src="{{ asset('assets') }}/img/google.png" alt="Google">
                    <span class="stars">★★★★★</span>
                    <img src="{{ asset('assets') }}/img/trust.png" alt="Trustpilot">
                    <span class="stars">★★★★★</span>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-images">
        <img src="{{ asset('assets') }}/img/traveler1.png" alt="Traveler" class="img-1">
        <img src="{{ asset('assets') }}/img/luggage.png" alt="Luggage" class="img-2">
        <img src="{{ asset('assets') }}/img/traveler2.png" alt="Traveler" class="img-3">
        <img src="{{ asset('assets') }}/img/storage.png" alt="Storage" class="img-4">
    </div>

    <div class="floating-icon left">
        <img src="{{ asset('assets') }}/img/arrow.png" alt="Chat">
    </div>
    <div class="floating-icon right">
        <img src="{{ asset('assets') }}/img/user.png" alt="User">
    </div>
    <section class="trusted-by">
        <div class="container">
            <h2 class="text-center mb-4">Trusted by more than <span class="highlight">1200+</span> companies
                worldwide
            </h2>
            <div class="logo-container">
                <img src="{{ asset('assets') }}/img/tripadvisor-logo.png" alt="Tripadvisor" class="company-logo">
                <img src="{{ asset('assets') }}/img/expedia-logo.png" alt="Expedia" class="company-logo">
                <img src="{{ asset('assets') }}/img/booking-logo.png" alt="Booking.com" class="company-logo">
                <img src="{{ asset('assets') }}/img/airbnb-logo.png" alt="Airbnb" class="company-logo">
                <img src="{{ asset('assets') }}/img/orbitz-logo.png" alt="Orbitz" class="company-logo">
            </div>
        </div>
    </section>

    <section class="why-choose-us bg-white">
        <div class="container">
            <h2 class="section-title">Why thousands choose us daily</h2>
            <div class="features-container">
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="{{ asset('assets') }}/img/shield-icon.png" alt="Shield icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">Stored safely</h3>
                    <p class="feature-description">All bags stashed with us are protected against loss, theft &
                        damage.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="{{ asset('assets') }}/img/money-back-icon.png" alt="Money back icon"
                            class="feature-icon">
                    </div>
                    <h3 class="feature-title">Money back guarantee</h3>
                    <p class="feature-description">Free cancellation on all unused bookings and a full refund if
                        you are
                        not satisfied.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="{{ asset('assets') }}/img/support-icon.png" alt="Support icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">24/7 support</h3>
                    <p class="feature-description">Reach out to our customer support team with any questions.</p>
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script>
            $(document).ready(function() {

                $(document).on('focus', "#location_name, #location_name_drop", function() {
                    var input = this;
                    var autocomplete = new google.maps.places.Autocomplete(input);
            
                    autocomplete.addListener('place_changed', function() {
                        var place = autocomplete.getPlace();
                        var address = place.formatted_address;
            
                        if ($(input).attr('id') === 'location_name') {
                            $('#pick_up_location_name').val(address); // Set the hidden input for pick-up location
                        } else if ($(input).attr('id') === 'location_name_drop') {
                            $('#drop_off_location_name').val(address); // Set the hidden input for drop-off location
                        }
                    });
                });

                $(document).on('keyup', "input[name='start_odo[]']", function() {
                    getValueForCalculation();
                });

                function getValueForCalculation() {

                    // Perform calculations after end address is selected
                    var origin = $('#origin').val();
                    var destination = $('#destination').val();
                    var travel_mode = "DRIVING";
                    var directionsDisplay = new google.maps.DirectionsRenderer({
                        draggable: false
                    });
                    var directionsService = new google.maps.DirectionsService();
                    calculateDistance(travel_mode, origin, destination);
                }

                // Calculate distance and duration
                function calculateDistance(travel_mode, origin, destination) {
                    var DistanceMatrixService = new google.maps.DistanceMatrixService();
                    DistanceMatrixService.getDistanceMatrix({
                        origins: [origin],
                        destinations: [destination],
                        travelMode: google.maps.TravelMode[travel_mode],
                        unitSystem: google.maps.UnitSystem.IMPERIAL,
                        avoidHighways: false,
                        avoidTolls: false
                    }, save_results);
                }

                // Save distance results
                function save_results(response, status) {
                    if (status != google.maps.DistanceMatrixStatus.OK) {
                        alert('Error: ' + status);
                    } else {
                        var origin = response.originAddresses[0];
                        var destination = response.destinationAddresses[0];
                        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                            alert("Sorry, not available to use this travel mode between " + origin + " and " +
                                destination);
                        } else {
                            console.log(response.rows);
                            var distance = response.rows[0].elements[0].distance;
                            var duration = response.rows[0].elements[0].duration;
                            var distance_in_mile = distance.value / 1609.34; // Distance in miles
                            var rounded_distance = parseInt(Math.round(distance_in_mile).toFixed(0),
                                10); // Round down to nearest integer

                            console.log(distance_in_mile);
                            console.log('Rounded Distance:', rounded_distance);

                            var start_odo = parseFloat($("input[name='start_odo[]']").val());
                            var end_odo = rounded_distance + start_odo;
                            $("input[name='end_odo[]']").val(end_odo.toFixed(0)); // Displaying with 2 decimal points

                        }
                    }
                }
            });
        </script>
        <script>
            document.getElementById('search-form').addEventListener('submit', function(event) {
                // Check if the form is valid
                if (!this.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    this.classList.add('was-validated');
                } else {
                    event.preventDefault();
                    searchLocation1();
                }
            });


            document.querySelector('.bag-number').addEventListener('click', function(e) {
                e.preventDefault();
                const floatingBox = document.querySelector('.floating-box');
                floatingBox.style.display = floatingBox.style.display === 'none' ? 'block' : 'none';
                // bagcontent = floatingBox.style.display === 'none' ? '' : false;
            });

            $(".close_bag").click(function(e) {
                e.preventDefault();
                const floatingBox = document.querySelector('.floating-box');
                floatingBox.style.display = floatingBox.style.display === 'none' ? 'block' : 'none';
            });
            $(function() {
                $("#flexCheckDefault").change(function() {
                    $('.drop_up').addClass('d-none');
                    if ($(this).prop('checked')) {
                        $('.drop_up').removeClass('d-none');
                    }
                });
            });

                    
            function increaseValue(id) {
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
            
            function decreaseValue(id) {
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
            $(document).on('click', function(event) {
                if (!$(event.target).closest('#bag-number, #toolbar').length) {
                    $('#toolbar').hide();
                }
            });
            
            function searchLocation1() {
                $('#loader_text').addClass('d-none');
                showLoader();
                var pick_up_location_name = $("#pick_up_location_name").val();
                var drop_off_location_name = $("#drop_off_location_name").val();
                var checkInDate = $("#check-in-date").val();
                var checkOutDate = $("#check-out-date").val();
                var bagNumber = $("#bag-number").val();
            
                var data = {
                    pick_up_location_name: pick_up_location_name,
                    drop_off_location_name: drop_off_location_name,
                    checkInDate: checkInDate,
                    checkOutDate: checkOutDate,
                    bagNumber: bagNumber
                };
            
                var jsonData = JSON.stringify(data);
                var encryptedData = encryptData(jsonData);
            
                window.location.href = "{{ url('details/data') }}/" + encodeURIComponent(encryptedData);
            }
            
        </script>
    @endpush
@endsection
