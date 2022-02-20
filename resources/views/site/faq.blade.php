@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-images .swiper-slide {background-size: cover !important; background-position: left!important;}
		.slider .slider-texts .swiper-slide h1 {font-weight: 400; margin-top: 90px;margin-bottom:0;}
		.slider .slider-texts .swiper-slide p {font-weight:400; font-size:18px;color:#000;}
		.dark_title{font-size: 84px;}
		.contact-box h6 {font-size: 20px;font-weight: 500;}
		.contact-box p {padding-right: 40%;}
		.faq h6{color:#000;letter-spacing:1px;font-weight:400;}
		.faq .card{border:1px solid #a5d357;border-radius:40px;padding:4rem 0;margin: 0px 10px; }
		.faq figure{margin-bottom: 25px;text-align: center;}
		.faq a{text-decoration:none}
		.btn_green_tutorial {background-color: #a5d357;color: #202020;text-align: center;border-radius: 30px;line-height: 40px!important;display: inline-block;padding: 10px 50px;min-width: 145px;font-size: 14px;-webkit-transition: .25s ease-in-out;-moz-transition: .25s ease-in-out;-ms-transition: .25s ease-in-out;-o-transition: .25s ease-in-out;transition: .25s ease-in-out;}
		@media screen and (max-width: 960px){
			.col-sm-4:last-child .card .card-body h6{white-space:nowrap}
		}
	</style>
	
	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_faleconosco.jpg')}}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_faleconosco.jpg')}}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1 class="color_green">
							Central <br> de ajuda 
						</h1>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="content-section last-video" data-background="#202020">
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:300;color:#a5d357;">
					Conte com a gente. <br> Como podemos te ajudar?
				</h2>		
				<div class="form col-sm-9 pt-5">
					<input type="search" class="w-100 text-center" placeholder="Pesquisar">
					<!-- <input type="submit" value="" > -->
					
				</div>		
			</div>			
		</div>		
	</section> 

	<section class="content-section faq" data-background="#fff"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-sm-12 mx-auto">
					<div class="row">
						<div class="col-sm-4 pb-5">
							<a href="/central-de-ajuda/documentos">
								<div class="card d-flex justify-content-center align-items-center h-100">
									<div class="card-body">
										<figure>
											<img src="{{ asset('/assets/images/icon_cadastro.png')}}" alt="Image">
										</figure>
										<h6 class="">
											Cadastro
										</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-4 pb-5">
							<a href="/central-de-ajuda/para-voce">
								<div class="card d-flex justify-content-center align-items-center h-100">
									<div class="card-body">
										<figure>
											<img src="{{ asset('/assets/images/icon_paravoce.png')}}" alt="Image">
										</figure>
										<h6 class="">
											Para você
										</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-4 pb-5">
							<a href="/central-de-ajuda/para-sua-empresa">
								<div class="card d-flex justify-content-center align-items-center h-100">
									<div class="card-body">
										<figure>
											<img src="{{ asset('/assets/images/icon_empresa.png')}}" alt="Image">
										</figure>
										<h6 class="">
											Para sua empresa
										</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 m-auto pt-5 mt-5">
							<a class="btn_green_tutorial w-100" style="font-size:18px" href="/tutoriais">
								Ver Tutoriais
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	
@endsection

