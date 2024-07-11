< !DOCTYPE html>< !-- This code was generated using AnimaApp.com. This code is a high-fidelity prototype. Get developer-friendly React or HTML/CSS code for this project at: https: //projects.animaapp.com?utm_source=hosted-code 
26/05/2024 15:58:44 --><html><head><meta charset="utf-8"><meta name="viewport" content="width=1728, maximum-scale=1.0"><link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png"><meta name="og:type" content="website"><meta name="twitter:card" content="photo"><script id="anima-load-script" src="load.js"></script><script id="anima-hotspots-script" src="hotspots.js"></script><script id="anima-overrides-script" src="overrides.js"></script><script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script><style>@import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

@import url("https://fonts.googleapis.com/css?family=Inter:500,400,700,600");

/* The following line is used to measure usage of this code. You can remove it if you want. */
@import url("https://px.animaapp.com/6652f9ecffa3c95e634bfe5e.6652f9ecffa3c95e634bfe61.wjSV3P8.hch.png");


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
  --charade: #1f2937;
  --mariner100: #d6f2ff;
  --mariner600: #098fff;
  --pale-sky: #6b7280;
  --white: #ffffff;

  --font-size-l: 18px;
  --font-size-m: 16px;
  --font-size-s: 12px;
  --font-size-xl: 20px;
  --font-size-xxl: 64px;

  --font-family-inter: "Inter", Helvetica;
}

.website-text-sizeheading-1bold {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 700;
  letter-spacing: 0px;
}

.website-text-sizeheading-5medium {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-xl);
  font-style: normal;
  font-weight: 500;
  letter-spacing: 0px;
}

.website-text-sizeheading-6semibold {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 600;
  letter-spacing: 0px;
}

.website-text-sizeparagraphregular-standard {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0px;
}

.website-text-sizebutton-textsemibold {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 600;
  letter-spacing: 0px;
}

.website-text-sizelabel-or-small-textregular {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0px;
}

.basemedium {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 500;
  letter-spacing: 0.08px;
}

.basesemi-bold {
  font-family: var(--font-family-inter);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 600;
  letter-spacing: 0.08px;
}

:root {}


/* screen - text-laggage-stor-website */

.text-laggage-stor-website {
  background-color: var(--white);
  margin: 0px;
  min-height: 727px;
  min-width: 1728px;
  overflow: hidden;
  overflow-x: hidden;
  position: relative;
  width: 100%;
}

.text-laggage-stor-website .navigation-H4BOT9 {
  background-color: transparent;
  height: 80px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 1728px;
}

.text-laggage-stor-website .bg-PnLCXF {
  background-color: var(--mariner100);
  width: 1728px;
}

.text-laggage-stor-website .content-PnLCXF {
  height: 40px;
  left: calc(50.00% - 808px);
  top: 20px;
  width: 1616px;
}

.text-laggage-stor-website .logo-Vd8XTR {
  background-color: transparent;
  height: 75.00%;
  left: 0px;
  position: absolute;
  top: 12.50%;
  width: 8.53%;
}

.text-laggage-stor-website .vector-qa43Tt {
  background-color: transparent;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 13.05%;
}

