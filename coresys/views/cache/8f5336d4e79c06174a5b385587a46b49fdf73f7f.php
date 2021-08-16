<?php $__env->startSection('content'); ?>
	<!-- start: PANEL CONFIGURATION MODAL FORM -->
	<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">Panel Configuration</h4>
				</div>
				<div class="modal-body">
					Here will be a configuration form
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						Close
					</button>
					<button type="button" class="btn btn-primary">
						Save changes
					</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		<!-- start: PAGE HEADER -->
		<!-- start: TOOLBAR -->
		<div class="toolbar row">
			<div class="col-sm-6 hidden-xs">
				<div class="page-header">
					<h1>KELOLA <small>DATA LEVEL USER</small></h1>
				</div>
			</div>
		</div>
		<!-- end: TOOLBAR -->
		<!-- end: PAGE HEADER -->
		<!-- start: BREADCRUMB -->
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li>
						<a href="#">
							Dashboard
						</a>
					</li>
					<li class="active">
						KELOLA DATA LEVEL USER
					</li>
				</ol>
			</div>
		</div>
		<!-- end: BREADCRUMB -->
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="col-md-12">
				<!-- start: DYNAMIC TABLE PANEL -->
				<div class="panel panel-white">
					<div class="panel-heading">
						<?php echo anchor(site_url('userlevel/create'), '<i class="fa fa-wpforms" aria-hidden="true"></i> Tambah Data', 'class="btn btn-danger btn-sm"'); ?>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="mytable">
							<thead>
								<tr>
									<th width="30px">No</th>
									<th>Nama Level</th>
									<th width="200px">Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<!-- end: DYNAMIC TABLE PANEL -->
			</div>
		</div>
		<!-- end: PAGE CONTENT-->
	</div>
	<div class="subviews">
		<div class="subviews-container"></div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
			{
				return {
					"iStart": oSettings._iDisplayStart,
					"iEnd": oSettings.fnDisplayEnd(),
					"iLength": oSettings._iDisplayLength,
					"iTotal": oSettings.fnRecordsTotal(),
					"iFilteredTotal": oSettings.fnRecordsDisplay(),
					"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
					"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
				};
			};

			var t = $("#mytable").dataTable({
				initComplete: function() {
					var api = this.api();
					$('#mytable_filter input')
							.off('.DT')
							.on('keyup.DT', function(e) {
								if (e.keyCode == 13) {
									api.search(this.value).draw();
						}
					});
				},
				oLanguage: {
					sProcessing: "loading..."
				},
				processing: true,
				serverSide: true,
				ajax: {"url": "userlevel/json", "type": "POST"},
				columns: [
					{
						"data": "id_user_level",
						"orderable": false
					},
					{"data": "nama_level"},
					{
						"data" : "action",
						"orderable": false,
						"className" : "text-center"
					}
				],
				order: [[0, 'desc']],
				rowCallback: function(row, data, iDisplayIndex) {
					var info = this.fnPagingInfo();
					var page = info.iPage;
					var length = info.iLength;
					var index = page * length + (iDisplayIndex + 1);
					$('td:eq(0)', row).html(index);
				}
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV_SERVER\htdocs\2021\atmserv\coresys\views/pages/userlevel/tbl_user_level_list.blade.php ENDPATH**/ ?>