<!doctype html>
<html>
<head>
	<title>My todo's</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body>

           <div class="col-sm-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
        <h1 class="text-capitalize text-center">My Todo's</h1>
         </div>
       </div>
       <!--<button class="btn btn-success btn-lg">Back To Create Task</button>-->
        <table class="table table-bordered data-striped">
            <tr>
                <th>Task Name</th>
                <th>Status</th>
                <th>Description about my task</th>
                <th>Due Date</th>
            </tr>

           <?php foreach($rows as $row){?>        
           <tr>
             <td class="active"><?php echo $row->task; ?></td>
             <td class="active"><?php echo $row->status; ?></td>
             <td class="active"><?php echo $row->description; ?></td>
             <td class="active"><?php echo $row->date; ?></td>
           </tr><?php }?> 
         </table>
       </div>
           
         
</body>
</html>