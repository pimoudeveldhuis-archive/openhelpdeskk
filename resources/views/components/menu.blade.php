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
			<li class="header">openHelpdesk</li>
			<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
			<li class="treeview {{ Request::is('/tickets*') ? 'active' : '' }}">
				<a href="#"><i class="fa fa-ticket"></i> <span>Tickets</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{ Request::is(route('tickets')) ? 'active' : '' }}"><a href="{{ route('tickets') }}"><i class="fa fa-columns"></i> Overview</a></li>
					<li class="{{ Request::is('/tickets/overdue') ? 'active' : '' }}"><a href="/tickets/overdue"><i class="fa fa-calendar"></i> Overdue</a></li>
					<li class="{{ Request::is('/tickets/closed') ? 'active' : '' }}"><a href="/tickets/closed"><i class="fa fa-lock"></i> Closed</a></li>
					<li class="{{ Request::is('/tickets/new') ? 'active' : '' }}"><a href="/tickets/new"><i class="fa fa-plus"></i> New</a></li>
				</ul>
			</li>
			<li class="treeview {{ Request::is('/management*') ? 'active' : '' }}">
				<a href="#"><i class="fa fa-cogs"></i> <span>Management</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{ Request::is('/management/categories') ? 'active' : '' }}"><a href="/management/categories"><i class="fa fa-tags"></i> Categories</a></li>
					<li class="{{ Request::is('/management/departments') ? 'active' : '' }}"><a href="/management/departments"><i class="fa fa-building"></i> Departments</a></li>
					<li class="{{ Request::is('/management/agents') ? 'active' : '' }}"><a href="/management/agents"><i class="fa fa-users"></i> Agents</a></li>
				</ul>
			</li>
			<li class="treeview {{ Request::is('/settings*') ? 'active' : '' }}">
				<a href="#"><i class="fa fa-toggle-on"></i> <span>Settings</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{ Request::is('/settings/general') ? 'active' : '' }}"><a href="/settings/general"><i class="fa fa-wrench"></i> General</a></li>
					<li class="{{ Request::is('/settings/tickets') ? 'active' : '' }}"><a href="/settings/tickets"><i class="fa fa-ticket"></i> Tickets</a></li>
					<li class="{{ Request::is('/settings/email') ? 'active' : '' }}"><a href="/settings/email"><i class="fa fa-envelope"></i> Email</a></li>
					<li class="{{ Request::is('/settings/autoresponder') ? 'active' : '' }}"><a href="/settings/autoresponder"><i class="fa fa-at"></i> Autoresponder</a></li>
					<li class="{{ Request::is('/settings/notifications') ? 'active' : '' }}"><a href="/settings/notifications"><i class="fa fa-bell"></i> Notifications</a></li>
				</ul>
			</li>
		</ul>
	</section>
</aside>
