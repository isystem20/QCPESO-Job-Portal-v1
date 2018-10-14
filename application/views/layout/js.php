    </div>

  </div>
</div>

    <script data-cfasync="false" src="<?php echo base_url();?>themes/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/classie/classie.js"></script>
    <?php
    if (!empty($charts)) { ?>
    <script src="<?php echo base_url(); ?>themes/bower_components/d3/d3.js"></script>
    <script src="<?php echo base_url(); ?>themes/bower_components/rickshaw/rickshaw.js"></script>
    <script src="<?php echo base_url(); ?>themes/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>themes/bower_components/morris.js/morris.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/amchart/js/amcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/amchart/js/serial.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/amchart/js/light.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/custom-dashboard.js"></script>
    <?php
    }
    ?>

    <?php
    if (!empty($tables)) { ?>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>themes/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/data-table/js/data-table-custom.js"></script>        
    <?php
    }
    ?>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/js/script.js"></script>
</body>


</html>