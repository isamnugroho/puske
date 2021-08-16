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
									Kode Operasi <?php echo form_error('kode_operasi') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kode_operasi" id="kode_operasi" placeholder="Kode Operasi" value="<?php echo $kode_operasi; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Operasi <?php echo form_error('nama_operasi') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_operasi" id="nama_operasi" placeholder="Nama Operasi" value="<?php echo $nama_operasi; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Biaya <?php echo form_error('biaya') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="biaya" id="biaya" placeholder="Biaya" value="<?php echo $biaya; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Tindakan Oleh <?php echo form_error('tindakan_oleh') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('tindakan_oleh', array('Dokter' => 'Dokter', 'Petugas' => 'Petugas', 'Dokter dan Petugas' => 'Dokter dan Petugas'), $tindakan_oleh, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="old_kode_operasi" value="<?php echo $kode_operasi; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('operasi') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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