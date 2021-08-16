@extends('layouts.master')

@section('content')
	<link rel="stylesheet" href="<?=BASE_URL?>assets/jquery-ui/themes/base/minified/jquery-ui.min.css" type="text/css" />

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
						<form role="form" class="form-horizontal" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form1" name="form1">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Anak <?php echo form_error('nama_anak') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_anak" id="nama_anak" placeholder="Nama Anak" value="<?php echo $nama_anak ?>" onkeyup="anakauto()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Tindakan <?php echo form_error('nama_tindakan') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_tindakan" id="nama_tindakan" value="<?php echo $nama_tindakan ?>" placeholder="Nama Tindakan" onkeyup="tindakanauto()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Obat <?php echo form_error('nama_obat') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_obat" id="nama_obat" value="<?php echo $nama_obat ?>" placeholder="Nama Obat" onkeyup="obatauto()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Jumlah <?php echo form_error('jumlah') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah?>" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Satuan <?php echo form_error('satuan') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" value="<?php echo $satuan ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Tanggal <?php echo form_error('tanggal') ?>
								</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="id_gizi" value="<?php echo $id_gizi; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('perbaikangizi') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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

@section('javascript')
	<script src="<?=BASE_URL?>assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?=BASE_URL?>assets/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script type="text/javascript">
		// console.log(jQuery().jquery);
		
		$$ = jQuery.noConflict();
		console.log( "1nd loaded jQuery version ($): " + $.fn.jquery + "<br>" );
		console.log( "2nd loaded jQuery version (jq162): " + $$.fn.jquery + "<br>" );
		
		function anakauto(){
			 //autocomplete
			$$("#nama_anak").autocomplete({
				source: "<?php echo base_url() ?>index.php/perbaikangizi/anakauto",
				minLength: 1
			});
		}

		function tindakanauto(){
			 //autocomplete
			$$("#nama_tindakan").autocomplete({
				source: "<?php echo base_url() ?>index.php/perbaikangizi/tindakanauto",
				minLength: 1
			});
		}

		 function obatauto(){
			 //autocomplete
			$$("#nama_obat").autocomplete({
				source: "<?php echo base_url() ?>index.php/perbaikangizi/obatauto",
				minLength: 1
			});
			autofill();
		}
		function autofill(){

			var nama_obat = $$("#nama_obat").val();
			$.ajax({
				url: "<?php echo base_url()?>index.php/perbaikangizi/autofill",
				data : "nama_obat="+nama_obat,
			}).success(function (data) {
				var json = data,
				obj = JSON.parse(json);
				$$('#satuan').val(obj.satuan);
			}); 
		}
	</script>
@endsection