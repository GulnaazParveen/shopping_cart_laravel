
<?php $__env->startSection('section'); ?>
<div class="container form-page">
    <div class="row">
        <div class="col-12 ">
           <div class="form-container " id="signup">
                <h1 class="form-title">login here</h1>
                  <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e(session()->get('success')); ?></p>
                    </div>
                  <?php endif; ?>
                  <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <p><?php echo e(session()->get('error')); ?></p>
                    </div>
                  <?php endif; ?>
                 <form action="<?php echo e(URL::to('/loginUser')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="email" name="email"  placeholder="Enter your email" class="form-ip">
                    <input type="password" name="password" placeholder="Enter your password" class="form-ip">
                    <input type="submit" value="Login" class="form-ip" id="login">
                 </form>
                  <h5 class="form-bottom">Dont't have an account? 
                    <a href="#" class="signup-link">Signup</a>
                  </h5>
             </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MD. MOKHTAR\Desktop\shoppingCart\shoppingcart\resources\views/login.blade.php ENDPATH**/ ?>