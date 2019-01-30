<?PHP   
	$page = $_REQUEST['content']; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<?php require_once('views/head.inc.php') ?>
	</head>
	<body>
		<div id="wrapper" class="toggled">
			<?php require_once('views/header.inc.php') ?>
			
			<!-- Sidebar -->
			<?php require_once('views/menu.inc.php') ?>
			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper" class="toggled">
				<?php require_once("views/body.inc.php"); ?>
			</div>
			<!-- /#page-content-wrapper -->
		</div>
		<!-- /#wrapper --> 
	</body>
</html> 

