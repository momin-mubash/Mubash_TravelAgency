<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">#TravelAgency</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/LA.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/nyc.webp" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/dev.png" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-4">I Am Momin Mubash.</h2>
		<p class="py-3">Hello guys,i am momin mubash.currently working as a freelancer.i hope you are doing good in your life.i am a full stack web developer also a traveller guider.kindly join us if you want to see the world from our pov.thank you:)</p>
		<a href="about.php" class="btn btn-success"> Wanna know me</a>
		</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
				<img src="images/LA.jpg" class="card-img-top" alt="...">
				<h4 class="card-tiltle">Beautiful Nature :)<h4>
  
  <div class="card-body">
    <p class="card-text">we know what you should see there so believe us,so that we can give you the best plan for your trip.</p>
  </div>
</div>
      
</div>
	<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
				<img src="images/hotel.jpg" class="card-img-top width="200" height="268" alt="...">
				<h4 class="card-tiltle">Accommodation facilities :)<h4>
  
  <div class="card-body">
    <p class="card-text">we will provide you the best accommodation facilities available there.believe us.</p>
  </div>
</div>
      
</div>
	<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
				<img src="images/travel.jpg" class="card-img-top" width="200" height="268"  alt="...">
				<h4 class="card-tiltle">Transportation:)<h4>
  
  <div class="card-body">
  	<p class="card-text">we will provide you the best travel facility with the affordable prices.that will suit your pocket.</p>
    
  </div>
</div>
      
</div>
	</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Continue To Explore </h2>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<p class="text-center">Art $ Culutre</p>
			<img src="images/culture2.webp" class="img-fluid pb-4" >
			

	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<p class="text-center">Adventure $ Sports</p>
			<img src="images/adventure.jpg" class="img-fluid pb-4" width="432">
			

	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<p class="text-center">Shopping</p>
			<img src="images/shopping.avif" class="img-fluid pb-4" width="650">
			
	</div>
	
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us </h2>
</div>
<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" autocomplete="off" class="form-control"></input>
			<div class="form-group">
			<label>Email Id</label>
			<input type="text" name="email" autocomplete="off" class="form-control"></input>
			<div class="form-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" autocomplete="off" class="form-control"></input>
			<div class="form-group">
			<label>Comments </label>
			<textarea class="form-control" name="comments"></textarea>
		</div>
			<button type="submit" class="btn btn-success">Submit</button>
		
	</form>
</div>
</section>
<footer>
	<p class="p-3 bg-dark text-white text-center" >@MominMubashTechnical</p>
</footer>











	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>