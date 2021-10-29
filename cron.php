<?php 
require 'config.php';
$ig = new \InstagramAPI\Instagram(false, false, $storageConfig = []);
$qur = $db->query("SELECT * FROM list WHERE status = '0' ORDER BY date");
while($row=$qur->fetch_assoc()){
	
	if($row['date'] < date('Y-m-d H:i:s')){
		
		try {
		$ig->login($config['username'],$config['password']);

		// if you want only a caption, you can simply do this:
		$metadata = ['caption' => $row['caption']];
		  $resizer = new \InstagramAPI\MediaAutoResizer($row['file']);
		$ig->timeline->uploadPhoto($resizer->getFile(), $metadata);
		$db->query("UPDATE list SET status = '1' WHERE id = '{$row['id']}'");
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
?>