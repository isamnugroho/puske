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
						<h4 class="panel-title">KELOLA HAK AKSES UNTUK LEVEL :  <b><?php echo $level['nama_level'] ?></h4>
					</div>
					
					<div class="panel-body">
						
						<div style="text-align: right">
							<a href="<?php echo site_url('userlevel') ?>" class="btn btn-default">Kembali</a>
						</div>
						<table class="table table-bordered table-striped" id="mytable">
							<thead>
								<tr>
									<th width="30px">No</th>
									<th>Nama Modul</th>
									<th width="100px">Beri Akses</th>
								</tr>
								<?php
								$no = 1;
								foreach ($menu as $m) {
									echo "<tr>
									<td>$no</td>
									<td>$m->title</td>
									<td align='center'><input type='checkbox' ".  checked_akses($that->uri->segment(3), $m->id_menu)." onClick='kasi_akses($m->id_menu)'></td>
									</tr>";
									$no++;
								}
								?>
							</thead>
						</table>
						<div style="text-align: right">
							<a href="<?php echo site_url('userlevel') ?>" class="btn btn-default">Kembali</a>
						</div>
					</div>
				</div>
				<!-- end: TEXT FIELDS PANEL -->
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
	<script type="text/javascript">
		function kasi_akses(id_menu){
			//alert(id_menu);
			var id_menu = id_menu;
			var level = '<?php echo $that->uri->segment(3); ?>';
			//alert(level);
			$.ajax({
				url:"<?php echo base_url()?>index.php/userlevel/kasi_akses_ajax",
				data:"id_menu=" + id_menu + "&level="+ level ,
				success: function(html)
				{ 
					//load();
					//alert('sukses');
				}
			});
		}    
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/userlevel/akses.blade.php ENDPATH**/ ?>