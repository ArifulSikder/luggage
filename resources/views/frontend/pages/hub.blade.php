<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Hub - Store Your Luggage</title>

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

</head>

<body>
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
                            <p class="mb-4">{!! $hub_details->description !!}</p>
                            <h3 class="section-title">Guide Help two</h3>
                            {!! $hub_details->help_guide !!}
                            <!-- <ul class="list-unstyled">
                                <li class="mb-2">• Visit the LuggageHero website or app.</li>
                                <li class="mb-2">• Choose your city and find a nearby storage location.</li>
                                <li class="mb-2">• Book your storage online.</li>
                                <li class="mb-2">• Drop off your luggage and receive a security seal.</li>
                                <li class="mb-2">• Enjoy your day and pick up your luggage when you're ready.</li>
                            </ul> -->

                            <h3 class="section-title">Guide Help three</h3>
                            {!! $hub_details->help_guide !!}
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
                            @php
                                $bagNumber = 0;

                                if (count($urldata) > 0) {
                                    $bagNumber = $urldata['bagNumber'];
                                }

                                $items = explode(', ', $bagNumber);
                                $Small = 0;
                                $Medium = 0;
                                $Large = 0;
                                $ExtraLarge = 0;
                                $SmallPrice = 0;
                                $MediumPrice = 0;
                                $LargePrice = 0;
                                $ExtraLargePrice = 0;
                                $total_price = 0;
                                $total_bag = 0;

                                if ($items[0] != 0) {
                                    foreach ($items as $item) {
                                        [$size, $quantity] = explode(' - ', $item);
                                        $quantity = (int) $quantity;
                                        switch (trim($size)) {
                                            case 'Small':
                                                $total_price += $quantity * $hub_details->hub_pricing->daily_price_1;
                                                $SmallPrice += $quantity * $hub_details->hub_pricing->daily_price_1;
                                                $Small += $quantity;
                                                $total_bag += $quantity;
                                                break;
                                            case 'Medium':
                                                $total_price += $quantity * $hub_details->hub_pricing->daily_price_2;
                                                $MediumPrice += $quantity * $hub_details->hub_pricing->daily_price_2;
                                                $Medium += $quantity;
                                                $total_bag += $quantity;
                                                break;
                                            case 'Medium':
                                                $total_price += $quantity * $hub_details->hub_pricing->daily_price_3;
                                                $LargePrice += $quantity * $hub_details->hub_pricing->daily_price_3;
                                                $Large += $quantity;
                                                $total_bag += $quantity;
                                                break;
                                            case 'Extra Large':
                                                $total_price += $quantity * $hub_details->hub_pricing->daily_price_4;
                                                $ExtraLargePrice +=
                                                    $quantity * $hub_details->hub_pricing->daily_price_4;
                                                $ExtraLarge += $quantity;
                                                $total_bag += $quantity;
                                                break;
                                        }
                                    }
                                }

                                if($shortestDistance){
                                    $total_price += $shortestDistance * $hub_details->hub_pricing->per_km_price;
                                }

                            @endphp

                         <form action="{{ url('reserve') }}" method="POST">
                            @csrf
                            <input type="hidden" name="pick_up_location" value="{{ $urldata['pick_up_location_name'] }}">
                            <input type="hidden" name="drop_off_location" value="{{ $urldata['drop_off_location_name'] }}">
                            <div>
                                <div class="mb-3">
                                    <label for="checkin-datetime" class="form-label">Check - In</label>
                                    <input type="datetime-local" id="checkin-datetime" name="checkin_datetime" class="form-control"
                                        value="{{ count($urldata) > 0 ? date('Y-m-d\TH:i', strtotime($urldata['checkInDate'])) : '' }}"
                                        onchange="calculateTotalCost()">
                                </div>
                                <div class="mb-3">
                                    <label for="checkout-datetime" class="form-label">Check - Out</label>
                                    <input type="datetime-local" id="checkout-datetime" name="checkout_datetime" class="form-control"
                                        value="{{ count($urldata) > 0 ? date('Y-m-d\TH:i', strtotime($urldata['checkOutDate'])) : '' }}"
                                        onchange="calculateTotalCost()">
                                </div>
                                
                                <h4 class="mb-2">Luggages</h4>
                                <p class="text-muted mb-3" id="countluggage">{{ $total_bag  }} luggages</p>

                                <div class="luggage-item">
                                    <span>Small - 18-22 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('1')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter1" name="counter1" value="<?= $Small ?>"
                                            class="unique-counter-input" readonly>
                                        <button type="button" onclick="increaseValue('1')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                    <input type="hidden" id="price1"
                                        value="{{ $hub_details->hub_pricing->daily_price_1 }}">
                                    <input type="hidden" id="subTotal1" value="<?= $SmallPrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Medium - 24-26 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('2')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter2" name="counter2" value="<?= $Medium ?>"
                                            class="unique-counter-input" readonly>
                                        <button type="button" onclick="increaseValue('2')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                    <input type="hidden" id="price2"
                                        value="{{ $hub_details->hub_pricing->daily_price_2 }}">
                                    <input type="hidden" id="subTotal2" value="<?= $MediumPrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Large - 28-32 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('3')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter3" name="counter3" value="<?= $Large ?>"
                                            class="unique-counter-input" readonly>
                                        <button type="button" onclick="increaseValue('3')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                    <input type="hidden" id="price3"
                                        value="{{ $hub_details->hub_pricing->daily_price_3 }}">
                                    <input type="hidden" id="subTotal3" value="<?= $LargePrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Extra Large - 30-34 inches</span>
                                    <div class="counter-section">
                                        <button type="button" onclick="decreaseValue('4')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">-</button>
                                        <input type="text" id="counter4" name="counter4" value="<?= $ExtraLarge ?>"
                                            class="unique-counter-input" readonly>
                                        <button type="button" onclick="increaseValue('4')"
                                            class="btn btn-outline-secondary btn-sm btn-circle">+</button>
                                    </div>
                                    <input type="hidden" id="price4"
                                        value="{{ $hub_details->hub_pricing->daily_price_4 }}">
                                    <input type="hidden" id="subTotal4" value="<?= $ExtraLargePrice ?>">
                                </div>
                                <input type="hidden" id="driving_price" name="driving_price" value="{{ $shortestDistance * $hub_details->hub_pricing->per_km_price }}">
                                <input type="hidden" id="hub_id" name="hub_id" value="{{ $hub_details->hub_pricing->hub_id }}">
                                <input type="hidden" id="total_cost" name="total_cost" value="{{ number_format($total_price, 2) }}">
                                <button type="submit" class="btn btn-primary w-100 mt-4"
                                onclick="StartBooking1()">Reserve</button>
                                <div class="text-center mt-2">
                                    <div class="h5">
                                        <span id="totalCost">${{ number_format($total_price, 2) }}</span>+
                                        {{ isset($option_details->option_value) ? $option_details->option_value : 0 }}%
                                        Tax
                                    </div>
                                </div>
                            </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script>
        document.querySelector('.bag-number').addEventListener('click', function(e) {
            e.preventDefault();
            const floatingBox = document.querySelector('.floating-box');
            floatingBox.style.display = floatingBox.style.display === 'none' ? 'block' : 'none';
            // bagcontent = floatingBox.style.display === 'none' ? '' : false;
        });
        $(function() {
            $("#check-in-date").datepicker();
            $("#check-out-date").datepicker();
        });

        function calculateTotalCost(premium = 0) {
            const subTotal1 = parseFloat(document.getElementById('subTotal1').value) || 0;
            const subTotal2 = parseFloat(document.getElementById('subTotal2').value) || 0;
            const subTotal3 = parseFloat(document.getElementById('subTotal3').value) || 0;
            const subTotal4 = parseFloat(document.getElementById('subTotal4').value) || 0;
            const driving_price = parseFloat(document.getElementById('driving_price').value) || 0;
            const totalCost = subTotal1 + subTotal2 + subTotal3 + subTotal4 + driving_price + parseFloat(premium);
     
            const checkinDate = document.getElementById('checkin-datetime').value;
            const checkoutDate = document.getElementById('checkout-datetime').value;
        
            // Calculate date difference in days
            const diffInMs = new Date(checkoutDate) - new Date(checkinDate);
            const diffInDays = diffInMs / (1000 * 60 * 60 * 24);
        
            // Calculate total cost including date difference
            const totalCostWithDateDiff = totalCost * diffInDays;
        
            // Update the displayed total cost
            document.getElementById('totalCost').innerHTML = "$" + totalCostWithDateDiff.toFixed(2);
            $('#total_cost').val(totalCostWithDateDiff.toFixed(2));
        }


        function StartBooking1() {
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

        {{--  function StartBooking1() {
            $("#loader_text").removeClass('d-none');
            showLoader1();
            setTimeout(function() {
                hideLoader();
                $('#staticBackdrop').modal('show');
                // window.location.href = baseUrl+"Hub/confirm_page/MQ==";
            }, 2000);
        }  --}}

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
