<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        /* .navbar {
    background-color: #e3f2fd;
}

.search-form {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.floating-box {
    padding: 15px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.room-selector .counter {
    font-size: 16px;
} */
        .floating-box {
            top: 30% !important;
        }

        #location_suggestions {
            top: 30% !important;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-group .btn-outline-primary.active {
            background-color: #007bff;
            color: #fff;
        }

        .btn-group .btn-outline-primary.active:hover {
            background-color: #0056b3;
        }

        .collapse {
            padding: 15px;
            border-radius: 5px;
        }

        .all-btns {
            justify-content: center !important;
        }

        .mr-10 {
            margin-right: 10px;
        }

        /* Listing styles */
        .listing-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            padding: 50px 100px;
        }

        .listing-item {
            display: flex;
            flex-direction: column;
            width: calc(25% - 15px);
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            cursor: pointer;
        }

        .listing-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .listing-details {
            padding: 15px;
            text-align: center;
        }

        .listing-details h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .listing-details .rating {
            color: #ff9800;
            margin-bottom: 10px;
        }

        .listing-details .description.griddesc {
            display: block;
        }

        .listing-details .description.listdesc {
            display: none;
        }

        .listing-details .price {
            font-weight: bold;
            margin-top: 10px;
        }

        .listing-item:hover {
            transform: translateY(-5px);
        }

        /* List view styles */
        .listing-container.list-view .listing-item {
            flex-direction: row;
            width: 100%;
        }

        .listing-container.list-view .listing-item img {
            width: 30%;
            height: auto;
        }

        .listing-container.list-view .listing-details {
            text-align: left;
            padding: 15px;
        }

        .listing-container.list-view .listing-details .description.griddesc {
            display: none;
        }

        .listing-container.list-view .listing-details .description.listdesc {
            display: block;
        }

        /* Media query for devices with a max width of 576px (e.g., mobile devices) */
        @media (max-width: 576px) {
            .listing-item {
                width: 100%;
            }

            .listing-container {
                gap: 10px;
                padding: 50px 25px;
            }

            .floating-box {
                top: 40% !important;
            }
        }

        /* Media query for devices with a max width of 576px (e.g., mobile devices) */
        @media (max-width: 576px) {
            .all-btns {
                flex-direction: column !important;
                align-items: flex-start !important;
            }

            .btn-group {
                width: 100%;
                margin-bottom: 10px;
            }

            .btn-group button {
                width: 100%;
                margin-bottom: 5px;
            }

            .mr-10 {
                margin-right: 0;
            }

            .collapse {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <header>
        <input type="hidden" id="base_url" name="base_url" value="<?= base_url() ?>">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Luggage hub"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">All Cities</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">How it works</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link p180" href="Login">Become a partner</a></li>
                        <?php if ($this->session->userdata('mainuser_id') && $this->session->userdata('mainuser_id') > 0) { ?>
                            <li class="nav-item"><a class="nav-link login" href="#">Hello !
                                    <?= $this->session->userdata('name') ?></a></li>
                            <li class="nav-item"><a class="btn btn-primary" href="Userregister/Logout">Logout →</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link login" href="Userlogin">Login</a></li>
                            <li class="nav-item"><a class="btn btn-primary" href="Userregister">Sign up →</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    $bagNumber = isset($results['data']['bagNumber']) ? $results['data']['bagNumber'] : '';
    ?>
    <div class="container mt-4">
        <div class="search-form">
            <div class="row g-2">
                <div class="col-md">
                    <input type="text" class="form-control" id="location_name" value="<?= $results['data']['name'] ?>"
                        placeholder="Enter your location" onkeyup="getCoordinates();" autocomplete="off">
                </div>
                <input type="hidden" id="latvalue" value="<?= $results['data']['latvalue'] ?>">
                <input type="hidden" id="lonvalue" value="<?= $results['data']['lonvalue'] ?>">
                <div class="col-md">
                    <input type="text" class="form-control" id="check-in-date"
                        value="<?= $results['data']['checkInDate'] ?>" placeholder="Add dates" autocomplete="off">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" id="check-out-date"
                        value="<?= $results['data']['checkOutDate'] ?>" placeholder="Add dates" autocomplete="off">
                </div>
                <div class="col-md">
                    <input type="text" class="form-control bag-number" id="bag-number" placeholder="Select Bags"
                        autocomplete="off" value="<?= $bagNumber; ?>">
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-primary" onclick="searchLocation()">Search</button>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center mt-3 all-btns">
            <div class="btn-group mr-10" role="group">
                <button type="button" class="btn btn-outline-primary active">Hourly</button>
                <button type="button" class="btn btn-outline-primary">Daily</button>
                <button type="button" class="btn btn-outline-primary">Weekly</button>
                <button type="button" class="btn btn-outline-primary">Monthly</button>
                <button type="button" class="btn btn-outline-primary">All</button>
            </div>
            <div class="d-flex justify-content-between align-items-center mr-10">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                    data-bs-target="#filters">Filters</button>
                <div class="collapse" id="filters">
                    <!-- Filter content can go here -->
                </div>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-secondary" onclick="toggleView('grid')">Grid</button>
                <button type="button" class="btn btn-outline-secondary" onclick="toggleView('list')">List</button>
            </div>

        </div>



        <div id="location_suggestions"></div>
        <div class="floating-box mt-3">
            <div class="room-selector">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Small - 18-22 inches</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary" onclick="decreaseValues('1')">-</button>
                        <span class="mx-2 counter" id="counter1">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="increaseValues('1')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Medium - 24-26 inches</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary" onclick="decreaseValues('2')">-</button>
                        <span class="mx-2 counter" id="counter2">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="increaseValues('2')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Large - 28-32 inches</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary" onclick="decreaseValues('3')">-</button>
                        <span class="mx-2 counter" id="counter3">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="increaseValues('3')">+</button>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Extra Large - 30-34 inches</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary" onclick="decreaseValues('4')">-</button>
                        <span class="mx-2 counter" id="counter4">0</span>
                        <button class="btn btn-sm btn-outline-secondary" onclick="increaseValues('4')">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Listing container -->
    <div id="listing-container" class="listing-container">
        <?php
        if (count($results['row']) > 0) {
            foreach ($results['row'] as $row) {
                $items = explode(', ', $bagNumber);
                $total = 0;
                foreach ($items as $item) {
                    list($size, $quantity) = explode(' - ', $item);
                    $quantity = (int) $quantity;

                    switch (trim($size)) {
                        case 'Small':
                            $total += $quantity * $row['hourlyPrice1'];
                            break;
                        case 'Medium':
                            $total += $quantity * $row['hourlyPrice2'];
                            break;
                        case 'Large':
                            $total += $quantity * $row['hourlyPrice4'];
                            break;
                        case 'Extra Large':
                            $total += $quantity * $row['hourlyPrice4'];
                            break;
                    }
                }
                ?>
                <div class="listing-item pointer"
                    onclick="redirectMe('Hub/Details/<?= encodeID($row['id']) ?>?data=<?= $data ?>')">
                    <img src="<?= base_url() ?>uploads/hub_images/<?= $row['hub_image'] ?>" alt="Image">
                    <div class="listing-details">
                        <h2><?= $row['hubname'] ?></h2>
                        <p class="rating">★ 4.82 (379)</p>
                        <p class="description griddesc">
                            <?= strlen(strip_tags($row['description'])) > 60 ? substr(strip_tags($row['description']), 0, 60) . '...' : strip_tags($row['description']); ?>
                        </p>
                        <p class="description listdesc"><?= strip_tags($row['description']) ?></p>
                        <p class="price">$<?= $row['hourlyPrice1'] ?> Hourly · <span class="total-price">Total -
                                $<?= $total ?></span></p>
                    </div>
                </div>
            <?php }
        } else {
            echo $results['message'];
        } ?>
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
                    <small>© 2023 #1 Sales Funnel Builder For WordPress - Beautiful Checkout Pages & One Click
                        Upsells.</small>
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
        document.querySelector('.bag-number').addEventListener('click', function (e) {
            e.preventDefault();
            const floatingBox = document.querySelector('.floating-box');
            floatingBox.style.display = floatingBox.style.display === 'none' ? 'block' : 'none';
            // bagcontent = floatingBox.style.display === 'none' ? '' : false;
        });
        $(function () {
            $("#check-in-date").datepicker();
            $("#check-out-date").datepicker();
        });

        function toggleView(view) {
            const listingContainer = document.getElementById('listing-container');
            if (view === 'list') {
                listingContainer.classList.add('list-view');
            } else {
                listingContainer.classList.remove('list-view');
            }
        }
    </script>
</body>

</html>