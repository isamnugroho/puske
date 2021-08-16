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
									Nama Pasien <?php echo form_error('nama_pasien') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" onkeyup="autopasien()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									No BPJS <?php echo form_error('no_bpjs') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No BPJS" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Status Pasien<?php echo form_error('status_pasien') ?>
								</label>
								<div class="col-sm-9">
									<select id="status_pasien" name="status_pasien" onchange="tampilkan()" class="form-control">
										<option value='' disabled="disabled" selected />Pilih</option>
										<option value="BPJS">BPJS</option>
										<option value="Umum">Umum</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Nama Operasi <?php echo form_error('nama_operasi') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nama_operasi" id="nama_operasi" placeholder="Nama Operasi" onkeyup="autooperasi()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Biaya <?php echo form_error('biaya') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="biaya" id="biaya" placeholder="Biaya" readonly onkeyup="hitung()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Ditangani Oleh <?php echo form_error('ditangani_oleh') ?>
								</label>
								<div class="col-sm-9">
									<?php echo form_dropdown('ditangani_oleh', array('Dokter' => 'Dokter', 'Petugas' => 'Petugas', 'Dokter dan Petugas' => 'Dokter dan Petugas'), $ditangani_oleh, array('class' => 'form-control')); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Dibayar <?php echo form_error('dibayar') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dibayar" id="dibayar" placeholder="Dibayar" onkeyup="hitung()" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Kembalian <?php echo form_error('kembalian') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="kembalian" id="kembalian" placeholder="Kembalian" readonly="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Keterangan <?php echo form_error('keterangan') ?>
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" readonly="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Tgl Operasi <?php echo form_error('tgl_operasi') ?>
								</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" name="tgl_operasi" id="tgl_operasi" placeholder="Tgl Operasi" value="<?php echo date('Y-m-d') ?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									<input type="hidden" name="id_penanganan" value="<?php echo $id_penanganan; ?>" />
								</label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button>
									<a href="<?php echo site_url('penangananoperasi') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
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
	
		function hitung(){

			var a = parseInt($$("#biaya").val());
			var b = parseInt($$("#dibayar").val());
			c = b - a;

			if (!isNaN(c) && (c) >= 0) {
				$$("#kembalian").val(c);
			}
		}

		function autopasien(){
			 //autocomplete
			$$("#nama_pasien").autocomplete({
				source: "<?php echo base_url() ?>index.php/penangananoperasi/autopasien",
				minLength: 1
			});

			autoisi();
		}

		function autooperasi(){
		var id_user=document.getElementById("form1").status_pasien.value;
		if (id_user=="BPJS")
		{
			 //autocomplete
			$$("#nama_operasi").autocomplete({
				source: "<?php echo base_url() ?>index.php/penangananoperasi/autooperasi",
				minLength: 1
			});
			document.getElementById("biaya").value = "0";
			document.getElementById("dibayar").readOnly = true;
		} else if (id_user=="Umum")
		{
			$$("#nama_operasi").autocomplete({
				source: "<?php echo base_url() ?>index.php/penangananoperasi/autooperasi",
				minLength: 1
			});
			autofill();
		}

		}
		function autofill(){

			var nama_operasi = $$("#nama_operasi").val();
			$.ajax({
				url: "<?php echo base_url()?>index.php/penangananoperasi/autofill",
				data : "nama_operasi="+nama_operasi,
			}).success(function (data) {
				var json = data,
				obj = JSON.parse(json);
				$$('#biaya').val(obj.biaya);
			}); 
		}

		 function autoisi(){

			var nama_pasien = $$("#nama_pasien").val();
			$.ajax({
				url: "<?php echo base_url()?>index.php/penangananoperasi/autoisi",
				data : "nama_pasien="+nama_pasien,
			}).success(function (data) {
				var json = data,
				obj = JSON.parse(json);
				$$('#no_bpjs').val(obj.no_bpjs);
			}); 
		}

	function tampilkan(){
	  var id_user=document.getElementById("form1").status_pasien.value;
	  if (id_user=="BPJS")
		{
			document.getElementById("no_bpjs").readOnly = false;
			document.getElementById("biaya").readOnly = true;
			document.getElementById("biaya").value = "0";
			document.getElementById("dibayar").readOnly = true;
			document.getElementById("dibayar").value = "0";
			document.getElementById("kembalian").readOnly = true;
			document.getElementById("kembalian").value = "0";
			document.getElementById("keterangan").readOnly = true;
			document.getElementById("keterangan").value = "Gratis";
			document.getElementById("autofill").disabled = true;
			autopasien();

		}
	  else if (id_user=="Umum")
		{
		   document.getElementById("biaya").readonly = false;
			document.getElementById("dibayar").readOnly = false;
			document.getElementById("dibayar").value = "";
			document.getElementById("keterangan").readOnly = true;
			document.getElementById("keterangan").value = "Berbayar";
			document.getElementById("no_bpjs").readOnly = true;
			document.getElementById("no_bpjs").value = "-";

			autofill();


		}
	}
	</script>
@endsection