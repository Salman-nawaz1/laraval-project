<!-- Main Footer -->
<footer class="main-footer">
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
                                    @foreach($data as $data)
									<div class="call">
										Call us directly
                                        
										<a class="phone" >{{$data->phone}}</a>
										<a class="email" >{{$data->email}}</a>
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