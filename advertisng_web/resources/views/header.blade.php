 <!-- Main Header-->
 <header class="main-header">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left">
						<!-- Info List -->
                        @foreach($data as $con)
						<ul class="info-list">
							<li><a href="mailto:hello@consulte.co"><span class="icon icofont-envelope"></span> {{$con->email}}</a></li>
							<li><a href="tel:+1212-226-3126"><span class="icon icofont-phone"></span>{{$con->phone}} </a></li>
							<li><a href="contact.html"><span class="icon icofont-clock-time"></span> {{$con->office_timing}}</a></li>
						</ul>
                        @endforeach
					</div>
					
					<!-- Top Right -->
                  
					
                </div>
            </div>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="/home"><img src="https://txt.1001fonts.net/img/txt/dHRmLjg4LjAwMDAwMC5jMnNnWVdSMlpYSjBhWE5wYm1jLC4w/drift-wood.regular.webp" alt="" title="" width="300px" style="margin-top:22px;" ></a></div>
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
									<li class="current"><a href="/home">Home</a></li>
									<li><a href="/aboutus">About</a></li>
									<li class=""><a href="/skservice">Service</a>
									
									</li>
									<li ><a href="/projects">Projects</a>
										
									</li>
									
									<li><a href="/contect">Contact</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
					
					<!-- Outer Box -->
					<!-- Outer Box -->
					<div class="outer-box">
						<!-- Search Btn -->

						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="https://txt.1001fonts.net/img/txt/dHRmLjg4LjAwMDAwMC5jMnNnWVdSMlpYSjBhWE5wYm1jLC4w/drift-wood.regular.webp" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>