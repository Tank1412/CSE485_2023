<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10 text-center">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
			</div>
			<br>
			<div class="col-md-2 pull-right">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Manage
					<span class="caret"></span></button>
					<ul class="dropdown-menu">						
						<li><a href="#">Add Post</a></li>
						<li><a href="#">Add Category</a></li>
					</ul>
				</div> 
			</div>
		</div>
	</div>
</header>
<br>

<section id="main">
<div class="container">
    <div class="row">
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #095f59; color: #fff;">
				<h3 class="panel-title">Website Overview</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-3 text-center">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $user->totalUser(); ?></h2>
						<h4>Users</h4>
					</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $category->totalCategory(); ?></h2>
						<h4>Categories</h4>
					</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="well dash-box">
						<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><?php echo $post->totalPost(); ?></h2>
						<h4>Posts</h4>
					</div>
				</div>   
			</div>
		</div>
	</div>
    </div>
    </div>
</div>
</section>