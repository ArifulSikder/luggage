<style>
    /* .modal-fullscreen {
        width: 100%;
        max-width: 100%;
        margin: 0;
    }

    .modal-fullscreen .modal-content {
        border-radius: 0;
        height: 100vh;
        overflow-y: auto;
    }

    .modal-fullscreen .modal-body {
        height: calc(100% - 4rem);
        /* Adjust based on modal header/footer height */
    /* overflow-y: auto;
    } */

    .cke_bottom {
        display: none;
    }

    .container {
            width: 80%;
            margin: auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: relative;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown-content.show {
            display: block;
        }
        .btn {
            padding: 5px 10px;
            cursor: pointer;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
        }
        .btn-sm {
            font-size: 0.875rem;
        }
</style>
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Booking Detail List</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Booking Date</th>
                                            <th>Check-In Date</th>
                                            <th>Check-Out Date</th>
                                            <th>Booking Details (Bag Wise)</th>
                                            <th>Total Amount + Tax</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bookingdetaillist">
                                        <?php foreach ($booking_details as $booking): ?>
                                            <tr>
                                                <td><?= $booking['bookings_id'] ?></td>
                                                <td><?= $booking['name'] ?></td>
                                                <td><?= $booking['email'] ?></td>
                                                <td><?= date('M j, Y', strtotime($booking['booking_date'])) ?></td>
                                                <td><?= date('M j, Y', strtotime($booking['check_in_date'])) ?></td>
                                                <td><?= date('M j, Y', strtotime($booking['check_out_date'])) ?></td>
                                                <td>
                                                    Small: <?= $booking['small_bags'] ?><br>
                                                    Medium: <?= $booking['medium_bags'] ?><br>
                                                    Large: <?= $booking['large_bags'] ?><br>
                                                    Extra Large: <?= $booking['extra_large_bags'] ?><br>
                                                    Premium Services: <?= $booking['premium_services'] ?>
                                                </td>
                                                <td>$<?= number_format($booking['total_cost'], 2) ?></td>
                                                <td>
                                                <span id="booking_status<?= $booking['bookings_id'] ?>"><?=$booking['status']; ?></span><br><br>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary btn-sm"
                                                            onclick="toggleDropdown('dropdown<?= $booking['bookings_id'] ?>')">Change
                                                            Status</button>
                                                        <div id="dropdown<?= $booking['bookings_id'] ?>"
                                                            class="dropdown-content">
                                                            <a href="#"
                                                                onclick="changeStatus(<?= $booking['bookings_id'] ?>, 'Going for pickup')">Going
                                                                for pickup</a>
                                                            <a href="#"
                                                                onclick="changeStatus(<?= $booking['bookings_id'] ?>, 'Pickup')">Pickup</a>
                                                            <a href="#"
                                                                onclick="changeStatus(<?= $booking['bookings_id'] ?>, 'Complete')">Complete</a>
                                                            <a href="#"
                                                                onclick="changeStatus(<?= $booking['bookings_id'] ?>, 'Cancel')">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:<?= base_url() ?>assets/admin/partials/_footer.html -->
        <footer class="footer">
            <div class="footer-wrap">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                            href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                            href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                        templates</span>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- Full width, full screen modal -->
<div class="modal fade" id="addPricingModal" tabindex="-1" aria-labelledby="addPricingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPricingModalLabel">Add Pricing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-sample" id="pricingForm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><b>Category</b></th>
                                <th scope="col"><b>Hourly Price</b></th>
                                <th scope="col"><b>Daily Price</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Small</td>
                                <td><input type="text" class="form-control" id="hourlyPrice1"></td>
                                <td><input type="text" class="form-control" id="dailyPrice1"></td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td><input type="text" class="form-control" id="hourlyPrice2"></td>
                                <td><input type="text" class="form-control" id="dailyPrice2"></td>
                            </tr>
                            <tr>
                                <td>Large</td>
                                <td><input type="text" class="form-control" id="hourlyPrice3"></td>
                                <td><input type="text" class="form-control" id="dailyPrice3"></td>
                            </tr>
                            <tr>
                                <td>Extra Large</td>
                                <td><input type="text" class="form-control" id="hourlyPrice4"></td>
                                <td><input type="text" class="form-control" id="dailyPrice4"></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" align="center"><b>Add-Ons</b></th>
                            </tr>
                            <tr>
                                <th scope="col"><b>Particulars</b></th>
                                <th scope="col"><b>Rate</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Premium Service 1</td>
                                <td><input type="text" class="form-control" id="premiumServiceRate1"></td>
                            </tr>
                            <tr>
                                <td>Premium Service 2</td>
                                <td><input type="text" class="form-control" id="premiumServiceRate2"></td>
                            </tr>
                            <tr>
                                <td>Premium Service 3</td>
                                <td><input type="text" class="form-control" id="premiumServiceRate3"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    // Load CKEditor with custom configuration
    CKEDITOR.replace('description', {
        height: 100 // Set the initial height (in pixels)
    });
    CKEDITOR.replace('helpGuide', {
        height: 100 // Set the initial height (in pixels)
    });

    // Hide CKEditor toolbar
    $('.cke_top, .cke_bottom').hide();// Hide the top toolbar

    function toggleDropdown(id) {
        var dropdown = document.getElementById(id);
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        } else {
            // Close all other dropdowns
            var dropdowns = document.getElementsByClassName('dropdown-content');
            for (var i = 0; i < dropdowns.length; i++) {
                dropdowns[i].classList.remove('show');
            }
            dropdown.classList.add('show');
        }
    }
</script>