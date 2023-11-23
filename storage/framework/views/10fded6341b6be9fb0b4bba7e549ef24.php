
<?php $__env->startSection('section'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex">
            <div class="col-6">
                <div class="carousel-container">
                    <div class="shop-image">
                        <img src="img/shopping-cart/cart-12.jpg" alt="" class="shop-fit-image ">
                    </div>
                    <form action="<?php echo e(URL::to('/addToCart)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                      <div class="shop-prefer">
                        <button type="submit" name="addToCart">
                            <p class="addcart-title1">add cart</p>
                        </button>
                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                        <a href="">
                            <p  class="addcart-title">buy now</p>
                        </a>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="addcart-text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa corporis velit odit deserunt, expedita porro aliquid eveniet tempore cumque fuga, esse dolorem alias quaerat reiciendis sequi rem quae nulla sunt ipsum illum! Consectetur, perferendis.
                    </p>
                </div>
                <div class="addcart-rating">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci deleniti fugit hic, assumenda itaque nihil accusantium debitis facilis repellendus aperiam dolorem iste consequuntur minima, asperiores laudantium sequi quidem labore veniam nam expedita alias sed?
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH C:\Users\MD. MOKHTAR\Desktop\shoppingCart\shoppingcart\resources\views/shopDetails.blade.php ENDPATH**/ ?>