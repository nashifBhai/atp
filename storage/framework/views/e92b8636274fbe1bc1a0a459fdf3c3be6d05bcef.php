<!--
 export_excel.blade.php
!-->

<!DOCTYPE html>
<html>
 <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Export Data to Excel in Laravel using Maatwebsite</h3><br />
   <div align="center">
    <a href="<?php echo e(route('export_excel.excel')); ?>" class="btn btn-success">Export to Excel</a>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>id</td>
      <td>name</td>
      <td>Conatct</td>
      <td>Username</td>
      <td>Password</td>
     </tr>
     <?php $__currentLoopData = $customer_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
      <td><?php echo e($customer->id); ?></td>
      <td><?php echo e($customer->name); ?></td>
      <td><?php echo e($customer->contact); ?></td>
      <td><?php echo e($customer->username); ?></td>
      <td><?php echo e($customer->password); ?></td>
     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
   </div>
   
  </div>
 </body>
</html>
<?php /**PATH C:\xampp\htdocs\project\resources\views/export_excel.blade.php ENDPATH**/ ?>