<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="utf-8">
	<title>Todo App</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<body>
	<div class="col-md-12">
      <div class="panel panel-primary">
     	<div class="panel-heading">
     		<h1 class="text-center">Todo App</h1>
     	</div>
     	 </div>
	</div>

     	<div class="col-md-6 col-md-offset-3">
       
         <div class="panel panel-info">
           <div class="panel-heading">
             <h1 class="text-center text-default">Create New Task</h1>
           </div>
         </div>
      
            
 

 <?php echo form_open('Welcome/Add_task');?>
        <form class="col-md-8" role="form" method="POST">
           
            <span class="form-group">
                <label class="control-label">Name Of The Task:</label>
                <input type="text" name="task" placeholder="task name" class="form-control" ng-model="todo.task" required></input>
            </span>
            <span class="form-group">
                <label class="control-label">status:</label>
                <input type="task" name="status" placeholder="urgent/not urgent" class="form-control" ng-model="todo.statuss" required></input>
            </span>
            <span class="form-group">
                <label class="control-label">Task Description:</label>
                <textarea name="description" placeholder="what i going to do?" class="form-control" ng-model="todo.descriptions" required></textarea>
            </span>
            <span class="form-group">
                <label class="control-label">Due Date:</label>
                <input type="date" name="date" class="form-control" placeholder="enter due date" ng-model="todo.date" required></input>
            </span><br>
            
            <input type="submit"  class="btn btn-info btn-block form-control" name="add" value="Create Task"></input>
           <!-- <?php echo form_close(); ?>-->
        </form>
     </div>
</div>
     	</div>
       


     


<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/angular/lib/angular/angular.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("https://ajax.google.apis.com/ajax/libs/angularjs/1.4.4/angular.min.js");?>"></script>

</body>
<style type="text/css">
.panel-heading{color: white;font-family: sans-serif;}
</style>
</html>