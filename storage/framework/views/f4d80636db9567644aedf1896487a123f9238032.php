
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
    <!-- <h2>Role's List</h2> -->
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="right">
              <h4 class="float-left">Role - List</h4>
              <a  class="btn btn-success float-right" href="<?php echo e(url('admin/role/create')); ?>">Add Role</a>
            </div>
           <!--  <div class="right"><a class="btn btn-success" href="<?php echo e(url('admin/role/create')); ?>">Add Role</a></div> -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Name</th>
                <th>Edit/Delete</th>
              </tr>
              </thead>
              <tbody>
                <?php ($i=0); ?>

                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php ($i++); ?>
                  <tr>
                    <td><?php echo e($i); ?></td>
                    <td><?php echo e($row->id); ?></td>
                    <td><?php echo e($row->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('role.edit', $row->id)); ?>" class="btn btn-primary btn-sm"">Edit</a>
                        <form action="<?php echo e(route('role.destroy', $row->id)); ?>" method="post" style="display: inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                    </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No.</th>
                <th>Id</th>
                <th>Name</th>
                <th>Edit/Delete</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\lara_cms\resources\views/admin/role.blade.php ENDPATH**/ ?>