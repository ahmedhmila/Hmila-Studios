<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: error.html');
    echo'<body onLoad="alert(\'You have to login\')">';
    
    exit;}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;

$movie = $_GET['movie'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	
	<link rel="icon" type="image/png" href="img/BING.png" sizes="32x32">
	<link rel="apple-touch-icon" href="img/BING.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/BING.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/BING.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/BING.png">
	
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Ahmed Hmila">
	<title><?php echo $movie ; ?></title>

</head>
<body class="body">
	
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="home.php" class="header__logo">
								<img src="img/logo.png" alt="">
							</a>
							

							<!-- header nav -->
							<ul class="header__nav">
                                <li class="header__nav-item">
									<a href="home.php" class="header__nav-link header__nav-link--active">Home</a>
								</li>

                                <li class="header__nav-item">
									<a href="catalog.php" class="header__nav-link">Catalog</a>
								</li>
								<?php if(isset($_SESSION['username'])): ?>
								<li class="header__nav-item">
									
									<a href="community.php" class="header__nav-link">Community <i class="icon ion-ios-cloud-upload"></i></a>
									

								</li><?php endif; ?>
                                <li class="header__nav-item">
									<a href="about.PHP" class="header__nav-link">About</a>
								</li>
							</ul>
							

							
							<div class="header__auth">
							
							<?php if(isset($_SESSION['username'])): ?>
								    <a href="logout.php" class="header__sign-in2"><span><?php echo $_SESSION['username'];?></span><i class="icon ion-ios-log-out"></i></a>
									
									
									<?php else: ?>
									<a href="signin.html" class="header__sign-in2"><SPAN>Sign in</SPAN><i class="icon ion-ios-log-in"></i></a>
									
									<?php endif; ?>
									
									
								</a>
								
							</div>
							
                            <!-- header menu btn -->
                            <button class="header__btn" type="button">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </button>
						
					</div>
				</div>
			</div>
		</div>
		
	</header>

<br>
<br>
<br>
<section class="section">
<div class="container">  
	<div class="row">  
        <div>
            <h1 class="home__title"><b><?php echo $movie ; ?></b></h1>
            </div>
        </div> 		 
        <div class="col-12 col-xl-12">
        <video controls crossorigin playsinline id="player">
			
						<source src="movies/<?php echo $movie; ?>.mp4" type="video/mp4" size="1080">

						
					</video></div> </div>
</section>

    <footer class="footer">
		<div class="container">
			<div class="row">
                
				<div class="col-12">
                    <a href="https://www.episup.com/fr" class="sign__logo" >
                    <img src="img/epi.svg" alt="" class="center" > </a>
					<div class="footer__copyright">
						<small><a target="_blank" href="https://www.episup.com/fr">EPI educational group</a></small>

						<ul>
                            <li><a href="tel:+216 29 420 420">+216 29 420 420</a></li>
						<li><a href="contact.php"><u>Contact-us</u></a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <script src="js/plyr.min.js"></script>
   
   

    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>