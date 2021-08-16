@extends('layouts.master')

@section('stylesheet')
@endsection


@section('content')
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

<div class="container">
	<!-- start: PAGE HEADER -->
	<!-- start: TOOLBAR -->
	<div class="toolbar row">
		<div class="col-sm-6 hidden-xs">
			<div class="page-header">
				<h1>Dashboard 123<small>overview &amp; stats </small></h1>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<a href="#" class="back-subviews">
				<i class="fa fa-chevron-left"></i> BACK
			</a>
			<a href="#" class="close-subviews">
				<i class="fa fa-times"></i> CLOSE
			</a>
			<div class="toolbar-tools pull-right">
				<!-- start: TOP NAVIGATION MENU -->
				<ul class="nav navbar-right">
					<!-- start: TO-DO DROPDOWN -->
					<li class="dropdown">
						<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
							<i class="fa fa-plus"></i> SUBVIEW
							<div class="tooltip-notification hide">
								<div class="tooltip-notification-arrow"></div>
								<div class="tooltip-notification-inner">
									<div>
										<div class="semi-bold">
											HI THERE!
										</div>
										<div class="message">
											Try the Subview Live Experience
										</div>
									</div>
								</div>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-light dropdown-subview">
							<li class="dropdown-header">
								Notes
							</li>
							<li>
								<a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
							</li>
							<li>
								<a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
							</li>
							<li class="dropdown-header">
								Calendar
							</li>
							<li>
								<a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
							</li>
							<li>
								<a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
							</li>
							<li class="dropdown-header">
								Contributors
							</li>
							<li>
								<a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
							</li>
							<li>
								<a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
							<span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
						</a>
						<ul class="dropdown-menu dropdown-light dropdown-messages">
							<li>
								<span class="dropdown-header"> You have 9 messages</span>
							</li>
							<li>
								<div class="drop-down-wrapper ps-container">
									<ul>
										<li class="unread">
											<a href="javascript:;" class="unread">
												<div class="clearfix">
													<div class="thread-image">
														<img src="assets/images/avatar-2.jpg" alt="">
													</div>
													<div class="thread-content">
														<span class="author">Nicole Bell</span>
														<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
														<span class="time"> Just Now</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:;" class="unread">
												<div class="clearfix">
													<div class="thread-image">
														<img src="assets/images/avatar-3.jpg" alt="">
													</div>
													<div class="thread-content">
														<span class="author">Steven Thompson</span>
														<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
														<span class="time">8 hrs</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<div class="clearfix">
													<div class="thread-image">
														<img src="assets/images/avatar-5.jpg" alt="">
													</div>
													<div class="thread-content">
														<span class="author">Kenneth Ross</span>
														<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
														<span class="time">14 hrs</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="view-all">
								<a href="pages_messages.html">
									See All
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-search">
						<a href="#">
							<i class="fa fa-search"></i> SEARCH
						</a>
						<!-- start: SEARCH POPOVER -->
						<div class="popover bottom search-box transition-all">
							<div class="arrow"></div>
							<div class="popover-content">
								<!-- start: SEARCH FORM -->
								<form class="" id="searchform" action="#">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button class="btn btn-main-color btn-squared" type="button">
												<i class="fa fa-search"></i>
											</button> </span>
									</div>
								</form>
								<!-- end: SEARCH FORM -->
							</div>
						</div>
						<!-- end: SEARCH POPOVER -->
					</li>
				</ul>
				<!-- end: TOP NAVIGATION MENU -->
			</div>
		</div>
	</div>

	<div class="row">
	<br>
		<div class="col-md-6 col-lg-3 col-sm-6">
			<div class="panel panel-default panel-white core-box">
				<div class="panel-tools">
					<a href="#" class="btn btn-xs btn-link panel-close">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="panel-body no-padding">
					<div class="partition-green padding-20 text-center core-icon">
						<i class="fa fa-bar-chart-o fa-2x icon-big"></i>
					</div>
					<div class="padding-20 core-content">
						<h3 class="title block no-margin">SEO</h3>
						<span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6">
			<div class="panel panel-default panel-white core-box">
				<div class="panel-tools">
					<a href="#" class="btn btn-xs btn-link panel-close">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="panel-body no-padding">
					<div class="partition-blue padding-20 text-center core-icon">
						<i class="fa fa-code fa-2x icon-big"></i>
					</div>
					<div class="padding-20 core-content">
						<h3 class="title block no-margin">Programming</h3>
						<span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6">
			<div class="panel panel-default panel-white core-box">
				<div class="panel-tools">
					<a href="#" class="btn btn-xs btn-link panel-close">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="panel-body no-padding">
					<div class="partition-red padding-20 text-center core-icon">
						<i class="fa fa-desktop fa-2x icon-big"></i>
					</div>
					<div class="padding-20 core-content">
						<h3 class="title block no-margin">Web design</h3>
						<span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3 col-sm-6">
			<div class="panel panel-default panel-white core-box">
				<div class="panel-tools">
					<a href="#" class="btn btn-xs btn-link panel-close">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="panel-body no-padding">
					<div class="partition-azure padding-20 text-center core-icon">
						<i class="fa fa-shopping-cart fa-2x icon-big"></i>
					</div>
					<div class="padding-20 core-content">
						<h3 class="title block no-margin">Orders</h3>
						<span class="subtitle"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8 col-md-7">
			<div class="panel panel-white">
				<div class="panel-heading border-light">
					<h4 class="panel-title">Earnings</h4>
					<ul class="panel-heading-tabs border-light">
						<li>
							<div id="reportrange" class="pull-right">
								<span>This Week </span><i class="fa fa-angle-down"></i>
							</div>
						</li>
						<li>
							<div class="rate">
								<i class="fa fa-caret-up text-green"></i><span class="value">15</span><span class="percentage">%</span>
							</div>
						</li>
						<li class="panel-tools">
							<div class="dropdown">
								<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
									<i class="fa fa-cog"></i>
								</a>
								<ul class="dropdown-menu dropdown-light pull-right" role="menu">
									<li>
										<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
									</li>
									<li>
										<a class="panel-refresh" href="#">
											<i class="fa fa-refresh"></i> <span>Refresh</span>
										</a>
									</li>
									<li>
										<a class="panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i> <span>Configurations</span>
										</a>
									</li>
									<li>
										<a class="panel-expand" href="#">
											<i class="fa fa-expand"></i> <span>Fullscreen</span>
										</a>
									</li>
								</ul>
							</div>
							<a class="btn btn-xs btn-link panel-close" href="#">
								<i class="fa fa-times"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="panel-body no-padding partition-green">
					<div class="col-md-3 col-lg-2 no-padding">
						<div class="partition-body padding-15">
							<ul class="mini-stats">
								<li class="col-md-12 col-sm-4 col-xs-4 no-padding">
									<div class="sparkline-bar sparkline-1">
										<span></span>
									</div>
									<div class="values">
										<strong>18304</strong>
										Sales
									</div>
								</li>
								<li class="col-md-12 col-sm-4 col-xs-4 no-padding">
									<div class="sparkline-bar sparkline-2">
										<span></span>
									</div>
									<div class="values">
										<strong>&#36;3,833</strong>
										Earnings
									</div>
								</li>
								<li class="col-md-12 col-sm-4 col-xs-4 no-padding">
									<div class="sparkline-bar sparkline-3">
										<span></span>
									</div>
									<div class="values">
										<strong>&#36;848</strong>
										Referrals
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-9 col-lg-10 no-padding partition-white">
						<div class="partition">
							<div class="partition-body padding-15">
								<div class="height-300">
									<div id="chart1" class='with-3d-shadow with-transitions'>
										<svg></svg>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-5">
			<div class="panel panel-red panel-calendar">
				<div class="panel-heading border-light">
					<h4 class="panel-title">Appointments</h4>
					<div class="panel-tools">
						<div class="dropdown">
							<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-white">
								<i class="fa fa-cog"></i>
							</a>
							<ul class="dropdown-menu dropdown-light pull-right" role="menu">
								<li>
									<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
								</li>
								<li>
									<a class="panel-refresh" href="#">
										<i class="fa fa-refresh"></i> <span>Refresh</span>
									</a>
								</li>
								<li>
									<a class="panel-config" href="#panel-config" data-toggle="modal">
										<i class="fa fa-wrench"></i> <span>Configurations</span>
									</a>
								</li>
								<li>
									<a class="panel-expand" href="#">
										<i class="fa fa-expand"></i> <span>Fullscreen</span>
									</a>
								</li>
							</ul>
						</div>
						<a class="btn btn-xs btn-link panel-close" href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="height-300">
						<div class="row">
							<div class="col-xs-6">
								<div class="actual-date">
									<span class="actual-day"></span>
									<span class="actual-month"></span>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="row">
									<div class="col-xs-12">
										<div class="clock-wrapper">
											<div class="clock">
												<div class="circle">
													<div class="face">
														<div id="hour"></div>
														<div id="minute"></div>
														<div id="second"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="weather text-light">
											<i class="wi-day-sunny"></i>
											25°
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="appointments border-top border-bottom border-light space15">
										<a class="btn btn-sm owl-prev text-light">
											<i class="fa fa-chevron-left"></i>
										</a>
										<div class="e-slider owl-carousel owl-theme" data-plugin-options='{"transitionStyle": "goDown", "pagination": false}'>
											<div class="item">
												<div class="inline-block padding-10 border-right border-light">
													<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 17:00</span>
													<span class="text-light text-extra-small">1 hour</span>
												</div>
												<div class="inline-block padding-10">
													<span class="bold-text text-small">NETWORKING</span>
													<span class="text-light text-small">Out to design conference</span>
												</div>
											</div>
											<div class="item">
												<div class="inline-block padding-10 border-right border-light">
													<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 18:30</span>
													<span class="text-light text-extra-small">30 mins</span>
												</div>
												<div class="inline-block padding-10">
													<span class="bold-text text-small">BOOTSTRAP SEMINAR</span>
													<span class="text-light text-small">Problem Solving</span>
												</div>
											</div>
											<div class="item">
												<div class="inline-block padding-10 border-right border-light">
													<span class="bold-text text-small"><i class="fa fa-clock-o"></i> 20:00</span>
													<span class="text-light text-extra-small">2 hour</span>
												</div>
												<div class="inline-block padding-10">
													<span class="bold-text text-small">Lunch with Nicole</span>
													<span class="text-light text-small">Next on Tuesday</span>
												</div>
											</div>
										</div>
										<a class="btn btn-sm owl-next text-light"><i class="fa fa-chevron-right"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="pull-right">
									<a href="#newEvent" class="btn btn-sm btn-transparent-white new-event"><i class="fa fa-plus"></i> New Event </a>
									<a href="#showCalendar" class="btn btn-sm btn-transparent-white show-calendar"><i class="fa fa-calendar-o"></i> Calendar </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7 col-lg-4">
			<div class="panel panel-dark">
				<div class="panel-heading">
					<h4 class="panel-title">Browser</h4>
					<div class="panel-tools">
						<div class="dropdown">
							<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-white">
								<i class="fa fa-cog"></i>
							</a>
							<ul class="dropdown-menu dropdown-light pull-right" role="menu">
								<li>
									<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
								</li>
								<li>
									<a class="panel-refresh" href="#">
										<i class="fa fa-refresh"></i> <span>Refresh</span>
									</a>
								</li>
								<li>
									<a class="panel-config" href="#panel-config" data-toggle="modal">
										<i class="fa fa-wrench"></i> <span>Configurations</span>
									</a>
								</li>
								<li>
									<a class="panel-expand" href="#">
										<i class="fa fa-expand"></i> <span>Fullscreen</span>
									</a>
								</li>
							</ul>
						</div>
						<a class="btn btn-xs btn-link panel-close" href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="panel-body no-padding">
					<div class="partition-green padding-15 text-center">
						<h4 class="no-margin">Monthly Statistics</h4>
						<span class="text-light">based on the major browsers</span>
					</div>
					<div id="accordion" class="panel-group accordion accordion-white no-margin">
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15">
									<i class="icon-arrow"></i>
									This Month <span class="label label-danger pull-right">3</span>
								</a></h4>
							</div>
							<div class="panel-collapse collapse in" id="collapseOne">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">4909</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">3857</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1789</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">612</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15 collapsed">
									<i class="icon-arrow"></i>
									Last Month
								</a></h4>
							</div>
							<div class="panel-collapse collapse" id="collapseTwo">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">5228</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">2853</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1948</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">456</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel no-radius">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15 collapsed">
									<i class="icon-arrow"></i>
									Two Months Ago
								</a></h4>
							</div>
							<div class="panel-collapse collapse" id="collapseThree">
								<div class="panel-body no-padding partition-light-grey">
									<table class="table">
										<tbody>
											<tr>
												<td class="center">1</td>
												<td>Google Chrome</td>
												<td class="center">4256</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
											<tr>
												<td class="center">2</td>
												<td>Mozilla Firefox</td>
												<td class="center">3557</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">3</td>
												<td>Safari</td>
												<td class="center">1435</td>
												<td><i class="fa fa-caret-up text-green"></i></td>
											</tr>
											<tr>
												<td class="center">4</td>
												<td>Internet Explorer</td>
												<td class="center">423</td>
												<td><i class="fa fa-caret-down text-red"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-5">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-blue">
						<div class="panel-body padding-20 text-center">
							<div class="space10">
								<h5 class="text-white semi-bold no-margin p-b-5">Today</h5>
								<h3 class="text-white no-margin"><span class="text-small">&#36;</span>1,450</h3>
								253 Sales
							</div>
							<div class="sparkline-4 space10">
								<span ></span>
							</div>
							<span class="text-light"><i class="fa fa-clock-o"></i> 1 hour ago</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-green">
						<div class="panel-body padding-20 text-center">
							<div class="space10">
								<h5 class="text-white semi-bold no-margin p-b-5">Yesterday</h5>
								<h3 class="text-white no-margin"><span class="text-small">&#36;</span>1,250</h3>
								198 Sales
							</div>
							<div class="sparkline-5 space10">
								<span></span>
							</div>
							<span class="text-light"><i class="fa fa-clock-o"></i> 1 hour ago</span>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel">
						<div class="panel-body">
							<div class="easy-pie-chart">
								<span class="cpu number appear" data-percent="82" data-plugin-options='{"barColor": "#ff0000"}'> <span class="percent"></span> </span>
								<div class="label-chart">
									<h4 class="no-margin">Disk Space</h4>
								</div>
							</div>
							<div class="small-text text-center space15">
								<span class="block">Recommended</span><span class="label label-danger vertical-align-bottom">85%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel">
						<div class="panel-body">
							<div class="easy-pie-chart">
								<span class="bounce number appear" data-percent="44" data-plugin-options='{"barColor": "#35aa47"}'> <span class="percent"></span> </span>
								<div class="label-chart">
									<h4 class="no-margin">CPU</h4>
								</div>
							</div>
							<div class="text-center space15">
								<span class="block">Recommended</span><span class="label label-danger vertical-align-bottom">58%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="panel panel-white">
				<div class="panel-heading border-light">
					<h4 class="panel-title">Users</h4>
					<div class="panel-tools">
						<div class="dropdown">
							<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
								<i class="fa fa-cog"></i>
							</a>
							<ul class="dropdown-menu dropdown-light pull-right" role="menu">
								<li>
									<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
								</li>
								<li>
									<a class="panel-refresh" href="#">
										<i class="fa fa-refresh"></i> <span>Refresh</span>
									</a>
								</li>
								<li>
									<a class="panel-config" href="#panel-config" data-toggle="modal">
										<i class="fa fa-wrench"></i> <span>Configurations</span>
									</a>
								</li>
								<li>
									<a class="panel-expand" href="#">
										<i class="fa fa-expand"></i> <span>Fullscreen</span>
									</a>
								</li>
							</ul>
						</div>
						<a class="btn btn-xs btn-link panel-close" href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="panel-body no-padding">
					<div class="padding-10">
						<img width="50" height="50" alt="" class="img-circle pull-left" src="assets/images/avatar-1-big.jpg">
						<h4 class="no-margin inline-block padding-5">Peter Clark <span class="block text-small text-left">UI Designer</span></h4>
						<div class="pull-right padding-15">
							<span class="text-small text-bold text-green"><i class="fa fa-dot-circle-o"></i> on-line</span>
						</div>
					</div>
					<div class="clearfix padding-5 space5">
						<div class="col-xs-4 text-center no-padding">
							<div class="border-right border-dark">
								<a href="#" class="text-dark">
									<i class="fa fa-heart-o text-red"></i> 250
								</a>
							</div>
						</div>
						<div class="col-xs-4 text-center no-padding">
							<div class="border-right border-dark">
								<a href="#" class="text-dark">
									<i class="fa fa-bookmark-o text-green"></i> 20
								</a>
							</div>
						</div>
						<div class="col-xs-4 text-center no-padding">
							<a href="#" class="text-dark"><i class="fa fa-comment-o text-azure"></i> 544</a>
						</div>
					</div>
					<div class="tabbable no-margin no-padding partition-dark">
						<ul class="nav nav-tabs" id="myTab">
							<li class="active">
								<a data-toggle="tab" href="#users_tab_example1">
									All
								</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#users_tab_example2">
									View and Edit
								</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#users_tab_example3">
									View Only
								</a>
							</li>
						</ul>
						<div class="tab-content partition-white">
							<div id="users_tab_example1" class="tab-pane padding-bottom-5 active">
								<div class="panel-scroll height-230">
									<table class="table table-striped table-hover">
										<tbody>
											<tr>
												<td class="center"><img src="assets/images/avatar-1.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">UI Designer</span><span class="text-large">Peter Clark</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-2.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Content Designer</span><span class="text-large">Nicole Bell</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-3.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Visual Designer</span><span class="text-large">Steven Thompson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-5.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Senior Designer</span><span class="text-large">Kenneth Ross</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-4.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Web Editor</span><span class="text-large">Ella Patterson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="users_tab_example2" class="tab-pane padding-bottom-5">
								<div class="panel-scroll height-230">
									<table class="table table-striped table-hover">
										<tbody>
											<tr>
												<td class="center"><img src="assets/images/avatar-3.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Visual Designer</span><span class="text-large">Steven Thompson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-5.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Senior Designer</span><span class="text-large">Kenneth Ross</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-4.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Web Editor</span><span class="text-large">Ella Patterson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="users_tab_example3" class="tab-pane padding-bottom-5">
								<div class="panel-scroll height-230">
									<table class="table table-striped table-hover">
										<tbody>
											<tr>
												<td class="center"><img src="assets/images/avatar-2.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Content Designer</span><span class="text-large">Nicole Bell</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-3.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Visual Designer</span><span class="text-large">Steven Thompson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-5.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Senior Designer</span><span class="text-large">Kenneth Ross</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											<tr>
												<td class="center"><img src="assets/images/avatar-4.jpg" class="img-circle" alt="image"/></td>
												<td><span class="text-small block text-light">Web Editor</span><span class="text-large">Ella Patterson</span><a href="#" class="btn"><i class="fa fa-pencil"></i></a></td>
												<td class="center">
												<div>
													<div class="btn-group">
														<a class="btn btn-transparent-grey dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
															<i class="fa fa-cog"></i> <span class="caret"></span>
														</a>
														<ul role="menu" class="dropdown-menu dropdown-dark pull-right">
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-edit"></i> Edit
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-share"></i> Share
																</a>
															</li>
															<li role="presentation">
																<a role="menuitem" tabindex="-1" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: PAGE CONTENT-->
</div>


<div class="subviews">
	<div class="subviews-container"></div>
</div>
@endsection