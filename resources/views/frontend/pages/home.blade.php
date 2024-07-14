@extends('frontend.layouts.frontend_main')

@section('content')
@push('css')
    <style>
        .hero-content {
            position: relative;
        }

        .search-form {
            position: relative;
            z-index: 2;
            background: white; /* Optional: add a background color to ensure readability */
            padding: 20px;
            margin-top: 20px; /* Adjust as necessary */
        }

        .hero-images {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            display: flex;
            justify-content: space-around;
        }

        .hero-images img {
            max-width: 25%; /* Adjust the size of images */
        }

        .floating-icon {
            position: fixed;
            z-index: 3;
        }

        .floating-icon.left {
            left: 10px;
            bottom: 10px;
        }

        .floating-icon.right {
            right: 10px;
            bottom: 10px;
        }
    </style>
@endpush
<div class="container hero-content">
    <div class="row banner">
        <div class="col-md-8 mx-auto">
            <h1>Store your <span class="text-primary">luggage hassle</span> free with us</h1>
            <p>Welcome to our luggage storing platform. Enjoy hassle-free travel with our secure and convenient
                storage solutions.</p>

            {{--  <div class="search-form">
                <div class="row g-2">
                    <div class="col-md pick_up">
                        <input type="text" class="form-control" id="location_name"
                            placeholder="Pick-up location" onkeyup="getCoordinates();" autocomplete="off" required>
                    </div>
                    <div class="col-md d-none drop_up">
                        <input type="text" class="form-control" id="location_name"
                            placeholder="Drop-off location" autocomplete="off">
                    </div>

                    <input type="hidden" id="latvalue"><input type="hidden" id="lonvalue">
                    <div class="col-md">
                        <input type="datetime-local" class="form-control" id="check-in-date" placeholder="Add dates"
                            autocomplete="off" required>
                    </div>
                    <div class="col-md">
                        <input type="datetime-local" class="form-control" id="check-out-date" placeholder="Add dates"
                            autocomplete="off" required>
                    </div>
                    <div class="col-md">
                        <input type="text" class="form-control bag-number" id="bag-number"
                            placeholder="Select Bags" autocomplete="off" required>
                    </div>
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-primary"
                            onclick="searchLocation1()">Search</button>
                    </div>
                </div>
            </div>  --}}

            <form id="search-form" novalidate>
                <div class="search-form">
                    <div class="row g-2">
                        <div class="col-md pick_up">
                            <input type="text" class="form-control" id="location_name"
                                placeholder="Pick-up location" onkeyup="getCoordinates();" autocomplete="off" required>
                        </div>
                        <div class="col-md d-none drop_up">
                            <input type="text" class="form-control" id="location_name_drop" onkeyup="getCoordinatesDrop();"
                                placeholder="Drop-off location" autocomplete="off">
                        </div>
            
                        <input type="hidden" id="latvalue">
                        <input type="hidden" id="lonvalue">
                        <div class="col-md">
                            <input type="datetime-local" class="form-control" id="check-in-date" placeholder="Add dates"
                                autocomplete="off" required>
                        </div>
                        <div class="col-md">
                            <input type="datetime-local" class="form-control" id="check-out-date" placeholder="Add dates"
                                autocomplete="off" required>
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
                                onclick="decreaseValues('1')">-</button>
                            <span class="mx-2 counter" id="counter1">0</span>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="increaseValues('1')">+</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Medium - 24-26 inches</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="decreaseValues('2')">-</button>
                            <span class="mx-2 counter" id="counter2">0</span>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="increaseValues('2')">+</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Large - 28-32 inches</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="decreaseValues('3')">-</button>
                            <span class="mx-2 counter" id="counter3">0</span>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="increaseValues('3')">+</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>Extra Large - 30-34 inches</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="decreaseValues('4')">-</button>
                            <span class="mx-2 counter" id="counter4">0</span>
                            <button class="btn btn-sm btn-outline-secondary btn-circle"
                                onclick="increaseValues('4')">+</button>
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
                    <img src="{{ asset('assets') }}/img/shield-icon.png" alt="Shield icon"
                        class="feature-icon">
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
                    <img src="{{ asset('assets') }}/img/support-icon.png" alt="Support icon"
                        class="feature-icon">
                </div>
                <h3 class="feature-title">24/7 support</h3>
                <p class="feature-description">Reach out to our customer support team with any questions.</p>
            </div>
        </div>
    </div>
</section>
@push('js')
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
        // $("#check-in-date").datepicker();
        // $("#check-out-date").datepicker();

        $("#flexCheckDefault").change(function() {
            $('.drop_up').addClass('d-none');
            if ($(this).prop('checked')) {
                $('.drop_up').removeClass('d-none');
            }
        });


    });

    function searchLocation1() {
        $('#loader_text').addClass('d-none');
        showLoader();
        showLoader();
        var latvalue = $("#latvalue").val();
        var name = $("#location_name").val();
        var lonvalue = $("#lonvalue").val();
        var checkInDate = $("#check-in-date").val();
        var checkOutDate = $("#check-out-date").val();
        var bagNumber = $("#bag-number").val();
    
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
    
        window.location.href = "{{ url('details/data') }}/" + encodeURIComponent(encryptedData);
    }

    $(document).ready(function() {
        $('.count').prop('disabled', true);

        $(document).on('click', '.plus', function() {
            var $input = $(this).closest('.qty').find('.count');
            $input.val(parseInt($input.val()) + 1);
        });

        $(document).on('click', '.minus', function() {
            var $input = $(this).closest('.qty').find('.count');
            $input.val(parseInt($input.val()) - 1);
            if ($input.val() == 0) {
                $input.val(1);
            }
        });

        $('#bag-number').on('click', function() {
            var offset = $(this).offset();
            $('#toolbar').css({
                top: offset.top + $(this).outerHeight(),
                left: offset.left,
                width: $(this).outerWidth()
            }).show();
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('#bag-number, #toolbar').length) {
                $('#toolbar').hide();
            }
        });
    });
</script>
@endpush
@endsection