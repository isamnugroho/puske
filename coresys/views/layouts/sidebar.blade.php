<?php
	// print_r($that);
	// $url_array = explode("/", $that->router->fetch_class());
	// print_r($url_array);

	function active($that, $currect_page){
		$url_array = explode("/", $that->router->fetch_class());
		$url = end($url_array);  
		if($currect_page == $url){
			echo "class='active'";
		} 
		if(is_array($currect_page)) {
			if(in_array($url, $currect_page)){
				echo "class='active'";
			}
		}
	}
?>

<div class="navbar-content">
	<!-- start: SIDEBAR -->
	<div class="main-navigation left-wrapper transition-left">
		<div class="navigation-toggler hidden-sm hidden-xs">
			<a href="#main-navbar" class="sb-toggle-left">
			</a>
		</div>
		<div class="user-profile border-top padding-horizontal-10 block">
			<div class="inline-block">
				<img src="<?=BASE_URL?>assets/images/avatar-1.jpg">
			</div>
			<div class="inline-block">
				<h5 class="no-margin"> Welcome </h5>
				<h4 class="no-margin"> Peter Clark </h4>
				<a class="btn user-options sb_toggle">
					<i class="fa fa-cog"></i>
				</a>
			</div>
		</div>
		<!-- start: MAIN NAVIGATION MENU -->
		<ul class="main-navigation-menu">
			
			<li style="background: linear-gradient(to bottom, #e52d27,#b31217); color;white; height:50px">
				<img style="float: left; margin: 10px 10px 0px 10px;" src="<?=base_url()?>assets/img/homelock.png" height="28" width="28" />
				<span class="menu-item-parent">
				<p class="small" style="margin: 0px 10px 0px 0px;">
					<small style="color:white;font-size:14px; margin: 0px 0px 0px 0px; font-weight: bold;">Monitoring System</small><br>
					<small style="color:white;font-size:10px;">Performance And Productivity</small>
				</p>
				</span>					
			</li>
			<li style="background-image: linear-gradient( 171.8deg,  rgba(5,111,146,1) 13.5%, rgba(6,57,84,1) 78.6% );">
				<a href="#" class="zoomsmall">
				<img style="float: left; margin: 0px 10px 0px 0px;" src="<?=base_url()?>assets/img/database.png" height="28" width="28" />
				<span class="menu-item-parent">
				<p class="small" style="">
					<small style="color:white;font-size:14px; margin: 0px 0px 0px 0px; font-weight: bold;">Data Cash Handling </small><br>
					<small style="color:white;font-size:10px;">CRM CR & CC Management</small>
				</p>
				</span>
				</a>						
				<ul>
					<div class="" style="background-image: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%); height:30px; margin: 0px 0px 0px 0px;">
						<b class="hanzicons" style="float: left; margin: 12px 5px 0px 30px;font-size:14px;color:gray;">Data Cash Replanish
						</b>
					</div>
					<li>
						<a href="<?=base_url()?>cro_master_cashreplenish" class="zoomsmall"><img style="float: left; margin: 3px 5px 0px -10px;" src="<?=base_url()?>seipkon/assets/img/pdf.png" height="15" width="15" />CRM Cash Replanish</a>
					</li>
					<li>
						<a href="<?=base_url()?>cro_all_runsheets" class="zoomsmall"><img style="float: left; margin: 3px 5px 0px -10px;" src="<?=base_url()?>seipkon/assets/img/pdf.png" height="15" width="15" />All Runsheets CR</a>
					</li>
					<li>
						<a href="<?=base_url()?>doccro_cr" class="zoomsmall"><img style="float: left; margin: 3px 5px 0px -10px;" src="<?=base_url()?>seipkon/assets/img/pdf.png" height="15" width="15" />CR Documentation</a>
					</li>
					
				</ul>
			</li>		
			
			
			
			<li <?=active($that, 'dashboard')?>>
				<a href="<?=base_url()?>dashboard">
				
				
				<i class="fa fa-home"></i> <span class="title"> Dashboard </span><span class="label label-default pull-right ">LABEL</span> </a>
			</li>
			<li <?=active($that, array('paramedis', 'jabatan', 'bidang', 'poli'))?>>
				<a href="javascript:void(0)">
				<img style="float: left; margin: 0px 10px 0px 0px;" src="<?=base_url()?>assets/img/database.png" height="28" width="28" />
				<span class="menu-item-parent">
				<p class="small" style="">
					<small style="color:white;font-size:14px; margin: 0px 0px 0px 0px; font-weight: bold;">Data Master </small><br>
					<small style="color:white;font-size:10px;">CRM CR & CC Management</small>
				</p>
				</span></a>
				<ul class="sub-menu">
					<li <?=active($that, 'paramedis')?>>
						<a href="<?=base_url()?>paramedis">
							<span class="title"> Data Paramedis </span>
						</a>
					</li>
					<li <?=active($that, 'jabatan')?>>
						<a href="<?=base_url()?>jabatan">
							<span class="title"> Data Jabatan </span>
						</a>
					</li>
					<li <?=active($that, 'bidang')?>>
						<a href="<?=base_url()?>bidang">
							<span class="title"> Data Bidang </span>
						</a>
					</li>
					<li <?=active($that, 'poli')?>>
						<a href="<?=base_url()?>poli">
							<span class="title"> Data Poli </span>
						</a>
					</li>
				</ul>
			</li>

			<li <?=active($that, 'user')?>>
				<a href="<?=base_url()?>user"><i class="fa fa-user"></i> <span class="title"> Kelola Pengguna </span></a>
			</li>
			<li <?=active($that, 'userlevel')?>>
				<a href="<?=base_url()?>userlevel"><i class="fa fa-users"></i> <span class="title"> Level Pengguna </span></a>
			</li>
			<li <?=active($that, 'pegawai')?>>
				<a href="<?=base_url()?>pegawai"><i class="fa fa-users"></i> <span class="title"> Data Pegawai </span></a>
			</li>
			<li <?=active($that, 'dokter')?>>
				<a href="<?=base_url()?>dokter"><i class="fa fa-user-plus"></i> <span class="title"> Data Dokter </span></a>
			</li>
			<li <?=active($that, 'jadwalpraktek')?>>
				<a href="<?=base_url()?>jadwalpraktek"><i class="fa fa-user-plus"></i> <span class="title"> Jadwal Praktek Dokter </span></a>
			</li>
			<li <?=active($that, 'pasien')?>>
				<a href="<?=base_url()?>pasien"><i class="fa fa-user-plus"></i> <span class="title"> Data Pasien </span></a>
			</li>
			<li <?=active($that, 'pendaftaran')?>>
				<a href="<?=base_url()?>pendaftaran"><i class="fa fa-user-plus"></i> <span class="title"> Data Pendaftaran </span></a>
			</li>
			<li <?=active($that, 'diagnosa')?>>
				<a href="<?=base_url()?>diagnosa"><i class="fa fa-user-plus"></i> <span class="title"> Data Diagnosa </span></a>
			</li>
			<li <?=active($that, 'tindakan')?>>
				<a href="<?=base_url()?>tindakan"><i class="fa fa-user-plus"></i> <span class="title"> Data Tindakan </span></a>
			</li>
			<li <?=active($that, array('stokobat', 'pengadaanobat', 'pengeluaranobat', 'dataobat'))?>>
				<a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span class="title"> Data Obat </span><i class="icon-arrow"></i> </a>
				<ul class="sub-menu">
					<li <?=active($that, 'stokobat')?>>
						<a href="<?=base_url()?>stokobat">
							<span class="title"> Stok Obat </span>
						</a>
					</li>
					<li <?=active($that, 'pengadaanobat')?>>
						<a href="<?=base_url()?>pengadaanobat">
							<span class="title"> Pengadaan Obat </span>
						</a>
					</li>
					<li <?=active($that, 'pengeluaranobat')?>>
						<a href="<?=base_url()?>pengeluaranobat">
							<span class="title"> Pengeluaran Obat </span>
						</a>
					</li>
					<li <?=active($that, 'dataobat')?>>
						<a href="<?=base_url()?>dataobat">
							<span class="title"> Data Obat-obatan </span>
						</a>
					</li>
				</ul>
			</li>
			<li <?=active($that, 'supplier')?>>
				<a href="<?=base_url()?>supplier"><i class="fa fa-user-plus"></i> <span class="title"> Data Supplier </span></a>
			</li>
			<li <?=active($that, array('operasi', 'penangananoperasi'))?>>
				<a href="javascript:void(0)"><i class="fa fa-th-large"></i> <span class="title"> Data Tindakan Operasi </span><i class="icon-arrow"></i> </a>
				<ul class="sub-menu">
					<li <?=active($that, 'operasi')?>>
						<a href="<?=base_url()?>operasi">
							<span class="title">Data Operasi</span>
						</a>
					</li>
					<li <?=active($that, 'penangananoperasi')?>>
						<a href="<?=base_url()?>penangananoperasi">
							<span class="title">Penanganan Operasi</span>
						</a>
					</li>
				</ul>
			</li>
			<li <?=active($that, 'polikia')?>>
				<a href="<?=base_url()?>polikia"><i class="fa fa-user-plus"></i> <span class="title"> Data Poli KIA </span></a>
			</li>
			<li <?=active($that, 'perbaikangizi')?>>
				<a href="<?=base_url()?>perbaikangizi"><i class="fa fa-user-plus"></i> <span class="title"> Data Perbaikan Gizi </span></a>
			</li>
			<li <?=active($that, 'tindakanberobat')?>>
				<a href="<?=base_url()?>tindakanberobat"><i class="fa fa-user-plus"></i> <span class="title"> Data Tindakan Berobat </span></a>
			</li>
		</ul>
		<!-- end: MAIN NAVIGATION MENU -->
	</div>
	<!-- end: SIDEBAR -->
</div>
<div class="slide-tools">
	<div class="col-xs-6 text-left no-padding">
		<a class="btn btn-sm status" href="#">
			Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
		</a>
	</div>
	<div class="col-xs-6 text-right no-padding">
		<a class="btn btn-sm log-out text-right" href="login_login.html">
			<i class="fa fa-power-off"></i> Log Out
		</a>
	</div>
</div>