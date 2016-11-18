<div ng-controller='ProjectsByDeptController'>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				All Projects By Department
			</h1>
			<ol class="breadcrumb">
				<li><a href="/itracker/"><i class="fa fa-home"></i> Home</a></li>
				<li>Projects</li>
				<li class="active">By Department</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<input type="text" ng-model="search.name" class="form-control" placeholder="Filter by department name" />
			<div ng-repeat="dept in depts | filter: search | orderBy: 'name'" ng-show="dept.projects.length > 0">
				<h2 id = "@{{dept.id}}"> @{{dept.name}}</h2>
				<div class="row">
					<div class="col-md-4" ng-repeat="proj in dept.projects | orderBy: 'name'">
						<div class="box box-widget widget-user">
							<a href="/itracker/projects/@{{proj.id}}/">
								<div class="widget-user-header bg-blue">
									<h3 class="widget-user-username">@{{proj.name}}</h3>
									<h5 class="widget-user-desc">@{{proj.description}}</h5>
								</div>
							</a>
							<div class="box-footer no-padding">
								<ul class="nav nav-stacked">
									<li><a>Creator<span class="pull-right badge bg-blue">@{{proj.creator}}</span></a></li>
									<li><a>Status<span class="pull-right badge bg-aqua"> @{{proj.status}}</span></a></li>
									<li><a>Created At<span class="pull-right badge bg-green">@{{proj.created_at | date}}</span></a></li>
									<li><a>Last Updated<span class="pull-right badge bg-red">@{{proj.updated_at | date}}</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>