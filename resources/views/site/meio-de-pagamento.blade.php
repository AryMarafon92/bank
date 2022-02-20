@extends('site/layouts.default')

@section('content')
	<style>
		.slider .slider-images .swiper-slide {background-position: bottom!important;}
		.video-bg:after {background: url("{{ asset('/assets/images/bg_bank_cadastro.jpg')}}");opacity: 1;background-size: cover!important;}
		@media only screen and (max-width: 1280px), only screen and (max-device-width: 1280px){
			.side-arts .content p {padding-right: 25%;}}
		@media only screen and (max-width: 1100px), only screen and (max-device-width: 1100px){
			.slider .slider-images .swiper-slide {background-size: cover!important;}
			.side-arts .content p {padding-right: 0%;}
			.custom_title_h1 {font-size: 52px;line-height: 62px;}
			.side-arts {padding: 80px 80px;}}
		@media only screen and (max-width: 767px), only screen and (max-device-width: 767px){
			.slider .slider-images .swiper-slide .mobile-slide {display: none!important;}
			.side-arts {padding: 40px;}}
		@media only screen and (max-width: 375px), only screen and (max-device-width: 375px){
			.custom_title_h1 {font-size: 42px;line-height: 52px;}}
		@media only screen and (max-width: 320px), only screen and (max-device-width: 320px){
			.custom_title_h1 {font-size: 36px;line-height: 40px;}}
	</style>

	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_bank.jpg') }}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_bank.jpg') }}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1></h1>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section class="content-section">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-6">
					<div class="side-image left-half" data-scroll data-scroll-speed="2">
						<img src="{{ asset('/assets/images/bank_meiodepagamento.jpg')}}" alt="Image">
					</div>					
					<div class="side-icon-list left-side">
						<ul>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_escolha-bank.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<h5>Escolha bank</h5>
									<p>
										A evolução do pagamento, chegou para facilitar a sua vida. Conte
										com bank, para compras em estabelecimentos físicos ou virtuais.
									</p>
								</div>					
							</li>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_seguranca.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<h5>Sistema de segurança</h5>
									<p>
										Com o bank não existem contratempos, oferecemos transações seguras
										e protegidas contra fraudes.
									</p>
								</div>					
							</li>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_transparencia.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<h5>Transparência</h5>
									<p>
										Tudo na sua tela, em um clique você acessa o extrato completo das 
										suas transações.
									</p>
								</div>					
							</li>
						</ul>
					</div>				
				</div>				
				<div class="col-lg-6">
					<div class="side-arts">
						<div class="titles">
							<h1 class="custom_title_h1">Meio de <br> pagamento <br> online</h1 >
						</div>						
						<div class="content">
							<p>
								O bank é uma plataforma de pagamento online, um meio de pagamento que 
								possibilita a você pagar, receber e realizar transferências entre contas, 
								diretamente do seu celular ou computador, tudo de forma rápida e segura.
							</p>
						</div>
					</div>					
				</div>				
			</div>			
		</div>
    </section>

    <section class="content-section" data-background="#a5d357">
		<div class="video-bg">
			<!-- <video src="videos/video.mp4" loop autoplay playsinline muted></video> -->
		</div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:300;">
					Evolua com a gente, <br> 
					vem ser bank
				</h2>				
				<a class="btn_subscribe mt-5" href="https://pay.bank.com.br/cadastro">Faça seu cadastro</a> 
			</div>			
		</div>		
    </section>    
	
	
@endsection


