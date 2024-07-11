<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
06/06/2024 20:58:14 -->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1728, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <!-- <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js"></script>
    <script id="anima-overrides-script" src="overrides.js"></script> -->
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

        @import url("https://fonts.googleapis.com/css?family=Inter:700,400");

        /* The following line is used to measure usage of this code. You can remove it if you want. */
        @import url("https://px.animaapp.com/6652f9ecffa3c95e634bfe5e.6652f9ecffa3c95e634bfe61.wjSV3P8.hch.png");
        .custom-navbar {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #e0f7ff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    z-index: 1000;
    height: 80px;
}

.custom-navbar-left {
    display: flex;
    align-items: center;
}
.custom-navbar-logo{
    text-decoration: none;
    display: contents;
}

.custom-navbar-logo img {
    height: 24px;
    margin-right: 8px;
}
.custom-navbar-right{
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
    margin-top: 60px; /* Adjust according to the height of your navbar */
    padding: 20px;
}
        .pointer{
            cursor: pointer;
        }
        .screen textarea:focus,
        .screen input:focus {
            outline: none;
        }

        .screen * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        .screen div {
            -webkit-text-size-adjust: none;
        }

        .component-wrapper a {
            display: contents;
            pointer-events: auto;
            text-decoration: none;
        }

        .component-wrapper * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
            pointer-events: none;
        }

        .component-wrapper a *,
        .component-wrapper input,
        .component-wrapper video,
        .component-wrapper iframe {
            pointer-events: auto;
        }

        .component-wrapper.not-ready,
        .component-wrapper.not-ready * {
            visibility: hidden !important;
        }

        .screen a {
            display: contents;
            text-decoration: none;
        }

        .full-width-a {
            width: 100%;
        }

        .full-height-a {
            height: 100%;
        }

        .container-center-vertical {
            align-items: center;
            display: flex;
            flex-direction: row;
            height: 100%;
            pointer-events: none;
        }

        .container-center-vertical>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .container-center-horizontal {
            display: flex;
            flex-direction: row;
            justify-content: center;
            pointer-events: none;
            width: 100%;
        }

        .container-center-horizontal>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .auto-animated div {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated input {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated .container-center-vertical,
        .auto-animated .container-center-horizontal {
            opacity: 1;
        }

        .overlay-base {
            display: none;
            height: 100%;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .overlay-base.animate-appear {
            align-items: center;
            animation: reveal 0.3s ease-in-out 1 normal forwards;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
        }

        .overlay-base.animate-disappear {
            animation: reveal 0.3s ease-in-out 1 reverse forwards;
            display: block;
            opacity: 1;
            pointer-events: none;
        }

        .overlay-base.animate-disappear * {
            pointer-events: none;
        }

        @keyframes reveal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .animate-nodelay {
            animation-delay: 0s;
        }

        .align-self-flex-start {
            align-self: flex-start;
        }

        .align-self-flex-end {
            align-self: flex-end;
        }

        .align-self-flex-center {
            align-self: flex-center;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .valign-text-bottom {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        input:focus {
            outline: none;
        }

        .listeners-active,
        .listeners-active * {
            pointer-events: auto;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .smart-layers-pointers,
        .smart-layers-pointers * {
            pointer-events: auto;
            visibility: visible;
        }

        .listeners-active-click,
        .listeners-active-click * {
            cursor: pointer;
        }

        * {
            box-sizing: border-box;
        }

        :root {
            --black: #000000;
            --dodger-blue: #098fff;
            --manatee: #8f939f;
            --tuna: #2c3643;
            --white: #ffffff;

            --font-size-l: 20px;
            --font-size-m: 18px;
            --font-size-s: 16px;
            --font-size-xl: 24px;
            --font-size-xs: 14px;
            --font-size-xxl: 26px;
            --font-size-xxs: 13px;

            --font-family-inter: "Inter", Helvetica;
        }

        .inter-normal-tuna-16px {
            color: var(--tuna);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
        }

        .inter-bold-black-24px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 700;
        }

        .inter-normal-manatee-20px {
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
        }

        :root {}


        /* screen - macbook-pro-16u34-3 */

        .macbook-pro-16u34-3 {
            background-color: var(--white);
            height: 1722px;
            overflow: hidden;
            overflow-x: hidden;
            position: relative;
            width: 1728px;
        }

        .macbook-pro-16u34-3 .laggaes-bnb-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 246px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 30px;
            width: auto;
        }

        .macbook-pro-16u34-3 .frame-2-ut3qtM {
            align-items: flex-start;
            background-color: transparent;
            display: inline-flex;
            gap: 49px;
            left: 569px;
            position: absolute;
            top: 33px;
        }

        .macbook-pro-16u34-3 .all-cities-oOOxvs {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-3 .how-it-worls-oOOxvs {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-3 .pricing-oOOxvs {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-3 .about-oOOxvs {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-3 .become-a-partner-oOOxvs {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-3 .james-ut3qtM {
            background-color: transparent;
            color: var(--dodger-blue);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1320px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 32px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .laggaes-bn-b-your-home-ut3qtM {
            background-color: transparent;
            color: var(--dodger-blue);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1460px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 32px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .icons8-male-user-60-2-4-ut3qtM {
            background-color: transparent;
            height: 17px;
            left: 1297px;
            object-fit: cover;
            position: absolute;
            top: 33px;
            width: 19px;
        }

        .macbook-pro-16u34-3 .line-9-ut3qtM {
            background-color: transparent;
            height: 13px;
            left: 0px;
            position: absolute;
            top: 78px;
            width: 1728px;
        }

        .macbook-pro-16u34-3 .title-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: 50px;
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 542px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 184px;
            width: auto;
        }

        .macbook-pro-16u34-3 .icons8-bag-100-2-4-ut3qtM {
            background-color: transparent;
            height: 22px;
            left: 542px;
            object-fit: cover;
            position: absolute;
            top: 252px;
            width: 20px;
        }

        .macbook-pro-16u34-3 .member-since-2022-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 571px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 250px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .hosted-by-ut3qtM {
            background-color: transparent;
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 547px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 143px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .about-chris-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 547px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 421px;
            width: auto;
        }

        .macbook-pro-16u34-3 .in-love-with-this-be-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 547px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 478px;
            width: 944px;
        }

        .macbook-pro-16u34-3 .line-33-ut3qtM {
            background-color: transparent;
            height: 2px;
            left: 45px;
            position: absolute;
            top: 1612px;
            width: 1579px;
        }

        .macbook-pro-16u34-3 .x2024-laggaesbnb-inc-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 166px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .terms-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 350px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x-ut3qtM {
            left: 340px;
        }

        .macbook-pro-16u34-3 .sitemap-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 412px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x-WaxCkN {
            left: 402px;
        }

        .macbook-pro-16u34-3 .privacy-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 489px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x-BczLke {
            left: 479px;
        }

        .macbook-pro-16u34-3 .your-privacy-choices-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 560px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .english-us-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 1271px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x-uqS5jh {
            left: 550px;
        }

        .macbook-pro-16u34-3 .rectangle-15-ut3qtM {
            background-color: var(--white);
            border: 1px solid;
            border-color: #c6efff;
            border-radius: 15px;
            height: 48px;
            left: 1384px;
            position: absolute;
            top: 1639px;
            width: 95px;
        }

        .macbook-pro-16u34-3 .usd-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1407px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1652px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .icons8-facebook-60-1-ut3qtM {
            background-color: transparent;
            height: 23px;
            left: 1498px;
            object-fit: cover;
            position: absolute;
            top: 1651px;
            width: 25px;
        }

        .macbook-pro-16u34-3 .icons8-facebook-60-2-ut3qtM {
            background-color: transparent;
            height: 23px;
            left: 1528px;
            object-fit: cover;
            position: absolute;
            top: 1651px;
            width: 25px;
        }

        .macbook-pro-16u34-3 .icons8-facebook-60-3-ut3qtM {
            background-color: transparent;
            height: 23px;
            left: 1558px;
            object-fit: cover;
            position: absolute;
            top: 1651px;
            width: 25px;
        }

        .macbook-pro-16u34-3 .rectangle-17-ut3qtM {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--manatee);
            border-radius: 5px;
            height: 28px;
            left: 1654px;
            position: absolute;
            top: 1663px;
            width: 28px;
        }

        .macbook-pro-16u34-3 .x3-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1664px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1667px;
            width: auto;
        }

        .macbook-pro-16u34-3 .rectangle-26-ut3qtM {
            background-color: var(--white);
            border: 2px solid;
            border-color: #e9eaec;
            border-radius: 40px;
            height: 78px;
            left: 542px;
            position: absolute;
            top: 309px;
            width: 249px;
        }

        .macbook-pro-16u34-3 .ellipse-15-ut3qtM {
            background-color: #2b816d;
            border-radius: 30px;
            height: 60px;
            left: 551px;
            position: absolute;
            top: 318px;
            width: 60px;
        }

        .macbook-pro-16u34-3 .years-hosting-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 627px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 324px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x8-ut3qtM {
            background-color: transparent;
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 627px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 351px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .icons8-star-filled-96-3-ut3qtM {
            background-color: transparent;
            height: 31px;
            left: 566px;
            object-fit: cover;
            position: absolute;
            top: 332px;
            width: 31px;
        }

        .macbook-pro-16u34-3 .evans-confirmed-information-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 547px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 673px;
            width: auto;
        }

        .macbook-pro-16u34-3 .identity-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 589px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 775px;
            width: 91px;
        }

        .macbook-pro-16u34-3 .confirmed-personal-i-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 547px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 711px;
            width: 423px;
        }

        .macbook-pro-16u34-3 .top-view-female-s-tr-ut3qtM {
            top: 1028px;
        }

        .macbook-pro-16u34-3 .evans-listing-ut3qtM {
            color: #99a0ab;
            font-size: var(--font-size-xxs);
            left: 445px;
            top: 1027px;
        }

        .macbook-pro-16u34-3 .geodesic-domes-in-manali-hamta-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1054px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .check-out-ut3qtM {
            top: 1192px;
        }

        .macbook-pro-16u34-3 .discover-the-gorgeou-ut3qtM {
            background-color: transparent;
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1095px;
            width: 1046px;
        }

        .macbook-pro-16u34-3 .icons8-star-60-2-2-ut3qtM {
            background-color: transparent;
            height: 13px;
            left: 151px;
            object-fit: cover;
            position: absolute;
            top: 1228px;
            width: 14px;
        }

        .macbook-pro-16u34-3 .x492-39-ut3qtM {
            top: 1225px;
        }

        .macbook-pro-16u34-3 .top-view-female-s-tr-WaxCkN {
            top: 1310px;
        }

        .macbook-pro-16u34-3 .evans-listing-WaxCkN {
            color: #99a0ab;
            font-size: var(--font-size-xxs);
            left: 445px;
            top: 1309px;
        }

        .macbook-pro-16u34-3 .boutique-hotel-ut3qtM {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1336px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .check-out-WaxCkN {
            top: 1474px;
        }

        .macbook-pro-16u34-3 .hobbit-house-and-geo-ut3qtM {
            background-color: transparent;
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1377px;
            width: 1046px;
        }

        .macbook-pro-16u34-3 .icons8-star-60-2-3-ut3qtM {
            background-color: transparent;
            height: 13px;
            left: 151px;
            object-fit: cover;
            position: absolute;
            top: 1510px;
            width: 14px;
        }

        .macbook-pro-16u34-3 .x492-39-WaxCkN {
            top: 1507px;
        }

        .macbook-pro-16u34-3 .evans-listing-BczLke {
            color: var(--black);
            font-size: 40px;
            left: 144px;
            top: 948px;
            white-space: nowrap;
        }

        .macbook-pro-16u34-3 .line-39-ut3qtM {
            background-color: transparent;
            height: 2px;
            left: 263px;
            position: absolute;
            top: 926px;
            width: 1201px;
        }

        .macbook-pro-16u34-3 .line-40-ut3qtM {
            background-color: transparent;
            height: 2px;
            left: 547px;
            position: absolute;
            top: 645px;
            width: 1007px;
        }

        .macbook-pro-16u34-3 .mask-group-ut3qtM {
            background-color: transparent;
            height: 409px;
            left: 144px;
            position: absolute;
            top: 143px;
            width: 338px;
        }

        .macbook-pro-16u34-3 .icons8-male-user-100-1-ut3qtM {
            background-color: transparent;
            height: 27px;
            left: 548px;
            object-fit: cover;
            position: absolute;
            top: 777px;
            width: 26px;
        }

        .macbook-pro-16u34-3 .email-address-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 589px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 824px;
            width: 189px;
        }

        .macbook-pro-16u34-3 .icons8-male-user-100-2-ut3qtM {
            background-color: transparent;
            height: 27px;
            left: 548px;
            object-fit: cover;
            position: absolute;
            top: 826px;
            width: 26px;
        }

        .macbook-pro-16u34-3 .phone-number-ut3qtM {
            background-color: transparent;
            height: auto;
            left: 589px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 873px;
            width: 189px;
        }

        .macbook-pro-16u34-3 .icons8-male-user-100-3-ut3qtM {
            background-color: transparent;
            height: 27px;
            left: 548px;
            object-fit: cover;
            position: absolute;
            top: 875px;
            width: 26px;
        }

        .macbook-pro-16u34-3 .icons8-approval-100-1-ut3qtM {
            background-color: transparent;
            height: 29px;
            left: 902px;
            object-fit: cover;
            position: absolute;
            top: 776px;
            width: 29px;
        }

        .macbook-pro-16u34-3 .icons8-approval-100-2-ut3qtM {
            background-color: transparent;
            height: 29px;
            left: 902px;
            object-fit: cover;
            position: absolute;
            top: 825px;
            width: 29px;
        }

        .macbook-pro-16u34-3 .icons8-approval-100-3-ut3qtM {
            background-color: transparent;
            height: 29px;
            left: 902px;
            object-fit: cover;
            position: absolute;
            top: 874px;
            width: 29px;
        }

        .macbook-pro-16u34-3 .check-out {
            background-color: transparent;
            color: var(--dodger-blue);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxs);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 445px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: auto;
        }

        .macbook-pro-16u34-3 .evans-listing {
            background-color: transparent;
            font-family: var(--font-family-inter);
            font-style: normal;
            font-weight: 700;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: auto;
        }

        .macbook-pro-16u34-3 .top-view-female-s-tr {
            background-color: transparent;
            height: 222px;
            left: 144px;
            object-fit: cover;
            position: absolute;
            width: 272px;
        }

        .macbook-pro-16u34-3 .x {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1648px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-3 .x492-39 {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 169px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: auto;
        }


        .custom-listing {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: absolute;
            top: 125%;
            width: 80%;
        }

        .custom-listing-item {
            display: flex;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-listing-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .custom-listing-content {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .custom-listing-content h2 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
        }

        .custom-listing-content p {
            margin: 0 0 15px;
            font-size: 14px;
            color: #666;
        }

        .custom-checkout-link {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .custom-checkout-link:hover {
            text-decoration: underline;
        }

        .custom-rating {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #333;
        }

        .custom-rating span {
            font-weight: bold;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 0;background: #ffffff;"><input type="hidden" id="base_url" name="base_url"
        value="<?=base_url()?>">
        <div class="custom-navbar">
        <div class="custom-navbar-left">
            <a href="<?=base_url()?>" class="custom-navbar-logo">
                <img src="<?= base_url() ?>assets/img/vector-1@2x.png" alt="Logo">
                Laggages bnb
            </a>
        </div>
        <div class="custom-navbar-center">
            <a href="#">All Cities</a>
            <a href="#">How it works</a>
            <a href="#">Pricing</a>
            <a href="#">About</a>
            <a href="<?=base_url()?>Login">Become a partner</a>
        </div>
        <div class="custom-navbar-right">
            <a href="#" class="custom-navbar-login">Login</a>
            <a href="#" class="custom-navbar-signup">Sign up</a>
        </div>
    </div>
    <div class="container-center-horizontal">
        <div class="macbook-pro-16u34-3 screen " data-id="30:1312">
            <img class="line-9-ut3qtM" data-id="30:1323"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/line-9.svg"
                alt="Line 9">
            <h1 class="title-ut3qtM" data-id="30:1324"><?= $results['user'][0]['full_name'] ?></h1><img
                class="icons8-bag-100-2-4-ut3qtM" data-id="30:1325"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-bag-100--2--4.png"
                alt="icons8-bag-100 (2) 4">
            <div class="member-since-2022-ut3qtM inter-normal-manatee-20px" data-id="30:1326">Member Since
                <?= date('Y', strtotime($results['user'][0]['established_date'])) ?>
            </div>
            <div class="hosted-by-ut3qtM" data-id="30:1327">Hosted by</div>
            <div class="about-chris-ut3qtM inter-bold-black-24px" data-id="30:1328">About
                <?= $results['user'][0]['full_name'] ?>
            </div>
            <p class="in-love-with-this-be-ut3qtM inter-normal-manatee-20px" data-id="30:1329">
                <?= $results['user'][0]['about'] ?>
            </p><img class="line-33-ut3qtM" data-id="30:1330"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-45.svg"
                alt="Line 33">
            <div class="x2024-laggaesbnb-inc-ut3qtM inter-normal-tuna-16px" data-id="30:1331">2024 Laggaesbnb, Inc</div>
            <div class="terms-ut3qtM inter-normal-tuna-16px" data-id="30:1332">Terms</div>
            <div class="x-ut3qtM x inter-normal-tuna-16px" data-id="30:1333">.</div>
            <div class="sitemap-ut3qtM inter-normal-tuna-16px" data-id="30:1334">Sitemap</div>
            <div class="x-WaxCkN x inter-normal-tuna-16px" data-id="30:1335">.</div>
            <div class="privacy-ut3qtM inter-normal-tuna-16px" data-id="30:1336">Privacy</div>
            <div class="x-BczLke x inter-normal-tuna-16px" data-id="30:1337">.</div>
            <div class="your-privacy-choices-ut3qtM inter-normal-tuna-16px" data-id="30:1338">Your Privacy Choices</div>
            <div class="english-us-ut3qtM inter-normal-tuna-16px" data-id="30:1339">English (US)</div>
            <div class="x-uqS5jh x inter-normal-tuna-16px" data-id="30:1340">.</div>
            <div class="rectangle-15-ut3qtM" data-id="30:1343"></div>
            <div class="usd-ut3qtM" data-id="30:1344">$ USD</div><img class="icons8-facebook-60-1-ut3qtM"
                data-id="30:1345"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-1.png"
                alt="icons8-facebook-60 1"><img class="icons8-facebook-60-2-ut3qtM" data-id="30:1346"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-2.png"
                alt="icons8-facebook-60 2"><img class="icons8-facebook-60-3-ut3qtM" data-id="30:1347"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-3.png"
                alt="icons8-facebook-60 3">
            <div class="rectangle-17-ut3qtM" data-id="30:1348"></div>
            <div class="x3-ut3qtM" data-id="30:1349">3</div>
            <div class="rectangle-26-ut3qtM" data-id="30:1350"></div>
            <div class="ellipse-15-ut3qtM" data-id="30:1351"></div>
            <div class="years-hosting-ut3qtM" data-id="30:1352">Years Hosting</div>
            <div class="x8-ut3qtM" data-id="30:1353">8</div><img class="icons8-star-filled-96-3-ut3qtM"
                data-id="30:1354"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-star-filled-96-3.png"
                alt="icons8-star-filled-96 3">
            <div class="evans-confirmed-information-ut3qtM inter-bold-black-24px" data-id="30:1355">
                <?= $results['user'][0]['full_name'] ?>'s' Confirmed
                Information
            </div>
            <div class="identity-ut3qtM inter-bold-black-24px" data-id="30:1356">Identity</div>
            <p class="confirmed-personal-i-ut3qtM inter-normal-manatee-20px" data-id="30:1357">Confirmed personal
                information of the Host</p>
            <!-- <img class="top-view-female-s-tr-ut3qtM top-view-female-s-tr"
                data-id="30:1358"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/top-view-female-s-travelling-bag-with-camera-brush-map-1@2x.png"
                alt="top-view-female-s-travelling-bag-with-camera-brush-map 1">
            <div class="evans-listing-ut3qtM evans-listing" data-id="30:1359"><?= $results['user'][0]['full_name'] ?> Listing</div>
            <p class="geodesic-domes-in-manali-hamta-ut3qtM" data-id="30:1360">Geodesic Domes in Manali Hamta.</p>
            <div class="check-out-ut3qtM check-out" data-id="30:1361">Check out</div>
            <p class="discover-the-gorgeou-ut3qtM" data-id="30:1362">Discover the gorgeous landscape that surrounds this
                place to stay.We welcome you to our premiere geodesic domes and hobbit house at Hamta, these domes and
                hobbit are another sustainable luxury stay started by the founder of Manali Igloo Stay. The first Igloo
                stay of India.</p><img class="icons8-star-60-2-2-ut3qtM" data-id="30:1363"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-star-60--2--2.png"
                alt="icons8-star-60 (2) 2">
            <div class="x492-39-ut3qtM x492-39" data-id="30:1364">4.92 (39)</div><img
                class="top-view-female-s-tr-WaxCkN top-view-female-s-tr" data-id="30:1365"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/top-view-female-s-travelling-bag-with-camera-brush-map-2@2x.png"
                alt="top-view-female-s-travelling-bag-with-camera-brush-map 2">
            <div class="evans-listing-WaxCkN evans-listing" data-id="30:1366"><?= $results['user'][0]['full_name'] ?> Listing</div>
            <div class="boutique-hotel-ut3qtM" data-id="30:1367">Boutique hotel</div>
            <div class="check-out-WaxCkN check-out" data-id="30:1368">Check out</div>
            <p class="hobbit-house-and-geo-ut3qtM" data-id="30:1369">Hobbit house and geodesic domes await you on the
                top of mountain called Hamta, just 12km from Manali. Enjoy an Eagle&#39;s eye view of the valley while
                enjoying delicious home made local cuisine.This Earthern Hobbit House is nestled on the top of Hamta
                ridge amidst apple orchards,....</p><img class="icons8-star-60-2-3-ut3qtM" data-id="30:1370"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-star-60--2--2.png"
                alt="icons8-star-60 (2) 3">
            <div class="x492-39-WaxCkN x492-39" data-id="30:1371">4.92 (39)</div>-->
            <div class="evans-listing-BczLke evans-listing" data-id="30:1372"><?= $results['user'][0]['full_name'] ?>'s Listing</div><img
                class="line-39-ut3qtM" data-id="30:1373"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/line-39.svg"
                alt="Line 39"><img class="line-40-ut3qtM" data-id="30:1374"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/line-40.svg"
                alt="Line 40"> 
                <img class="mask-group-ut3qtM" data-id="30:1375"
                src="<?= base_url() ?>uploads/hub_images/<?= $results['user'][0]['profile_pic'] ?>"
                alt="Mask group">
            <img class="icons8-male-user-100-1-ut3qtM" data-id="30:1380"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-male-user-100-1.png"
                alt="icons8-male-user-100 1">
            <div class="email-address-ut3qtM inter-bold-black-24px" data-id="30:1381">Email Address</div><img
                class="icons8-male-user-100-2-ut3qtM" data-id="30:1382"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-male-user-100-2.png"
                alt="icons8-male-user-100 2">
            <div class="phone-number-ut3qtM inter-bold-black-24px" data-id="30:1383">Phone Number</div><img
                class="icons8-male-user-100-3-ut3qtM" data-id="30:1384"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-male-user-100-3.png"
                alt="icons8-male-user-100 3"><img class="icons8-approval-100-1-ut3qtM" data-id="30:1385"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-approval-100-1.png"
                alt="icons8-approval-100 1"><img class="icons8-approval-100-2-ut3qtM" data-id="30:1386"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-approval-100-1.png"
                alt="icons8-approval-100 2"><img class="icons8-approval-100-3-ut3qtM" data-id="30:1387"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/666222e376d407ed7625856b/img/icons8-approval-100-1.png"
                alt="icons8-approval-100 3">
        </div>
        <div class="custom-listing">
            <?php
                if(count($results['myhub']) > 0)
                {
                    $i=0;
                    foreach($results['myhub'] as $row){
                        $i++;
                        if($i == 4)
                        break
            ?>
            <div class="custom-listing-item pointer" onclick="redirectMe('Hub/Details/<?= encodeID($row['id']) ?>')">
                <img src="<?=base_url()?>uploads/hub_images/<?=$row['hub_image']?>" alt="Geodesic Domes" class="custom-listing-image">
                <div class="custom-listing-content">
                    <h2><?=$row['hubname']?></h2>
                    <p><?=$row['description']?></p>
                    <a href="#" class="custom-checkout-link">Check out</a>
                    <div class="custom-rating">
                        <span>4.92</span> (39)
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>

    </div>
    <!-- <script src="launchpad-js/launchpad-banner.js" async></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script>

        document.body.style.zoom = "78%";
    </script>
</body>

</html>