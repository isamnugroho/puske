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
									Nama Lengkap <?php echo form_error('full_name') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Nama Lengkap" value="<?php echo $full_name; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									Email <?php echo form_error('email') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
								</div>
							</div>
							<?php
								if ($that->uri->segment(2) == 'create') {
							?>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="form-field-2">
											Password <?php echo form_error('password') ?>
										</label>
										<div class="col-sm-9">
											<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
										</div>
									</div>
							<?php
								}
							?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									Level User <?php echo form_error('id_user_level') ?>
								</label>
								<div class="col-sm-9">
									<?php echo cmb_dinamis('id_user_level', 'tbl_user_level', 'nama_level', 'id_user_level', $id_user_level,'DESC') ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									Status Aktif <?php echo form_error('is_aktif') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('is_aktif', array('y' => 'AKTIF', 'n' => 'TIDAK AKTIF'), $is_aktif, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									Foto Profile <?php echo form_error('images') ?>
								</label>
								<div class="col-sm-9">
									<input type="file" name="images">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-2">
									<input type="hidden" name="id_users" value="<?php echo $id_users; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
									<a href="<?php echo site_url('user') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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