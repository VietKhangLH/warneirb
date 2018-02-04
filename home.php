<?php
function image($name, $alt) {
	$path = 'img/' . $name . '.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	echo '<img src="' . $base64 . '" alt="' . $alt . '">';
}
function image_jpg($name, $alt) {
	$path = 'img/' . $name . '.jpg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	echo '<img src="' . $base64 . '" alt="' . $alt . '">';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Warn'Eirb Bros | Accueil</title>
	<meta charset="UTF-8">
	<meta name="description" content="Warn'Eirb Bros">
	<meta name="keywords" content="BDE, Warn'Eirb Bros, liste, Enseirb, ENSEIRB MATMECA">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Icon -->
	<link href="img/icon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		<?php
		$styles = array("flaticon", "magnific-popup", "owl.carousel", "animate", "style");
		foreach ($styles as $style) {
			require "css/" . $style .".css";
		}
		?>
	</style>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	  <script type="text/javascript">function rmcpr(){var cpr=document.querySelector(".crisp-1x4zu33");if (cpr){cpr.style="visibility:hidden !important"}else{setTimeout(rmcpr, 500)}}window.$crisp=[];window.CRISP_WEBSITE_ID="b1fc8a40-de25-411a-9841-a7e8f9c64b41";(function(){ d=document;s=d.createElement("script");s.onload=rmcpr;s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	</head>
	<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader">
				<?php image("logo", "Image de chargement"); ?>
				<h2>Chargement.....</h2>
			</div>
		</div>

		<!-- Header section -->
		<header class="header-section">
			<div class="logo">
				<!-- Logo -->
				<a href="home.html"><?php image("logo", "Logo Warn'Eirb Bros");?></a>
			</div>
			<!-- Navigation -->
			<div class="responsive"><i class="fa fa-bars"></i></div>
			<nav>
				<ul class="menu-list">
					<li class="active"><a href="home.html">Accueil</a></li>
					<li><a href="events.html">Events</a></li>
					<li><a href="membres.html">Membres</a></li>
				</ul>
			</nav>
		</header>
		<!-- Header section end -->


		<!-- Intro Section -->
		<div class="hero-section">
			<div class="hero-content">
				<div class="hero-center">
				<?php
					$path = 'img/big-logo.png';
					$type = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
				?>
					<img id="big-logo" <?php echo 'src="' . $base64 . '"'; ?> alt="Big Logo Warn'Eirb Bros" title="On se donne à fond dans cette liste !">
				</div>
			</div>
			<!-- slider -->
			<div id="hero-slider" class="owl-carousel">
				<div class="item hero-item" data-bg="img/01.jpg"></div>
				<div class="item hero-item" data-bg="img/02.jpg"></div>
			</div>
		</div>
		<!-- Intro Section -->


		<!-- About section -->
		<div class="about-section">
			<!-- About contant -->
			<div class="about-contant">
				<div class="container">
					<div class="section-title1">
						<h2>Bonjour !</h2>
						<h3>Les <span>AllÔS</span> ? 06 .. .. .. .. &nbsp; 06 .. .. .. ...</h3>
					</div>
					<div class="row">
						<div class="col-md-6 justify">
							<p>Warn'Eirb Bros, plus communément appelé Warn'Eirb et WEB, c'est avant tout une histoire d'amitié... Nous nous sommes rencontrés dès les premières soirées. Un unique état d'esprit s'est alors dégagé : kiffer le reste de sa vie étudiante au maximum. Peu à peu, notre groupe d'amis est devenu une vraie équipe ambitieuse et organisée. Aujourd'hui, ce sont 5 pôles qui se plient en 2 pour toi. :) 
							</p>
						</div>
						<div class="col-md-6 justify">
							<p>WEB a la joie d’animer ton quotidien pour les campagnes BDE 2018 à l'Enseirb-Matmeca.
								Que ce soit pour répondre aux traditionnelles ALLÔS, cuisiner des heures en vue des repas qui illumineront ta journée, mettre l’ambiance lors des soirées, ou te vendre du rêve avec des animations de folie.
								Nous sommes et seront toujours là pour t'accompagner autant dans les moments festifs, que dans la galère.</p>
							</div>
						</div>
						<div class="text-center mt60">
							<a href="membres.html" class="site-btn">PS : Ce bouton te mène à la team</a>
						</div>
						<!-- popup video -->
						<div class="intro-video">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<img src="" alt="">
									<a href="https://r4---sn-4g5e6n7d.c.drive.google.com/videoplayback?id=6ff7f5576651df48&itag=22&source=webdrive&requiressl=yes&pl=17&sc=yes&ttl=transient&ei=ExN2Wr2bD8fGqAWrlaqoDQ&susc=dr&driveid=1f_CxYZqrezhk3LKOP5Zas1a7qXnSeV1z&app=texmex&mime=video/mp4&lmt=1517687499050011&ip=31.36.88.115&ipbits=0&expire=1517701971&cp=QVNGWUhfUFlVQlhOOjNVLTFBdnN1NWlq&sparams=app,cp,driveid,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,pl,requiressl,sc,source,susc,ttl&signature=17414D69D86AEACE4022FAAE8CBF46B384B50BDE.1DD987ACB760484DFE1A8FAE03E56AA29D0E61A6&key=cms1&cpn=4axyfg6stLnTRN2g&c=WEB_EMBEDDED_PLAYER&cver=20180131&redirect_counter=1&cm2rm=sn-25gkz7z&req_id=4f97628d917aa3ee&cms_redirect=yes&mm=34&mn=sn-4g5e6n7d&ms=ltu&mt=1517687491&mv=m" class="video-popup">
										<i class="fa fa-play"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About section end -->


			<!-- Testimonial section -->
			<div class="testimonial-section pb100">
				<div class="container">
					<div class="row">
						<div>
							<div class="section-title">
								<h2>Nos promesses</h2>
							</div>
							<div class="owl-carousel" id="testimonial-slide">
								<!-- single testimonial -->
								<div class="testimonial">
									<span>‘​‌‘​‌</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
									<div class="client-info">
										<div class="avatar">
											<?php image("avatar/01.jpg", "1"); ?>
										</div>
										<div class="client-name">
											<h2>Hugo Victor</h2>
											<p>Président</p>
										</div>
									</div>
								</div>
								<!-- single testimonial -->
								<div class="testimonial">
									<span>‘​‌‘​‌</span>
									<p>Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
										<div class="client-info">
											<div class="avatar">
												<?php image("avatar/02.jpg", "1"); ?>
											</div>
											<div class="client-name">
												<h2>Hugo Victor</h2>
												<p>Pôle Partenariat</p>
											</div>
										</div>
									</div>
									<!-- single testimonial -->
									<div class="testimonial">
										<span>‘​‌‘​‌</span>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<div class="client-info">
												<div class="avatar">
												<?php image("avatar/02.jpg", "1"); ?>
												</div>
												<div class="client-name">
													<h2>Hugo Victor</h2>
													<p>Pôle Bar</p>
												</div>
											</div>
										</div>
										<!-- single testimonial -->
										<div class="testimonial">
											<span>‘​‌‘​‌</span>
											<p>Laboris nisi ut aliquip ex ea commodo						consequat proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<div class="client-info">
												<div class="avatar">
												<?php image("avatar/02.jpg", "1"); ?>
												</div>
												<div class="client-name">
													<h2>Hugo Victor</h2>
													<p>Pôle Event</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Testimonial section end-->

					<!-- Promotion section -->
					<div class="promotion-section">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<h2>Prêt à kiffer avec nous?</h2>
								</div>
								<div class="col-md-3">
									<div class="promo-btn-area">
										<a href="event.html" class="site-btn btn-2">Check les événements</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Promotion section end-->

					<!-- Footer section -->
					<footer class="footer-section">
						<h2>Warn'Eirb &copy; 2017 All rights reserved.</h2>
					</footer>
					<!-- Footer section end -->

					<style>.crisp-tpob4m.crisp-55dkw{transform:scaleX(-1)}.crisp-1x4zu33{visibility:hidden !important}
					</style>

					<!--====== Javascripts & Jquery ======-->
					<script
					src="http://code.jquery.com/jquery-2.2.4.min.js"
					integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
					crossorigin="anonymous"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
					<script>
						<?php
						$scripts = array("magnific-popup.min", "owl.carousel.min", "circle-progress.min", "home", "main", "konami");
						foreach ($scripts as $script) {
							include "js/" . $script . ".js";
						}
						?>
					</script>
				</body>
				</html>
