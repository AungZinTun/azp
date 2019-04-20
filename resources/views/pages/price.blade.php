@extends('pages.master')
@section('content')


	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/4.jpg">
		<div class="breadcrumb-area">
			<a href="{{ route('index')}} ">Home</a> / <span>Prices</span>
		</div>
	</div>
	<!-- Page top section end -->
<style > section.pricing {
	background: #007baf;
	background: linear-gradient(to right, #0062E6, #33AEFF);
	}

	.pricing .card {
	border: none;
	border-radius: 1rem;
	transition: all 0.2s;
	box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
	}

	.pricing hr {
	margin: 1.5rem 0;
	}

	.pricing .card-title {
	margin: 0.5rem 0;
	font-size: 0.9rem;
	letter-spacing: .1rem;
	font-weight: bold;
	}

	.pricing .card-price {
	font-size: 3rem;
	margin: 0;
	}

	.pricing .card-price .period {
	font-size: 0.8rem;
	}

	.pricing ul li {
	margin-bottom: 1rem;
	}

	.pricing .text-muted {
	opacity: 0.7;
	}

	.pricing .btn {
	font-size: 80%;
	border-radius: 5rem;
	letter-spacing: .1rem;
	font-weight: bold;
	padding: 1rem;
	opacity: 0.7;
	transition: all 0.2s;
	}

	/* Hover Effects on Card */

	@media (min-width: 992px) {
	.pricing .card:hover {
		margin-top: -.25rem;
		margin-bottom: .25rem;
		box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
	}
	.pricing .card:hover .btn {
		opacity: 1;
	}}
</style>
	<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Mini Session</h5>
            <h6 class="card-price text-center">50,000<span class="period">MMK</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>10 Photo</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>10 (4"x6" Print) </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Full-size softcopy</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Hours shooting time</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>1 Location</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span> - </li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span> - </li>
			 

              <li class="text-muted text-center"><span class="fa-li"><i class="fas fa-times"></i></span>Best for Solo/Convocation Portrait</li>

         
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
		  <h5 class="card-title text-muted text-uppercase text-center">Basic Session</h5>
            <h6 class="card-price text-center">100,000<span class="period">MMK</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>20 Photo</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>20 (4"x6" Print) </li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>1 (14"x20" Print) </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Full-size softcopy</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>2 Hours shooting time</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>2 Location</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span> - </li>
			
              <li class="text-muted text-center"><span class="fa-li"><i class="fas fa-times"></i></span>Best for Couple/Friendship Goal</li>

            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
		  <h5 class="card-title text-muted text-uppercase text-center">Extended Session</h5>
            <h6 class="card-price text-center">150,000<span class="period">MMK</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>30 Photo</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>30 (4"x6" Print) </li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>1 (20"x30" Print)</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>1 (4"x 6" Album)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Full-size softcopy</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>3 Hours shooting time</li>
			  <li><span class="fa-li"><i class="fas fa-check"></i></span>3 Location</li>
              <li class="text-muted text-center"><span class="fa-li"><i class="fas fa-times"></i></span>Best for Prewedding/Engagement</li>

            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


	<!-- Elements section start -->
	<section class="elements-section spad">
		<div class="container">
			<!-- Buttons element -->
			<!-- <div class="element">
				<div class="sp-title">Buttons</div>
				<button class="site-btn mr-5">Read More</button>
				<button class="site-btn btn-two mr-5">Read More</button>
				<button class="site-btn btn-three mr-5">Read More</button>
				<button class="site-btn btn-four">Read More</button>
			</div> -->
			<!-- Accordions & tabs -->
			<div class="element">
				<div class="sp-title">FAQ</div>
				<div class="row">
					<div class="col-lg-6">
						<!-- Accordions -->
						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">How you guarrentee your services</button>
								</div>
								<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p> We will work hard until you satisfy.
										In case you dont satisfy the result, no need to pay. </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> Can I get all photo taken throughout the session. </button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										<p> You will get only high-quality retouched photos.  </p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Can I get only softcopy</button>
								</div>
								<div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<p>Yes,cost printing will be deduced from the package.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- loaders -->
			<div class="element">
				<div class="sp-title">Our features</div>
				<div class="row">
					<div class="col-lg-3 cp-item">
						<div class="circle-progress" data-cpid="id-1" data-cpvalue="75" data-cpcolor="#000080" data-cptitle="Inspiration"></div>
					</div>
					<div class="col-lg-3 cp-item">
						<div class="circle-progress" data-cpid="id-2" data-cpvalue="80" data-cpcolor="#AFEEEE" data-cptitle="Peace"></div>
					</div>
					<div class="col-lg-3 cp-item">
						<div class="circle-progress" data-cpid="id-3" data-cpvalue="100" data-cpcolor="#FF0000" data-cptitle="hard work"></div>
					</div>
					<div class="col-lg-3 cp-item">
						<div class="circle-progress" data-cpid="id-4" data-cpvalue="90" data-cpcolor="#FFC0CB" data-cptitle="LOve"></div>
					</div>
				</div>
			</div>
			<!-- milestones -->
			<div class="element">
				<div class="sp-title">milestones</div>
				<div class="row">
					<!-- <div class="col-lg-3 fact-box">
						<div class="fact-content">
							<i class="flaticon-gamepad"></i>
							<h2>48</h2>
							<p>VIDEO gAMES</p>
						</div>
					</div>
					<div class="col-lg-3 fact-box">
						<div class="fact-content">
							<i class="flaticon-trophy"></i>
							<h2>7</h2>
							<p>AWARDS WON</p>
						</div>
					</div> -->
					<div class="col-lg-3 fact-box">
						<div class="fact-content">
							<i class="flaticon-alarm-clock"></i>
							<h2>23K</h2>
							<p>Pictures taken</p>
						</div>
					</div>
					<div class="col-lg-3 fact-box">
						<div class="fact-content">
							<i class="flaticon-laptop"></i>
							<h2>19</h2>
							<p>Video tutorials</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Icon box -->
			<!-- <div class="element">
				<div class="sp-title">Icon boxes</div>
				<div class="row">
					<div class="col-md-4">
						<div class="icon-box">
							<i class="flaticon-video-camera"></i>
							<h4>Video Footages</h4>
							<p>Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-box">
							<i class="flaticon-photo-camera"></i>
							<h4>Photo Shootings</h4>
							<p>Congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="icon-box">
							<i class="flaticon-safebox"></i>
							<h4>photo albums</h4>
							<p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. </p>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<!-- Elements section end -->


@endsection