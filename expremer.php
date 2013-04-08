<?php
include("includes/mysql.php");
include("includes/functions.php");

$user_id 	= 0;
$type 		= "redirect";
$qnt 		= 1;


if($_POST['link']) {
	$link 		= AntiInjection($_POST['link']); 
	if($_POST['type']) $type 		= $_POST['type'];
	
	while($qnt > 0) {
		$short 		= "http://expre.me/".Expremedor(); 
		$qry = "SELECT id FROM url WHERE short='".$short."'";
		$sql = mysql_query($qry) or die($qry);
		$qnt = mysql_num_rows($sql);
	}

	$qry1 = "SELECT short FROM url WHERE url='".$link."'";
	$sql1 = mysql_query($qry1) or die($qry1);
	$qnt1 = mysql_num_rows($sql1);
	if($qnt1==0) {

			$qs = "INSERT INTO url (url,short,type,views,user_id)VALUES('".$link."','".$short."','".$type."','0','".$user_id."')";
			$ss = mysql_query($qs) or die($qs);

	} else {
		$row 	= mysql_fetch_assoc($sql1);
		$short	= $row['short'];
	}

	echo $short;

} else echo "error";

?>