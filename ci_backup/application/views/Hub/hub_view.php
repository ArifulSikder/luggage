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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* body {
            background-color: #f8f9fa;
            font-size: 14px;
        }

        .container {
            background-color: #f8f9fa;
            padding-top: 2rem;
            padding-bottom: 2rem;
        } */
        .custom-shadow {
            box-shadow: 0 31px 24px rgba(36, 33, 33, 0.2);
            /* Apply shadow to all sides */
            border-radius: 10px;
            /* Keep rounded corners */
        }

        .booking_bg {
            background-color: #F5F5F5 !important;
        }

        .card.shadow-sm {
            background: #F5F5F5;
        }

        .vertical-bar {
            border-left: 2px solid #e6e6e6;
            height: 62%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .qty {
            text-align: end;
            margin-left: 138px;
        }

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




        .banner-section {
            background-color: white;
            padding: 20px 0;
        }

        .content-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        .form-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .section-title {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            text-align: left;
            margin-bottom: 20px;
        }

        .star-rating {
            color: #ffc107;
        }

        .luggage-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .luggage-item img {
            width: 30px;
            margin-right: 10px;
        }

        .unique-counter-input {
            width: 40px;
            text-align: center;
        }

        .pt-30 {
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <div id="loader" class="loader">
        <div class="d-block">
            <h4 class="m-5 d-none" id="loader_text">Finding a pickup agent...</h4>
        </div>
        <div class="spinner"></div>
    </div>
    <div class="hero-section hubhero-section">
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
                            <li class="nav-item"><a class="btn btn-primary" href="#">Logout →</a></li>
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


        <div class="container-fluid px-0">

            <div class="container" style="max-width: 80%;">
                <div class="row">
                    <!-- Content Column (Left side) -->
                    <div class="col-lg-8">
                        <div class="content-section">
                            <h3 class="section-title">Guide Help one</h3>
                            <p class="mb-4"><?= $hubDetails['description'] ?></p>

                            <h3 class="section-title">Guide Help two</h3>
                            <?= $hubDetails['helpGuide'] ?>
                            <!-- <ul class="list-unstyled">
                                <li class="mb-2">• Visit the LuggageHero website or app.</li>
                                <li class="mb-2">• Choose your city and find a nearby storage location.</li>
                                <li class="mb-2">• Book your storage online.</li>
                                <li class="mb-2">• Drop off your luggage and receive a security seal.</li>
                                <li class="mb-2">• Enjoy your day and pick up your luggage when you're ready.</li>
                            </ul> -->

                            <h3 class="section-title">Guide Help three</h3>
                            <?= $hubDetails['helpGuide'] ?>
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
                            <?php
                            if (count($urldata) > 0) {
                                $bagNumber = $urldata['bagNumber'];
                            } else {
                                $bagNumber = '0';
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
                            // print_r($hubDetails);
                            if ($items[0] != 0) {
                                foreach ($items as $item) {
                                    [$size, $quantity] = explode(' - ', $item);
                                    $quantity = (int) $quantity;
                            
                                    switch (trim($size)) {
                                        case 'Small':
                                            $total_price += $quantity * $hubDetails['dailyPrice1'];
                                            $SmallPrice += $quantity * $hubDetails['dailyPrice1'];
                                            $Small += $quantity;
                                            $total_bag += $quantity;
                                            break;
                                        case 'Medium':
                                            $total_price += $quantity * $hubDetails['dailyPrice2'];
                                            $MediumPrice += $quantity * $hubDetails['dailyPrice2'];
                                            $Medium += $quantity;
                                            $total_bag += $quantity;
                                            break;
                                        case 'Large':
                                            $total_price += $quantity * $hubDetails['dailyPrice3'];
                                            $LargePrice += $quantity * $hubDetails['dailyPrice3'];
                                            $Large += $quantity;
                                            $total_bag += $quantity;
                                            break;
                                        case 'Extra Large':
                                            $total_price += $quantity * $hubDetails['dailyPrice4'];
                                            $ExtraLargePrice += $quantity * $hubDetails['dailyPrice4'];
                                            $ExtraLarge += $quantity;
                                            $total_bag += $quantity;
                                            break;
                                    }
                                }
                            }
                            ?>
                            <div>
                                <div class="mb-3">
                                    <label for="checkin-date" class="form-label">Check - In</label>
                                    <input type="datetime-local" id="checkin-date" class="form-control"
                                        value="<?php if (count($urldata) > 0) {
                                            echo date('Y-m-d', strtotime($urldata['checkInDate']));
                                        } ?>" onchange="calculateTotalCost()"
                                        placeholder="Enter check-in date">
                                </div>
                                <div class="mb-3">
                                    <label for="checkout-date" class="form-label">Check - Out</label>
                                    <input type="datetime-local" id="checkout-date" class="form-control"
                                        value="<?php if (count($urldata) > 0) {
                                            echo date('Y-m-d', strtotime($urldata['checkOutDate']));
                                        } ?>" onchange="calculateTotalCost()"
                                        placeholder="Enter check-out date">
                                </div>

                                <h4 class="mb-2">Luggages</h4>
                                <p class="text-muted mb-3" id="countluggage"><?= $total_bag ?> luggages</p>

                                <div class="luggage-item">
                                    <span>Small<br>18-22 inches</span>

                                    <div class="qty col-md-5">
                                        <span class="minus bg-light text-dark">-</span>
                                        <input type="number" class="count" name="qty" value="0">
                                        <span class="plus bg-light text-dark">+</span>
                                    </div>
                                    <input type="hidden" id="price1" value="<?= $hubDetails['dailyPrice1'] ?>">
                                    <input type="hidden" id="subTotal1" value="<?= $SmallPrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Medium<br>24-26 inches</span>

                                    <div class="qty col-md-5">
                                        <span class="minus bg-light text-dark">-</span>
                                        <input type="number" class="count" name="qty" value="0">
                                        <span class="plus bg-light text-dark">+</span>
                                    </div>
                                    <input type="hidden" id="price2" value="<?= $hubDetails['dailyPrice2'] ?>">
                                    <input type="hidden" id="subTotal2" value="<?= $MediumPrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Large<br>28-32 inches</span>

                                    <div class="qty col-md-5">
                                        <span class="minus bg-light text-dark">-</span>
                                        <input type="number" class="count" name="qty" value="0">
                                        <span class="plus bg-light text-dark">+</span>
                                    </div>
                                    <input type="hidden" id="price3" value="<?= $hubDetails['dailyPrice3'] ?>">
                                    <input type="hidden" id="subTotal3" value="<?= $LargePrice ?>">
                                </div>

                                <div class="luggage-item">
                                    <span>Extra Large<br>30-34 inches</span>

                                    <div class="qty col-md-5">
                                        <span class="minus bg-light text-dark">-</span>
                                        <input type="number" class="count" name="qty" value="0">
                                        <span class="plus bg-light text-dark">+</span>
                                    </div>
                                    <input type="hidden" id="price4" value="<?= $hubDetails['dailyPrice4'] ?>">
                                    <input type="hidden" id="subTotal4" value="<?= $ExtraLargePrice ?>">
                                </div>

                                <input type="hidden" id="hub_id" value="<?= $hubDetails['hub_id'] ?>">
                                <button type="submit" class="btn btn-primary w-100 mt-4"
                                    onclick="StartBooking1()">Reserve</button>
                                <div class="text-center mt-2">
                                    <div class="h5">
                                        <span id="totalCost">$100 </span>+
                                        <?= isset($optionDetails['row']['option_value']) ? $optionDetails['row']['option_value'] : 0 ?>%
                                        Tax
                                    </div>
                                </div>
                                </d>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                    <img src="<?=base_url()?>assets/img/a_guy.png"
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
                                            <img src="<?=base_url()?>assets/img/location.jpg"
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
            $("#check-in-date").datepicker();
            $("#check-out-date").datepicker();
        });

        $(document).ready(function() {
            calculateTotalCost();
        });


        function StartBooking1() {
            $("#loader_text").removeClass('d-none');
            showLoader1();
            setTimeout(function() {
                hideLoader();
                $('#staticBackdrop').modal('show');
                // window.location.href = baseUrl+"Hub/confirm_page/MQ==";
            }, 30000);
        }

        function goToDashbord() {
            window.location.href = baseUrl+"Hub/dashboard";
        }

        function hideLoader() {
            document.getElementById('loader').style.display = 'none';
            // document.getElementById('content').style.display = 'block';
        }

        function showLoader1() {
            document.getElementById('loader').style.display = 'flex';

        }
    </script>
    <script>
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

        });
    </script>
</body>

</html>
