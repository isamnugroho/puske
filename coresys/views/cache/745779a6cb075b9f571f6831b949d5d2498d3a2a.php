<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li>
						<a href="#">
							Dashboard
						</a>
					</li>
					<li class="active">
						Data Tables
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- start: TEXT FIELDS PANEL -->
				<div class="panel panel-white">
					<div class="panel-heading">
						<h4 class="panel-title">Text <span class="text-bold">Fields</span></h4>
					</div>
					<div class="panel-body">
						<table class="table">
							<tr><td>Full Name</td><td><?php echo $full_name; ?></td></tr>
							<tr><td>Email</td><td><?php echo $email; ?></td></tr>
							<tr><td>Password</td><td><?php echo $password; ?></td></tr>
							<tr><td>Images</td><td><?php echo $images; ?></td></tr>
							<tr><td>Id User Level</td><td><?php echo $id_user_level; ?></td></tr>
							<tr><td>Is Aktif</td><td><?php echo $is_aktif; ?></td></tr>
							<tr><td></td><td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td></tr>
						</table>
					</div>
				</div>
				<!-- end: TEXT FIELDS PANEL -->
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/user/tbl_user_read.blade.php ENDPATH**/ ?>