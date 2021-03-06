<!doctype HTML>
<html>
	<head>
		<!-- meta data -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- change this to project title -->
		<title><?php if (isset($name)) echo $name." | " ?><?php echo $projects->get($projectID)->getName() ?></title>

		<!-- stylesheets -->
		<link rel='stylesheet' type='text/css' href='app/styles/style.css' >
		<link rel="stylesheet" href="app/scripts/vendors/remodal_v1.0.7/dist/remodal.css">
		<link rel="stylesheet" href="app/scripts/vendors/remodal_v1.0.7/dist/remodal-default-theme.css">

		<!-- scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
		<script src="app/scripts/maps/markers.js"></script>
		<script src="app/scripts/vendors/remodal_v1.0.7/dist/remodal.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script> 
    <script type="text/javascript">
      var tileURL = "<?php echo $mapTileURL; ?>";
      var tileParameters = <?php echo $mapTileParameters; ?>;
    </script>

        <!-- You can use Open Graph tags to customize link previews.
             Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
        <meta property="og:url"           content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="mbira" />
        <meta property="og:description"   content="An open source platform for creating and managing
                                                   location-based and mobile cultural heritage experiences.
                                                   Built with love by MATRIX: The Center for Digital
                                                   Humanities & Social Sciences." />
        <meta property="og:image"         content="<?php echo $source.$headerPath ?>" />
	</head>


	<body>
		<?php
			include 'app/inc/header.php';
		?>

		<div class="wrap">
