
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
    <h2>Edit Role</h2>
    <div class="container-fluid">
        <div class="">
            <div class="card push-top">
                <div class="card-header">
                Edit Role
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
                <form  action="<?php echo e(route('role.update', $role->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <?php echo csrf_field(); ?>
                        <label for="name">Name</label>
                        <input value="<?php echo e($role->name); ?>" type="text" class="form-control" name="name"/>
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Edit Role</button>
                </form>
                </div>
            </div>
        </div>
    <!-- /.row -->
    </div>
  <!-- /.container-fluid -->
  <!-- /.container-fluid -->
<h2>Edit Menu's Roles</h2>
<div class="container-fluid">
    <div class="">
        <div class="card push-top">
            <div class="card-header">
                Edit Menu's Roles
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo e(route('menurole.update', $role->id)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <?php
                        $menuids = array( );
                        foreach ($ms['select'] as $key => $m2) 
                        { $menuids[]=$m2->menuid;  }
                    ?>
                    
                    <!-- checkbox -->
                   
                    <label for="">Select Menus  &nbsp;&nbsp;&nbsp; </label>
                    <div class="row">
                    <?php $__currentLoopData = $ms['all']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $m1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group icheck-warning d-inline col-3">
                            <input name="menuid[]" id="menuid<?php echo e($m1->id); ?>" <?php if(in_array($m1->id, $menuids)): ?> checked <?php endif; ?> type="checkbox" value="<?php echo e($m1->id); ?>" class="" >
                            <label for="menuid<?php echo e($m1->id); ?>">
                                <?php echo e($m1->name); ?> 
                            </label>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Edit Menu's Roles</button>
                </form>
            </div>
        </div>
    </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\lara_cms\resources\views/admin/editrole.blade.php ENDPATH**/ ?>