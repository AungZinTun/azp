@extends('pages.master')

@section('content')

	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/3.jpg">
		<div class="breadcrumb-area">
			<a href="{{route('index')}}">Home</a> / <span>Portfolio</span>
		</div>
	</div>
	<!-- Page top section end -->


	<!-- Portfolio section start -->
	<section class="portfolio-section">
		<div class="sp-pad spad">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter controls">
				<li class="control" data-filter="*">All</li>
				<li class="control" data-filter=".photo">Photography</li>
				<li class="control" data-filter=".wedding">Weddings</li>
				<li class="control" data-filter=".land">Landscapes</li>
				<li class="control" data-filter=".port">Portraits</li>
			</ul>
		</div>
		<div class="portfolio-warp">
			<!-- single item -->
			<div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/1.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/1.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/2.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/2.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg land" data-setbg="img/portfolio/3.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/3.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg port" data-setbg="img/portfolio/4.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/4.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg photo" data-setbg="img/portfolio/5.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/5.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/6.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/6.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio sm-wide set-bg land" data-setbg="img/portfolio/7.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/7.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg port" data-setbg="img/portfolio/8.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/8.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/9.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/9.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
			<!-- single item -->
			<div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/10.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/10.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="sp-pad next-portfolio-link">
			<a href="#" class="arrow-btn">
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</section>
	<!-- Portfolio section end -->


@endsection