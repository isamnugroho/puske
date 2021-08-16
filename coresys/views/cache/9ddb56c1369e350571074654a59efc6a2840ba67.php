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
									Kode Diagnosa <?php echo form_error('kode_diagnosa') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kode_diagnosa" id="kode_diagnosa" placeholder="Kode Diagnosa" value="<?php echo $kode_diagnosa; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Penyakit <?php echo form_error('nama_penyakit') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_penyakit" id="nama_penyakit" placeholder="Nama Penyakit" value="<?php echo $nama_penyakit; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Ciri Ciri Penyakit <?php echo form_error('ciri_ciri_penyakit') ?>
								</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" name="ciri_ciri_penyakit" id="ciri_ciri_penyakit" placeholder="Ciri Ciri Penyakit"><?php echo $ciri_ciri_penyakit; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Keterangan <?php echo form_error('keterangan') ?>
								</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Ciri Ciri Umum <?php echo form_error('ciri_ciri_umum') ?>
								</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" name="ciri_ciri_umum" id="ciri_ciri_umum" placeholder="Ciri Ciri Umum"><?php echo $ciri_ciri_umum; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="old_kode_diagnosa" value="<?php echo $kode_diagnosa; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('diagnosa') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/diagnosa/tbl_diagnosa_penyakit_form.blade.php ENDPATH**/ ?>