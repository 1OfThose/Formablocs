<?php

require_once (__DIR__ . '../../db/global_db.php');

if ($_GET) {
	$rows = $pdo->exec("DELETE FROM formations WHERE id=" . $_GET['id']);
	$rows2 = $pdo->exec("DELETE FROM toutes_formations WHERE link='". $_GET['link'] . "'");

	if ($rows > 0) {
		header("Location: ../users/admin/admin.php");
	} else {
		echo "Error :(";
	}
}

?>