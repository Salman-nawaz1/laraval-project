<!-- Services Section -->

<div class="services-section">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title">our services</div>
				<h2><span>Best Solutions</span> For Your Business</h2>
			</div>
			<div class="inner-container">
				<div class="row g-0">
				@foreach($data3 as $data3)
					<!-- Service Block -->
					<div class="service-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<h5><a href="service-detail.html">{{$data3->service}}</a></h5>
							<div class="text">{{$data3->detail}}</div>
							<!-- <a class="read-more" href="service-detail.html">More <span class="ti-angle-right"></span></a> -->
						</div>
					</div>
					@endforeach
					
				</div>
				
			</div>
		</div>
	</div>