

<?php $__env->startSection("content"); ?>


<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>I'm Showng Student Datas...</p>
  </div>
</div>
  <?php  @dump($students) ?>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Student List</h3><br>
  <div class="row">
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-3">
        <p><?php echo e($student->id); ?></p>
        <p><?php echo e($student->name); ?></p>
        <p><?php echo e($student->email); ?></p>
        <p><?php echo e($student->date_of_birth); ?></p>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAREQ\Laravel\app1\resources\views/home.blade.php ENDPATH**/ ?>