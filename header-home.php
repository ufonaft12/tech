<?php 
function get_header($page_type) { ?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name='robots' content='noindex,follow' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel='stylesheet' id='wp-css'  href='/wp/css/wp.css?ver=4.9.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap4-css'  href='/css/bootstrap.min.css?ver=4.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='fontawesome-css'  href='/css/fontawesome-all.min.css?ver=5.0.7' type='text/css' media='all' />
	<link rel='stylesheet' id='linearicons-css'  href='/css/linearicons-free.min.css?ver=1.0.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='almoni-dl-aaa-css'  href='/css/almoni-dl-aaa.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='montserrat-css'  href='/css/montserrat.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='opensanshebrew-css'  href='/css/opensanshebrew.min.css?ver=1.0.0' type='text/css' media='all' />
	
	<link rel='stylesheet' id='main-style-css'  href='/css/main.css' type='text/css' media='all' />
	<?php if($page_type==="front-page") { ?>
	<link rel='stylesheet' id='front-page-style-css'  href='/css/front-page.css' type='text/css' media='all' />
	<?php } ?>
	<script type='text/javascript' src='/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/js/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='/js/bootstrap.min.js?ver=4.0.0'></script>
	<script type='text/javascript' src='/js/main.js'></script>
</head>
<body class="rtl<?php echo ' '.$page_type; ?>">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12 content">
					<a class="mobile-menu-btn" href="#menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div class="col-logo col-right col-table">
						<a class="vertical-center" href="/" alt="">
							<img src="../img/logo.png" alt="" title="">
						</a>
					</div>
					<div id="menu" class="col-menu col-left">
						<ul id="menu-header" class="menu-header">
							<li class="menu-itme"><a href="#">הסיפור_שלנו</a></li>
							<li class="menu-item">
								<a href="#">מוצרים</a>
							</li>
							<li class="menu-item">
								<a href="#">פרוייקטים</a>
							</li>
							<li class="menu-item">
								<a href="#">בלוג</a>
							</li>
							<li class="menu-item ">
								<a href="#">צור_קשר</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
<?php } ?>