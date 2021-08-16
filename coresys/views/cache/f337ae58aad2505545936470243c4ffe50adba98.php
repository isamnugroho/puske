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
									Nama Dokter <?php echo form_error('kode_dokter') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('kode_dokter', $kode_dokter_list, $kode_dokter, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Hari <?php echo form_error('hari') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('hari', array('Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu'), $hari, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jam Mulai <?php echo form_error('jam_mulai') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jam_mulai" id="jam_mulai" placeholder="Jam Mulai" value="<?php echo $jam_mulai; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jam Selesai <?php echo form_error('jam_selesai') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jam_selesai" id="jam_selesai" placeholder="Jam Selesai" value="<?php echo $jam_selesai; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Poli <?php echo form_error('id_poli') ?>
								</label>
								<div class="col-sm-9">

									<?php echo cmb_dinamis('id_poli', 'tbl_poli', 'nama_poli', 'id_poli', $id_poli) ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>" />
								</label>
								<div class="col-sm-9">

									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('jadwalpraktek') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/jadwalpraktek/tbl_jadwal_praktek_dokter_form.blade.php ENDPATH**/ ?>