@extends('pages.master')

@section('content')

<!-- Page top section start -->
<div class="page-top-area set-bg" data-setbg="img/headers-bg/4.jpg">
		<div class="breadcrumb-area">
			<a href="#">Home</a> / <span>Contact</span>
		</div>
	</div>
	<!-- Page top section end -->

	<div class="map-area" id="map-canvas"></div>


		<!-- Contact section start -->
	<section class="contact-section set-bg spad" data-setbg="img/contact-bg.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<span class="sp-sub-title">Amazing studio</span>
					<h3 class="sp-title">Stay in touch</h3>
					<p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habi tasse platea dictumst. Curabitur rhoncus auctor eleifend.</p>

					<ul class="con-info">
						<li><i class="flaticon-phone-call"></i>+45 677 8993000 223</li>
						<li><i class="flaticon-envelope"></i>office@template.com</li>
						<li><i class="flaticon-placeholder"></i>Main Str. no 45-46, b3, 56832,<br> Los Angeles, CA</li>
					</ul>
				</div>
			</div>
			<div class="container p-0">
				<div class="row">
					<div class="col-xl-8 offset-xl-4">
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="E-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn light">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
@endsection