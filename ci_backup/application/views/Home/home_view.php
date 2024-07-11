<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luggage Hub - Store Your Luggage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        .qty .count {
            color: #000;
            display: inline-block;
            vertical-align: top;
            font-size: 19px;
            font-weight: 700;
            line-height: 30px;
            padding: 0 2px;
            min-width: 35px;
            text-align: center;
        }

        .qty .plus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial, sans-serif;
            text-align: center;
            border-radius: 50%;
        }

        .qty .minus {
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial, sans-serif;
            text-align: center;
            border-radius: 50%;
            background-clip: padding-box;
        }

        div {
            text-align: center;
        }

        .minus:hover {
            background-color: #717fe0 !important;
        }

        .plus:hover {
            background-color: #717fe0 !important;
        }

        /*Prevent text selection*/
        span {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        input {
            border: 0;
            width: 2%;
        }

        nput::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input:disabled {
            background-color: white;
        }

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
</head>

<body>
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <div class="hero-section">
        <input type="hidden" id="base_url" name="base_url" value="<?= base_url() ?>">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/img/logo.png"
                            alt="Luggage hub"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#">All Cities</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">How it works</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link p180" href="<?= base_url() ?>Login">Become
                                    a partner</a></li>
                            <?php if ($this->session->userdata('mainuser_id') && $this->session->userdata('mainuser_id') > 0) { ?>
                            <li class="nav-item"><a class="nav-link login" href="#">Hello !
                                    <?= $this->session->userdata('name') ?></a></li>
                            <li class="nav-item"><a class="btn btn-primary"
                                    href="<?= base_url() ?>Userregister/Logout">Logout →</a></li>
                            <?php } else { ?>
                            <li class="nav-item"><a class="nav-link login" href="<?= base_url() ?>Userlogin">Login</a>
                            </li>
                            <li class="nav-item"><a class="btn btn-primary" href="<?= base_url() ?>Userregister">Sing up
                                    →</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container hero-content">
            <div class="row banner">
                <div class="col-md-8 mx-auto">
                    <h1>Store your <span class="text-primary">luggage hassle</span> free with us</h1>
                    <p>Welcome to our luggage storing platform. Enjoy hassle-free travel with our secure and convenient
                        storage solutions.</p>

                    <div class="search-form">
                        <div class="row g-2">
                            <div class="col-md pick_up">
                                <input type="text" class="form-control" id="location_name"
                                    placeholder="Pick-up location" onkeyup="getCoordinates();" autocomplete="off">
                            </div>
                            <div class="col-md d-none drop_up">
                                <input type="text" class="form-control" id="location_name"
                                    placeholder="Drop-off location" autocomplete="off">
                            </div>

                            <input type="hidden" id="latvalue"><input type="hidden" id="lonvalue">
                            <div class="col-md">
                                <input type="datetime-local" class="form-control" placeholder="Add dates"
                                    autocomplete="off">
                            </div>
                            <div class="col-md">
                                <input type="datetime-local" class="form-control" placeholder="Add dates"
                                    autocomplete="off">
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control bag-number" id="bag-number"
                                    placeholder="Select Bags" autocomplete="off">
                            </div>
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary"
                                    onclick="searchLocation1()">Search</button>
                            </div>
                        </div>
                    </div>
                        <div class="card col-md-4 mt-3 bg-primary text-white">
                            <div class="form-check text-left m-1">
                                <input class="form-check-input" type="checkbox" value="1"
                                    id="flexCheckDefault">
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

                                <div class="qty col-md-5">
                                    <span class="minus bg-light text-dark">-</span>
                                    <input type="number" class="count" name="qty" value="0">
                                    <span class="plus bg-light text-dark">+</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Medium - 24-26 inches</span>

                                <div class="qty col-md-5">
                                    <span class="minus bg-light text-dark">-</span>
                                    <input type="number" class="count" name="qty" value="0">
                                    <span class="plus bg-light text-dark">+</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Large - 28-32 inches</span>

                                <div class="qty col-md-5">
                                    <span class="minus bg-light text-dark">-</span>
                                    <input type="number" class="count" name="qty" value="0">
                                    <span class="plus bg-light text-dark">+</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Extra Large - 30-34 inches</span>

                                <div class="qty col-md-5">
                                    <span class="minus bg-light text-dark">-</span>
                                    <input type="number" class="count" name="qty" value="0">
                                    <span class="plus bg-light text-dark">+</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratings">
                        <img src="<?= base_url() ?>assets/img/google.png" alt="Google">
                        <span class="stars">★★★★★</span>
                        <img src="<?= base_url() ?>assets/img/trust.png" alt="Trustpilot">
                        <span class="stars">★★★★★</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-images">
            <img src="<?= base_url() ?>assets/img/traveler1.png" alt="Traveler" class="img-1">
            <img src="<?= base_url() ?>assets/img/luggage.png" alt="Luggage" class="img-2">
            <img src="<?= base_url() ?>assets/img/traveler2.png" alt="Traveler" class="img-3">
            <img src="<?= base_url() ?>assets/img/storage.png" alt="Storage" class="img-4">
        </div>

        <div class="floating-icon left">
            <img src="<?= base_url() ?>assets/img/arrow.png" alt="Chat">
        </div>
        <div class="floating-icon right">
            <img src="<?= base_url() ?>assets/img/user.png" alt="User">
        </div>
    </div>
    <section class="trusted-by">
        <div class="container">
            <h2 class="text-center mb-4">Trusted by more than <span class="highlight">1200+</span> companies worldwide
            </h2>
            <div class="logo-container">
                <img src="<?= base_url() ?>assets/img/tripadvisor-logo.png" alt="Tripadvisor" class="company-logo">
                <img src="<?= base_url() ?>assets/img/expedia-logo.png" alt="Expedia" class="company-logo">
                <img src="<?= base_url() ?>assets/img/booking-logo.png" alt="Booking.com" class="company-logo">
                <img src="<?= base_url() ?>assets/img/airbnb-logo.png" alt="Airbnb" class="company-logo">
                <img src="<?= base_url() ?>assets/img/orbitz-logo.png" alt="Orbitz" class="company-logo">
            </div>
        </div>
    </section>

    <section class="why-choose-us bg-white">
        <div class="container">
            <h2 class="section-title">Why thousands choose us daily</h2>
            <div class="features-container">
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="<?=base_url()?>assets/img/shield-icon.png" alt="Shield icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">Stored safely</h3>
                    <p class="feature-description">All bags stashed with us are protected against loss, theft & damage.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="<?=base_url()?>assets/img/money-back-icon.png" alt="Money back icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">Money back guarantee</h3>
                    <p class="feature-description">Free cancellation on all unused bookings and a full refund if you're
                        not satisfied.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-container">
                        <img src="<?=base_url()?>assets/img/support-icon.png" alt="Support icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">24/7 support</h3>
                    <p class="feature-description">Reach out to our customer support team with any questions.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5 class="mb-3">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="Laggaes bnb" class="me-2"
                            style="width: 125px;">
                        <!-- Laggaes bnb -->
                    </h5>
                    <div class="social-icons">
                        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-1 nomob"></div>
                <div class="col-6 col-md-2">
                    <h6>Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Transition Project</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h6>Resources</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Black Friday Deals</a></li>
                        <li><a href="#">Cart Abandonment</a></li>
                        <li><a href="#">Changelog</a></li>
                        <li><a href="#">Recomendation</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h6>Questions</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">General Enquiries</a></li>
                        <li><a href="#">Request Support</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h6>Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-4 pt-4 border-top">
            <div class="row">
                <div class="col-md-8">
                    <!-- <small>© 2023 #1 Sales Funnel Builder For WordPress - Beautiful Checkout Pages & One Click
                        Upsells.</small> -->
                </div>
                <div class="col-md-4">
                    <ul class="list-inline text-md-end mb-0">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Refund Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script>
        document.querySelector('.bag-number').addEventListener('click', function(e) {
            e.preventDefault();
            const floatingBox = document.querySelector('.floating-box');
            floatingBox.style.display = floatingBox.style.display === 'none' ? 'block' : 'none';
            // bagcontent = floatingBox.style.display === 'none' ? '' : false;
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
            // var latvalue = document.getElementById("latvalue").value;
            // var name = document.getElementById("location_name").value;
            // var lonvalue = document.getElementById("lonvalue").value;
            // var checkInDate = document.getElementById("check-in-date").value;
            // var checkOutDate = document.getElementById("check-out-date").value;
            // var bagNumber = document.getElementById("bag-number").value;

            // var data = {
            //     name: name,
            //     latvalue: latvalue,
            //     lonvalue: lonvalue,
            //     checkInDate: checkInDate,
            //     checkOutDate: checkOutDate,
            //     bagNumber: bagNumber
            // };

            // var jsonData = JSON.stringify(data);
            // var encryptedData = encryptData(jsonData);

            window.location.href = baseUrl+"Hub/Details/MQ==";
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
</body>

</html>
