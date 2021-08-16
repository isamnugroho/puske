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
						<table class="table">
							<tr><td>Nama Pegawai</td><td><?php echo $nama_pegawai; ?></td></tr>
							<tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
							<tr><td>Npwp</td><td><?php echo $npwp; ?></td></tr>
							<tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
							<tr><td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td></tr>
							<tr><td>Id Jabatan</td><td><?php echo $id_jabatan; ?></td></tr>
							<tr><td>Id Bidang</td><td><?php echo $id_bidang; ?></td></tr>
							<tr><td></td><td><a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a></td></tr>
						</table>
					</div>
				</div>
				<!-- end: TEXT FIELDS PANEL -->
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/pegawai/tbl_pegawai_read.blade.php ENDPATH**/ ?>