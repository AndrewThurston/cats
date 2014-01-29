<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<div class="header">

		<div class="wrapper">

			<h1 class="main-title"><a href="./">The PDO Cat Project.</a></h1>
			<?php if($current_db){
				?>
					<span class="db_headline">Current database: <?php echo $current_db ?></span>
			<?php } ?>
			<hr>

			
			

		</div>

</div>