.text-laggage-stor-website .laggaes-bnb-qa43Tt {
  background-color: transparent;
  color: var(--mariner600);
  font-style: normal;
  font-weight: 600;
  height: auto;
  left: 23px;
  line-height: 22px;
  position: absolute;
  text-align: left;
  top: 4px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .menu-text-Vd8XTR {
  align-items: center;
  background-color: transparent;
  display: inline-flex;
  gap: 48px;
  justify-content: center;
  left: calc(50.00% - 295px);
  position: absolute;
  top: 8px;
}

.text-laggage-stor-website .all-cities-HvnWPn {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
  margin-top: -1.00px;
  position: relative;
  text-align: left;
  white-space: nowrap;
  width: fit-content;
}

.text-laggage-stor-website .how-it-works-HvnWPn {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
  margin-top: -1.00px;
  position: relative;
  text-align: left;
  white-space: nowrap;
  width: fit-content;
}

.text-laggage-stor-website .pricing-HvnWPn {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
  margin-top: -1.00px;
  position: relative;
  text-align: left;
  white-space: nowrap;
  width: fit-content;
}

.text-laggage-stor-website .about-HvnWPn {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
  margin-top: -1.00px;
  position: relative;
  text-align: left;
  white-space: nowrap;
  width: fit-content;
}

.text-laggage-stor-website .become-a-partner-HvnWPn {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
  margin-top: -1.00px;
  position: relative;
  text-align: left;
  white-space: nowrap;
  width: fit-content;
}

.text-laggage-stor-website .cta-Vd8XTR {
  background-color: transparent;
  height: 40px;
  left: 1408px;
  position: absolute;
  top: 0px;
  width: 210px;
}

.text-laggage-stor-website .login-Vysqnh {
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

.text-laggage-stor-website .fi_666201-Vysqnh {
  background-color: transparent;
  height: 16px;
  left: 0px;
  position: absolute;
  top: 12px;
  width: 16px;
}

.text-laggage-stor-website .frame-29-Vysqnh {
  left: 93px;
  padding: 0px 8px 0px 16px;
}

.text-laggage-stor-website .sing-up-0ow3tq {
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

.text-laggage-stor-website .frame-0ow3tq {
  position: relative;
}

.text-laggage-stor-website .image-40-H4BOT9 {
  background-color: transparent;
  height: 651px;
  left: 0px;
  position: absolute;
  top: 76px;
  width: 1728px;
}

.text-laggage-stor-website .search-filter-H4BOT9 {
  background-color: transparent;
  height: 80px;
  left: 384px;
  position: absolute;
  top: 527px;
  width: 959px;
}

.text-laggage-stor-website .bg-IfaZJ5 {
  background-color: var(--white);
  border-radius: 16px;
  width: 959px;
}

.text-laggage-stor-website .content-IfaZJ5 {
  height: 48px;
  left: 40px;
  top: 16px;
  width: 879px;
}

.text-laggage-stor-website .search-box-9qXDRG {
  left: 241px;
  position: absolute;
  top: 2px;
  width: 72px;
}

.text-laggage-stor-website .check-in-WSVp40 {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 600;
  height: auto;
  left: 0px;
  line-height: 22px;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .search-box-cfi6pN {
  left: 389px;
  position: absolute;
  top: 2px;
  width: 84px;
}

.text-laggage-stor-website .check-out-UxNbiR {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 600;
  height: auto;
  left: 0px;
  line-height: 22px;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .bag-number-9qXDRG {
  background-color: transparent;
  height: 44px;
  left: 549px;
  position: absolute;
  top: 2px;
  width: 167px;
}

.text-laggage-stor-website .search-box-sdXqPn {
  left: 0px;
  position: absolute;
  top: 0px;
  width: 132px;
}

.text-laggage-stor-website .x14-bags-E9l65U {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 600;
  height: auto;
  left: 0px;
  line-height: 22px;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .check-in-bags-number-E9l65U {
  background-color: transparent;
  color: var(--pale-sky);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  line-height: 18px;
  position: absolute;
  text-align: left;
  top: 26px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .frame-sdXqPn {
  left: 147px;
  position: absolute;
  top: 0px;
}

.text-laggage-stor-website .search-9qXDRG {
  background-color: transparent;
  height: 44px;
  left: 0px;
  position: absolute;
  top: 2px;
  width: 161px;
}

.text-laggage-stor-website .frame-tvWSkR {
  left: 141px;
  position: absolute;
  top: 0px;
}

.text-laggage-stor-website .conent-tvWSkR {
  background-color: transparent;
  height: 44px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 107px;
}

.text-laggage-stor-website .search-box-iYLs6d {
  left: 0px;
  position: relative;
  top: 0px;
  width: 111px;
}

.text-laggage-stor-website .search-TVbwax {
  background-color: transparent;
  color: var(--charade);
  font-style: normal;
  font-weight: 600;
  height: auto;
  left: 0px;
  line-height: 22px;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .enter-your-location-TVbwax {
  background-color: transparent;
  color: var(--pale-sky);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  line-height: 18px;
  position: absolute;
  text-align: left;
  top: 26px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .frame-29-9qXDRG {
  left: 756px;
  padding: 4px 22px 4px 14px;
}

.text-laggage-stor-website .frame-hvWk7Z {
  position: relative;
}

.text-laggage-stor-website .search-hvWk7Z {
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

.text-laggage-stor-website .line-H4BOT9 {
  background-color: transparent;
  height: 47px;
  left: 574px;
  position: absolute;
  top: 781px;
  width: 308px;
}

.text-laggage-stor-website .line-4-IVe5xe {
  background-color: transparent;
  height: 1px;
  left: 5171px;
  position: absolute;
  top: -1375px;
  width: 47px;
}

.text-laggage-stor-website .line-5-IVe5xe {
  background-color: transparent;
  height: 1px;
  left: 5319px;
  position: absolute;
  top: -1375px;
  width: 47px;
}

.text-laggage-stor-website .line-6-IVe5xe {
  background-color: transparent;
  height: 1px;
  left: 5479px;
  position: absolute;
  top: -1375px;
  width: 47px;
}

.text-laggage-stor-website .title-H4BOT9 {
  background-color: transparent;
  color: #eff8ff;
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 223px;
  line-height: 80px;
  position: absolute;
  text-align: center;
  top: 171px;
  width: 878px;
}

.text-laggage-stor-website .welcome-to-our-lugga-H4BOT9 {
  background-color: transparent;
  color: var(--white);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 224px;
  line-height: 26px;
  position: absolute;
  text-align: left;
  top: 355px;
  width: 637px;
}

.text-laggage-stor-website .add-dates {
  background-color: transparent;
  color: var(--pale-sky);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  line-height: 18px;
  position: absolute;
  text-align: left;
  top: 26px;
  white-space: nowrap;
  width: auto;
}

.text-laggage-stor-website .bg {
  height: 80px;
  left: 0px;
  position: absolute;
  top: 0px;
}

.text-laggage-stor-website .content {
  background-color: transparent;
  position: absolute;
}

.text-laggage-stor-website .frame {
  background-color: transparent;
  height: 20px;
  width: 20px;
}

.text-laggage-stor-website .frame-29 {
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

.text-laggage-stor-website .line-1 {
  background-color: transparent;
  height: 40px;
  object-fit: cover;
  position: relative;
  width: 1px;
}

.text-laggage-stor-website .search-box {
  background-color: transparent;
  height: 44px;
}

</style></head><body style="margin: 0;background: #ffffff;"><input type="hidden" id="anPageName" name="page" value="text-laggage-stor-website"><div class="text-laggage-stor-website screen " data-id="5:495"><div class="navigation-H4BOT9" data-id="6:70"><div class="bg-PnLCXF bg" data-id="5:496"></div><div class="content-PnLCXF content" data-id="6:69"><div class="logo-Vd8XTR" data-id="6:36"><img class="vector-qa43Tt" data-id="6:32" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/vector@2x.png" alt="Vector"><div class="laggaes-bnb-qa43Tt website-text-sizebutton-textsemibold" data-id="6:35">Laggaes bnb</div></div><div class="menu-text-Vd8XTR" data-id="6:38"><div class="all-cities-HvnWPn website-text-sizeparagraphregular-standard" data-id="6:37">All Cities</div><div class="how-it-works-HvnWPn website-text-sizeparagraphregular-standard" data-id="6:40">How it works</div><div class="pricing-HvnWPn website-text-sizeparagraphregular-standard" data-id="6:42">Pricing</div><div class="about-HvnWPn website-text-sizeparagraphregular-standard" data-id="6:66">About</div><div class="become-a-partner-HvnWPn website-text-sizeparagraphregular-standard" data-id="6:68">Become a partner</div></div><div class="cta-Vd8XTR" data-id="6:51"><div class="login-Vysqnh basemedium" data-id="6:52">Login</div><img class="fi_666201-Vysqnh" data-id="6:53" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/fi-666201@2x.png" alt="fi_666201"><div class="frame-29-Vysqnh frame-29" data-id="6:59"><div class="sing-up-0ow3tq basesemi-bold" data-id="6:60">Sing up</div><img class="line-1" data-id="6:61" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/line-1@2x.png" alt="Line 1"><img class="frame-0ow3tq frame" data-id="6:62" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/frame@2x.png" alt="Frame"></div></div></div></div><img class="image-40-H4BOT9" data-id="7:199" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/image-40.png" alt="image 40"><div class="search-filter-H4BOT9" data-id="6:126"><div class="bg-IfaZJ5 bg" data-id="6:72"></div><div class="content-IfaZJ5 content" data-id="6:124"><div class="search-box-9qXDRG search-box" data-id="6:81"><div class="check-in-WSVp40 website-text-sizeheading-6semibold" data-id="6:82">Check in</div><div class="add-dates website-text-sizelabel-or-small-textregular" data-id="6:83">Add dates</div></div><div class="search-box-cfi6pN search-box" data-id="6:84"><div class="check-out-UxNbiR website-text-sizeheading-6semibold" data-id="6:85">Check out</div><div class="add-dates website-text-sizelabel-or-small-textregular" data-id="6:86">Add dates</div></div><div class="bag-number-9qXDRG" data-id="6:115"><div class="search-box-sdXqPn search-box" data-id="6:87"><div class="x14-bags-E9l65U website-text-sizeheading-6semibold" data-id="6:88">14 Bags</div><div class="check-in-bags-number-E9l65U website-text-sizelabel-or-small-textregular" data-id="6:89">Check in bags number</div></div><img class="frame-sdXqPn frame" data-id="6:90" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/frame-1@2x.png" alt="Frame"></div><div class="search-9qXDRG" data-id="6:114"><img class="frame-tvWSkR frame" data-id="6:78" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/frame-1@2x.png" alt="Frame"><div class="conent-tvWSkR" data-id="6:94"><div class="search-box-iYLs6d search-box" data-id="6:80"><div class="search-TVbwax website-text-sizeheading-6semibold" data-id="6:73">Search</div><div class="enter-your-location-TVbwax website-text-sizelabel-or-small-textregular" data-id="6:74">Enter your location</div></div></div></div><div class="frame-29-9qXDRG frame-29" data-id="6:95"><img class="frame-hvWk7Z frame" data-id="6:103" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/frame-3@2x.png" alt="Frame"><img class="line-1" data-id="6:97" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/line-1-1@2x.png" alt="Line 1"><div class="search-hvWk7Z basesemi-bold" data-id="6:96">Search</div></div></div></div><div class="line-H4BOT9" data-id="6:125"><img class="line-4-IVe5xe" data-id="6:117" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/line-4@2x.png" alt="Line 4"><img class="line-5-IVe5xe" data-id="6:118" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/line-4@2x.png" alt="Line 5"><img class="line-6-IVe5xe" data-id="6:119" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/6652f9eeffa3c95e634bfe63/releases/66535c2f66313a614d4fa2de/img/line-4@2x.png" alt="Line 6"></div><h1 class="title-H4BOT9 website-text-sizeheading-1bold" data-id="6:128">Store your luggage hassle-free with us</h1><p class="welcome-to-our-lugga-H4BOT9 website-text-sizeheading-5medium" data-id="6:129">Welcome to our luggage storing platform. Enjoy hassle-free travel with our secure and convenient storage solutions.</p></div><script src="launchpad-js/launchpad-banner.js" async></script><script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script></body></html>