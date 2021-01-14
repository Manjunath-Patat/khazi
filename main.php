<?php 
include 'session.php';
 ?>
 <head>
 	<style>
 		body{
 			background-color: white;
 		}
 		@media screen and (max-width: 900px) 
 	</style>
 </head>
<body>
	 <div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
								<h1 style="color:blue"><center>KHAZI INDUSTRIES</center></h1>
		</div>
				</div>

		
				<nav class="navbar navbar-default">
					 <div style="padding:4px">
					 	<div class="pull-left">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button></div></div>

					<div class="pull-right">
					 <a href="index.php">
					 	<button type="submit" class="btn btn-md" style="box-shadow:0px 0px 0px 1px red;color:blue"  name="logout">Logout</button></a>
					 </div>
					

					<div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
					
						<nav class="link-effect-12">
							<ul class="nav navbar-nav w3_agile_nav">
								<li><a href="add.php">Add customer</a></li>
									<li><a href="edit.php">Edit custemer</a></li>
								<!--
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Customer Information</span> <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="add.php">Add customer</a></li>
									<li><a href="edit.php">Edit custemer</a></li>
									<li><a href="">Add customer address with pincode</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Bill</span> <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="">Customer deposit</a></li>
										<li><a href="">Paid through</a></li>
										<li><a href="">Bottle</a></li>
									</ul>
								</li>-->
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Order</span> <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="view.php">view order</a></li>
										<li><a href="">confirm delivery</a></li>
									    <li><a href="">amount collected</a></li>
										<li><a href="">num of bottle deliveries</a></li>
								</ul>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Day report</span> <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a href="">Total order and delivery by today</a></li>
										<li><a href="">Day end report</a></li>

									</ul>
								</li>
						
									</ul>
							
						</nav>
					</div>							
						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
 	</div>
</body>