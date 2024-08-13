<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets') }}/assets/" data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/assets/vendor/libs/typeahead-js/typeahead.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets') }}/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets') }}/assets/js/config.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <style>
        #layout-menu {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Start the menu from the top */
            height: 100vh;
            width: 250px;
            /* Adjust the width as needed */
        }

        .profile-section {
            flex: 1;
            /* Take available space */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .text-center {
            text-align: center;
            width: 100%;
            /* Ensure it uses full width */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .my-6 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .w-px-100 {
            width: 100px;
            height: 100px;
        }

        .menu-inner {
            overflow-y: auto;
            flex: 1;
            /* Take the remaining space */
        }

        .menu-item {
            padding: 10px 20px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .menu-icon {
            margin-right: 10px;
        }
    </style>
    <style>
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
    </style>

    @stack('css')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('frontend.include.main_sidebar')

            <!-- / Menu -->

            <!-- Layout container -->
           @yield('content')
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('assets') }}/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets') }}/assets/vendor/libs/masonry/masonry.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets') }}/assets/js/main.js"></script>

    @stack('js')
    <script>
        function trackOrder() {
            $('#staticBackdrop').modal('show');
        }
        let status = 0;

        function changeLoading() {
            status += 1; // This is a shorthand for status = status + 1
            if (status == 1) {
                $("#status_1").addClass("d-none");
                $("#status_11").removeClass("d-none");
            } else if (status == 2) {
                $("#status_2").addClass("d-none");
                $("#status_22").removeClass("d-none");
            } else if (status == 3) {
                $("#status_3").addClass("d-none");
                $("#status_33").removeClass("d-none");
            } else if (status == 4) {
                $("#status_4").addClass("d-none");
                $("#status_44").removeClass("d-none");
            }
        }
    </script>

</body>

</html>
