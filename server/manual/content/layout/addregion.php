<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  	<title><?php echo PRODUCT_NAME; ?> Documentation</title>
  	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
	<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
	<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />
  	<link href="img/favicon.ico" rel="shortcut icon">
  	<!-- Javascript Libraries -->
  	<script type="text/javascript" src="lib/jquery.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
</head>

<body>
	<a name="Adding_Regions" id="Adding_Regions"></a><h2>Adding Regions</h2>

	<p>As you make the region smaller, you'll see the background (layout canvas) behind. Right click on the background and choose "Add Region".</p>

	<p><img alt="Layout Designer Screenshot - Add Region" src="Ss_layout_designer_add_region.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="403" height="244"></p>

	<p>You should see a new region appears. You can move it around or resize it in the same way as you did before.</p>
	<p>If you intend to display video within the region it is advisable to ensure that the region provides the same aspect ratio as the video,
	otherwise black spaces will be visible.</p>

	<a name="Removing_Regions" id="Removing_Regions"></a><h2>Removing Regions</h2>
	<p>If you decide you do not want a region any more, right click on it and choose "Delete". <br />
	Note that you will loose any media items contained in the region that are not in the library (eg Text, RSS Tickers, Embedded HTML).</p>

	<p><img alt="Layout Designer Screenshot - Delete Region" src="Ss_layout_designer_delete_region.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="289" height="197"></p>

	<a name="Region_Permission" id="Region_Permission"></a><h2>Regions Permissions</h2>

	<p>The owner of the layout has full control on how the new layout is to be shared. A globally shared layout may have one of its
	layout region access rights being disabled for any other user edit. Right click within the region and select "Permissions"
	to define the selected region access rights to other users of the <?php echo PRODUCT_NAME; ?> system</p> 

	<p><img alt="Region Permissions" src="Ss_layout_region_permissions.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="358" height="286"></p>

	<?php include('../../template/footer.php'); ?>
</body>
</html>