<?php

$domain = 'https://forma.blocs.christopher-gauthier.com/public/assets';
require_once (__DIR__ . '../../db/global_db.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Encodage en utf-8, en XHTML -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Encodage en utf-8, en HTML 5 -->
	<meta charset="utf-8" />
	
	<!-- Encodage en iso-8859-1, en XHTML -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!-- Encodage en iso-8859-1, en HTML 5 -->
	<meta charset="iso-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Formablocs</title>

	<!-- ================ ICONS ================ -->
	<link rel="apple-touch-icon" href="<?=$domain?>/icons/favicon-apple.png">
	<link rel="shortcut icon" href="<?=$domain?>/icons/favicon.svg" type="image/x-icon">
	
	<!-- ================= CSS ================= -->
	<link rel="stylesheet" href="<?=$domain?>/css/style.css">
	<link rel="stylesheet" href="<?=$domain?>/css/responsive.css">
	<link rel="stylesheet" href="https://use.typekit.net/afv1gmg.css">

	<!-- ================ SCRIPTS ================ -->
	<script src="https://kit.fontawesome.com/babf6c6ed5.js" crossorigin="anonymous"></script>

</head>
<body>

<?php

	require_once (__DIR__ . '/nav.php');

?>