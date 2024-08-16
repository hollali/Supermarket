<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-commerce site</title>
	<!--Bootstrap css--->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!--font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-info">
		<div class="container-fluid">
			<img src="./images/retail-icon-01.png" alt="" srcset="" class="logo">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active text-light" aria-current="page" href="#" class="text-light"><i class="fa fa-home text-light" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Products
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Clothes</a></li>
							<hr class="dropdown-divider">
							<li><a class="dropdown-item" href="#">Footwear</a></li>
							<hr class="dropdown-divider">
							<li><a class="dropdown-item" href="#">Accessories</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-disabled="false" href="#"><i class="fa fa-shopping-cart text-light" aria-hidden="true"></i><sup class="text-light">1</sup></a>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<input class="form-control me-2 border border-radius-success rounded-pill-start" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-dark " type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
	<!---second child--->
	<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
		<ul class="navbar-nav me-auto">
			<li class="nav-item">
				<a class="nav-link text-light" href="#">Guest</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-light" href="#"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
			</li>
		</ul>
	</nav>
	<!---third child--->
	<div class="bg-light">
		<h3 class="text-center">Hidden Store</h3>
		<p class="text-center">Communication is at the heart of e-commerce and community</p>
	</div>
	<!---fourth child--->
	<div class="row">
		<div class="col-md-10">
			<!--product-->
			<div class="row">
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.08 AM (1).jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.07 AM (4).jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.07 AM (1).jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.01 AM.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.29.55 AM (2).jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.29.58 AM (3).jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.29.58 AM.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.07 AM.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-2">
					<div class="card">
						<img src="./images/WhatsApp Image 2021-11-23 at 9.30.03 AM.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-info text-light">Add to cart</a>
							<a href="#" class="btn btn-secondary">View more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2 bg-secondary p-0">
			<!--sidenav-->
			<!--categories--->
			<ul class="navbar-nav me-auto text-center">
				<li class="nav-item bg-info">
					<a href="" class="nav-link text-light">
						<h4>Delivery Brand</h4>
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Brand1
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Brand2
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Brand3
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Brand4
					</a>
				</li>
			</ul>
			<!--categories--->
			<ul class="navbar-nav me-auto text-center">
				<li class="nav-item bg-info">
					<a href="" class="nav-link text-light">
						<h4>Categories</h4>
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Category1
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Category2
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Category3
					</a>
				</li>
				<li class="nav-item ">
					<a href="" class="nav-link text-light">
						Category4
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!---last child--->
	<footer class="footer bg-info text-light text-center">
		<hr />
		&copy2023. Developed by Hollali Kelvin Quarshie.
		<br />
		e-commerce website.
		<br />
		PHP Project Work. IPMC North-legon.
		<br />
		Contact: <a href="tel:+233 243658631" class="text-light text-decoration-none"><i class="fa fa-phone-square" aria-hidden="true"></i>+233 243658631</a> | Email: <a href="mailto:dheztinykartel@gmail.com" class="text-light text-decoration-none"><i class="fa fa-envelope-square" aria-hidden="true"></i>dheztinykartel@gmail.com</a>
	</footer>

	<!--Bootstrap Js-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>