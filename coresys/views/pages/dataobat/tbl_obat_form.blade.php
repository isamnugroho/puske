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
									Kode Obat <?php echo form_error('kode_obat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kode_obat" id="kode_obat" placeholder="Kode Obat" value="<?php echo $kode_obat; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Obat <?php echo form_error('nama_obat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_obat" id="nama_obat" placeholder="Nama Obat" value="<?php echo $nama_obat; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Obat <?php echo form_error('jenis_obat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jenis_obat" id="jenis_obat" placeholder="Jenis Obat" value="<?php echo $jenis_obat; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Dosis Aturan Obat <?php echo form_error('dosis_aturan_obat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dosis_aturan_obat" id="dosis_aturan_obat" placeholder="Dosis Aturan Obat" value="<?php echo $dosis_aturan_obat; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jenis Satuan <?php echo form_error('satuan') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" value="<?php echo $satuan; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="old_kode_obat" value="<?php echo $kode_obat; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('dataobat') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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