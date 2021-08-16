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
						<form role="form" class="form-horizontal" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Poli <?php echo form_error('nama_poli') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_poli" id="nama_poli" placeholder="Nama Poli" value="<?php echo $nama_poli; ?>" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Ruang Poli <?php echo form_error('ruang_poli') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="ruang_poli" id="ruang_poli" placeholder="Ruang Poli" value="<?php echo $ruang_poli; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="id_poli" value="<?php echo $id_poli; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('poli') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- end: TEXT FIELDS PANEL -->
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/poli/tbl_poli_form.blade.php ENDPATH**/ ?>