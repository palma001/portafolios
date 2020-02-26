<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets_front/css/main.css" />
		<link rel="icon" href="@yield('favicon')" type="image/x-icon"/>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Main -->
			<div id="main">
				<div class="inner">
					<!-- Header -->
					<header id="header">
						<ul class="icons">
							<li><a href="@yield('twitter')" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="@yield('facebook')" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="@yield('instagram')" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</header>
					@yield('content')
				</div>
			</div>
			<!-- Sidebar -->
			<div id="sidebar">
				<div class="inner">

					<!-- Search -->
						<section id="search" class="alt">
							<form method="post" action="#">
								<input type="text" name="query" id="query" placeholder="Search" />
							</form>
						</section>

					<!-- Menu -->
						<nav id="menu">
							<header class="major">
								<h2>Menu</h2>
							</header>
							<ul>
								<li><a href="{{route('home')}}">Home</a></li>
{{-- 								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li>
									<span class="opener">Submenu</span>
									<ul>
										<li><a href="#">Lorem Dolor</a></li>
										<li><a href="#">Ipsum Adipiscing</a></li>
										<li><a href="#">Tempus Magna</a></li>
										<li><a href="#">Feugiat Veroeros</a></li>
									</ul>
								</li>
								<li><a href="#">Etiam Dolore</a></li>
								<li><a href="#">Adipiscing</a></li>
								<li>
									<span class="opener">Another Submenu</span>
									<ul>
										<li><a href="#">Lorem Dolor</a></li>
										<li><a href="#">Ipsum Adipiscing</a></li>
										<li><a href="#">Tempus Magna</a></li>
										<li><a href="#">Feugiat Veroeros</a></li>
									</ul>
								</li>
								<li><a href="#">Maximus Erat</a></li>
								<li><a href="#">Sapien Mauris</a></li>
								<li><a href="#">Amet Lacinia</a></li> --}}
							</ul>
						</nav>
					<!-- Section -->
					<section>
						<header class="major">
							<h2>Ante interdum</h2>
						</header>
						<div class="mini-posts">
							<article>
								<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
							</article>
							<article>
								<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
							</article>
							<article>
								<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
							</article>
						</div>
						<ul class="actions">
							<li><a href="#" class="button">More</a></li>
						</ul>
					</section>

					<!-- Section -->
					<section>
						<header class="major">
							<h2>Contactenos</h2>
						</header>
						<ul class="contact">
							<li class="icon solid fa-envelope">
								<a href="@yield('email', 'servicesWeb2020@gmail.com')">@yield('email', 'servicesWeb2020@gmail.com')</a>
							</li>
							<li class="icon solid fa-phone">
								@yield('phone', '+5842495025755')
							</li>
							<li class="icon solid fa-home">
								@yield('address', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae officiis maxime atque')
							</li>
						</ul>
					</section>
					<section>
						<form method="post" action="{{route('newsletter.store')}}">
							@csrf
							<input type="text" name="newsletter" placeholder="Suscribirse..."/>
						</form>
					</section>
				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="assets_front/js/jquery.min.js"></script>
		<script src="assets_front/js/browser.min.js"></script>
		<script src="assets_front/js/breakpoints.min.js"></script>
		<script src="assets_front/js/util.js"></script>
		<script src="assets_front/js/main.js"></script>
	</body>
</html>