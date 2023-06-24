<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
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
	<title>Hmila Studios Streaming Services</title>
	
</head>



<body class="body">
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">

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
		</div>
		
	</header>
	



	
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/BLADERUNNERBG1.jpg"></div>
			<div class="item home__cover" data-bg="img/home/lifePIBG.jpg"></div>
			<div class="item home__cover" data-bg="img/home/AkiraBG.jpg"></div>
			<div class="item home__cover" data-bg="img/home/memBG.jpg"></div>
			<div class="item home__cover" data-bg="img/home/APBG.jpg"></div>
			<div class="item home__cover" data-bg="img/home/mldBG.jpg"></div>
		</div>
		<!-- end home bg -->
		

		
	

		


		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>Bala Jdida </b> - 3am jdid saison jdida </h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
						<div class="item">
							<!-- carta jdida -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/BLADERUNNER.jpg" alt="">
									<a href="player.php?movie=Blade.Runner.2049" class="card__play" target="_blank">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blade Runner 2049</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>9.9</span>
								</div>
							</div>
							<!-- wfet -->
						</div>

						<div class="item">
							<!-- carta jdida  -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/lifePIP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Life of PI</a></h3>
									<span class="card__category">
										<a href="#">Adventure</a>
										<a href="#">Fiction</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.9</span>
								</div>
							</div>
							<!-- wfet -->
						</div>

						<div class="item">
							<!-- carta jdida  -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/AkiraP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Akira</a></h3>
									<span class="card__category">
										<a href="#">Anime</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.3</span>
								</div>
							</div>
							<!-- wfet -->
						</div>

						<div class="item">
							<!-- carta jdida  -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/memoriesP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Memories</a></h3>
									<span class="card__category">
										<a href="#">Anime</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
							<!-- wfet -->
							
						</div>
						<div class="item">
							<!-- carta jdida  -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/APP.jpg" alt="">
									<a href="player.php?movie=American.Psycho" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">American Psycho</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
							<!-- wfet -->
						</div>
						<div class="item">
							<!-- carta jdida  -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="img/covers/mldP.jpg" alt="">
									<a href="player.php?movie=Mulholland.Dr" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="player.php?movie=Mulholland.Dr">Mulholland Drive</a></h3>
									<span class="card__category">
										<a href="#">Drama</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.8</span>
								</div>
							</div>
							<!-- wfet -->
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>






	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="content__title">New items</h2>
						

						<!--  tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/BLADERUNNER.jpg" alt="">
											<a href="player.php?movie=Blade.Runner.2049" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="player.php?movie=Blade.Runner.2049">Blade Runner 2049</a></h3>
											<span class="card__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>9.9</span>

												<ul class="card__list">
													<li>4K</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>Officer K , a new blade runner for the Los Angeles Police Department, unearths a buried secret that has the potential to plunge what's left of society into chaos. His discovery leads him to find Rick Deckard, a former blade runner who's been missing for 30 years.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/lifePIP.jpg" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Life of PI</a></h3>
											<span class="card__category">
												<a href="#">Adventure</a>
												<a href="#">Fiction</a>											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.9</span>

												<ul class="card__list">
													<li>HD</li>
													<li>12+</li>
												</ul>
											</div>

											<div class="card__description">
												<P>After deciding to sell their zoo in India and move to Canada, Santosh and Gita Patel board a freighter with their sons and a few remaining animals. Tragedy strikes when a terrible storm sinks the ship, leaving Pi, with a Bengal tiger that has also found refuge aboard the lifeboat. </P>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/AkiraP.jpg" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Akira</a></h3>
											<span class="card__category">
												<a href="#">Anime</a>
												<a href="#">Thriller</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.3</span>

												<ul class="card__list">
													<li>HD</li>
													<li>10+</li>
												</ul>
											</div>

											<div class="card__description">
												<P>In 1988 the Japanese government drops an atomic bomb on Tokyo after experiments on children go awry. In 2019, 31 years after the nuking of the city, Kaneda, a bike gang leader, tries to save his friend Tetsuo from a secret government project.</P>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/memoriesP.jpg" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="#">Memories</a></h3>
											<span class="card__category">
												<a href="#">Anime</a>
												<a href="#">Drama</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>Three films by three different directors. In "Magnetic Rose," engineers board an abandoned space station and encounter disturbing paranormal forces. A young lab worker accidentally swallows a chemical weapon and becomes a killing machine in "Stink Bomb." In "Cannon Fodder," a young boy and his father fight for survival in a city functioning on paranoia.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/APP.jpg" alt="">
											<a href="player.php?movie=American.Psycho" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="player.php?movie=American.Psycho">American Psycho</a></h3>
											<span class="card__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>

												<ul class="card__list">
													<li>HD</li>
													<li>16+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>In New York City in 1987, a handsome, young urban professional, Patrick Bateman, lives a second life as a gruesome serial killer by night.This movie examines the elements that make a man a monster.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="img/covers/mldP.jpg" alt="">
											<a href="player.php?movie=Mulholland.Dr" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="player.php?movie=Mulholland.Dr">Mulholland Drive</a></h3>
											<span class="card__category">
												<a href="#">Drama</a>
												<a href="#">Thriller</a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>7.8</span>

												<ul class="card__list">
													<li>HD</li>
													<li>12+</li>
												</ul>
											</div>

											<div class="card__description">
												<p>A woman is left amnesiac after a car crash. She wanders the streets of Los Angeles in a daze before taking refuge in an apartment where she is discovered by Betty, seeking fame as an actress. Together, the two attempt to solve the mystery of Rita's true identity.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- wfet -->
					</div>
				</div>









				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/BLADERUNNER.jpg" alt="">
									<a href="player.php?movie=Blade.Runner.2049" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="player.php?movie=Blade.Runner.2049">Blade Runner 2049</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>9.9</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/lifePIP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Life of PI</a></h3>
									<span class="card__category">
										<a href="#">Adventure</a>
										<a href="#">Fiction</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.9</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/AkiraP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Akira</a></h3>
									<span class="card__category">
										<a href="#">Anime</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.3</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/memoriesP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Memories</a></h3>
									<span class="card__category">
										<a href="#">Anime</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/APP.jpg" alt="">
									<a href="player.php?movie=American.Psycho" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="player.php?movie=American.Psycho">American Psycho</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/mldP.jpg" alt="">
									<a href="player.php?movie=Mulholland.Dr" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="player.php?movie=Mulholland.Dr">Mulholland Drive</a></h3>
									<span class="card__category">
										<a href="#">Drama</a>
										<a href="#">Thriller</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.8</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/DUP.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Django Unchained</a></h3>
									<span class="card__category">
										<a href="#">Thriller</a>
										<a href="#">Adventure</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.3</span>
								</div>
							</div>
						</div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="img/covers/SFP.jpg" alt="">
                                    <a href="player.php?movie=Scarface" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="player.php?movie=Scarface">Scarface</a></h3>
                                    <span class="card__category">
                                        <a href="#">Mafia</a>
                                        <a href="#">Drama</a>
                                        <a href="#">Thriller</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>9.9</span>
                                </div>
                            </div>
                        </div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="img/covers/Before-SunriseP.jpg" alt="">
                                    <a href="#" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#">Before Sunrise</a></h3>
                                    <span class="card__category">
                                        <a href="#">Romance</a>
                                        <a href="#">Comedy</a>
                                        <a href="#">Adventure</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                        </div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="img/covers/spirited-awayP.jpg" alt="">
                                    <a href="player.php?movie=Spirited.Away" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="player.php?movie=Spirited.Away">Spirited Away</a></h3>
                                    <span class="card__category">
                                        <a href="#">Anime</a>
                                        <a href="#">Mystery</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.8</span>
                                </div>
                            </div>
                        </div>
						<!-- wfet -->

						<!-- carta jdida  -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="img/covers/12-monkeysP.jpg" alt="">
                                    <a href="player.php?movie=12.Monkeys" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="player.php?movie=12.Monkeys">12 Monkeys</a></h3>
                                    <span class="card__category">
                                        <a href="#">Thriller</a>
                                        <a href="#">Neo-Noir</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>9.5</span>
                                </div>
                            </div>
                        </div>
						<!-- wfet -->

						<!-- carta jdida  -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="img/covers/sky.jpg" alt="">
                                    <a href="#" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#">Skyfall</a></h3>
                                    <span class="card__category">
                                        <a href="#">Adventure</a>
                                        <a href="#">Drama</a>
                                    </span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
                                </div>
                            </div>
                        </div>
        
						<!-- wfet -->
					</div>
				</div>

				
						<!-- wfet -->
					
				
			</div>
        </div>
	</section>






    <footer class="footer">
		<div class="container">
			<div class="row">
                
				<div class="col-12">
                    <a href="https://www.episup.com/fr" class="sign__logo" >
                    <img src="img/epi.svg" alt="" class="center"> </a>
					<div class="footer__copyright">
						<small><a target="_blank" href="https://www.episup.com/fr">EPI educational group</a></small>

						<ul>
                            <li><a href="tel:+216 29 420 420">+216 29 420 420</a></li>
						<li><a href="contact.php">Contact-us</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>






    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>