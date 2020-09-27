<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Laravel - How to Generate Dynamic PDF from HTML using DomPDF</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Customer Data</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="<?php echo e(url('dynamic_pdf/pdf')); ?>" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>id</th>
       <th>name</th>
       <th>contact</th>
       <th>username</th>
       <th>password</th>
      </tr>
     </thead>
     <tbody>
     <?php $__currentLoopData = $customer_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
       <td><?php echo e($custom->id); ?></td>
       <td><?php echo e($custom->name); ?></td>
       <td><?php echo e($custom->contact); ?></td>
       <td><?php echo e($custom->username); ?></td>
       <td><?php echo e($custom->password); ?></td>
      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html><?php /**PATH C:\xampp\htdocs\project\resources\views/home/show_customer_list.blade.php ENDPATH**/ ?>