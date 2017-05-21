<div class="span_11">
		<div class="col-md-6 col_4">
			<!-- <link rel="stylesheet" href="css/clndr.css" type="text/css" /> -->
			<script src="webroot/js/admin/underscore-min.js" type="text/javascript"></script>
			<script src= "webroot/js/admin/moment-2.2.1.js" type="text/javascript"></script>
			<script src="webroot/js/admin/clndr.js" type="text/javascript"></script>
			<script src="webroot/js/admin/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <link href="webroot/css/admin/jqvmap.css" rel='stylesheet' type='text/css' />
    <script src="webroot/js/admin/jquery.vmap.js"></script>
    <script src="webroot/js/admin/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="webroot/js/admin/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#333333',
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });
        });
    </script>
    <!-- <script src="webroot/js/admin/jquery.min.js"></script> -->
    <script src="webroot/js/admin/bootstrap.min.js"></script>
    <script src="webroot/js/admin/parsley.js"></script>
    <script src="webroot/js/admin/jspdf.min.js"></script>
    
</body>
</html>
