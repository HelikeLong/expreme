<?php
	$uri 		= $_SERVER['REQUEST_URI'];
	$uri 		= str_replace("/wallace/expreme", "", $uri);

	$dominio	= "http://".$_SERVER['HTTP_HOST'];
	$dominio    = "http://expre.me";

	$du 		= AntiInjection($dominio.$uri);
	
	$sql = "SELECT * FROM url WHERE short='".$du."'";
	$sql = mysql_query($sql) or die("die... you be next!");
	$qnt = mysql_num_rows($sql);
	if($qnt > 0) {
		$row = mysql_fetch_assoc($sql);
		$views = $row['views'];
		$views++;

		$sql = "UPDATE url SET views='".$views."' WHERE id='".$row['id']."'";
		$sql = mysql_query($sql) or die("die... you be next!");
		sleep(1);

		header("Location: ".$row['url']);
	}
?>