<style>
    #bg{
        background-repeat: no-repeat;
  background-size: 1500px 800px;
  margin-top:100px;
    }
    </style>
<div class="banner-section ">
		<div class="main-slider-carousel owl-carousel owl-theme">
        @foreach($data2 as $slide)
			<div class="slide" id="bg" style="background-image: url('/image/{{$slide->image}}')">
				<div class="auto-container w-100">
					<div class="row clearfix">
						
						<!-- Content Column -->
						<div class="content-column col-lg-9 col-md-12 col-sm-12 pt=2px">
							<div class="inner-column">
								<div class="title text-white " >Advertising company</div>
								<h1 class="text-white ">WE ARE<span class="text-green"> EAGER</span>  to serve you better,</h1>
								<div class="text text-white font-weight-bold">Do you want to advertise your bussines? <br>SK advertising is the best solution in dubai <br> we provide multiple service such as 3D <br> signage,stickers,UV Printing,Aluminum <br> Cladding,Internal and External Signage,<br> Rope Access,Vehicle Graphics, CNC and<br>laser Cutting,Offset Fabrication, Digital <br>Printing,LED pannel etc so lets..</div>
								<div class="btn-box">
									<a href="about.html" class="theme-btn btn-style-one"><span class="txt">Work With Us</span></a>
								</div>
							</div>
						</div>
						
					</div>
						
				</div>
			</div>
			@endforeach
			
			
			
			
		</div>
		
		
	</div>