<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
28/05/2024 20:26:53 -->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1728, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js"></script>
    <script id="anima-overrides-script" src="overrides.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/listingstyle.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .custom-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #e0f7ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            height: 80px;
        }

        .custom-navbar-left {
            display: flex;
            align-items: center;
        }

        .custom-navbar-logo {
            text-decoration: none;
            display: contents;
        }

        .custom-navbar-logo img {
            height: 24px;
            margin-right: 8px;
        }

        .custom-navbar-right {
            display: flex;
        }

        .custom-navbar-center a,
        .custom-navbar-right a {
            text-decoration: none;
            color: #1f2937;
            font-weight: 400;
            margin: 0 25px;
            font-size: 18px;
        }

        .custom-navbar-right a.custom-navbar-signup {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-weight: bold;
        }

        .custom-navbar-right a.custom-navbar-signup:hover {
            background-color: #0056b3;
        }

        .custom-navbar-login {
            display: flex;
            align-items: center;
        }

        .custom-navbar-login::before {
            content: "👤";
            margin-right: 4px;
        }

        .custom-content {
            margin-top: 60px;
            /* Adjust according to the height of your navbar */
            padding: 20px;
        }

        .pointer {
            cursor: pointer;
        }

        .search-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            gap: 30px;
            margin: 7% 18%;
            z-index: 99;
            position: absolute;
        }

        .search-box {
            margin-right: 20px;
            text-align: center;
        }

        .search-box:last-child {
            margin-right: 0;
        }

        .website-text-sizeheading-6semibold {
            font-weight: 600;
            font-size: 1rem;
        }

        .website-text-sizelabel-or-small-textregular {
            font-size: 0.875rem;
            color: #555;
            margin-top: 5px;
        }

        .search-box input,
        .search-box select {
            margin-top: 5px;
            padding: 5px;
            font-size: 0.875rem;
            width: 100%;
            box-sizing: border-box;
            border: none;
            border-radius: 4px;
        }

        #check-in-date {
            padding-left: 25px;
        }

        #location_name {
            padding-left: 5px;
        }

        .search-button {
            align-items: center;
            background-color: #098fff;
            border-radius: 6px;
            box-shadow: 0px 2px 2px #2137ab0f, 0px 4px 3px #2137ab12;
            display: inline-flex;
            gap: 6px;
            color: #fff;
            padding: 10px 20px;
            border: none;

            cursor: pointer;
            margin-left: 50px;
        }

        .search-button img {
            margin-right: 5px;
            vertical-align: middle;
        }

        #location_suggestions {
            display: none;
            background: #fff;
            position: absolute;
            z-index: 99;
            padding: 5px 8px;
            line-height: 25px;
            overflow-x: hidden;
            overflow-y: scroll;
            height: 206px;
        }


        .listing-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            margin: 20% 8%;
            height: 780px;
            overflow-y: scroll;
        }

        .listing-container .listing-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            width: 250px;
            height: 300px;
        }

        .listing-container .listing-item:hover {
            transform: translateY(-5px);
        }

        .listing-container .listing-item img {
            width: 100%;
            height: 150px;
            /* Fixed height */
            object-fit: cover;
            /* Ensure the image covers the area */
        }

        .listing-container .listing-details {
            padding: 15px;
        }

        .listing-container .listing-details h2 {
            font-size: 1.25em;
            margin: 0 0 10px;
        }

        .listing-container .rating {
            color: #ffcc00;
            font-size: 1em;
            margin: 5px 0;
        }

        .listing-container .description {
            font-size: 0.9em;
            color: #555;
            margin: 10px 0;
        }

        .listing-container .price {
            font-size: 1em;
            color: #333;
        }

        .listing-container .original-price {
            text-decoration: line-through;
            color: #999;
        }

        .listing-container .total-price {
            font-weight: bold;
            color: #000;
        }


        .listing-container2 {
            display: block;
            /* Change to block layout for list view */
            padding: 20px;
            margin: 20% 8%;
            height: 780px;
            overflow-y: scroll;
        }

        .listing-container2 .listing-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            margin-bottom: 20px;
            /* Add margin between items */
            display: flex;
            /* Use flexbox for list layout */
            width: 100%;
            /* Make items full width */
        }

        .listing-container2 .listing-item img {
            width: 200px;
            /* Fixed width for images */
            height: auto;
            object-fit: cover;
            /* Ensure the image covers the area */
        }

        .listing-container2 .listing-details {
            padding: 15px;
            flex: 1;
            /* Allow details to take remaining space */
        }

        .listing-container2 .listing-details h2 {
            font-size: 1.25em;
            margin: 0 0 10px;
        }

        .listing-container2 .rating {
            color: #ffcc00;
            font-size: 1em;
            margin: 5px 0;
        }

        .listing-container2 .description {
            font-size: 0.9em;
            color: #555;
            margin: 10px 0;
        }

        .listing-container2 .price {
            font-size: 1em;
            color: #333;
        }

        .listing-container2 .original-price {
            text-decoration: line-through;
            color: #999;
        }

        .listing-container2 .total-price {
            font-weight: bold;
            color: #000;
        }

        .listdesc {
            display: none;
        }

        .listing-container::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for webkit (Chrome, Safari, Edge) */
        }

        .listing-container {
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */
            -ms-overflow-style: none;
            /* Hide scrollbar for IE and Edge */
        }

        .listing-container2::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for webkit (Chrome, Safari, Edge) */
        }

        .listing-container2 {
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */
            -ms-overflow-style: none;
            /* Hide scrollbar for IE and Edge */
        }

        .line-4 {
            height: 60px;
            left: 32%;
            top: 11%;
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: 99;
        }

        .line-5-WtiUa6 {
            height: 60px;
            left: 43%;
            top: 11%;
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: 99;
        }

        .line-6-WtiUa6 {
            height: 60px;
            left: 56%;
            top: 11%;
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: 99;
        }

        .macbook-pro-16u34-1 .cta-Vd8XTR {
            background-color: transparent;
            height: 40px;
            left: 1408px;
            position: absolute;
            top: 0px;
            width: 210px;
        }

        .macbook-pro-16u34-1 .login-Vysqnh {
            background-color: transparent;
            color: var(--mariner600);
            font-style: normal;
            font-weight: 500;
            height: auto;
            left: 22px;
            line-height: 24px;
            position: absolute;
            text-align: center;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-1 .fi_666201-Vysqnh {
            background-color: transparent;
            height: 16px;
            left: 0px;
            position: absolute;
            top: 12px;
            width: 16px;
        }

        .macbook-pro-16u34-1 .frame-29 {
            align-items: center;
            background-color: var(--mariner600);
            border-radius: 6px;
            box-shadow: 0px 2px 2px #2137ab0f, 0px 4px 3px #2137ab12;
            display: inline-flex;
            gap: 6px;
            overflow: hidden;
            position: absolute;
            top: 0px;
        }

        .macbook-pro-16u34-1 .sing-up-0ow3tq {
            background-color: transparent;
            color: var(--white);
            font-style: normal;
            font-weight: 600;
            line-height: 24px;
            position: relative;
            text-align: center;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-1 .line-1 {
            background-color: transparent;
            height: 40px;
            object-fit: cover;
            position: relative;
            width: 1px;
        }

        .macbook-pro-16u34-1 .frame {
            background-color: transparent;
            height: 20px;
            width: 20px;
        }
    </style>
</head>

<body style="margin: 0;background: #ffffff;"><input type="hidden" id="base_url" name="base_url"
        value="<?= base_url() ?>">
    <div class="custom-navbar">
        <div class="custom-navbar-left">
            <a href="<?= base_url() ?>" class="custom-navbar-logo">
                <img src="<?= base_url() ?>assets/img/vector-1@2x.png" alt="Logo">
                Laggages bnb
            </a>
        </div>
        <div class="custom-navbar-center">
            <a href="#">All Cities</a>
            <a href="#">How it works</a>
            <a href="#">Pricing</a>
            <a href="#">About</a>
            <a href="<?= base_url() ?>Login">Become a partner</a>
        </div>
        <div class="custom-navbar-right">
            <?php if ($this->session->userdata('mainuser_id') && $this->session->userdata('mainuser_id') > 0) { ?>
                <a class="custom-navbar-login" href="#">Hello !
                        <?= $this->session->userdata('name') ?></a>
                <a class="custom-navbar-signup" href="<?= base_url() ?>Userregister/Logout">Logout →</a>
            <?php } else { ?>
                <a href="<?= base_url() ?>Userlogin" class="custom-navbar-login">Login</a>
                <a href="<?= base_url() ?>Userregister" class="custom-navbar-signup">Sign up</a>
            <?php } ?>
           
        </div>
    </div>
    <div class="container-center-horizontal">
        <div class="macbook-pro-16u34-1 screen " data-id="1:5">
            <!-- <div class="laggaes-bnb-HFdR2Z pointer" onclick="redirectMe('Home')" data-id="5:33">Laggaes bnb</div>
            <div class="frame-2-HFdR2Z" data-id="5:34">
                <div class="all-cities-uwefDO inter-normal-tuna-16px" data-id="5:35">All Cities</div>
                <div class="how-it-worls-uwefDO inter-normal-tuna-16px" data-id="5:36">How it worls</div>
                <div class="pricing-uwefDO inter-normal-tuna-16px" data-id="5:37">Pricing</div>
                <div class="about-uwefDO inter-normal-tuna-16px" data-id="5:38">About</div>
                <div class="become-a-partner-uwefDO inter-normal-tuna-16px" data-id="5:39">Become a partner</div>
            </div>
            <div class="cta-Vd8XTR pointer" data-id="6:51" onclick="redirectMe('Login')">
                <div class="login-Vysqnh basemedium" data-id="6:52">Login</div><img class="fi_666201-Vysqnh"
                    data-id="6:53" src="<?= base_url() ?>assets/img/fi-666201@2x.png" alt="fi_666201">
                <div class="frame-29-Vysqnh frame-29 pointer" data-id="6:59">
                    <div class="sing-up-0ow3tq basesemi-bold" data-id="6:60">Sing up</div><img class="line-1"
                        data-id="6:61" src="<?= base_url() ?>assets/img/line-1@2x.png" alt="Line 1"><img
                        class="frame-0ow3tq frame" data-id="6:62" src="<?= base_url() ?>assets/img/frame@2x.png"
                        alt="Frame">
                </div>
            </div> -->

            <div class="search-container">
                <div class="search-box">
                    <div class="search-CykRTC website-text-sizeheading-6semibold">Search</div>
                    <div class="">
                        <input type="text" id="location_name" value="<?= $results['data']['name'] ?>"
                            placeholder="Enter your location" onkeyup="getCoordinates();" autocomplete="off">
                        <div id="location_suggestions"></div>
                        <input type="hidden" id="latvalue" value="<?= $results['data']['latvalue'] ?>"><input
                            type="hidden" id="lonvalue" value="<?= $results['data']['lonvalue'] ?>">
                    </div>
                </div>
                <div class="search-box">
                    <div class="check-in-EeB7C7 website-text-sizeheading-6semibold">Check in</div>
                    <div class="">
                        <input type="text" id="check-in-date" placeholder="Add dates" autocomplete="off"
                            value="<?= $results['data']['checkInDate'] ?>">
                    </div>
                </div>
                <div class="search-box">
                    <div class="check-out-lMNb7N website-text-sizeheading-6semibold">Check out</div>
                    <div class="">
                        <input type="text" id="check-out-date" placeholder="Add dates" autocomplete="off"
                            value="<?= $results['data']['checkOutDate'] ?>">
                    </div>
                </div>
                <div class="search-box">
                    <div class="add-bags-E0h8e3 website-text-sizeheading-6semibold">Add Bags</div>
                    <div class="add-bags-number-E0h8e3">
                        <?php
                        $bagNumber = isset($results['data']['bagNumber']) ? $results['data']['bagNumber'] : '';
                        ?>
                        <input type="text" id="bag-number" placeholder="Add dates" autocomplete="off"
                            value="<?= $bagNumber; ?>">
                        <!-- <select id="bag-number">
                            <option value="" disabled <?php echo empty($bagNumber) ? 'selected' : ''; ?>>Add bags number
                            </option>
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                <option value="<?php echo $i; ?>" <?php echo ($bagNumber == $i) ? 'selected' : ''; ?>>
                                    <?php echo $i; ?>
                                </option>
                            <?php endfor; ?>
                        </select> -->
                    </div>
                </div>
                <button class="search-button" onclick="searchLocation()">
                    <img src="<?= base_url(); ?>assets/img/frame-10@2x.png" alt="Search Icon"> Search
                </button>
            </div>
            <img class="line-4-WtiUa6 line-4" data-id="40:1007" src="<?= base_url() ?>assets/img/line-4-2@2x.png"
                alt="Line 4"><img class="line-5-WtiUa6" data-id="40:1008"
                src="<?= base_url() ?>assets/img/line-4-2@2x.png" alt="Line 5"><img class="line-6-WtiUa6"
                data-id="40:1009" src="<?= base_url() ?>assets/img/line-4-2@2x.png" alt="Line 6">
            <p class="over-1000-places-within-map-area-HFdR2Z inter-normal-black-14px" data-id="6:45">Over 1000 places
                within map area</p>


            <div id="listing-container" class="listing-container">
                <?php
                // echo json_encode($results);
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
                            <img src="<?= base_url() ?>uploads/hub_images/<?= $row['hub_image'] ?>"
                                alt="Cave in Noyers-sur-Serein">
                            <div class="listing-details">
                                <h2><?= $row['hubname'] ?></h2>
                                <p class="rating">★ 4.82 (379)</p>
                                <p class="description griddesc"><?php $description = strip_tags($row['description']);
                                if (strlen($description) > 60) {
                                    $description = substr($description, 0, 60) . '...';
                                }
                                echo $description; ?></p>
                                <p class="description listdesc"><?= strip_tags($row['description']) ?></p>
                                <!-- <span class="original-price">$<?= $row['dailyPrice1'] ?></span> -->
                                <p class="price"> $<?= $row['hourlyPrice1'] ?> Hourly · <span class="total-price"> Total -
                                        $<?= $total ?></span></p>
                            </div>
                        </div>

                    <?php }
                } else {
                    echo $results['message'];
                } ?>
            </div>

            <div class="rectangle-9-HFdR2Z" data-id="7:277"></div>
            <div class="rectangle-10-HFdR2Z" data-id="7:278"></div>
            <div class="rectangle-11-HFdR2Z" data-id="7:279"></div>

            <div class="group-10-HFdR2Z" data-id="7:298">
                <div class="ellipse-1-GE9xKn" data-id="7:299"></div><img class="line-5-GE9xKn" data-id="7:300"
                    src="<?= base_url() ?>assets/img/line-5.svg" alt="Line 5">
            </div>
            <div class="filters-HFdR2Z inter-normal-black-20px" data-id="7:301">Filters</div><img
                class="icons8-filter-96-2-HFdR2Z" data-id="7:302"
                src="<?= base_url() ?>assets/img/icons8-filter-96-2.png" alt="icons8-filter-96 2">
            <div class="rectangle-13-HFdR2Z" data-id="7:303"></div>
            <div class="grid-HFdR2Z inter-normal-black-20px pointer" data-id="7:304" onclick="GridView()">Grid</div><img
                class="icons8-grid-100-1-HFdR2Z pointer" data-id="22:343"
                src="<?= base_url() ?>assets/img/icons8-grid-100-1.png" alt="icons8-grid-100 1" onclick="GridView()">
            <div class="rectangle-16-HFdR2Z" data-id="22:344"></div>
            <div class="list-HFdR2Z inter-normal-black-20px pointer" data-id="22:345" onclick="ListView()">List</div>
            <img class="icons8-grid-100-2-HFdR2Z pointer" data-id="22:346"
                src="<?= base_url() ?>assets/img/icons8-grid-100-2.png" alt="icons8-grid-100 2" onclick="ListView()">
            <div class="rectangle-14-HFdR2Z" data-id="7:306"></div>
            <div class="hourly-HFdR2Z" data-id="7:308">Hourly</div><img class="line-31-61T15F line-31" data-id="7:309"
                src="<?= base_url() ?>assets/img/line-31-1.svg" alt="Line 31">
            <div class="daily-HFdR2Z inter-normal-black-20px" data-id="7:310">Daily</div><img
                class="line-30-61T15F line-30" data-id="7:311" src="<?= base_url() ?>assets/img/line-31-1.svg"
                alt="Line 30">
            <div class="weekly-HFdR2Z inter-normal-black-20px" data-id="7:312">Weekly</div><img
                class="line-12-61T15F line-12" data-id="7:313" src="<?= base_url() ?>assets/img/line-31-1.svg"
                alt="Line 12"><img class="line-32-HFdR2Z" data-id="11:315"
                src="<?= base_url() ?>assets/img/line-31-1.svg" alt="Line 32">
            <div class="monthly-HFdR2Z inter-normal-black-20px" data-id="7:314">Monthly</div>
            <div class="all-HFdR2Z inter-normal-black-20px" data-id="11:316">All</div>
            <div class="x2024-laggaesbnb-inc-HFdR2Z inter-normal-tuna-16px" data-id="11:320">2024 Laggaesbnb, Inc</div>
            <div class="terms-HFdR2Z inter-normal-tuna-16px" data-id="11:328">Terms</div>
            <div class="x-HFdR2Z x inter-normal-tuna-16px" data-id="11:327">.</div>
            <div class="sitemap-HFdR2Z inter-normal-tuna-16px" data-id="11:329">Sitemap</div>
            <div class="x-61T15F x inter-normal-tuna-16px" data-id="11:330">.</div>
            <div class="privacy-HFdR2Z inter-normal-tuna-16px" data-id="11:331">Privacy</div>
            <div class="x-erP7bk x inter-normal-tuna-16px" data-id="11:332">.</div>
            <div class="your-privacy-choices-HFdR2Z inter-normal-tuna-16px" data-id="11:333">Your Privacy Choices</div>
            <div class="english-us-HFdR2Z inter-normal-tuna-16px" data-id="11:337">English (US)</div>
            <div class="x-5RPur3 x inter-normal-tuna-16px" data-id="11:334">.</div>
            <div class="ellipse-2-HFdR2Z" data-id="11:325"></div>
            <div class="c-HFdR2Z inter-normal-tuna-16px" data-id="11:326">C</div>
            <div class="rectangle-15-HFdR2Z" data-id="11:335"></div>
            <div class="usd-HFdR2Z" data-id="11:336">$ USD</div><img class="icons8-facebook-60-1-HFdR2Z"
                data-id="11:338" src="<?= base_url() ?>assets/img/icons8-facebook-60-1.png"
                alt="icons8-facebook-60 1"><img class="icons8-facebook-60-2-HFdR2Z" data-id="11:341"
                src="<?= base_url() ?>assets/img/icons8-facebook-60-2.png" alt="icons8-facebook-60 2"><img
                class="icons8-facebook-60-3-HFdR2Z" data-id="11:342"
                src="<?= base_url() ?>assets/img/icons8-facebook-60-3.png" alt="icons8-facebook-60 3">
            <div class="rectangle-17-HFdR2Z" data-id="22:347"></div>
            <div class="x1-HFdR2Z inter-normal-black-14px" data-id="22:348">1</div>
        </div>
    </div>
    <script src="launchpad-js/launchpad-banner.js" async></script>
    <script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script>
        $(function () {
            $("#check-in-date").datepicker();
            $("#check-out-date").datepicker();
        });
        document.body.style.zoom = "78%";
    </script>
</body>

</html>