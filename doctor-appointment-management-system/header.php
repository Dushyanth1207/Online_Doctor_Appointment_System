<!doctype html>
<html lang="en">
	<head >
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Doctor Appointment System</title>

	    <!-- Custom styles for this page -->
	    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">

	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	    <style>
	    	.border-top { border-top: 1px solid #e5e5e5; }
			.border-bottom { border-bottom: 1px solid #e5e5e5; }
			.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
                        body{background-color:#F9E79F;}
	    </style>
	</head>
	<body>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
			<div class="col">
		    	<img src='images\D ICON.jpeg' alt="DSCE ICON" width="80" height="60">
                      
		    </div>
			<div id="google_translate_element"></div>

				<script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
				}
				</script>

			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		    <?php
		    if(!isset($_SESSION['patient_id']))
		    {
		    ?>
			
		    <div class="col text-right"><a href="login.php">Login</a></div>
		   	<?php
		   	}
		   	?>
		    
	    </div>

	    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	      	<h1  style="background-color:lavender; font-family:algerian;" class="display-4"><b >Online Doctor Appointment System<b></h1>
	    </div>
	    <br />
	    <br />
	    <div class="container-fluid">