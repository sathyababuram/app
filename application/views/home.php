<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Todo App</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<body>
	<div class="col-md-12">
      <div class="panel panel-primary">
     	<div class="panel-heading">
     		<h1 class="text-center">My Todo's</h1>
     	</div>
     	 </div>
	</div>

	<?php
	$task=$_POST['task'];
$status=$_POST['status'];
$description=$_POST['description'];
$date=$_POST['date'];


?>
</body>
</html>