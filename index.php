<?php 
$pageTitle = "Cats_Home";
// $current_db = "testing!";
include('inc/header.php'); 
?>
<body>
	<div class="container">
		<ul class="nav-main">
			<li>
				<form action="new.php">
					<input type="submit" value="> Create a new database <">
				</form>
			</li> 
			<li>
				<form action="load.php">
					<input type="submit" value="> Load a database <">
				</form>
			</li>
		</ul>
	</div>
</body>

<?php include('inc/footer.php'); ?>
</html>