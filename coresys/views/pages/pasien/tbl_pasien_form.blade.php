@extends('layouts.master')

@section('content')
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
									No Ktp <?php echo form_error('no_ktp') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No Ktp" value="<?php echo $no_ktp; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									No Bpjs <?php echo form_error('no_bpjs') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No Bpjs" value="<?php echo $no_bpjs; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									No Rekamedis <?php echo form_error('no_rekamedis') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_rekamedis" id="no_rekamedis" placeholder="No Rekamedis" value="<?php echo $no_rekamedis; ?>" readonly />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Pasien <?php echo form_error('nama_pasien') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" value="<?php echo $nama_pasien; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Status Pasien <?php echo form_error('status_pasien') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('status_pasien', array('' => 'Pilih', 'BPJS' => 'BPJS', 'Umum' => 'Umum'), $status_pasien, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Kelamin <?php echo form_error('jenis_kelamin') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('jenis_kelamin', array('L' => 'Laki-Laki', 'P' => 'Perempuan'), $jenis_kelamin, array('class' => 'form-control')); ?>
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
									<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Alamat <?php echo form_error('alamat') ?>
								</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('pasien') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- end: TEXT FIELDS PANEL -->
			</div>
		</div>
	</div>
@endsection