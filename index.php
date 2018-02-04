<?php

	die();

	include "eirb-common/eirb-cas.php";

	$user = eirb_cas_protect();
	$allowed_users = array("vklho", "pluzu");

	if (! in_array($user, $allowed_users)) {
		die();
	} else {
		include("home.php");
	}
?>
