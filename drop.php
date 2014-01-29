<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$action = $_POST["action"];
	$new_db = $_POST["db_name"];
	$new_pass = $_POST["db_pass"];
	$new_user = $_POST["db_user"];

	$result_body = $result_body . "Database Name: ". $new_db . "\n";
	$result_body = $result_body . "Username: " . $new_user . "\n";
}

$pageTitle = "Delete" . $new_db;
include('inc/header.php');

require_once 'login.php';
try {
    $dbh = new PDO('mysql:host=localhost;', $root_user, $root_pass);
    echo "connected successfully";
    $dbh->exec("DROP DATABASE $new_db;") 
        or die(print_r($dbh->errorInfo(), true));

		echo "Deletion of database \"" . $new_db . "\" succeeded.<br>";

    $dbh = null;
} catch (PDOException $e) {
    print "DB Error: " . $e->getMessage() . "<br/>";
    die();
}
$dbh = null;
break;

?>