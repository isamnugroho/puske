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
									NIK <?php echo form_error('id_pegawai') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="ID Pegawai" value="<?php echo $id_pegawai; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Pegawai <?php echo form_error('nama_pegawai') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai" value="<?php echo $nama_pegawai; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Kelamin <?php echo form_error('jenis_kelamin') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('jenis_kelamin', array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'), $jenis_kelamin, array('class' => "form-control")); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Npwp <?php echo form_error('npwp') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="npwp" id="npwp" placeholder="Npwp" value="<?php echo $npwp; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Tempat Lahir <?php echo form_error('tempat_lahir') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Tanggal Lahir <?php echo form_error('tanggal_lahir') ?>
								</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jabatan <?php echo form_error('id_jabatan') ?>
								</label>
								<div class="col-sm-9">
									<?php echo cmb_dinamis('id_jabatan', 'tbl_jabatan', 'nama_jabatan', 'id_jabatan', $id_jabatan); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Bidang <?php echo form_error('id_bidang') ?>
								</label>
								<div class="col-sm-9">
									<?php echo cmb_dinamis('id_bidang', 'tbl_bidang', 'nama_bidang', 'id_bidang', $id_bidang); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									<input type="hidden" name="old_id_pegawai" value="<?php echo $id_pegawai; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
									<a href="<?php echo site_url('pegawai') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/pegawai/tbl_pegawai_form.blade.php ENDPATH**/ ?>