<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.6 - Registration Form Validation with Error Messages - HDTuto.com</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>



<div class="container">

    <h3>Laravel 5.6 - Registration Form Validation with Error Messages - HDTuto.com</h3>

    <?php if(count($errors) > 0): ?>

      <div class="alert alert-danger">



          <ul>

              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <li><?php echo e($error); ?></li>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </ul>

      </div>



    <?php endif; ?>



    <?php if($message = Session::get('success')): ?>

          <div class="alert alert-success">

              <p><?php echo e($message); ?></p>

          </div>

    <?php endif; ?>



    <form action="<?php echo e(url('register')); ?>" method="POST" id="signupForm">

      <?php echo e(csrf_field()); ?>




        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">

            <label class="control-label">Name:</label>

            <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">

            <?php if($errors->has('name')): ?>

                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>

            <?php endif; ?>

        </div>

        <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">

            <label class="control-label">Phone:</label>

            <input type="text" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>">

            <?php if($errors->has('phone')): ?>

                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>

            <?php endif; ?>

        </div>

        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">

            <label class="control-label">Email:</label>

            <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>">

            <?php if($errors->has('email')): ?>

                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>

            <?php endif; ?>

        </div>

        <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">

            <label class="control-label">Password:</label>

            <input type="password" name="password" class="form-control">

            <?php if($errors->has('password')): ?>

                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>

            <?php endif; ?>

        </div>

        <div class="form-group <?php echo e($errors->has('confirm_password') ? 'has-error' : ''); ?>">

            <label class="control-label">Confirm Password:</label>

            <input type="password" name="confirm_password" class="form-control">

            <?php if($errors->has('confirm_password')): ?>

                <span class="text-danger"><?php echo e($errors->first('confirm_password')); ?></span>

            <?php endif; ?>

        </div>

        <div class="form-group">

            <button class="btn btn-success" type="submit">Submit</button>

        </div>

    </form>

</div>



</body>

</html><?php /**PATH C:\xampp\htdocs\project\resources\views/register.blade.php ENDPATH**/ ?>