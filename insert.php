<?php
require 'config.php';
if(isset($_POST['submit'])){
	$date = $_POST['date']." ".$_POST['time'];
	$capt = $_POST['caption'];
	$uploaddir = 'image/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

	echo '<pre>';
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		$db->query("INSERT INTO list VALUES('','$capt','$uploadfile','$date','0')");
		 header('Location: '.$_SERVER['HTTP_REFERER']);
	    echo "Added <a href='{$_SERVER['HTTP_REFERER']}'>Back</a>";
	} else {
	    echo "Possible file upload attack!\n";
	}

	

	print "</pre>";
}
?>