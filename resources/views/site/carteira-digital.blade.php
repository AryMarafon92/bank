@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-images .swiper-slide {background-size: contain !important; background-position: center!important;}
		.slider .slider-texts .swiper-slide h1 {font-size: 110px;font-weight: 400;}
		.slider .slider-texts {padding-top: 0px;margin-top:-40px;}
		.first-video .video-bg:after {background: url("{{ asset('/assets/images/bg_paravoce.jpg')}}");opacity: 1;background-size: cover!important;}
		.first-video .container{padding: 100px 0;}
		.last-video .video-bg:after {background: url("{{ asset('/assets/images/img_evolucao.jpg')}}");opacity: 1;background-size: cover!important;background-position: -3px;}
		.last-video .container{padding: 100px 0;}
		.swiper-slide{margin-top:60px;}
		@media only screen and (max-width: 1700px), only screen and (max-device-width: 1700px){
			.slider .slider-images .swiper-slide {background-size: cover !important;}}
		@media only screen and (max-width: 1100px), only screen and (max-device-width: 1100px){
			.slider .slider-texts .swiper-slide h1 {font-size: 90px;}}
		@media only screen and (max-width: 767px), only screen and (max-device-width: 767px){
			.slider .slider-texts .swiper-slide h1 {font-size: 50px;}		
			.slider .slider-texts .swiper-slide p {padding-left: 0px;}}
		@media only screen and (max-width: 375px), only screen and (max-device-width: 375px){
			.slider .slider-texts .swiper-slide p {font-size: 15px;}}
		@media only screen and (max-width: 320px), only screen and (max-device-width: 320px){
			.slider .slider-texts .swiper-slide p {font-size: 13px;}}
	</style>

	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_paravoce-1.jpg')}}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_paravoce-1.jpg')}}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1 class="text-light">
							Praticidade <br> 
							aonde for
						</h1>
						<p>
							Caso o estabelecimento que você frequenta <br> 
							ainda não seja parceiro do bank você <br> 
							pode solicitar a implementação.
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	
    <section class="content-section first-video" data-background="#a5d357">
		<div class="video-bg"></div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:400;color:#202020;">
					A sua carteira <br> agora é digital
				</h2>
			</div>			
		</div>		
    </section>   

    <section class="content-section" data-background="#202020">
      	<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="section-title text-center">
						<figure>
							<img src="{{ asset('/assets/images/icon_duvida.png')}}" alt="Image">
						</figure>
						<h2 class="text-white">
							Como ser bank?
						</h2>
					</div>
				</div>
				<div class="col-lg-7">
					<figure class="image-box" data-scroll data-scroll-speed="-1" > 
						<img src="{{ asset('/assets/images/img_como-ser-or.png')}}" alt="Image"> 
					</figure>
				</div>
				<div class="col-lg-5">
					<div class="side-icon-list right-side">
						<ul>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_baixe.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<p class="text-white"> 
										Baixe o App bank no seu 
										smartphone ou siga diretamente 
										por aqui, pela plataforma.
									</p>
								</div>
							</li>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_crieconta.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<p class="text-white"> 
										Crie sua conta realizando seu
										cadastro, é bem simples.
									</p>
								</div>
							</li>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_facalogin.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<p class="text-white"> 
										Faça seu login e realize seu 
										primeiro depósito. Pronto, você faz 
										parte da evolução!
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
      	</div>
	</section>
	
	<section class="content-section last-video" data-background="#a5d357">
		<div class="video-bg"></div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:300;color:#202020;">
					bank, a evolução <br> do pagamento.
				</h2>				
				<a class="btn_subscribe_white mt-5 " href="https://https://pay.bank.com.br/cadastro">Faça seu cadastro</a> 
			</div>			
		</div>		
	</section> 
	
@endsection

