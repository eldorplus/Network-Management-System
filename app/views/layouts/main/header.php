<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Network Management System <?php if (isset($page_title)) echo ' :: ', $page_title; ?></title>
		
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/global.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" />
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	</head>
	<body>
		<div id="container">
			<div id="header" class="no_select">
				<div class="logo">
					<a href="<?php echo base_url(); ?>">
						<img alt="Home" src="<?php echo base_url(); ?>images/logo.png" height="82" width="322" />
					</a>
				</div>
				<ul>
					<?php if (isset($id)): ?>
						<li><a href="<?php echo base_url(); ?>devices/edit/<?php echo $id; ?>">Edit Device</a></li>
					<?php endif; ?>
					<li><a href="<?php echo base_url(); ?>devices/add">Add Device</a></li>
					<li><a href="<?php echo base_url(); ?>">View All Devices</a></li>
				</ul>
			</div>
			
			<div id="breadcrumbs" class="no_select">
				<ul>
					<li>
						<a class="home" href="<?php echo base_url(); ?>">
							<img alt="Home" src="<?php echo base_url(); ?>images/home.png" height="24" width="24" />
						</a>
					</li>
					<?php
						if (isset($breadcrumbs))
						{
							foreach ($breadcrumbs as $name => $location)
							{
								if ($location != '')
									echo '<li>' . anchor($location, $name) . '</li>';
								else
									echo '<li><p>' . $name . '</p></li>';
							}
						}
					?>
				</ul>
			</div>