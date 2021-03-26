<?php $__env->startSection('title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1_heading'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('top_left'); ?>
    <?php echo $__env->make('layouts.block.top_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('top_right'); ?>
    <?php echo $__env->make('layouts.block.top_right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('left_sb'); ?>
<?php echo $__env->make('layouts.block.left_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h2>Add Role</h2>
    <div class="container-fluid">
        <div class="">
            <div class="card push-top">
                <div class="card-header">
                Add Role
                </div>

                <div class="card-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div><br />
                <?php endif; ?>
                    <form method="post" action="<?php echo e(route('role.store')); ?>">
                        <div class="form-group">
                            <?php echo csrf_field(); ?>
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <button type="submit" class="btn btn-block btn-danger">Add Role</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\lara_cms\resources\views/admin/addrole.blade.php ENDPATH**/ ?>