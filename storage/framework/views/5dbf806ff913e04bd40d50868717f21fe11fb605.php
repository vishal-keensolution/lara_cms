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
<h2>Edit User</h2>
<div class="container-fluid">
    <div class="">
        <div class="card push-top">
            <div class="card-header">
            Edit User
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
            <form  action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <?php echo csrf_field(); ?>
                    <label for="name">Name</label>
                    <input value="<?php echo e($user->name); ?>" type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="<?php echo e($user->email); ?>" type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input value="<?php echo e($user->phone); ?>" type="tel" class="form-control" name="phone"/>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Edit User</button>
            </form>
            </div>
        </div>
    </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<h2>Edit User's Roles</h2>
<div class="container-fluid">
    <div class="">
        <div class="card push-top">
            <div class="card-header">
            Edit User's Roles
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo e(route('userrole.update', $user->id)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                <div class="form-group">
                    <?php
                        $roleids = array( );
                        foreach ($rs['select'] as $key => $r2) 
                        { $roleids[]=$r2->roleid;  }
                    ?>
                    
                    <!-- checkbox -->
                    <div class="form-group">
                        <label for="">Select Roles  &nbsp;&nbsp;&nbsp; </label>
                        <?php $__currentLoopData = $rs['all']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $r1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="icheck-warning d-inline">
                                <input name="roleid[]" id="roleid<?php echo e($r1->id); ?>" <?php if(in_array($r1->id, $roleids)): ?> checked <?php endif; ?> type="checkbox" value="<?php echo e($r1->id); ?>" class="" >
                                <label for="roleid<?php echo e($r1->id); ?>">
                                    <?php echo e($r1->name); ?> 
                                </label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>
                <button type="submit" class="btn btn-block btn-danger">Edit User Roles</button>
            </form>
            </div>
        </div>
    </div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\lara_cms\resources\views/admin/edituser.blade.php ENDPATH**/ ?>