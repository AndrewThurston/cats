<?php
if (isset($_POST['user_db_name'] )) {
	include('inc/header.php');
  echo createDB($_POST['user_db_name'],$_POST['user_db_user'],$_POST['user_db_pass']);
  include('inc/footer.php');
  return;
}
$pageTitle = "Create New";
include('inc/header.php');  ?>

<form method="post" action="">			
	<table>
		<tr>
			<th>
				<label for="$db_name">Database Name: </label>
			</th>
			<td>
				<input type="text" name="user_db_name" id="db_name">
			</td>
		</tr>
	</table>
	<input type="submit" value="Create New">
</form>
<?php
function createDB($db, $user, $pass){
		echo "This is the function for creating a new database!<br>";
		require_once 'login.php';
				try {
				    $dbh = new PDO('mysql:host=localhost;', $root_user, $root_pass);

				    $dbh->exec("CREATE DATABASE `$db`;") 
				        or die(print_r($dbh->errorInfo(), true));
			   //    echo "Connection to mysql succeeded....<br>";
						// echo "Creation of user \"" . $user . "\" succeeded.<br>";
						// echo $result_body;

				    $dbh = null;
				} catch (PDOException $e) {
				    print "DB Error: " . $e->getMessage() . "<br/>";
				    die();
				}
				$dbh = null;

		echo "Creation of database \"" . $db . "\" succeeded.<br>"; ?>
		<form method="post" action="edit-view.php">
			<!-- <input type="hidden" name="user_db_name" value="<?php $db ?>"> -->
	    <input type="submit" value="Click to edit!">
    </form> <?php
	}
?>
<ul class="nav-main">
		<li>
				<form action="./">
					<input type="submit" value="Return Home.">
				</form>
			</li> 
	</ul>
