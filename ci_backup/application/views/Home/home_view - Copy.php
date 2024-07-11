<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
26/05/2024 09:06:08 -->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1728, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .search-container {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            gap: 70px;
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
            background-color: var(--mariner600);
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
    </style>
</head>

<body style="margin: 0;background: #ffffff;"><input type="hidden" id="base_url" name="base_url"
        value="<?= base_url() ?>">
    <div class="text-laggage-stor-website screen " data-id="5:495">
        <div class="navigation-H4BOT9" data-id="6:70">
            <div class="bg-PnLCXF bg" data-id="5:496"></div>
            <div class="content-PnLCXF content" data-id="6:69">
                <div class="logo-Vd8XTR" data-id="6:36"><img class="vector-qa43Tt" data-id="6:32"
                        src="<?= base_url() ?>assets/img/vector-1@2x.png" alt="Vector">
                    <div class="laggaes-bnb-qa43Tt website-text-sizebutton-textsemibold pointer" data-id="6:35">Laggaes
                        bnb</div>
                </div>
                <div class="menu-text-Vd8XTR" data-id="6:38">
                    <div class="all-cities-HvnWPn website-text-sizeparagraphregular-standard pointer" data-id="6:37">All
                        Cities</div>
                    <div class="how-it-works-HvnWPn website-text-sizeparagraphregular-standard pointer" data-id="6:40">
                        How it works</div>
                    <div class="pricing-HvnWPn website-text-sizeparagraphregular-standard pointer" data-id="6:42">
                        Pricing</div>
                    <div class="about-HvnWPn website-text-sizeparagraphregular-standard pointer" data-id="6:66">About
                    </div>
                    <div class="become-a-partner-HvnWPn website-text-sizeparagraphregular-standard pointer"
                        data-id="6:68" onclick="redirectMe('Login')">
                        Become a partner</div>
                </div>
                <div class="cta-Vd8XTR pointer" data-id="6:51">
                    <?php if ($this->session->userdata('mainuser_id') && $this->session->userdata('mainuser_id') > 0) { ?>
                        <div class="login-Vysqnh basemedium" data-id="6:52">Hello ! <?=$this->session->userdata('name')?></div>
                        <div class="frame-29-Vysqnh frame-29 pointer" data-id="6:59" onclick="redirectMe('Userregister')">
                            <img class="line-1"
                                data-id="6:61" src="<?= base_url() ?>assets/img/line-1@2x.png" alt="Line 1"><img
                                class="frame-0ow3tq frame" data-id="6:62" src="<?= base_url() ?>assets/img/frame@2x.png"
                                alt="Frame">
                        </div>
                    <?php } else { ?>
                        <div class="login-Vysqnh basemedium" data-id="6:52" onclick="redirectMe('Userlogin')">Login</div>
                        <img class="fi_666201-Vysqnh" data-id="6:53" src="<?= base_url() ?>assets/img/fi-666201@2x.png"
                            alt="fi_666201">
                        <div class="frame-29-Vysqnh frame-29 pointer" data-id="6:59" onclick="redirectMe('Userregister')">
                            <div class="sing-up-0ow3tq basesemi-bold" data-id="6:60">Sing up</div><img class="line-1"
                                data-id="6:61" src="<?= base_url() ?>assets/img/line-1@2x.png" alt="Line 1"><img
                                class="frame-0ow3tq frame" data-id="6:62" src="<?= base_url() ?>assets/img/frame@2x.png"
                                alt="Frame">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="laggage-stor-website screen " data-id="40:132">
        <div class="frame-81-MuMxPI" data-id="40:253">
            <div class="frame-22-9OT3uX" data-id="40:254">
                <p class="why-thousands-choose-us-daily-fVrrYu website-text-sizeheading-2bold" data-id="40:255">Why
                    thousands
                    choose us daily</p>
            </div>
            <div class="frame-26-9OT3uX" data-id="40:256">
                <div class="frame-23-BXrUeD" data-id="40:257"><img class="destination-1-x6q0YY" data-id="40:258"
                        src="<?= base_url() ?>assets/img/destination-1-1@2x.png" alt="destination 1">
                    <div class="frame-24-x6q0YY frame-24" data-id="40:259">
                        <div class="stored-safely-CfZ7pX website-text-sizeheading-3bold" data-id="40:260">Stored safely
                        </div>
                        <p class="all-bags-stashed-wit-CfZ7pX body" data-id="40:261">All bags stashed with us are
                            protected against
                            loss, theft &amp; damage.</p>
                    </div>
                </div>
                <div class="frame-24-BXrUeD frame-24" data-id="40:262"><img class="booking-1-Id4YWy" data-id="40:263"
                        src="<?= base_url() ?>assets/img/booking-1-1@2x.png" alt="booking 1">
                    <div class="frame-24-Id4YWy frame-24" data-id="40:264">
                        <div class="money-back-guarantee-BX84s5 website-text-sizeheading-3bold" data-id="40:265">Money
                            back
                            guarantee</div>
                        <p class="free-cancellation-on-BX84s5 body" data-id="40:266">Free cancellation on all unused
                            bookings and a
                            full refund if you&#39;re not</p>
                    </div>
                </div>
                <div class="frame-25-BXrUeD" data-id="40:267"><img class="cloudy-1-hlr9DI" data-id="40:268"
                        src="<?= base_url() ?>assets/img/cloudy-1-1@2x.png" alt="cloudy 1">
                    <div class="frame-24-hlr9DI frame-24" data-id="40:269">
                        <div class="x247-support-plR2Bx website-text-sizeheading-3bold" data-id="40:270">24/7 support
                        </div>
                        <p class="reach-out-to-our-cus-plR2Bx body" data-id="40:271">Reach out to our customer support
                            team with any
                            questions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-to-use-MuMxPI" data-id="40:272">
            <div class="bg-bEVWSD" data-id="40:273"></div>
            <div class="group-1171276359-bEVWSD" data-id="40:274">
                <p class="store-your-bags-in-a-few-clicks-CKao3H website-text-sizeheading-2bold" data-id="40:275">Store
                    your
                    bags in a few clicks</p>
                <div class="content-CKao3H content" data-id="40:276">
                    <div class="x1-A4zHA7 x1" data-id="40:277">
                        <div class="txt-w5xe9R txt" data-id="40:278">
                            <div class="locate-IE0lui website-text-sizeheading-4bold" data-id="40:279">Locate</div>
                            <div class="step-1 website-text-sizeparagraphregular-standard" data-id="40:280">Step 1</div>
                            <p class="find-a-luggage-storage-location-near-you-IE0lui website-text-sizeparagraphregular-standard"
                                data-id="40:281">Find a luggage storage location near you</p>
                        </div>
                        <div class="ellipse-1195-w5xe9R" data-id="40:282"></div><img class="image-52-w5xe9R"
                            data-id="40:283" src="<?= base_url(); ?>assets/img/image-52-1@2x.png" alt="image 52">
                    </div>
                    <div class="x6120876-A4zHA7 x6120876" data-id="40:284">
                        <div class="txt-ML0nfm txt" data-id="40:285">
                            <div class="book-NA5AjY website-text-sizeheading-4bold" data-id="40:286">Book</div>
                            <div class="step-1 website-text-sizeparagraphregular-standard" data-id="40:287">Step 1</div>
                            <div class="proceed-with-online-booking-NA5AjY website-text-sizeparagraphregular-standard"
                                data-id="40:288">Proceed with online booking</div>
                        </div>
                        <div class="ellipse-1196-ML0nfm ellipse-1196" data-id="40:289"></div><img
                            class="image-53-ML0nfm" data-id="40:290"
                            src="<?= base_url(); ?>assets/img/image-53-1@2x.png" alt="image 53">
                    </div>
                    <div class="x6120877-A4zHA7 x6120877" data-id="40:291">
                        <div class="txt-xoyNeW txt" data-id="40:292">
                            <div class="store-31W2pf website-text-sizeheading-4bold" data-id="40:293">Store</div>
                            <div class="step-3-31W2pf website-text-sizeparagraphregular-standard" data-id="40:294">Step
                                3</div>
                            <div class="store-your-suitcases-31W2pf website-text-sizeparagraphregular-standard"
                                data-id="40:295">Store
                                your suitcases</div>
                        </div>
                        <div class="ellipse-1196-xoyNeW ellipse-1196" data-id="40:296"></div><img
                            class="image-54-xoyNeW" data-id="40:297"
                            src="<?= base_url(); ?>assets/img/image-54-1@2x.png" alt="image 54">
                    </div>
                    <div class="x6120878-A4zHA7 x6120878" data-id="40:298">
                        <div class="txt-fc3Tzg txt" data-id="40:299">
                            <div class="enjoy-yYzoGd website-text-sizeheading-4bold" data-id="40:300">Enjoy</div>
                            <div class="step-4-yYzoGd website-text-sizeparagraphregular-standard" data-id="40:301">Step
                                4</div>
                            <div class="enjoy-your-hands-free-journey-yYzoGd website-text-sizeparagraphregular-standard"
                                data-id="40:302">Enjoy your hands-free journey</div>
                        </div>
                        <div class="ellipse-1196-fc3Tzg ellipse-1196" data-id="40:303"></div><img
                            class="image-55-fc3Tzg" data-id="40:304"
                            src="<?= base_url(); ?>assets/img/image-55-1@2x.png" alt="image 55">
                    </div>
                </div>
            </div><img class="group-1171276362-bEVWSD" data-id="40:305"
                src="<?= base_url() ?>assets/img/group-1171276362-1.png" alt="Group 1171276362">
        </div>
        <div class="review-MuMxPI review" data-id="40:309">
            <div class="our-customer-reviews-rock-jop95z valign-text-middle website-text-sizeheading-2bold"
                data-id="40:310">
                Our customer reviews rock!</div>
            <div class="group-1171276358-jop95z" data-id="40:311">
                <div class="frame-1171276283-gYJFYx" data-id="40:312">
                    <div class="frame-1171276281" data-id="40:313"><img class="group-1171276354" data-id="40:314"
                            src="<?= base_url(); ?>assets/img/group-1171276354-6@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:325">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:326"><img class="ellipse-1194" data-id="40:327"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-6@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:328">
                                <div class="john-smith basebold" data-id="40:329">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:330">New York, NY</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1171276282" data-id="40:331"><img class="group-1171276354" data-id="40:332"
                            src="<?= base_url(); ?>assets/img/group-1171276354-6@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:343">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:344"><img class="ellipse-1194" data-id="40:345"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-7@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:346">
                                <div class="john-smith basebold" data-id="40:347">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:348">New York, NY</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-1171276284-gYJFYx" data-id="40:349">
                    <div class="frame-1171276281" data-id="40:350"><img class="group-1171276354" data-id="40:351"
                            src="<?= base_url(); ?>assets/img/group-1171276354-6@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:362">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:363"><img class="ellipse-1194" data-id="40:364"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-7@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:365">
                                <div class="john-smith basebold" data-id="40:366">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:367">New York, NY</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1171276282" data-id="40:368"><img class="group-1171276354" data-id="40:369"
                            src="<?= base_url(); ?>assets/img/group-1171276354-6@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:380">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:381"><img class="ellipse-1194" data-id="40:382"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-9@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:383">
                                <div class="john-smith basebold" data-id="40:384">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:385">New York, NY</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-1171276285-gYJFYx" data-id="40:386">
                    <div class="frame-1171276281" data-id="40:387"><img class="group-1171276354" data-id="40:388"
                            src="<?= base_url(); ?>assets/img/group-1171276354-9@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:399">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:400"><img class="ellipse-1194" data-id="40:401"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-10@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:402">
                                <div class="john-smith basebold" data-id="40:403">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:404">New York, NY</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1171276282" data-id="40:405"><img class="group-1171276354" data-id="40:406"
                            src="<?= base_url(); ?>assets/img/group-1171276354-9@2x.png" alt="Group 1171276354">
                        <p class="easy-to-use-way-of-f baseregular" data-id="40:417">Easy to use way of finding a place
                            to store
                            your bags, especially when there&#39;s no early check-in at your vacation house.</p>
                        <div class="group-1171276356" data-id="40:418"><img class="ellipse-1194" data-id="40:419"
                                src="<?= base_url(); ?>assets/img/ellipse-1194-11@2x.png" alt="Ellipse 1194">
                            <div class="group-1171276355" data-id="40:420">
                                <div class="john-smith basebold" data-id="40:421">John Smith</div>
                                <div class="new-york-ny smregular" data-id="40:422">New York, NY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trusted-MuMxPI" data-id="40:423">
            <p class="trusted-by-more-than-wDNOlC inter-bold-vulcan-20px" data-id="40:424"><span
                    class="span0-yqY7jx inter-bold-vulcan-20px">Trusted</span><span class="span1-yqY7jx"> by more than
                </span><span class="span2-yqY7jx inter-bold-vulcan-20px">1200+</span><span class="span3-yqY7jx">
                    companies
                    worldwide</span></p><img class="frame-79-wDNOlC" data-id="40:425"
                src="<?= base_url() ?>assets/img/frame-79-1.png" alt="Frame 79">
        </div>
        <div class="frame-82-MuMxPI frame-82" data-id="40:532">
            <div class="group-9238-ebOk7N" data-id="40:533"><img class="rectangle-7-XM5Zxw" data-id="40:534"
                    src="<?= base_url(); ?>assets/img/rectangle-7-1.png" alt="Rectangle 7"><img
                    class="rectangle-8-XM5Zxw" data-id="40:535" src="<?= base_url(); ?>assets/img/rectangle-8-1.png"
                    alt="Rectangle 8"><img class="sahpe-left-XM5Zxw" data-id="40:536"
                    src="<?= base_url(); ?>assets/img/sahpe-left-1@2x.png" alt="sahpe left"><img
                    class="my-project-1-XM5Zxw" data-id="40:541" src="<?= base_url(); ?>assets/img/my-project-1-1.png"
                    alt="My project 1"></div>
            <div class="frame-22-ebOk7N" data-id="40:542">
                <div class="frame-47-ji02Zm" data-id="40:543">
                    <div class="frame-39-NeASNF" data-id="40:544">
                        <p class="thousands-of-travele-Na8R69 website-text-sizeheading-2bold" data-id="40:545">Thousands
                            of
                            travelers book our luggage storage every day</p>
                    </div>
                    <p class="contrary-to-popular-NeASNF body" data-id="40:546">Contrary to popular belief, Lorem Ipsum
                        is not
                        simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                </div>
                <div class="frame-46-ji02Zm" data-id="40:547">
                    <div class="frame-44-IwtevG" data-id="40:548">
                        <div class="frame-40-Ps2jck" data-id="40:549">
                            <div class="x350-egTFwO website-text-sizeheading-3bold" data-id="40:550">350+</div>
                            <div class="carefully-stored-egTFwO body" data-id="40:551">Carefully stored</div>
                        </div>
                        <div class="frame-41-Ps2jck" data-id="40:552">
                            <div class="x100-CDm2mN website-text-sizeheading-3bold" data-id="40:553">100%</div>
                            <div class="store-secure-CDm2mN body" data-id="40:554">Store secure</div>
                        </div>
                    </div>
                    <div class="frame-45-IwtevG" data-id="40:555">
                        <div class="frame-42-r6GX2x" data-id="40:556">
                            <div class="x500-GgrBZe website-text-sizeheading-3bold" data-id="40:557">500+</div>
                            <div class="bag-guardians-GgrBZe body" data-id="40:558">Bag guardians</div>
                        </div>
                        <div class="frame-43-r6GX2x" data-id="40:559">
                            <div class="x2k-GUKFWc" data-id="40:560">2k+</div>
                            <div class="happy-customer-GUKFWc body" data-id="40:561">Happy Customer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="frame-83-MuMxPI frame-83" data-id="40:562"><img class="discount-1-FlKgfN" data-id="40:563"
                src="<?= base_url() ?>assets/img/discount-1-1@2x.png" alt="discount 1">
            <div class="discounted-price-FlKgfN" data-id="40:565">Discounted Price</div>
        </div>
        <div class="destination-MuMxPI" data-id="40:566">
            <div class="x1-wR3npR x1" data-id="40:567">
                <?php if (!empty($hubDetails)):
                    $count = 0;
                    foreach ($hubDetails as $hub):
                        if ($count > 0 && $count % 4 == 0): ?>
                        </div> <!-- Close the previous container after every 4 items -->
                        <div class="x1-wR3npR x1" data-id="40:567"> <!-- Open a new container -->
                        <?php endif; ?>
                        <div class="frame-82-M5MG2g frame-82 pointer"
                            onclick="redirectMe('Hub/Details/<?= encodeID($hub['id']) ?>')" data-id="40:568">
                            <img class="rectangle-6" data-id="40:569"
                                src="<?= base_url() ?>uploads/hub_images/<?= $hub['hub_image']; ?>" alt="Rectangle 6">
                            <div class="frame-31" data-id="40:570">
                                <div class="frame-36" data-id="40:571">
                                    <div class="frame-32" data-id="40:572">
                                        <div class="laplands-bantayan-island website-text-sizeheading-4bold" data-id="40:573">
                                            <?= $hub['hubname']; ?>
                                        </div>
                                    </div>
                                    <div class="rome-italy body" data-id="40:574"><?php
                                    $address = $hub['address'];
                                    if (strlen($address) > 50) {
                                        $address = substr($address, 0, 25) . '...';
                                    }
                                    echo $address;
                                    ?></div>
                                </div>
                                <div class="frame-30" data-id="40:575">
                                    <div class="x48 circularstd-bold-orange-23px" data-id="40:576">4.8</div>
                                    <img class="star-1" data-id="40:577" src="<?= base_url(); ?>assets/img/star-1-16@2x.png"
                                        alt="star 1">
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    endforeach;
                else: ?>
                    <p>No hub details available.</p>
                <?php endif; ?>
            </div>

            <p class="our-top-luggage-storage-locations-wR3npR website-text-sizeheading-2bold" data-id="40:743">Our top
                Luggage Storage locations</p>
            <div class="frame-29-wR3npR frame-29" data-id="40:744">
                <div class="show-more-gYePUw basesemi-bold" data-id="40:745">Show more</div>
            </div>
        </div>
        <div class="cta-MuMxPI" data-id="40:746">
            <div class="bg-Q3HhCG" data-id="40:747"></div>
            <div class="bg-wWTyb5" data-id="40:748"></div><img class="mask-group-Q3HhCG mask-group" data-id="40:749"
                src="<?= base_url() ?>assets/img/mask-group-3.png" alt="Mask group">
            <div class="content-Q3HhCG content" data-id="40:758">
                <div class="text-0JF2Yw text" data-id="40:759">
                    <p class="book-now-and-enjoy-h-Oti3Us website-text-sizeparagraphregular-standard" data-id="40:760">
                        Book now
                        and enjoy hassle-free luggage storage with convenient options.</p>
                    <p class="secure-and-flexible-luggage-storage-Oti3Us website-text-sizeheading-2bold"
                        data-id="40:761">Secure
                        and Flexible Luggage Storage</p>
                </div>
                <div class="btn-0JF2Yw" data-id="40:762">
                    <div class="get-cartflows-now-GvgMAw" data-id="I40:762;10:24">Book Now Today</div>
                </div>
            </div>
        </div>
        <div class="rectangle-6667212-MuMxPI" data-id="40:763"></div>
        <div class="footer-MuMxPI footer" data-id="40:764">
            <div class="footer-gUBDiJ footer" data-id="40:765">
                <div class="logo-xS6buR" data-id="40:766"><img class="vector-2REkXH" data-id="40:767"
                        src="<?= base_url() ?>assets/img/vector-1@2x.png" alt="Vector">
                    <div class="laggaes-bnb-2REkXH" data-id="40:768">Laggaes bnb</div>
                </div>
                <div class="fb-xS6buR" data-id="40:769">
                    <div class="ellipse-28-xDihum" data-id="40:770"></div>
                    <div class="facebook-logo-xDihum facebook-logo" data-id="40:771"><img
                            class="facebook-logo-1gAYY8 facebook-logo" data-id="40:772"
                            src="<?= base_url(); ?>assets/img/facebook-logo-1@2x.png" alt="Facebook Logo"></div>
                </div>
                <div class="twiter-xS6buR" data-id="40:773">
                    <div class="ellipse-29-Zwxiam" data-id="40:774"></div>
                    <div class="twitter-logo-Zwxiam twitter-logo" data-id="40:775"><img
                            class="twitter-logo-EXs9xR twitter-logo" data-id="40:776"
                            src="<?= base_url(); ?>assets/img/twitter-logo-1@2x.png" alt="Twitter Logo"></div>
                </div>
                <div class="youtube-xS6buR" data-id="40:777">
                    <div class="ellipse-30-uJiwJa" data-id="40:778"></div>
                    <div class="youtube-clip-logo-uJiwJa youtube-clip-logo" data-id="40:779"><img
                            class="youtube-clip-logo-XDZrws youtube-clip-logo" data-id="40:780"
                            src="<?= base_url(); ?>assets/img/youtube-clip-logo-1@2x.png" alt="Youtube Clip Logo"></div>
                </div>
                <div class="f-content-1-xS6buR" data-id="40:781">
                    <div class="account-EqCYl4 proximanova-bold-black-18px" data-id="40:782">Account</div>
                    <div class="text-EqCYl4 text" data-id="40:783">
                        <div class="log-in-Stzrrq proximanova-regular-normal-black-17px" data-id="40:784">Log in</div>
                        <div class="transition-project-Stzrrq proximanova-regular-normal-black-17px" data-id="40:785">
                            Transition
                            Project</div>
                        <div class="affiliate-program-Stzrrq proximanova-regular-normal-black-17px" data-id="40:786">
                            Affiliate
                            Program</div>
                        <div class="my-account-Stzrrq proximanova-regular-normal-black-17px" data-id="40:787">My Account
                        </div>
                    </div>
                </div>
                <div class="f-content-2-xS6buR" data-id="40:788">
                    <div class="resources-43d93S proximanova-bold-black-18px" data-id="40:789">Resources</div>
                    <div class="text-43d93S text" data-id="40:790">
                        <div class="black-friday-deals-BHBlFT proximanova-regular-normal-black-17px" data-id="40:791">
                            Black Friday
                            Deals</div>
                        <div class="cart-abandonment-BHBlFT proximanova-regular-normal-black-17px" data-id="40:792">Cart
                            Abandonment
                        </div>
                        <div class="changelog-BHBlFT proximanova-regular-normal-black-17px" data-id="40:793">Changelog
                        </div>
                        <div class="recomendation-BHBlFT proximanova-regular-normal-black-17px" data-id="40:794">
                            Recomendation</div>
                        <div class="brand-assets-BHBlFT proximanova-regular-normal-black-17px" data-id="40:795">Brand
                            Assets</div>
                        <div class="videos-BHBlFT proximanova-regular-normal-black-17px" data-id="40:796">Videos</div>
                    </div>
                </div>
                <div class="f-content-3-xS6buR" data-id="40:797">
                    <div class="questions-YJRTkT proximanova-bold-black-18px" data-id="40:798">Questions</div>
                    <div class="text-YJRTkT text" data-id="40:799">
                        <div class="genarel-enquries-axQ0b9 proximanova-regular-normal-black-17px" data-id="40:800">
                            Genarel Enquries
                        </div>
                        <div class="request-support-axQ0b9 proximanova-regular-normal-black-17px" data-id="40:801">
                            Request Support
                        </div>
                        <div class="knowledge-base-axQ0b9 proximanova-regular-normal-black-17px" data-id="40:802">
                            Knowledge Base
                        </div>
                        <div class="faq-axQ0b9 proximanova-regular-normal-black-17px" data-id="40:803">FAQ</div>
                    </div>
                </div>
                <div class="f-content-4-xS6buR" data-id="40:804">
                    <div class="company-U93HTP proximanova-bold-black-18px" data-id="40:805">Company</div>
                    <div class="text-U93HTP text" data-id="40:806">
                        <div class="blog-xlixnM proximanova-regular-normal-black-17px" data-id="40:807">Blog</div>
                        <div class="about-xlixnM proximanova-regular-normal-black-17px" data-id="40:808">About</div>
                        <div class="contact-xlixnM proximanova-regular-normal-black-17px" data-id="40:809">Contact</div>
                    </div>
                </div>
            </div><img class="line-1-gUBDiJ line-1" data-id="40:810" src="<?= base_url() ?>assets/img/line-1-2.png"
                alt="Line 1">
            <div class="footer-2-gUBDiJ" data-id="40:811">
                <p class="x2023-1-sales-funnel-wk0ch1 proximanova-regular-normal-black-15px" data-id="40:812">© 2023 #1
                    Sales
                    Funnel Builder For WordPress - Beautiful Checkout Pages &amp; One Click Upsells.</p>
                <div class="privacy-policy-wk0ch1 proximanova-regular-normal-black-15px" data-id="40:813">Privacy Policy
                </div>
                <div class="refound-policy-wk0ch1 proximanova-regular-normal-black-15px" data-id="40:814">Refound Policy
                </div>
                <div class="terms-conditions-wk0ch1 proximanova-regular-normal-black-15px" data-id="40:815">Terms &amp;
                    Conditions</div>
            </div>
        </div>
        <div class="group-1171276363-MuMxPI" data-id="40:932">
            <div class="bg-MkxnZq" data-id="40:933"></div><img class="mask-group-MkxnZq mask-group" data-id="40:934"
                src="<?= base_url() ?>assets/img/mask-group-2.png" alt="Mask group">
            <div class="ellipse-32-MkxnZq" data-id="40:939"></div>
            <div class="ellipse-33-MkxnZq" data-id="40:940"></div>
            <div class="ellipse-34-MkxnZq" data-id="40:941"></div>



            <div class="frame-14-MkxnZq" data-id="40:967"><img class="rectangle-2-xbTsTh rectangle-2" data-id="40:968"
                    src="<?= base_url(); ?>assets/img/rectangle-2-2@2x.png" alt="Rectangle 2">
            </div>
            <img class="layer-MkxnZq" data-id="40:969" src="<?= base_url() ?>assets/img/layer-1.png" alt="layer">
            <div class="search-filter-MkxnZq" data-id="40:980">
                <!-- <div class="bg-ep24ba" data-id="40:981"></div>
                <div class="bg-hwGoxZ" data-id="78:8"></div> -->
                <!-- <div class="bg-M03ye5" data-id="78:9"></div> -->
                <div class="content-ep24ba content" data-id="40:982">
                    <div class="search-container">
                        <div class="search-box">
                            <div class="search-CykRTC website-text-sizeheading-6semibold">Search</div>
                            <div class="enter-your-location-CykRTC website-text-sizelabel-or-small-textregular">
                                <input type="text" id="location_name" placeholder="Enter your location"
                                    onkeyup="getCoordinates();">
                                <div id="location_suggestions"></div>
                                <input type="hidden" id="latvalue"><input type="hidden" id="lonvalue">
                            </div>
                        </div>
                        <div class="search-box">
                            <div class="check-in-EeB7C7 website-text-sizeheading-6semibold">Check in</div>
                            <div class="add-dates website-text-sizelabel-or-small-textregular">
                                <input type="text" id="check-in-date" placeholder="Add dates">
                            </div>
                        </div>
                        <div class="search-box">
                            <div class="check-out-lMNb7N website-text-sizeheading-6semibold">Check out</div>
                            <div class="add-dates website-text-sizelabel-or-small-textregular">
                                <input type="text" id="check-out-date" placeholder="Add dates">
                            </div>
                        </div>
                        <div class="search-box">
                            <div class="add-bags-E0h8e3 website-text-sizeheading-6semibold">Add Bags</div>
                            <div class="add-bags-number-E0h8e3 website-text-sizelabel-or-small-textregular">
                                <select id="bag-number">
                                    <option value="" disabled selected>Add bags number</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <button class="search-button" onclick="searchLocation()">
                            <img src="<?= base_url(); ?>assets/img/frame-10@2x.png" alt="Search Icon"> Search
                        </button>
                    </div>
                    <!-- <div class="frame-29-WtiUa6 frame-29" data-id="40:1002"><img class="frame-Ew4GGG" data-id="40:1003"
                            src="<?= base_url(); ?>assets/img/frame-10@2x.png" alt="Frame"><img
                            class="line-1-Ew4GGG line-1" data-id="40:1005"
                            src="<?= base_url(); ?>assets/img/line-1-3@2x.png" alt="Line 1">
                        <div class="search-Ew4GGG basesemi-bold" data-id="40:1006">Search</div>
                    </div> -->
                    <img class="line-4-WtiUa6 line-4" data-id="40:1007"
                        src="<?= base_url() ?>assets/img/line-4-2@2x.png" alt="Line 4"><img class="line-5-WtiUa6"
                        data-id="40:1008" src="<?= base_url() ?>assets/img/line-4-2@2x.png" alt="Line 5"><img
                        class="line-6-WtiUa6" data-id="40:1009" src="<?= base_url() ?>assets/img/line-4-2@2x.png"
                        alt="Line 6">
                </div>
            </div>
            <h1 class="store-your-luggage-hassle-free-with-us-MkxnZq website-text-sizeheading-1bold" data-id="40:1010">
                <span class="span0-mEY5HZ website-text-sizeheading-1bold">Store your </span><span
                    class="span1-mEY5HZ website-text-sizeheading-1bold">luggage hassle<br></span><span
                    class="span2-mEY5HZ website-text-sizeheading-1bold">free with us</span>
            </h1>
            <p class="welcome-to-our-lugga-MkxnZq website-text-sizeheading-5medium" data-id="40:1011">Welcome to our
                luggage
                storing platform. Enjoy hassle-free travel with our secure and convenient storage solutions.</p>
            <div class="group-1-MkxnZq" data-id="40:1012"><img class="frame-15-BksRZG frame-15" data-id="40:1013"
                    src="<?= base_url(); ?>assets/img/frame-15-1.png" alt="Frame 15">
                <div class="frame-15-4Xzfob frame-15" data-id="40:1017"><img class="rectangle-2-2UkmiH rectangle-2"
                        data-id="40:1018" src="<?= base_url() ?>assets/img/rectangle-2-3@2x.png" alt="Rectangle 2">
                </div><img class="rectangle-3-BksRZG" data-id="40:1019"
                    src="<?= base_url(); ?>assets/img/rectangle-3-1@2x.png" alt="Rectangle 3"><img
                    class="frame-16-BksRZG" data-id="40:1020" src="<?= base_url(); ?>assets/img/frame-16-1@2x.png"
                    alt="Frame 16">
            </div><img class="rectangle-1-MkxnZq" data-id="40:1023"
                src="<?= base_url() ?>assets/img/rectangle-1-1@2x.png" alt="Rectangle 1">
            <div class="review-MkxnZq review" data-id="40:1029">
                <div class="group-9240-vKJ3LB" data-id="40:1030"><img class="image-41-HEksZc" data-id="40:1031"
                        src="<?= base_url() ?>assets/img/image-41-1.png" alt="image 41"><img class="image-42-HEksZc"
                        data-id="40:1032" src="<?= base_url() ?>assets/img/image-42-1.png" alt="image 42"></div><img
                    class="image-46-vKJ3LB" data-id="40:1033" src="<?= base_url(); ?>assets/img/image-46-1.png"
                    alt="image 46">
                <div class="star-vKJ3LB" data-id="40:1034"><img class="frame-wIHPdK" data-id="40:1035"
                        src="<?= base_url() ?>assets/img/frame-11@2x.png" alt="Frame"><img class="frame-WHcPxv"
                        data-id="40:1037" src="<?= base_url() ?>assets/img/frame-12@2x.png" alt="Frame"><img
                        class="frame-xdmVyj" data-id="40:1039" src="<?= base_url() ?>assets/img/frame-13@2x.png"
                        alt="Frame"><img class="frame-FJevxa" data-id="40:1041"
                        src="<?= base_url() ?>assets/img/frame-14@2x.png" alt="Frame"><img class="frame-iygOY1"
                        data-id="40:1043" src="<?= base_url() ?>assets/img/frame-17@2x.png" alt="Frame"><img
                        class="line-4-wIHPdK line-4" data-id="40:1045" src="<?= base_url() ?>assets/img/line-4-3@2x.png"
                        alt="Line 4"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Link custom JavaScript -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(function () {
                $("#check-in-date").datepicker();
                $("#check-out-date").datepicker();
            });
        </script>
        <script>
            document.body.style.zoom = "78%";
        </script>
</body>

</html>