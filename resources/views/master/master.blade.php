<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Sandali</title>
        <!-- ALL STYLESHEET -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<!--link href="css/blog-single.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet"-->

		<link href="css/shop-homepage.css" rel="stylesheet">
    </head>   
	<body>
		
		<!-- header -->
		<header class="header">
			
			<!-- header top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<!-- <div class="col-sm-3">
							<ul class="list-inline">
								<li>
									<div class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  src="images/is.png" alt="" /> English <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li><a href="#">Japani</a></li>
											<li><a href="#">Hindi</a></li>
											<li><a href="#">Chinis</a></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Currency $USD <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu">
											<li><a href="#">Pound</a></li>
											<li><a href="#">Diner</a></li>
											<li><a href="#">Rupee</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div> -->
						<div class="col-sm-7">
							<ul class="list-inline">
								<li><a href="#" ><i class="fa fa-mobile"></i> +88018374345</a></li>
								<li><a href="#" ><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
							</ul>	
						</div>
						<div class="col-sm-5">
							<ul class="list-inline pull-right">
								<li><a href="#" ><i class="fa fa-user"></i> My Account</a></li>
								<li><a href="#" ><i class="fa fa-heart-o"></i> Wishlist (0)</a></li>
								<li><a href="#" ><i class="fa fa-file-o"></i> Compare (0)</a></li>
								<li><a class="register" href="#" >Register</a></li>
							</ul>	
						</div>	
					</div>	
				</div>
			</div>

						<!-- logo and adds -->
			<div class="logo-add">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo"><i class="fa fa-diamond"></i>SANDALI FOODCITY</div>
						</div>
						<div class="col-sm-8">
							<h3 class="add bb-year-end-ribbon hidden-xs"><img src="images/red-tablet.png" width="40px;" alt="" /> 
							<span>Hi! We Can <span>Help</span> Your Business</span> <button class="btn btn-default"> Get Stared </button></h3>
						</div>
					</div>
				</div>
			</div>
			
			<!-- header bottom -->
			<div class="header-bottom">
				<div class="row">
					<div class="col-sm-12">
						<nav class="navbar navbar-default">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="header-bottom">
									<ul class="nav navbar-nav">
										<li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a></span>
											<ul class="dropdown-menu">
												<li><a href="index.html">Home Page</a></li>
												<li><a href="index-2.html">Home Page 2</a></li>
											</ul>	
										</li>
										<li><a href="product-detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a><span class="label label-danger text-center hidden-xs">New <i class="fa fa-caret-right"></i></span>
											<ul class="dropdown-menu">
												<li><a href="product.html">Products</a></li>
												<li><a href="product-detail.html">Product Details</a></li>
												<li><a href="new-product.html">New Products</a></li>
											</ul>	
										</li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">Blog Detail</a></li>
										<li><a href="about-us.html">About Us</a> <span class="label label-info text-center hidden-xs">New <i class="fa fa-caret-right"></i></span></li>
										<li><a href="contact-us.html">Contac Us</a></li>
									</ul>
									<form class="navbar-form navbar-right" role="search">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="nav-search"><a href="#"><i class="fa fa-search"></i></a></span>
										</div>	
									</form>
								</div>
							</div>
						</nav>
					</div>	
				</div>	
			</div>	
		</header>

		<!-- side navigation -->
	<div class="container">

      <div class="row">
      	@section('sidebar')
            
        @show

		@yield('content')
        <!-- /.col-lg-9 -->

      </div>
  </div>


  <!-- ALL JAVASCRIPT -->         
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
	</body>
</html>
