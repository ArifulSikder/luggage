<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Hub - Store Your Luggage</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <input type="hidden" id="base_url" value="{{ url('/') }}">
    <div id="loader" class="loader">
        <div class="d-block">
            <h4 class="m-5 d-none" id="loader_text">Finding a pickup agent...</h4>
        </div>
        <div class="spinner"></div>
    </div>
    <div class="hero-section hubhero-section">
        @include('frontend.include.header')
        <div class="container-fluid px-0">
            <div class="container" style="max-width: 80%;">
                <div class="row">
                    <!-- Content Column (Left side) -->
                    <div class="col-lg-8">
                        <div class="content-section">
                            <h3 class="section-title">Guide Help one</h3>
                            <p class="mb-4">{!! $hubDetails->description !!}</p>
                            <h3 class="section-title">Guide Help two</h3>
                            {!! $hubDetails->help_guide !!}
                            <!-- <ul class="list-unstyled">
                                <li class="mb-2">• Visit the LuggageHero website or app.</li>
                                <li class="mb-2">• Choose your city and find a nearby storage location.</li>
                                <li class="mb-2">• Book your storage online.</li>
                                <li class="mb-2">• Drop off your luggage and receive a security seal.</li>
                                <li class="mb-2">• Enjoy your day and pick up your luggage when you're ready.</li>
                            </ul> -->

                            <h3 class="section-title">Guide Help three</h3>
                            {!! $hubDetails->help_guide !!}
                            <!-- <ul class="list-unstyled">
                                <li class="mb-2">• Visit the LuggageHero website or app.</li>
                                <li class="mb-2">• Choose your city and find a nearby storage location.</li>
                                <li class="mb-2">• Book your storage online.</li>
                                <li class="mb-2">• Drop off your luggage and receive a security seal.</li>
                                <li class="mb-2">• Enjoy your day and pick up your luggage when you're ready.</li>
                            </ul> -->

                        </div>
                    </div>


                    <!-- Form Column (Right side) -->
                    <div class="col-lg-4 padd2p">
                        <div class="form-section">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3>Book Luggage</h3>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <label for="checkin-datetime" class="form-label">Check - In</label>
                                    <input type="datetime-local" id="checkin-datetime" name="checkin_datetime"
                                        class="form-control"
                                        value="{{ count($urldata) > 0 ? date('Y-m-d\TH:i', strtotime($urldata['checkInDate'])) : '' }}"
                                        onchange="calculateTotalCost()">
                                </div>
                                <div class="mb-3">
                                    <label for="checkout-datetime" class="form-label">Check - Out</label>
                                    <input type="datetime-local" id="checkout-datetime" name="checkout_datetime"
                                        class="form-control"
                                        value="{{ count($urldata) > 0 ? date('Y-m-d\TH:i', strtotime($urldata['checkOutDate'])) : '' }}"
                                        onchange="calculateTotalCost()">
                                </div>

                                <h4 class="mb-2">Luggages</h4>
                                <p class="text-muted mb-3" id="countluggage">{{ $hubInfo['totalBag'] }} luggages</p>

                                <div class="luggage-item">
                                    <span>Small - 18-22 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('1')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter1" name="small" min="1"
                                            value="{{ $hubInfo['totals']['Small'] }}" class="unique-counter-input"
                                            readonly>
                                        <button type="button" onclick="increaseValue('1')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                </div>

                                <div class="luggage-item">
                                    <span>Medium - 24-26 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('2')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter2" name="medium"
                                            value="{{ $hubInfo['totals']['Medium'] }}" class="unique-counter-input"
                                            readonly>
                                        <button type="button" onclick="increaseValue('2')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                </div>
                                <div class="luggage-item">
                                    <span>Large - 28-32 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('3')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter3" name="large"
                                            value="{{ $hubInfo['totals']['Large'] }}" class="unique-counter-input"
                                            readonly>
                                        <button type="button" onclick="increaseValue('3')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                </div>

                                <div class="luggage-item">
                                    <span>Extra Large - 30-34 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('4')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter4" name="extra_large"
                                            value="{{ $hubInfo['totals']['Extra Large'] }}"
                                            class="unique-counter-input" readonly>
                                        <button type="button" onclick="increaseValue('4')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                </div>

                                <input type="hidden" id="hub_id" name="hub_id"
                                    value="{{ $hubDetails->hubPricing->hub_id }}">
                                <button type="submit" class="btn btn-primary w-100 mt-4 reserve" data-toggle="modal"
                                    data-target="#staticBackdrop">Reserve</button>

                                <div class="text-center mt-2">
                                    <div class="h5">
                                        <span id="totalCost">${{ $hubInfo['totalPrice'] }}</span> +
                                        {{ isset($option_details->option_value) ? $option_details->option_value : 0 }}%
                                        Tax
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body booking_bg">
                    <div class="container my-5">
                        <div class="row justify-content-center position-relative">
                            <div class="col-12 text-center">
                                <h1 class="mb-5"><i class="fa-regular fa-circle-check" style="color: #6DD372;"></i>
                                    Booking
                                    Confirmed</h1>
                            </div>
                            <div class="col-md-6 text-center mb-4">
                                <div class="mx-3">
                                    <img src="{{ asset('assets') }}/img/a_guy.png"
                                        class="img-fluid rounded custom-shadow" alt="Booking Image">
                                    <h2 class="mt-3">Working since 2023</h2>
                                    <p>- Jordon Smith</p>
                                    <p>- 1 8223 3837 000</p>
                                </div>
                                <button class="btn btn-success" onclick="goToDashbord()">Go To Orders</button>
                            </div>
                            <div class="col-md-6">
                                <div class="vertical-bar d-none d-md-block"></div> <!-- Vertical bar added here -->
                                <div class="mx-3">
                                    <div class="">
                                        <div class="d-flex align-items-center">
                                            <h1 class="me-3 mb-0">Arriving in</h1>
                                            <img src="{{ asset('assets') }}/img/location.jpg"
                                                class="img-fluid rounded" style="max-width: 50px;"
                                                alt="Location Image">
                                        </div>
                                        <h1 class="mt-3"><span style="color: #6DD372;">25</span> minutes</h1>
                                        <table class="table mt-4">
                                            <tbody>
                                                <tr>
                                                    <td>Arrived</td>
                                                    <td>
                                                        <div class="spinner-border text-warning" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Picked Up</td>
                                                    <td>
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Safely Stored</td>
                                                    <td>
                                                        <div class="spinner-border text-info" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Order Completed</td>
                                                    <td>
                                                        <div class="spinner-border text-success" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    @include('frontend.include.footer')

    <script src="{{ asset('frontend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}?v={{ time() }}"></script>
    <script>
        $(document).ready(function() {
            $('.reserve').click(function(e) {
                e.preventDefault(); // Prevent form submission
                Swal.fire({
                    title: "Do you want to Reserve?",
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                    cancelButtonText: `No`
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('check-login') }}",
                            success: function(response) {
                                if (response.logged_in) {
                                    // User is logged in, proceed with reservation
                                    proceedWithReservation();
                                } else {
                                    // User is not logged in, prompt to log in
                                    Swal.fire({
                                        title: 'Please log in to reserve',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Login',
                                        cancelButtonText: 'Cancel'
                                    }).then((loginResult) => {
                                        if (loginResult.isConfirmed) {
                                            // Store the intended URL in session storage
                                            const currentUrl = window.location.href;
                                            localStorage.setItem('intendedUrl', currentUrl);
                                            window.location.href = "{{ route('login') }}";
                                        }
                                    });
                                }
                            }
                        });
                    }
                });
            });
            
            function proceedWithReservation() {
                const small = $('#counter1').val();
                const medium = $('#counter2').val();
                const large = $('#counter3').val();
                const extraLarge = $('#counter4').val();
                const hubId = $('#hub_id').val();
                const check_in_date_time = $('#checkin-datetime').val();
                const check_out_date_time = $('#checkout-datetime').val();
            
                const data = {
                    hub_id: hubId,
                    small: small,
                    medium: medium,
                    large: large,
                    extra_large: extraLarge,
                    check_in_date_time: check_in_date_time,
                    check_out_date_time: check_out_date_time
                };
            
                $.ajax({
                    type: "POST",
                    url: "{{ url('reserve') }}",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        if(data.success === true) {
                            $('#staticBackdrop').modal('show');
                        }else {
                            Swal.fire({
                                title: 'Failed to reserve',
                                text: data.message,
                                icon: 'error',
                                confirmButtonText: 'Try Again'
                            });
                        }
                    }
                });
            }
            

        });
        $(function() {
            $("#check-in-date").datepicker();
            $("#check-out-date").datepicker();
        });

        function increaseValue(id) {
            // Enable the reserve button
            $('.reserve').prop('disabled', false);
            const $inputElement = $('#counter' + id);
            let currentValue = parseInt($inputElement.val(), 10);

            if (isNaN(currentValue)) {
                currentValue = 0;
            }

            // Increment the value
            currentValue++;
            $inputElement.val(currentValue);

            // Update the count of luggages
            const $countLuggage = $('#countluggage');
            const currentLuggageCount = parseInt($countLuggage.text(), 10);
            $countLuggage.text((currentLuggageCount + 1) + " luggages");
            calculateTotalCost();
        }



        function decreaseValue(id) {
            const inputElement = document.getElementById('counter' + id);
            let currentValue = parseInt(inputElement.value, 10);

            // Ensure the current value is a valid number
            if (isNaN(currentValue)) {
                currentValue = 1; // Set default to minimum value if current value is not a number
            }

            // Decrease the value only if it's greater than the minimum value
            if (currentValue > 0) {
                currentValue--;
                inputElement.value = currentValue;

                const countLuggageElement = document.getElementById('countluggage');
                const newCountLuggage = parseInt(countLuggageElement.innerHTML) - 1;
                countLuggageElement.innerHTML = newCountLuggage + " luggages";

                if (newCountLuggage === 0) {
                    $('.reserve').attr('disabled', true);
                }

            }
            calculateTotalCost();
        }

        function calculateTotalCost() {
            const small = $('#counter1').val();
            const medium = $('#counter2').val();
            const large = $('#counter3').val();
            const extraLarge = $('#counter4').val();
            const hubId = $('#hub_id').val();
            const check_in_date_time = $('#checkin-datetime').val();
            const check_out_date_time = $('#checkout-datetime').val();

            const data = {
                hub_id: hubId,
                small: small,
                medium: medium,
                large: large,
                extra_large: extraLarge,
                check_in_date_time: check_in_date_time,
                check_out_date_time: check_out_date_time
            };

            $.ajax({
                url: "{{ url('calculate-total-cost') }}",
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    const checkinDate = document.getElementById('checkin-datetime').value;
                    const checkoutDate = document.getElementById('checkout-datetime').value;

                    // Calculate date difference in days
                    const diffInMs = new Date(checkoutDate) - new Date(checkinDate);
                    const diffInDays = diffInMs / (1000 * 60 * 60 * 24);

                    // Calculate total cost including date difference
                    const totalCostWithDateDiff = response.totalPrice * diffInDays;
                    console.log(response.totalPrice);
                    $('#totalCost').text('$' + response.totalPrice);
                    $('#countluggage').text(response.totalBag + ' luggages');
                },
                error: function(xhr) {
                    console.error('Error Status:', xhr.status);
                    console.error('Error Response:', xhr.responseText);
                    alert('An error occurred while processing your request. Please try again.');
                }
            });
        }

        function goToDashbord() {
            window.location.href = "{{ url('customer-profile') }}"
        }

        function hideLoader() {
            document.getElementById('loader').style.display = 'none';
            // document.getElementById('content').style.display = 'block';
        }

        function showLoader1() {
            document.getElementById('loader').style.display = 'flex';

        }

    </script>
</body>

</html>
