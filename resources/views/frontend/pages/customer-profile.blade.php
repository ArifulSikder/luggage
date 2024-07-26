@extends('frontend.layouts.main')

@section('content')
    <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="ti ti-menu-2 ti-md"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown">
                        <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                            href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ti ti-md"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i
                                            class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->


                    <!-- Notification -->
                    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                        <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                            href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            <span class="position-relative">
                                <i class="ti ti-bell ti-md"></i>
                                <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-0">
                            <li class="dropdown-menu-header border-bottom">
                                <div class="dropdown-header d-flex align-items-center py-3">
                                    <h6 class="mb-0 me-auto">Notification</h6>
                                    <div class="d-flex align-items-center h6 mb-0">
                                        <span class="badge bg-label-primary me-2">8 New</span>
                                        <a href="javascript:void(0)"
                                            class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                                class="ti ti-mail-opened text-heading"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-notifications-list scrollable-container">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets') }}/assets/img/avatars/1.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                <small class="mb-1 d-block text-body">Won the monthly best
                                                    seller gold badge</small>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">Charles Franklin</h6>
                                                <small class="mb-1 d-block text-body">Accepted your
                                                    connection</small>
                                                <small class="text-muted">12hr ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets') }}/assets/img/avatars/2.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">New Message ✉️</h6>
                                                <small class="mb-1 d-block text-body">You have new message from
                                                    Natalie</small>
                                                <small class="text-muted">1h ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="ti ti-shopping-cart"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                                                <small class="mb-1 d-block text-body">ACME Inc. made new order
                                                    $1,154</small>
                                                <small class="text-muted">1 day ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets') }}/assets/img/avatars/9.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">Application has been approved 🚀</h6>
                                                <small class="mb-1 d-block text-body">Your ABC project
                                                    application has been approved.</small>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="ti ti-chart-pie"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">Monthly report is generated</h6>
                                                <small class="mb-1 d-block text-body">July monthly financial
                                                    report is generated </small>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets') }}/assets/img/avatars/5.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">Send connection request</h6>
                                                <small class="mb-1 d-block text-body">Peter sent you connection
                                                    request</small>
                                                <small class="text-muted">4 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <img src="{{ asset('assets') }}/assets/img/avatars/6.png" alt
                                                        class="rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">New message from Jane</h6>
                                                <small class="mb-1 d-block text-body">Your have new message
                                                    from Jane</small>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                            class="ti ti-alert-triangle"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1 small">CPU is running high</h6>
                                                <small class="mb-1 d-block text-body">CPU Utilization Percent
                                                    is currently at 88.63%,</small>
                                                <small class="text-muted">5 days ago</small>
                                            </div>
                                            <div class="flex-shrink-0 dropdown-notifications-actions">
                                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                        class="badge badge-dot"></span></a>
                                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                                        class="ti ti-x"></span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="border-top">
                                <div class="d-grid p-4">
                                    <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                        <small class="align-middle">View all notifications</small>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!--/ Notification -->

                </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
                <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                    aria-label="Search..." />
                <i class="ti ti-x search-toggler cursor-pointer"></i>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


                <!-- Horizontal -->
                <h1 class="pb-1 mb-6 text-center">Active Orders</h1>
                @forelse ($orders as $order)
                    <div class="mb-12 g-6">
                        <div class="col-md-7 offset-2">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="card-img card-img-left img-fluid" src="{{ asset('assets') }}/assets/img/active_orders.jpg" alt="Card image" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="p-2 text-left">
                                            <h4 class="card-title">Invoice No: {{  $order->invoice }}</h4> 
                                            <p class="card-text">
                                                <b>Check-In date:</b> {{ $order->check_in_date }}
                                            </p>
                                            <p class="card-text">
                                                <b>Check-Out date:</b> {{ $order->check_out_date }}
                                            </p>
                                            <p class="card-text">
                                                <b>Pick-UP at:</b> {{ $order->pick_up_location }}
                                            </p>
                                            <p class="card-text">
                                                <b>Drop-Off at:</b> @if ($order->drop_off_location)
                                                {{ $order->drop_off_location }}
                                                @else
                                                {{ $order->pick_up_location }}
                                                @endif
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4>Amount: ${{ $order->total_cost }}</h4>
                                                <span class="badge bg-warning btn" onclick="trackOrder()" type="button">Track Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                @empty
                @endforelse
                <!--/ Horizontal -->

            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #F5F5F5 !important;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" id="booking_bg">
                    <div class="row justify-content-center position-relative">
                        <div class="col-12 text-center">
                            <h1 class="mb-5"><i class="fa-regular fa-circle-check" style="color: #6DD372;"></i>
                                En-route to you</h1>
                        </div>

                        <div class="col-md-6 text-center mb-4">
                            <div class="mx-3">
                                <img src="{{ asset('assets') }}/img/a_guy.png" class="img-fluid rounded custom-shadow"
                                    alt="Booking Image">
                                <h2 class="mt-3">Working since 2023</h2>
                                <p>- Jordon Smith</p>
                                <p>- 1 8223 3837 000</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mx-3">
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <h1 class="me-3 mb-0">Arriving in</h1>
                                        <img src="{{ asset('assets') }}/img/location.jpg" class="img-fluid rounded"
                                            style="max-width: 50px;" alt="Location Image">
                                    </div>
                                    <h1><span style="color: #6DD372;">25</span> minutes</h1>
                                    <table class="table mt-2">
                                        <tbody>
                                            <tr>
                                                <td>Arrived</td>
                                                <td id="status_1">
                                                    <div class="spinner-border text-warning" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                                <td id="status_11" class="d-none"><i
                                                        class="fa fa-check text-success fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Picked Up</td>
                                                <td id="status_2">
                                                    <div class="spinner-border text-primary" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                                <td id="status_22" class="d-none"><i
                                                        class="fa fa-check text-success fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Safely Stored</td>
                                                <td id="status_3">
                                                    <div class="spinner-border text-info" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                                <td id="status_33" class="d-none"><i
                                                        class="fa fa-check text-success fa-2x"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Order Completed</td>
                                                <td id="status_4">
                                                    <div class="spinner-border text-success" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                                <td id="status_44" class="d-none"><i
                                                        class="fa fa-check text-success fa-2x"></i></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <!-- <tr>
                                            <td>Arrived</td>
                                            <td><i class="fa fa-check text-success"></i></td>
                                        </tr> -->
                                            <!-- </tbody> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" onclick="changeLoading()">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
