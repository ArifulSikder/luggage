 <input type="hidden" id="base_url" value="<?=base_url()?>">
 <!-- base:js -->
 <script src="<?=base_url()?>assets/admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?=base_url()?>assets/admin/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="<?=base_url()?>assets/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendors/progressbar.js/progressbar.min.js"></script>
		<script src="<?=base_url()?>assets/admin/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="<?=base_url()?>assets/admin/vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="<?=base_url()?>assets/admin/vendors/justgage/justgage.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="<?=base_url()?>assets/admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
 <?php
    if($this->uri->segment(1) == "Myhub"){
 ?>
    <script>
        $(document).ready(function(){
        fetchHubSummary();
    })
    <?php } ?>
    </script>
  </body>
</html>