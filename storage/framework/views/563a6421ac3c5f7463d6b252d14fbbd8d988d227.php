<?php $__env->startSection('content'); ?>
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <?php if(Auth::guest()): ?>
                <div class="panel-body">
                    Please login to view catalog.
                    <ul>
                        <li>Admin: admin@gmail.com | secret</li>
                        <li>Customer: customer@gmail.com | secret</li>
                    </ul>
                </div>
                <?php else: ?>
                <div class="panel-body">
                    You're logged in.
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>