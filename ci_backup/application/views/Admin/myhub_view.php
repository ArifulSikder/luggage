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
</style>
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hub Quick List</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><b>Hub Name</b></th>
                                            <th><b>Capacity</b></th>
                                            <th><b>Free Space</b></th>
                                            <th><b>Status</b></th>
                                        </tr>
                                    </thead>
                                    <tbody id="hubsummary">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Hub</h4>
                            <form class="forms-sample" id="hubForm">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hub Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="hubname" placeholder="Hub Name"
                                            autocomplete="off">
                                        <input type="hidden" id="hub_id" value="0">
                                        <input type="hidden" id="hub_image" value="default.png">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" placeholder="Address"
                                            onblur="getCoordinates();" autocomplete="off">
                                        <input type="hidden" id="latvalue"><input type="hidden" id="lonvalue">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mobilenumber"
                                            placeholder="Mobile number" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Hub Area
                                        <small>(In Sqft)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="hubarea" placeholder="Hub Area"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Capacity
                                        <small>(Number Of Luggage)</small></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="capacity" placeholder="Capacity"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hubImage" class="col-sm-3 col-form-label">Upload Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="hubImage" name="hubImage">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="description" name="description"
                                            placeholder="Description" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="helpGuide" class="col-sm-3 col-form-label">Help Guide</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="helpGuide" name="helpGuide"
                                            placeholder="Help Guide" rows="2"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hub Detail List</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Hub Name
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Mobile
                                            </th>
                                            <th>
                                                Hub Area (In Sqft)
                                            </th>
                                            <th>
                                                Capacity (Number Of Luggage)
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="hubdetaillist">

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
</script>