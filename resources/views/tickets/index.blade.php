<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title>openHelpdesk | Ticket Overview</title>
	
	<link rel="stylesheet" href="/components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="/css/openhelpdesk.css">
	<link rel="stylesheet" href="/css/skin-nsosi-oh.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="index2.html" class="logo">
				<span class="logo-mini">o<b>H</b></span>
				<span class="logo-lg">open<b>Helpdesk</b></span>
			</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<ul class="menu">
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">9</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<ul class="menu">
										<li>
											<a href="#">
												<h3>
													Design some buttons
													<small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="/img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Pim Oude Veldhuis</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
									<p>
										Pim Oude Veldhuis<br/> Ticket Master
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-info btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-danger btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Pim Oude Velhuis</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Status unknown</a>
					</div>
				</div>
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">HEADER</li>
					<li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
					<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
					<li class="treeview">
						<a href="#"><i class="fa fa-link"></i> 
							<span>Multilevel</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#">Link in level 2</a></li>
							<li><a href="#">Link in level 2</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Ticket Overview
					<small>Showing all open tickets</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
					<li class="active">Here</li>
				</ol>
			</section>

			<section class="content container-fluid">
				<div class="row">
					<div class="col-md-2">
						<a href="compose.html" class="btn btn-primary btn-block margin-bottom">New ticket</a>
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Departments</h3>
							</div>
							<div class="box-body no-padding">
								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a href="#"><i class="fa fa-home"></i> All</a></li>
									<li><a href="#"><i class="fa fa-inbox"></i> Accounting <span class="label label-primary pull-right">12</span></a></li>
									<li><a href="#"><i class="fa fa-inbox"></i> Shipping</a></li>
									<li><a href="#"><i class="fa fa-inbox"></i> Development</a></li>
									<li><a href="#"><i class="fa fa-inbox"></i> Research <span class="label label-warning pull-right">65</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Labels</h3>
							</div>
							<div class="box-body no-padding">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"><i class="fa fa-flag text-yellow"></i> Flagged</a></li>
									<li><a href="#"><i class="fa fa-circle text-red"></i> Urgent</a></li>
									<li><a href="#"><i class="fa fa-circle-o text-green"></i> Open</a></li>
									<li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Closed</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Tickets</h3>
								<div class="box-tools pull-right">
									<div class="has-feedback">
										<input type="text" class="form-control input-sm" placeholder="Search Mail">
										<span class="glyphicon glyphicon-search form-control-feedback"></span>
									</div>
								</div>
							</div>
							<div class="box-body no-padding">
								<div class="mailbox-controls">
									<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
									<div class="btn-group">
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
									</div>
									<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
									<div class="pull-right">
										1-50/200
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
											<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
								</div>
								<div class="table-responsive mailbox-messages">
									<table class="table table-hover table-striped">
										<tbody>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">5 mins ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">28 mins ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">11 hours ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">15 hours ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">Yesterday</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">2 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">2 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">2 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">4 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"></td>
												<td class="mailbox-date">12 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag-o text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">12 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">14 days ago</td>
											</tr>
											<tr>
												<td><input type="checkbox"></td>
												<td class="mailbox-flag"><a href="#"><i class="fa fa-flag text-yellow"></i></a></td>
												<td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
												<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
												</td>
												<td class="mailbox-department">Accounting</td>
												<td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
												<td class="mailbox-date">15 days ago</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="box-footer no-padding">
								<div class="mailbox-controls">
									<button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
									<div class="btn-group">
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
										<button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
									</div>
									<button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
									<div class="pull-right">
										1-50/200
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
											<button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer class="main-footer">
			<strong>NorthSea Open Source Initiative</strong>
		</footer>
		<aside class="control-sidebar control-sidebar-dark">
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:;">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>
								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
									<p>Will be 23 on April 24th</p>
								</div>
							</a>
						</li>
					</ul>
					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:;">
								<h4 class="control-sidebar-subheading">
									Custom Template Design
									<span class="pull-right-container">
										<span class="label label-danger pull-right">70%</span>
									</span>
								</h4>
								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>
						<div class="form-group">
							<label class="control-sidebar-subheading">
								Report panel usage
								<input type="checkbox" class="pull-right" checked>
							</label>
							<p>
								Some information about this general settings option
							</p>
						</div>
					</form>
				</div>
			</div>
		</aside>
		<div class="control-sidebar-bg"></div>
	</div>
	<script src="/components/jquery/dist/jquery.min.js"></script>
	<script src="/components/bootstrap/js/bootstrap.min.js"></script>
	<script src="/js/adminlte.min.js"></script>
</body>

</html>
