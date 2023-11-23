
<?php $__env->startSection('section'); ?>
<div class="container form-page">
    <div class="row">
        <div class="col-12 ">
           <div class="form-container " id="signup">
                <h1 class="form-title">Signup</h1>
                 <form action="<?php echo e(URL::to('/registerUser')); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                    <input type="email" name="email" placeholder="Enter your email" class="form-ip" required>
                    <input type="password" name="password" placeholder="Enter your password" class="form-ip" required>
                    <input type="password" placeholder="Confirm your password" class="form-ip">
                    <input type="submit" name="submit" value="Signup" class="form-ip" id="login">
                 </form>
                  <h5 class="form-bottom">Already have an account? 
                    <a href="#" class="signup-link">Login</a>
                  </h5>
             </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MD. MOKHTAR\Desktop\shoppingCart\shoppingcart\resources\views/register.blade.php ENDPATH**/ ?>