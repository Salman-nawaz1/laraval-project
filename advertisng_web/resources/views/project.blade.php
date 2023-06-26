<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from htmldemo.net/consultix/consultix/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 16:38:45 GMT -->
<head>
<meta charset="UTF-8">
<title>Consultix - Investment Company Bootstrap 5 Template</title>
<meta name="description" content="Consulte is a free Bootstrap HTML Template for Investment Company"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="canonical" href="Replace_with_your_PAGE_URL.html" />

<!-- Stylesheets -->
<link href=" consultix/css/bootstrap.min.css" rel="stylesheet">
<link href="consultix/css/main.css" rel="stylesheet">
<link href="consultix/css/responsive.css" rel="stylesheet">

<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Consulte - Investment Company Bootstrap HTML Template" />
<meta property="og:url" content="PAGE_URL" />
<meta property="og:site_name" content="SITE_NAME" />
<!-- For the og:image content, replace the # with a link of an image -->
<meta property="og:image" content="#" />
<meta property="og:description" content="Consulte is a free Bootstrap HTML Template for Investment Company" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;500;600;700;900&amp;family=Libre+Baskerville:wght@400;700&amp;family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&amp;family=Sacramento&amp;display=swap" rel="stylesheet">

<!-- Add site Favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta name="msapplication-TileImage" content="images/favicon.png" />

<!-- Structured Data  -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Replace_with_your_site_title",
  "url": "Replace_with_your_site_URL"
}
</script>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header style-three">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left">
						<!-- Info List -->
						<ul class="info-list">
                            @foreach($data as $data)
							<li><a href="mailto:hello@consulte.co"><span class="icon icofont-envelope"></span> {{$data->phone}}</a></li>
							<li><a href="tel:+1212-226-3126"><span class="icon icofont-phone"></span> {{$data->email}}</a></li>
							<li><a href="contact.html"><span class="icon icofont-clock-time"></span>{{$data->office_timing}}</a></li>
						@endforeach
                        </ul>
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right">
						<!-- Social Box -->
						
                    </div>
					
                </div>
            </div>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="https://txt.1001fonts.net/img/txt/dHRmLjg4LjAwMDAwMC5jMnNnWVdSMlpYSjBhWE5wYm1jLC4w/drift-wood.regular.webp" alt="" title="" width="300px" style="margin-top:22px;"></a></div>
                    </div>
					
                   	<div class="nav-outer pull-left clearfix">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="/home">Home</a></li>
									<li><a href="aboutus">About Us</a></li>
									<li class=""><a href="/skservice">Service</a>
										
									</li>
									<li class="current dropdown"><a href="#">Projects</a>
										
									</li>
									
									<li><a href="/contect">Contact</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
                   <!-- Outer Box -->
                   <div class="outer-box">
						<!-- Search Btn -->

						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
					</div>
					
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/home"><img src="https://txt.1001fonts.net/img/txt/dHRmLjg4LjAwMDAwMC5jMnNnWVdSMlpYSjBhWE5wYm1jLC4w/drift-wood.regular.webp" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Page Title Section -->
    <div class="page-title-section">
    	<div class="auto-container">
			<ul class="post-meta">
				<li><a href="/home">Index</a></li>
				<li>Project</li>
			</ul>
			<h2><span>Latest</span> From Our Project</h2>
		</div>
	</div>
	<!-- End Page Title Section -->

	<!-- Project Section -->
   
    <div class="row">
    @foreach($data4 as $data2)
	<div class="col-lg-4 col-md-12 col-sm-6 col-12  mt-4">
    <div class="gallery-block">
						<div class="inner-box">
							<div class="image">
<img src="{{ asset('/image/'.$data2->image)}}"> 
<div class="overlay-box">
									<div class="overlay-inner">
										<h3><a href="/contect">contect us to get <br> our services</a></h3>
										<div class="designation">sk advertising</div>
										<a href="/contect" class="arrow ti-angle-right"></a>
									</div>
								</div>
</div> 
</div>
								</div>
</div>
@endforeach
</div> 

          

			
	<!-- End Project Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer style-two">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
						
                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="images/logo.png" alt="" /></a>
									</div>
                                    @foreach($data3 as $data)
									<div class="call">
										Call us directly
                                       
										<a class="phone" href="">{{$data->phone}}</a>
										<a class="email" href="">{{$data ->email}}</a>
									
                                    </div>
                                    @endforeach
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Company</h5>
									<ul class="list-link">
										<li><a href="/aboutus">About Us</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Investors</a></li>
										<li><a href="/contect">Contact Us</a></li>
										<li><a href="/aboutus">Offices</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<ul class="list-link">
										<li><a href="#">FAQS</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Community</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                         
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="bottom-inner">
						<div class="row clearfix">
							
							<div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="copyright">Copyright @ All rights reserved | This website  is made  <i class="icon-heart text-danger" aria-hidden="true"></i> by Salman Balouch</div>
							</div>
							
							
							
						</div>
					</div>
				</div>	
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="https://htmldemo.net/consultix/consultix/blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="consultix/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="consultix/js/vendor/jquery-3.6.0.min.js"></script>
<script src="consultix/js/vendor/jquery-migrate-3.3.2.min.js"></script>

<script src="consultix/js/bootstrap.min.js"></script>
<script src="consultix/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="consultix/js/jquery.fancybox.js"></script>
<script src="consultix/js/appear.js"></script>
<script src="consultix/js/owl.js"></script>
<script src="consultix/js/wow.js"></script>
<script src="consultix/js/parallax.min.js"></script>
<script src="consultix/js/tilt.jquery.min.js"></script>
<script src="consultix/js/jquery.paroller.min.js"></script>
<script src="consultix/js/jquery-ui.js"></script>
<script src="consultix/js/script.js"></script>

</body>

<!-- Mirrored from htmldemo.net/consultix/consultix/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 16:38:45 GMT -->
</html>