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
									Kode Dokter <?php echo form_error('kode_dokter') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kode_dokter" id="kode_dokter" placeholder="Kode Dokter" value="<?php echo $kode_dokter; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Dokter <?php echo form_error('nama_dokter') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_dokter" id="nama_dokter" placeholder="Nama Dokter" value="<?php echo $nama_dokter; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Kelamin <?php echo form_error('jenis_kelamin') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('jenis_kelamin', array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'), 'jenis_kelamin', array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nomor Induk Dokter <?php echo form_error('nomor_induk_dokter') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nomor_induk_dokter" id="nomor_induk_dokter" placeholder="Nomor Induk Dokter" value="<?php echo $nomor_induk_dokter; ?>" />
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
									Tgl Lahir <?php echo form_error('tgl_lahir') ?>
								</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Alamat <?php echo form_error('alamat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Bagian Poli <?php echo form_error('id_poli') ?>
								</label>
								<div class="col-sm-9">
									<?php echo cmb_dinamis('id_poli', 'tbl_poli', 'nama_poli', 'id_poli', $id_poli) ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="old_kode_dokter" value="<?php echo $kode_dokter; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
									<a href="<?php echo site_url('dokter') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/dokter/tbl_dokter_form.blade.php ENDPATH**/ ?>