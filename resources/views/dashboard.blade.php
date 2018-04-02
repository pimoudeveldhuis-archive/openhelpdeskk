<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title>openHelpdesk | Dashboard</title>
	
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
						<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
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
					Dashboard
					<small>Showing openHelpdesk statistics</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
					<li class="active">Here</li>
				</ol>
			</section>

			<section class="content container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="fa fa-ticket"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">New tickets</span>
								<span class="info-box-number">511 <small>in the last 24 hours</small></span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="fa fa-hourglass-half"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Nearly expiring tickets</span>
								<span class="info-box-number">1,024</span>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="fa fa-hourglass-end"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Expired tickets</span>
								<span class="info-box-number">760</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-primary">
									<div class="box-header with-border">
										<h3 class="box-title">Latest tickets</h3>
									</div>
									<div class="box-body">
										<div class="table-responsive">
											<table class="table no-margin">
												<thead>
													<tr>
														<th>Ticket ID</th>
														<th>Subject</th>
														<th>Status</th>
														<th>Department</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="pages/examples/invoice.html">OR9842</a></td>
														<td>Leverage agile frameworks to provide...</td>
														<td><span class="label label-info">NEW-SLA</span></td>
														<td>HR</td>
													</tr>
													<tr>
														<td><a href="pages/examples/invoice.html">OR1848</a></td>
														<td>Organically grow the holistic world...</td>
														<td><span class="label label-success">Open</span></td>
														<td>Accounting</td>
													</tr>
													<tr>
														<td><a href="pages/examples/invoice.html">OR7429</a></td>
														<td>Bring to the table win-win survival strategies</td>
														<td><span class="label label-danger">Overdue</span></td>
														<td>DevOps</td>
													</tr>
													<tr>
														<td><a href="pages/examples/invoice.html">OR7429</a></td>
														<td>User generated content in real-time</td>
														<td><span class="label label-warning">In progress</span></td>
														<td>The Boss</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="box-footer clearfix">
										<a href="javascript:void(0)" class="btn btn-sm btn-success btn-flat pull-left">Create new ticket</a>
										<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-right">View all tickets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-12">
								<div class="info-box bg-yellow">
									<span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">SLA tickets timer</span>
										<span class="info-box-number">2 <small>open tickets</small></span>
										<div class="progress">
											<div class="progress-bar" style="width: 70%"></div>
										</div>
										<span class="progress-description">First ticket should be answered within <strong>2 hours and 40  minutes</strong></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="box box-primary direct-chat direct-chat-info">
									<div class="box-header with-border">
										<h3 class="box-title">Direct Chat</h3>
										<div class="box-tools pull-right">
											<span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
										</div>
									</div>
									<div class="box-body">
										<div class="direct-chat-messages">
											<div class="direct-chat-msg">
												<div class="direct-chat-info clearfix">
													<span class="direct-chat-name pull-left">Chris van Zanten &lt;c.vanzanten@guest.com&gt;</span>
													<span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
												</div>
												<img class="direct-chat-img" src="/img/user1-128x128.jpg" alt="Message User Image">
												<div class="direct-chat-text">
													Is this template really for free? That's unbelievable!
												</div>
											</div>
											<div class="direct-chat-msg right">
												<div class="direct-chat-info clearfix">
													<span class="direct-chat-name pull-right">Pim &lt;p.oudeveldhuis@nsosi.com&gt;</span>
													<span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
												</div>
												<img class="direct-chat-img" src="/img/user3-128x128.jpg" alt="Message User Image">
												<div class="direct-chat-text">
													You better believe it!
												</div>
											</div>
										</div>
									</div>
									<div class="box-footer">
										<form action="#" method="post">
											<div class="input-group">
												<input type="text" name="message" placeholder="Type Message ..." class="form-control">
												<span class="input-group-btn">
													<button type="submit" class="btn btn-info btn-flat">Send</button>
												</span>
											</div>
										</form>
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
							<label class="control-sidebar-subheading">Report panel usage
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