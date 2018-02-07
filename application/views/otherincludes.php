<!--<link rel="stylesheet" href="<?php echo base_url();?>template/css/font.css">
-->		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">-->
    <!--   <link href="<?php echo base_url();?>template/css/bayanno.css" media="screen" rel="stylesheet" type="text/css" />-->
    <!--   -->  <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>template/js/html5shiv.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>template/js/excanvas.js" type="text/javascript"></script>
        <![endif]-->
<!--<script src="<?php echo base_url();?>template/js/bayanno.js" type="text/javascript"></script>-->
        
        
 <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>template/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>template/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>template/vendor/themify-icons/themify-icons.min.css">
		<link href="<?php echo base_url();?>template/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link href="<?php echo base_url();?>template/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
                <link href="<?php echo base_url();?>template/vendor/fullcalendar/fullcalendar.min.css" rel="stylesheet" media="screen">
		
	   <link href="<?php echo base_url();?>template/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>template/vendor/DataTables/css/DT_bootstrap.css" rel="stylesheet" media="screen">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO CSS -->
                
                <link href="<?php echo base_url();?>template/vendor/bootstrap-fileinput/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/styles.css">
		<link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/plugins.css">
		<link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/themes/theme-1.css" id="skin_color"/>      
                
                 <link href="<?php echo base_url();?>template/vendor/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/sweetalert/ie9.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>template/vendor/toastr/toastr.min.css" rel="stylesheet" media="screen">
        
        
        
        <?php
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		
		$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;