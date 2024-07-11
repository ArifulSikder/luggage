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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <style>
        .hubhero-section {
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
    </style>
</head>

<body>
    <div id="loader" class="loader">
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
            <div class="container my-5">
                <div class="row justify-content-center position-relative">
                    <div class="col-12 text-center">
                        <h1 class="mb-5"><i class="fa-regular fa-circle-check" style="color: #6DD372;"></i> Booking
                            Confirmed</h1>
                    </div>
                    <div class="col-md-6 text-center mb-4">
                        <div class="mx-3">
                            <img src="http://localhost/luggage/assets/img/a_guy.png" class="img-fluid rounded"
                                alt="Booking Image">
                            <h2 class="mt-3">Working since 2023</h2>
                            <p>- Jordon Smith</p>
                            <p>- 1 8223 3837 000</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="vertical-bar d-none d-md-block"></div> <!-- Vertical bar added here -->
                        <div class="mx-3">
                            <div class="">
                                <div class="d-flex align-items-center">
                                    <h1 class="me-3 mb-0">Arriving in</h1>
                                    <img src="http://localhost/luggage/assets/img/location.jpg"
                                        class="img-fluid rounded" style="max-width: 50px;" alt="Location Image">
                                </div>
                                <h1 class="mt-3"><span style="color: #6DD372;">25</span> minutes</h1>
                                <table class="table mt-4">
                                    <tbody>
                                        <tr>
                                            <td>Arrived</td>
                                            <td><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Picked Up</td>
                                            <td><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Safely Stored</td>
                                            <td><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Order Completed</td>
                                            <td><i class="fa fa-check text-success"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
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
            showLoader1();
            window.location.href = "http://localhost/luggage/" + "Hub/Details/MQ==";

        }

        function showLoader1() {
            document.getElementById('loader').style.display = 'flex';

        }
    </script>

</body>

</html>
