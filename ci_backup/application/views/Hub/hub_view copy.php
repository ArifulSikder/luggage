<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
06/06/2024 20:52:36 -->

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
            --black-haze: #f6f6f6;
            --dodger-blue: #098fff;
            --manatee: #8f939f;
            --onahau: #c6efff;
            --tuna: #2c3643;
            --white: #ffffff;

            --font-size-l: 24px;
            --font-size-m: 20px;
            --font-size-s: 16px;
            --font-size-xl: 34px;
            --font-size-xs: 14px;
            --font-size-xxs: 12px;
            --font-size-xxxs: 10px;

            --font-family-inter: "Inter", Helvetica;
        }

        .inter-normal-tuna-16px {
            color: var(--tuna);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
        }

        .inter-normal-manatee-14px {
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
        }

        .inter-normal-black-20px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
        }

        .inter-bold-black-20px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 700;
        }

        .inter-normal-manatee-20px {
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
        }

        .inter-normal-black-14px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
        }

        .inter-bold-black-14px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 700;
        }

        .inter-bold-black-10px {
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxxs);
            font-style: normal;
            font-weight: 700;
        }

        .inter-normal-manatee-12px {
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xxs);
            font-style: normal;
            font-weight: 400;
        }

        :root {}


        /* screen - macbook-pro-16u34-2 */

        .macbook-pro-16u34-2 {
            background-color: var(--white);
            height: auto;
            /* overflow: hidden; */
            /* overflow-x: hidden; */
            position: absolute;
            width: 100%;
        }

        .macbook-pro-16u34-2 .laggaes-bnb-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: 18px;
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

        .macbook-pro-16u34-2 .frame-2-Zx15ZL {
            align-items: flex-start;
            background-color: transparent;
            display: inline-flex;
            gap: 49px;
            left: 569px;
            position: absolute;
            top: 33px;
        }

        .macbook-pro-16u34-2 .all-cities-46q7Qx {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-2 .how-it-worls-46q7Qx {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-2 .pricing-46q7Qx {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-2 .about-46q7Qx {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-2 .become-a-partner-46q7Qx {
            background-color: transparent;
            letter-spacing: 0.00px;
            line-height: normal;
            margin-top: -1.00px;
            position: relative;
            text-align: left;
            white-space: nowrap;
            width: fit-content;
        }

        .macbook-pro-16u34-2 .james-Zx15ZL {
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

        .macbook-pro-16u34-2 .laggaes-bn-b-your-home-Zx15ZL {
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

        .macbook-pro-16u34-2 .icons8-male-user-60-2-4-Zx15ZL {
            background-color: transparent;
            height: 17px;
            left: 1297px;
            object-fit: cover;
            position: absolute;
            top: 33px;
            width: 19px;
        }

        .macbook-pro-16u34-2 .line-9-Zx15ZL {
            background-color: transparent;
            height: 13px;
            left: 0px;
            position: absolute;
            top: 78px;
            width: 1728px;
        }

        .macbook-pro-16u34-2 .rectangle-9-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            box-shadow: 0px 4px 4px #0000001a;
            height: 93px;
            left: 304px;
            position: absolute;
            top: 114px;
            width: 1120px;
        }

        .macbook-pro-16u34-2 .rectangle-10-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            box-shadow: 0px 4px 4px #0000001a;
            height: 61px;
            left: 1048px;
            position: absolute;
            top: 237px;
            width: 139px;
        }

        .macbook-pro-16u34-2 .rectangle-11-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            box-shadow: 0px 4px 4px #0000001a;
            height: 61px;
            left: 530px;
            position: absolute;
            top: 237px;
            width: 488px;
        }

        .macbook-pro-16u34-2 .search-Zx15ZL {
            left: 342px;
            top: 136px;
            white-space: nowrap;
        }

        .macbook-pro-16u34-2 .enter-your-location-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 342px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 167px;
            width: auto;
        }

        .macbook-pro-16u34-2 .vector-6-Zx15ZL {
            background-color: transparent;
            height: 9px;
            left: 510px;
            position: absolute;
            top: 139px;
            width: 17px;
        }

        .macbook-pro-16u34-2 .vector-7-Zx15ZL {
            background-color: transparent;
            height: 9px;
            left: 1150px;
            position: absolute;
            top: 139px;
            width: 17px;
        }

        .macbook-pro-16u34-2 .line-8-Zx15ZL {
            background-color: transparent;
            height: 56px;
            left: 566px;
            position: absolute;
            top: 133px;
            width: 2px;
        }

        .macbook-pro-16u34-2 .group-7-Zx15ZL {
            background-color: transparent;
            height: 47px;
            left: 616px;
            position: absolute;
            top: 138px;
            width: 90px;
        }

        .macbook-pro-16u34-2 .check-in-xmFjVC {
            left: 0px;
            top: 0px;
        }

        .macbook-pro-16u34-2 .line-30-Zx15ZL {
            height: 56px;
            left: 752px;
            top: 133px;
        }

        .macbook-pro-16u34-2 .group-8-Zx15ZL {
            background-color: transparent;
            height: 47px;
            left: 802px;
            position: absolute;
            top: 138px;
            width: 104px;
        }

        .macbook-pro-16u34-2 .check-out-xiEde6 {
            left: 0px;
            top: 0px;
        }

        .macbook-pro-16u34-2 .line-31-Zx15ZL {
            height: 56px;
            left: 952px;
            top: 133px;
        }

        .macbook-pro-16u34-2 .group-9-Zx15ZL {
            background-color: transparent;
            height: 47px;
            left: 1002px;
            position: absolute;
            top: 138px;
            width: 122px;
        }

        .macbook-pro-16u34-2 .add-bags-zzNqOr {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .add-bag-numbers-zzNqOr {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 30px;
            width: auto;
        }

        .macbook-pro-16u34-2 .rectangle-12-Zx15ZL {
            background-color: var(--dodger-blue);
            border-radius: 5px;
            height: 59px;
            left: 1206px;
            position: absolute;
            top: 131px;
            width: 144px;
        }

        .macbook-pro-16u34-2 .search-T6wYZs {
            color: var(--white);
            font-family: var(--font-family-inter);
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            left: 1262px;
            top: 148px;
        }

        .macbook-pro-16u34-2 .group-10-Zx15ZL {
            background-color: transparent;
            height: 19px;
            left: 1227px;
            position: absolute;
            top: 149px;
            width: 18px;
        }

        .macbook-pro-16u34-2 .ellipse-1-TOikfF {
            background-color: var(--dodger-blue);
            border: 1px solid;
            border-color: var(--white);
            border-radius: 7.5px;
            height: 15px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 15px;
        }

        .macbook-pro-16u34-2 .line-5-TOikfF {
            background-color: transparent;
            height: 7px;
            left: 12px;
            object-fit: cover;
            position: absolute;
            top: 12px;
            width: 7px;
        }

        .macbook-pro-16u34-2 .filters-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1104px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 254px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .icons8-filter-96-2-Zx15ZL {
            background-color: transparent;
            height: 22px;
            left: 1073px;
            object-fit: cover;
            position: absolute;
            top: 257px;
            width: 21px;
        }

        .macbook-pro-16u34-2 .rectangle-13-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            box-shadow: 0px 4px 4px #0000001a;
            height: 61px;
            left: 1439px;
            position: absolute;
            top: 114px;
            width: 130px;
        }

        .macbook-pro-16u34-2 .grid-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1465px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 131px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .icons8-grid-100-1-Zx15ZL {
            background-color: transparent;
            height: 28px;
            left: 1515px;
            object-fit: cover;
            position: absolute;
            top: 130px;
            width: 29px;
        }

        .macbook-pro-16u34-2 .rectangle-16-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            box-shadow: 0px 4px 4px #0000001a;
            height: 61px;
            left: 1584px;
            position: absolute;
            top: 114px;
            width: 130px;
        }

        .macbook-pro-16u34-2 .list-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1612px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 131px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .icons8-grid-100-2-Zx15ZL {
            background-color: transparent;
            height: 28px;
            left: 1656px;
            object-fit: cover;
            position: absolute;
            top: 130px;
            width: 29px;
        }

        .macbook-pro-16u34-2 .rectangle-14-Zx15ZL {
            background-color: var(--dodger-blue);
            border-radius: 10px;
            height: 51px;
            left: 535px;
            position: absolute;
            top: 242px;
            width: 91px;
        }

        .macbook-pro-16u34-2 .hourly-Zx15ZL {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 551px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 255px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-31-T6wYZs {
            height: 28px;
            left: 639px;
            top: 254px;
        }

        .macbook-pro-16u34-2 .daily-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 659px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 255px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-30-T6wYZs {
            height: 28px;
            left: 726px;
            top: 254px;
        }

        .macbook-pro-16u34-2 .weekly-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 746px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 255px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-12-Zx15ZL {
            background-color: transparent;
            height: 28px;
            left: 835px;
            position: absolute;
            top: 254px;
            width: 2px;
        }

        .macbook-pro-16u34-2 .line-32-Zx15ZL {
            background-color: transparent;
            height: 28px;
            left: 952px;
            position: absolute;
            top: 254px;
            width: 2px;
        }

        .macbook-pro-16u34-2 .monthly-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 855px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 255px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .all-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 972px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 255px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .title-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 192px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 120px;
            width: auto;
        }

        .macbook-pro-16u34-2 .x482-379-reviews-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 232px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 170px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .icons8-star-96-1-1-Zx15ZL {
            background-color: transparent;
            height: 21px;
            left: 193px;
            object-fit: cover;
            position: absolute;
            top: 170px;
            width: 24px;
        }

        .macbook-pro-16u34-2 .line-36-Zx15ZL {
            background-color: transparent;
            height: 1px;
            left: 284px;
            object-fit: cover;
            position: absolute;
            top: 192px;
            width: 126px;
        }

        .macbook-pro-16u34-2 .line-33-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 193px;
            position: absolute;
            top: 1770px;
            width: 856px;
        }

        .macbook-pro-16u34-2 .line-43-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 193px;
            position: absolute;
            top: 1225px;
            width: 856px;
        }

        .macbook-pro-16u34-2 .x2024-laggaesbnb-inc-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 167px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .terms-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 351px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x-Zx15ZL {
            left: 341px;
        }

        .macbook-pro-16u34-2 .sitemap-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 413px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x-T6wYZs {
            left: 403px;
        }

        .macbook-pro-16u34-2 .privacy-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 490px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x-N4F8C0 {
            left: 480px;
        }

        .macbook-pro-16u34-2 .your-privacy-choices-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 561px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .english-us-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1272px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2199px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x-LL2XcT {
            left: 551px;
        }

        .macbook-pro-16u34-2 .ellipse-2-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black);
            border-radius: 11px;
            height: 22px;
            left: 138px;
            position: absolute;
            top: 2197px;
            width: 22px;
        }

        .macbook-pro-16u34-2 .c-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 143px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2198px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .rectangle-15-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--onahau);
            border-radius: 15px;
            height: 48px;
            left: 1385px;
            position: absolute;
            top: 2186px;
            width: 95px;
        }

        .macbook-pro-16u34-2 .usd-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1408px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2199px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .icons8-facebook-60-1-Zx15ZL {
            background-color: transparent;
            height: 23px;
            left: 1499px;
            object-fit: cover;
            position: absolute;
            top: 2198px;
            width: 25px;
        }

        .macbook-pro-16u34-2 .icons8-facebook-60-2-Zx15ZL {
            background-color: transparent;
            height: 23px;
            left: 1529px;
            object-fit: cover;
            position: absolute;
            top: 2198px;
            width: 25px;
        }

        .macbook-pro-16u34-2 .icons8-facebook-60-3-Zx15ZL {
            background-color: transparent;
            height: 23px;
            left: 1559px;
            object-fit: cover;
            position: absolute;
            top: 2198px;
            width: 25px;
        }

        .macbook-pro-16u34-2 .rectangle-17-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--manatee);
            border-radius: 5px;
            height: 28px;
            left: 1655px;
            position: absolute;
            top: 2210px;
            width: 28px;
        }

        .macbook-pro-16u34-2 .x2-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1665px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2214px;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-38-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 193px;
            position: absolute;
            top: 1600px;
            width: 856px;
        }

        .macbook-pro-16u34-2 .line-39-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 226px;
            position: absolute;
            top: 1246px;
            width: 823px;
        }

        .macbook-pro-16u34-2 .airbnb-host-welcoming-guests-1-Zx15ZL {
            background-color: transparent;
            height: 763px;
            left: 193px;
            object-fit: cover;
            position: absolute;
            top: 245px;
            width: 1344px;
        }

        .macbook-pro-16u34-2 .about-this-place-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 193px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1050px;
            width: auto;
        }

        .macbook-pro-16u34-2 .welcome-to-the-grott-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 193px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1100px;
            width: 859px;
        }

        .macbook-pro-16u34-2 .span0-s5z2Bj {}

        .macbook-pro-16u34-2 .span1-s5z2Bj {
            color: var(--manatee);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 700;
        }

        .macbook-pro-16u34-2 .we-know-that-carryin-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 252px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1300px;
            width: 817px;
        }

        .macbook-pro-16u34-2 .guide-help-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 193px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1250px;
            width: auto;
        }

        .macbook-pro-16u34-2 .we-will-help-you-in-Zx15ZL {
            top: 1683px;
        }

        .macbook-pro-16u34-2 .we-will-help-you-in-T6wYZs {
            top: 1756px;
        }

        .macbook-pro-16u34-2 .rectangle-22-Zx15ZL {
            background-color: var(--white);
            border: 2px solid;
            border-color: var(--black-haze);
            border-radius: 20px;
            box-shadow: 0px 4px 15px #00000026;
            height: 736px;
            left: 1122px;
            position: absolute;
            top: 1050px;
            width: 415px;
        }

        .macbook-pro-16u34-2 .rectangle-18-Zx15ZL {
            background-color: var(--white);
            border: 2px solid;
            border-color: var(--black-haze);
            border-radius: 10px;
            height: 58px;
            left: 1169px;
            position: absolute;
            top: 1150px;
            width: 320px;
        }

        .macbook-pro-16u34-2 .check-in-Zx15ZL {
            left: 1184px;
            top: 1160px;
        }

        .macbook-pro-16u34-2 .x05302024-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1184px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1180px;
            width: auto;
        }

        .macbook-pro-16u34-2 .rectangle-19-Zx15ZL {
            background-color: var(--white);
            border: 2px solid;
            border-color: var(--black-haze);
            border-radius: 10px;
            height: 58px;
            left: 1169px;
            position: absolute;
            top: 1225px;
            width: 320px;
        }

        .macbook-pro-16u34-2 .rectangle-20-Zx15ZL {
            background-color: var(--white);
            border: 2px solid;
            border-color: var(--black-haze);
            border-radius: 10px;
            height: 266px;
            left: 1169px;
            position: absolute;
            top: 1300px;
            width: 320px;
        }

        .macbook-pro-16u34-2 .check-out-Zx15ZL {
            left: 1184px;
            top: 1235px;
        }

        .macbook-pro-16u34-2 .x05312024-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1184px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1255px;
            width: auto;
        }

        .macbook-pro-16u34-2 .luggages-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1184px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1312px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x4-luggages-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1184px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1330px;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-40-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 1170px;
            position: absolute;
            top: 1360px;
            width: 319px;
        }

        .macbook-pro-16u34-2 .group-15-Zx15ZL {
            background-color: transparent;
            height: 36px;
            left: 1229px;
            position: absolute;
            top: 1380px;
            width: 90px;
        }

        .macbook-pro-16u34-2 .small-ljS3Wr {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            width: auto;
        }

        .macbook-pro-16u34-2 .x18-22-inches-ljS3Wr {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 19px;
            width: auto;
        }

        .macbook-pro-16u34-2 .group-16-Zx15ZL {
            background-color: transparent;
            height: 36px;
            left: 1229px;
            position: absolute;
            top: 1425px;
            width: 92px;
        }

        .macbook-pro-16u34-2 .x24-26-inches-0iJxx4 {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 19px;
            width: auto;
        }

        .macbook-pro-16u34-2 .medium-0iJxx4 {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            width: auto;
        }

        .macbook-pro-16u34-2 .group-17-Zx15ZL {
            background-color: transparent;
            height: 36px;
            left: 1229px;
            position: absolute;
            top: 1470px;
            width: 92px;
        }

        .macbook-pro-16u34-2 .large-lDTuKo {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            width: auto;
        }

        .macbook-pro-16u34-2 .x28-32-inches-lDTuKo {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 19px;
            width: auto;
        }

        .macbook-pro-16u34-2 .group-18-Zx15ZL {
            background-color: transparent;
            height: 36px;
            left: 1229px;
            position: absolute;
            top: 1515px;
            width: 93px;
        }

        .macbook-pro-16u34-2 .extra-large-qjSiRg {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            width: auto;
        }

        .macbook-pro-16u34-2 .x30-34-inches-qjSiRg {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 19px;
            width: auto;
        }

        .macbook-pro-16u34-2 .x1-Zx15ZL {
            top: 1382px;
        }

        .macbook-pro-16u34-2 .ellipse-12-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1372px;
            position: absolute;
            top: 1375px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-minus-96-1-6-Zx15ZL {
            background-color: transparent;
            height: 5px;
            left: 1380px;
            object-fit: cover;
            position: absolute;
            top: 1390px;
            width: 14px;
        }

        .macbook-pro-16u34-2 .ellipse-13-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1444px;
            position: absolute;
            top: 1375px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-plus-96-1-5-Zx15ZL {
            background-color: transparent;
            height: 12px;
            left: 1453px;
            object-fit: cover;
            position: absolute;
            top: 1547px;
            width: 12px;
        }

        .macbook-pro-16u34-2 .x1-T6wYZs {
            top: 1590px;
        }

        .macbook-pro-16u34-2 .ellipse-6-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1372px;
            position: absolute;
            top: 1586px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-minus-96-1-3-Zx15ZL {
            background-color: transparent;
            height: 5px;
            left: 1380px;
            object-fit: cover;
            position: absolute;
            top: 1599px;
            width: 14px;
        }

        .macbook-pro-16u34-2 .ellipse-7-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1444px;
            position: absolute;
            top: 1586px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-plus-96-1-2-Zx15ZL {
            background-color: transparent;
            height: 12px;
            left: 1453px;
            object-fit: cover;
            position: absolute;
            top: 1385px;
            width: 12px;
        }

        .macbook-pro-16u34-2 .x1-N4F8C0 {
            top: 1638px;
        }

        .macbook-pro-16u34-2 .ellipse-8-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1372px;
            position: absolute;
            top: 1634px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-minus-96-1-4-Zx15ZL {
            background-color: transparent;
            height: 5px;
            left: 1380px;
            object-fit: cover;
            position: absolute;
            top: 1647px;
            width: 14px;
        }

        .macbook-pro-16u34-2 .ellipse-9-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1444px;
            position: absolute;
            top: 1634px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-plus-96-1-3-Zx15ZL {
            background-color: transparent;
            height: 12px;
            left: 1453px;
            object-fit: cover;
            position: absolute;
            top: 1643px;
            width: 12px;
        }

        .macbook-pro-16u34-2 .x1-LL2XcT {
            top: 1686px;
        }

        .macbook-pro-16u34-2 .ellipse-10-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1372px;
            position: absolute;
            top: 1682px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-minus-96-1-5-Zx15ZL {
            background-color: transparent;
            height: 5px;
            left: 1380px;
            object-fit: cover;
            position: absolute;
            top: 1695px;
            width: 14px;
        }

        .macbook-pro-16u34-2 .ellipse-11-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--black-haze);
            border-radius: 15px;
            height: 30px;
            left: 1444px;
            position: absolute;
            top: 1682px;
            width: 30px;
        }

        .macbook-pro-16u34-2 .icons8-plus-96-1-4-Zx15ZL {
            background-color: transparent;
            height: 12px;
            left: 1453px;
            object-fit: cover;
            position: absolute;
            top: 1691px;
            width: 12px;
        }

        .macbook-pro-16u34-2 .rectangle-23-Zx15ZL {
            background-color: var(--dodger-blue);
            border-radius: 10px;
            height: 49px;
            left: 1169px;
            position: absolute;
            top: 1864px;
            width: 320px;
        }

        .macbook-pro-16u34-2 .reserve-Zx15ZL {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 1297px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1878px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .premium-service-1-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1185px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1754px;
            width: auto;
        }

        .macbook-pro-16u34-2 .premium-service-2-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1185px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1783px;
            width: auto;
        }

        .macbook-pro-16u34-2 .premium-service-3-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1185px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1812px;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-41-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 1185px;
            position: absolute;
            top: 1742px;
            width: 288px;
        }

        .macbook-pro-16u34-2 .line-42-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 1185px;
            position: absolute;
            top: 1845px;
            width: 288px;
        }

        .macbook-pro-16u34-2 .group-19-Zx15ZL {
            background-color: transparent;
            height: 34px;
            left: 1185px;
            position: absolute;
            top: 1380px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .dasa-1-oxry3f {
            background-color: transparent;
            height: 34px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .group-20-Zx15ZL {
            background-color: transparent;
            height: 34px;
            left: 1185px;
            position: absolute;
            top: 1425px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .dasa-2-qdCfSq {
            background-color: transparent;
            height: 34px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .group-21-Zx15ZL {
            background-color: transparent;
            height: 34px;
            left: 1185px;
            position: absolute;
            top: 1470px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .dasa-3-KvrhP9 {
            background-color: transparent;
            height: 34px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .group-22-Zx15ZL {
            background-color: transparent;
            height: 34px;
            left: 1185px;
            position: absolute;
            top: 1515px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .dasa-4-EZIxWV {
            background-color: transparent;
            height: 34px;
            left: 0px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 32px;
        }

        .macbook-pro-16u34-2 .group-12-Zx15ZL {
            background-color: transparent;
            height: 42px;
            left: 257px;
            position: absolute;
            top: 1655px;
            width: 225px;
        }

        .macbook-pro-16u34-2 .hosted-by-chris-evans-ejMlAQ {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 0px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .your-storage-expert-ejMlAQ {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 25px;
            width: auto;
        }

        .macbook-pro-16u34-2 .ellipse-11-T6wYZs {
            background-color: transparent;
            height: 45px;
            left: 195px;
            object-fit: cover;
            position: absolute;
            top: 1650px;
            width: 45px;
            border-radius: 50px;
        }

        .macbook-pro-16u34-2 .book-luggage-Zx15ZL {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-inter);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 1170px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1085px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .rectangle-40-Zx15ZL {
            background-color: var(--dodger-blue);
            border-radius: 7px;
            height: 35px;
            left: 1348px;
            position: absolute;
            top: 1075px;
            width: 141px;
        }

        .macbook-pro-16u34-2 .book-hourly-Zx15ZL {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-inter);
            font-size: 13px;
            font-style: normal;
            font-weight: 700;
            height: auto;
            left: 1380px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1085px;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-44-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 1170px;
            position: absolute;
            top: 1130px;
            width: 319px;
        }

        .macbook-pro-16u34-2 .ellipse-16-Zx15ZL {
            background-color: var(--black);
            border-radius: 6.5px;
            height: 13px;
            left: 223px;
            position: absolute;
            top: 1629px;
            width: 13px;
        }

        .macbook-pro-16u34-2 .ellipse-17-Zx15ZL {
            background-color: var(--black);
            border-radius: 6.5px;
            height: 13px;
            left: 223px;
            position: absolute;
            top: 1702px;
            width: 13px;
        }

        .macbook-pro-16u34-2 .ellipse-18-Zx15ZL {
            background-color: var(--black);
            border-radius: 6.5px;
            height: 13px;
            left: 223px;
            position: absolute;
            top: 1774px;
            width: 13px;
        }

        .macbook-pro-16u34-2 .line-45-Zx15ZL {
            background-color: transparent;
            height: 2px;
            left: 74px;
            position: absolute;
            top: 2160px;
            width: 1579px;
        }

        .macbook-pro-16u34-2 .rectangle-41-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--manatee);
            border-radius: 3px;
            height: 16px;
            left: 1441px;
            position: absolute;
            top: 1755px;
            width: 16px;
        }

        .macbook-pro-16u34-2 .rectangle-42-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--manatee);
            border-radius: 3px;
            height: 16px;
            left: 1441px;
            position: absolute;
            top: 1784px;
            width: 16px;
        }

        .macbook-pro-16u34-2 .rectangle-43-Zx15ZL {
            background-color: var(--white);
            border: 1px solid;
            border-color: var(--manatee);
            border-radius: 3px;
            height: 16px;
            left: 1441px;
            position: absolute;
            top: 1813px;
            width: 16px;
        }

        .macbook-pro-16u34-2 .x2000-tax-Zx15ZL {
            background-color: transparent;
            height: auto;
            left: 1267px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 1934px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .add-dates {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 30px;
            width: auto;
        }

        .macbook-pro-16u34-2 .check-in {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .check-out {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .line-30 {
            background-color: transparent;
            position: absolute;
            width: 2px;
        }

        .macbook-pro-16u34-2 .line-31 {
            background-color: transparent;
            position: absolute;
            width: 2px;
        }

        .macbook-pro-16u34-2 .search {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: auto;
        }

        .macbook-pro-16u34-2 .we-will-help-you-in {
            background-color: transparent;
            height: auto;
            left: 256px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: 782px;
        }

        .macbook-pro-16u34-2 .x {
            background-color: transparent;
            height: auto;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            top: 2194px;
            white-space: nowrap;
            width: auto;
        }

        .macbook-pro-16u34-2 .x1 {
            background-color: transparent;
            height: auto;
            left: 1420px;
            letter-spacing: 0.00px;
            line-height: normal;
            position: absolute;
            text-align: left;
            width: auto;
        }

        ul {
            list-style-type: none;
            /* Remove default bullet */
        }

        ul li::before {
            content: "\2022";
            /* Unicode character for bullet (•) */
            font-size: 35px;
            /* Adjust size as needed */
            color: black;
            /* Bullet color */
            margin-right: 10px;
            /* Optional: Adjust spacing between bullet and text */
        }


        .unique-book-luggage-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 25%;
            margin-top: 60%;
            margin-left: 65%;
        }

        .unique-book-luggage {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .unique-title-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .unique-book-luggage-title {
            font-size: 1.5em;
        }

        .unique-book-hourly-button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
        }

        .unique-form-group {
            margin-bottom: 15px;
            border: 1px solid #f0f0f0;
            border-radius: 10px;
            padding: 10px;
        }

        .unique-luggages {
            border: 1px solid #f2f1f1;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .unique-input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-top: 5px;
        }

        .p-small {
            font-size: 12px !important;
            font-weight: 100 !important;
        }

        .unique-luggages p,
        .unique-premium-services p {
            margin: 0 0 10px;
            font-weight: bold;
        }

        .unique-luggage-item,
        .unique-premium-services .unique-form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .unique-luggage-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .unique-counter {
            display: flex;
            align-items: center;
        }

        .unique-counter-button {
            background-color: transparent;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 5px;
            cursor: pointer;
            width: 30px;
            text-align: center;
        }

        .unique-counter-input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            width: 40px;
            text-align: center;
            margin: 0 5px;
        }

        .unique-checkbox {
            margin-left: 10px;
        }

        .unique-reserve-button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
            margin: 20px auto 10px;
            width: 100%;
        }

        .unique-price {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
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
            <a href="#" class="custom-navbar-login">Login</a>
            <a href="#" class="custom-navbar-signup">Sign up</a>
        </div>
    </div>
    <div class="container-center-horizontal">
        <div class="macbook-pro-16u34-2 screen " data-id="30:989">

            <img class="line-9-Zx15ZL" data-id="30:1000"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-9.svg"
                alt="Line 9">

            <h1 class="title-Zx15ZL" data-id="30:1043"><?= $hubDetails['hubname'] ?></h1>
            <div class="x482-379-reviews-Zx15ZL inter-normal-manatee-20px" data-id="30:1044">4.82 (379 Reviews)</div>
            <img class="icons8-star-96-1-1-Zx15ZL" data-id="30:1045"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/icons8-star-96--1--1.png"
                alt="icons8-star-96 (1) 1"><img class="line-36-Zx15ZL" data-id="30:1046"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-36.svg"
                alt="Line 36"><img class="line-33-Zx15ZL" data-id="30:1047"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-33.svg"
                alt="Line 33"><img class="line-43-Zx15ZL" data-id="30:1048"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-33.svg"
                alt="Line 43">
            <div class="x2024-laggaesbnb-inc-Zx15ZL inter-normal-tuna-16px" data-id="30:1049">2024 Laggaesbnb, Inc</div>
            <div class="terms-Zx15ZL inter-normal-tuna-16px" data-id="30:1050">Terms</div>
            <div class="x-Zx15ZL x inter-normal-tuna-16px" data-id="30:1051">.</div>
            <div class="sitemap-Zx15ZL inter-normal-tuna-16px" data-id="30:1052">Sitemap</div>
            <div class="x-T6wYZs x inter-normal-tuna-16px" data-id="30:1053">.</div>
            <div class="privacy-Zx15ZL inter-normal-tuna-16px" data-id="30:1054">Privacy</div>
            <div class="x-N4F8C0 x inter-normal-tuna-16px" data-id="30:1055">.</div>
            <div class="your-privacy-choices-Zx15ZL inter-normal-tuna-16px" data-id="30:1056">Your Privacy Choices</div>
            <div class="english-us-Zx15ZL inter-normal-tuna-16px" data-id="30:1057">English (US)</div>
            <div class="x-LL2XcT x inter-normal-tuna-16px" data-id="30:1058">.</div>
            <div class="ellipse-2-Zx15ZL" data-id="30:1059"></div>
            <div class="c-Zx15ZL inter-normal-tuna-16px" data-id="30:1060">C</div>
            <div class="rectangle-15-Zx15ZL" data-id="30:1061"></div>
            <div class="usd-Zx15ZL" data-id="30:1062">$ USD</div><img class="icons8-facebook-60-1-Zx15ZL"
                data-id="30:1063"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-1.png"
                alt="icons8-facebook-60 1"><img class="icons8-facebook-60-2-Zx15ZL" data-id="30:1064"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-2.png"
                alt="icons8-facebook-60 2"><img class="icons8-facebook-60-3-Zx15ZL" data-id="30:1065"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66563e095b91b77d5b25f393/img/icons8-facebook-60-3.png"
                alt="icons8-facebook-60 3">
            <div class="rectangle-17-Zx15ZL" data-id="30:1066"></div>
            <div class="x2-Zx15ZL inter-normal-black-14px" data-id="30:1067">2</div><img class="line-38-Zx15ZL"
                data-id="30:1068"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-38.svg"
                alt="Line 38"><img class="line-39-Zx15ZL" data-id="30:1069"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/6662218e01bd1b4ef0328c08/img/line-39.svg"
                alt="Line 39"><img class="airbnb-host-welcoming-guests-1-Zx15ZL" data-id="30:1070"
                src="<?= base_url() ?>uploads/hub_images/<?= $hubDetails['hub_image'] ?>"
                alt="airbnb-host-welcoming-guests 1">
            <div class="unique-book-luggage-container">
                <?php
                $bagNumber = $urldata['bagNumber'];
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
                        foreach ($items as $item) {
                            list($size, $quantity) = explode(' - ', $item);
                            $quantity = (int)$quantity;
                    
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
                                    $total_price += $quantity * $hubDetails['dailyPrice4'];
                                    $LargePrice += $quantity * $hubDetails['dailyPrice4'];
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
                ?>
                <div class="unique-book-luggage">
                    <div class="unique-title-container">
                        <h2 class="unique-book-luggage-title">Book Luggage</h2>
                        <button class="unique-book-hourly-button">Book Hourly</button>
                    </div>
                    <div class="unique-form-group">
                        <label for="checkin-date">Check - In</label>
                        <input type="date" id="checkin-date" class="unique-input" value="<?php if (count($urldata) > 0)
                            echo date('Y-m-d', strtotime($urldata['checkInDate'])) ?>" onchange="calculateTotalCost()">
                        </div>
                        <div class="unique-form-group">
                            <label for "checkout-date">Check - Out</label>
                            <input type="date" id="checkout-date" class="unique-input" value="<?php if (count($urldata) > 0)
                            echo date('Y-m-d', strtotime($urldata['checkOutDate'])) ?>"
                                onchange="calculateTotalCost()">
                        </div>
                        <div class="unique-luggages">
                            <p>Luggages</p>
                            <p class="p-small" id="countluggage"><?= $total_bag ?> luggages</p>
                        <div class="unique-luggage-item">
                            <img src="<?= base_url() ?>assets/img/dasa-1@2x.png" alt="Small Luggage">
                            <span>Small<br>18-22 inches</span>
                            <div class="unique-counter">
                                <button onclick="decreaseValue('1')" class="unique-counter-button">-</button>
                                <input type="text" id="counter1" value="<?= $Small; ?>"
                                    class="unique-counter-input" readonly>
                                <input type="hidden" id="price1" value="<?= $hubDetails['dailyPrice1'] ?>">
                                <input type="hidden" id="subTotal1" value="<?= $SmallPrice ?>">
                                <button onclick="increaseValue('1')" class="unique-counter-button">+</button>
                            </div>
                        </div>
                        <div class="unique-luggage-item">
                            <img src="<?= base_url() ?>assets/img/dasa-2@2x.png" alt="Medium Luggage">
                            <span>Medium<br>24-26 inches</span>
                            <div class="unique-counter">
                                <button onclick="decreaseValue('2')" class="unique-counter-button">-</button>
                                <input type="text" id="counter2" value="<?= $Medium; ?>" class="unique-counter-input" readonly>
                                <input type="hidden" id="price2" value="<?= $hubDetails['dailyPrice2'] ?>">
                                <input type="hidden" id="subTotal2" value="<?= $MediumPrice; ?>">
                                <button onclick="increaseValue('2')" class="unique-counter-button">+</button>
                            </div>
                        </div>
                        <div class="unique-luggage-item">
                            <img src="<?= base_url() ?>assets/img/dasa-3@2x.png" alt="Large Luggage">
                            <span>Large<br>28-32 inches</span>
                            <div class="unique-counter">
                                <button onclick="decreaseValue('3')" class="unique-counter-button">-</button>
                                <input type="text" id="counter3" value="<?= $Large; ?>" class="unique-counter-input" readonly>
                                <input type="hidden" id="price3" value="<?= $hubDetails['dailyPrice3'] ?>">
                                <input type="hidden" id="subTotal3" value="<?= $LargePrice; ?>">
                                <button onclick="increaseValue('3')" class="unique-counter-button">+</button>
                            </div>
                        </div>
                        <div class="unique-luggage-item">
                            <img src="<?= base_url() ?>assets/img/dasa-4@2x.png" alt="Extra Large Luggage">
                            <span>Extra Large<br>30-34 inches</span>
                            <div class="unique-counter">
                                <button onclick="decreaseValue('4')" class="unique-counter-button">-</button>
                                <input type="text" id="counter4" value="<?= $ExtraLarge; ?>" class="unique-counter-input" readonly>
                                <input type="hidden" id="price4" value="<?= $hubDetails['dailyPrice4'] ?>">
                                <input type="hidden" id="subTotal4" value="<?= $ExtraLargePrice; ?>">
                                <button onclick="increaseValue('4')" class="unique-counter-button">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="unique-premium-services">
                        <p>Premium Services</p>
                        <div class="unique-form-group">
                            <label for="premium1">Premium Service 1</label>
                            <input type="checkbox" id="premium1" class="unique-checkbox"
                                value="<?= $hubDetails['premiumServiceRate1'] ?>">
                        </div>
                        <div class="unique-form-group">
                            <label for="premium2">Premium Service 2</label>
                            <input type="checkbox" id="premium2" class="unique-checkbox"
                                value="<?= $hubDetails['premiumServiceRate2'] ?>">
                        </div>
                        <div class="unique-form-group">
                            <label for="premium3">Premium Service 3</label>
                            <input type="checkbox" id="premium3" class="unique-checkbox"
                                value="<?= $hubDetails['premiumServiceRate3'] ?>">
                        </div>
                    </div>
                    <button class="unique-reserve-button">Reserve</button>
                    <div class="unique-price" id="totalCost">

                        $<?= $total_price ?> + Tax
                    </div>
                </div>
            </div>
            <div class="about-this-place-Zx15ZL" data-id="30:1071">About this place</div>
            <div class="welcome-to-the-grott-Zx15ZL inter-normal-manatee-20px" data-id="30:1072">
                <?= $hubDetails['description'] ?>
            </div>
            <div class="guide-help-Zx15ZL" data-id="30:1074">Guide Help</div>
            <div class="we-know-that-carryin-Zx15ZL inter-normal-manatee-20px"><?= $hubDetails['helpGuide'] ?></div>

            <div class="group-12-Zx15ZL pointer" data-id="30:1135"
                onclick="redirectTo('Host',<?= $hubDetails['user_id'] ?>)">
                <div class="hosted-by-chris-evans-ejMlAQ inter-bold-black-20px" data-id="30:1136">Hosted by
                    <?= $hubDetails['full_name'] ?>
                </div>
                <div class="your-storage-expert-ejMlAQ inter-normal-manatee-14px" data-id="30:1137">
                    <?= $hubDetails['about'] ?>
                </div>
            </div><img class="ellipse-11-T6wYZs pointer" data-id="30:1138"
                src="<?= base_url() ?>uploads/hub_images/<?= $hubDetails['profile_pic'] ?>" alt="Ellipse 11"
                onclick="redirectTo('Host',<?= $hubDetails['user_id'] ?>)">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Link custom JavaScript -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script>
        document.body.style.zoom = "78%";
        $(document).ready(function () {
            calculateTotalCost();
        });
    </script>
</body>

</html>