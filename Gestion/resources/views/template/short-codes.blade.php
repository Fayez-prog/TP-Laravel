@extends('layouts.home')

@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{ route('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Short Codes</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--typography-page -->
	<div class="typo">
		<div class="container">
			<div class="typo-grids">
			<h3 class="title animated wow zoomIn" data-wow-delay=".5s">Short Codes</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="grid_3 grid_4 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="hdg">Headings</h3>
				<div class="bs-example">
					<table class="table">
						<tbody>
							<tr>
								<td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
								<td class="type-info">Semibold 36px</td>
							</tr>
							<tr>
								<td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
								<td class="type-info">Semibold 30px</td>
							</tr>
							<tr>
								<td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
								<td class="type-info">Semibold 24px</td>
							</tr>
							<tr>
								<td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
								<td class="type-info">Semibold 18px</td>
							</tr>
							<tr>
								<td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
								<td class="type-info">Semibold 14px</td>
							</tr>
							<tr>
								<td><h6>h6. Bootstrap heading</h6></td>
								<td class="type-info">Semibold 12px</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Buttons</h3>
				<h1>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h1>
				<h2>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h2>
				<h3>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h3>
				<h4>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h4>
				<h5>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h5>
				<h6>
					<a href="#"><span class="label label-default">Default</span></a>
					<a href="#"><span class="label label-primary">Primary</span></a>
					<a href="#"><span class="label label-success">Success</span></a>
					<a href="#"><span class="label label-info">Info</span></a>
					<a href="#"><span class="label label-warning">Warning</span></a>
					<a href="#"><span class="label label-danger">Danger</span></a>
				</h6>
			</div>			   
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Progress Bars</h3>
				<div class="tab-content">
					<div class="tab-pane active" id="domprogress">
						<div class="progress">    
							<div class="progress-bar progress-bar-primary" style="width: 20%"></div>
						</div>
						<p>Info with <code>progress-bar-info</code> class.</p>
						<div class="progress">    
							<div class="progress-bar progress-bar-info" style="width: 60%"></div>
						</div>
						<p>Success with <code>progress-bar-success</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 30%"></div>
						</div>
						<p>Warning with <code>progress-bar-warning</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
						</div>
						<p>Danger with <code>progress-bar-danger</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 50%"></div>
						</div>
						<p>Inverse with <code>progress-bar-inverse</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
						</div>
						<p>Inverse with <code>progress-bar-inverse</code> class.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Alerts</h3>
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
				<div class="alert alert-info" role="alert">
					<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
				</div>
				<div class="alert alert-warning" role="alert">
					<strong>Warning!</strong> Best check yo self, you're not looking too good.
				</div>
				<div class="alert alert-danger" role="alert">
					<strong>Oh snap!</strong> Change a few things up and try submitting again.
				</div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Pagination</h3>
				<div class="col-md-6">
					<nav>
						<ul class="pagination pagination-lg">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						</ul>
					</nav>
					<nav>
						<ul class="pagination">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						</ul>
					</nav>
					<nav>
						<ul class="pagination pagination-sm">
							<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-6">
					<ul class="pagination pagination-lg">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">&laquo;</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right">&raquo;</i></a></li>
					</ul>
					<nav>
						<ul class="pagination">
							<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
						</ul>
					</nav>
					<ul class="pagination pagination-sm">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left">&laquo;</i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right">&raquo;</i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Breadcrumbs</h3>
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Classes</th>
								<th>Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					</table>                    
				</div>
				<div class="col-md-6">
					<p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>	 
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Wells</h3>
				<div class="well">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
				</div>
				<div class="well">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
				</div>
				<div class="well">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				</div>
			</div>
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="bars">Tabs</h3>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
						<li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
								<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
							</ul>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
							<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
						</div>
					</div>
				</div>
			</div>
			<h3 class="bars animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Unordered List</h3>
			<ul class="list-group animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>
			<h3 class="bars animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Ordered List</h3>
			<ol class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<li class="list-group-item1">Cras justo odio</li>
				<li class="list-group-item1">Dapibus ac facilisis in</li>
				<li class="list-group-item1">Morbi leo risus</li>
				<li class="list-group-item1">Porta ac consectetur ac</li>
				<li class="list-group-item1">Vestibulum at eros</li>
			</ol>
			<h3 class="bars animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Forms</h3>
			<div class="input-group animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<span class="input-group-addon" id="basic-addon1">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			</div>
			<div class="input-group animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">@example.com</span>
			</div>
			<div class="input-group animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<span class="input-group-addon">$</span>
					<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
				<span class="input-group-addon">.00</span>
			</div>
			<div class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<span class="input-group-addon" id="sizing-addon1">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
			</div>
			<div class="input-group animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<span class="input-group-addon" id="sizing-addon2">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
			</div>
			<div class="input-group input-group-sm animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<span class="input-group-addon" id="sizing-addon3">@</span>
				<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
			</div>
			<div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-lg-6 in-gp-tl">
					<div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox" aria-label="...">
						</span>
						<input type="text" class="form-control" aria-label="...">
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6 in-gp-tb">
					<div class="input-group">
						<span class="input-group-addon">
							<input type="radio" aria-label="...">
						</span>
						<input type="text" class="form-control" aria-label="...">
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-lg-6 in-gp-tl">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
						<input type="text" class="form-control" placeholder="Search for...">
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6 in-gp-tb">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="row animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-lg-6 in-gp-tl">
					<div class="input-group">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<input type="text" class="form-control" aria-label="...">
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<div class="col-lg-6 in-gp-tb">
					<div class="input-group">
						<input type="text" class="form-control" aria-label="...">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
			<div class="page-header animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="bars">Tables</h3>
			</div>
			<h2 class="typoh2 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Default styles</h2>
			<p class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">For basic stylinglight padding and only horizontal add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
			<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr class="bs-docs-separator">
			<p class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Add any of the following classes to the <code>.table</code> base class.</p>
			<p class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-8).</p>
			<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Add borders and rounded corners to the table.</p>
			<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td rowspan="2">1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>Mark</td>
							<td>Otto</td>
							<td>@getbootstrap</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
			<div class="bs-docs-example animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<table class="table table-hover">
					<thead>
						<tr>
						  <th>#</th>
						  <th>First Name</th>
						  <th>Last Name</th>
						  <th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <td>1</td>
						  <td>Mark</td>
						  <td>Otto</td>
						  <td>@mdo</td>
						</tr>
						<tr>
						  <td>2</td>
						  <td>Jacob</td>
						  <td>Thornton</td>
						  <td>@fat</td>
						</tr>
						<tr>
						  <td>3</td>
						  <td colspan="2">Larry the Bird</td>
						  <td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
<!-- //typography-page -->
@include('layouts.footer')

@endsection
