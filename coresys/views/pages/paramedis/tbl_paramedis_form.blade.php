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
									Kode Paramedis <?php echo form_error('kode_paramedis') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kode_paramedis" id="kode_paramedis" placeholder="Kode Paramedis" value="<?php echo $kode_paramedis; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Paramedis <?php echo form_error('nama_paramedis') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_paramedis" id="nama_paramedis" placeholder="Nama Paramedis" value="<?php echo $nama_paramedis; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Kelamin <?php echo form_error('jenis_kelamin') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('jenis_kelamin', array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'), $jenis_kelamin, array('class' => 'form-control'));; ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									No Izin Paramedis <?php echo form_error('no_izin_paramedis') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_izin_paramedis" id="no_izin_paramedis" placeholder="No Izin Paramedis" value="<?php echo $no_izin_paramedis; ?>" />
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
									Alamat Tinggal <?php echo form_error('alamat_tinggal') ?>
								</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="3" name="alamat_tinggal" id="alamat_tinggal" placeholder="Alamat Tinggal"><?php echo $alamat_tinggal; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Poli <?php echo form_error('id_poli') ?>
								</label>
								<div class="col-sm-9">
									<?php echo cmb_dinamis('id_poli','tbl_poli', 'nama_poli', 'id_poli', $id_poli); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									<input type="hidden" name="old_kode_paramedis" value="<?php echo $kode_paramedis; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
									<a href="<?php echo site_url('paramedis') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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