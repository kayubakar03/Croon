<?php 
require 'config.php';
if(isset($_GET['del'])){
  $id = $_GET['del'];
  $qur  = $db->query("DELETE FROM list WHERE id = '$id'");
  header('Location: '.$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Instagram Upload Shecduler</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />

<body>
	<br>
	<div class="col-lg-4">
		<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Instagram Scheduler</h3>
  </div>
  <div class="panel-body">
    <!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="insert.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <div class="col-lg-12">
    <label>FIlE IMAGE [ WAJIB JPEG ]</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" class="form-control" required="required" /> <br>
  </div>
    <div class="col-lg-12">
    <label>Caption</label>
    <textarea class="form-control" name="caption" required="required"></textarea>
    <br>
  </div>
    <div class="col-lg-6">
    <label>Tanggal</label>
    
    <input type="date" name="date" required="required" class="form-control"> 
  </div>
   <div class="col-lg-6">
    <label>Waktu</label>
    
    <input type="time" name="time" required="required" class="form-control">  <br>
  </div>
    <button type="submit" name="submit" value="add" class="btn btn-primary btn-block">ADD</button>
</form>
  </div>
</div>
</div>
	<div class="col-lg-8">
		<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">List Schedule - <?=date('Y-m-d H:i:s');?></h3>
  </div>
  <div class="panel-body">
    <!-- The data encoding type, enctype, MUST be specified as below -->
 <table class="table table-bordered">
 	<thead>
 		<th>IMAGE</th>
 		<th>CAPTION</th>
 		<th>DATE</th>
 		<th>STATUS</th>
    <th>ACTION</th>
 	</thead>
  <tbody>
    <?php 
    $ds = $db->query("SELECT * FROM list ORDER BY  date");
    while($row = $ds->fetch_assoc()){
      $status = ($row['status'] == 0 ? "Belum Di Upload" : "Sudah Di Upload");
      echo "
      <tr>
      <td><a href='{$row['file']}' target='_blank'>{$row['file']}</a></td>
      <td>{$row['caption']}</td>
      <td>{$row['date']}</td>
      <td>{$status}</td>
      <td><a href='?del={$row['id']}'>Hapus</a></td>
      </tr>";
    }
    ?>
  </tbody>
 </table>
  </div>
</div>
</div>
</body>

</html>