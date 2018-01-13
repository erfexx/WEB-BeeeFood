<?php $__env->startSection('content'); ?>
<div class="container">
    <?php /*<div class="row">*/ ?>
        <?php /*<div class="col-md-10 col-md-offset-1">*/ ?>
            <?php /*<div class="panel panel-default">*/ ?>
                <?php /*<div class="panel-heading">Welcome</div>*/ ?>

                <?php /*<div class="panel-body">*/ ?>
                    <?php /*Your Application's Landing Page.*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*</div>*/ ?>
    <img src="<?php echo e(asset('assets/image/image_slider.jpg')); ?>" alt="">
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>