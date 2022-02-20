@extends('site/layouts.default')

@section('content')

<style>
	.play-now .play-btn {background: url("{{ asset('/assets/images/logo_botao.png') }}");opacity: 1;background-size: cover!important;}
	.video-bg:after 	{background: url("{{ asset('/assets/images/bg_home_carteiradigital.jpg')}}");opacity: 1;background-size: cover!important;}
	.btn_subscribe:hover {background-color: #fff;color: #202020;text-decoration: none;}
	@media only screen and (max-width: 991px), only screen and (max-device-width: 991px){
		.slider .slider-images .swiper-slide .mobile-slide {display: block;background-size: contain !important;background-position: right!important;background-repeat: no-repeat!important;}
	}
	@media only screen and (max-width: 767px), only screen and (max-device-width: 767px){
		.slider .slider-texts .swiper-slide p {padding-left: 0px;}
	}
	@media only screen and (max-width: 414px), only screen and (max-device-width: 414px){
		.image-icon-box .content-box p {padding: 0 45px;}
	}
	@media only screen and (max-width: 375px), only screen and (max-device-width: 375px){
		.image-icon-box .content-box p {padding: 0 25px;}
	}
	@media only screen and (max-width: 320px), only screen and (max-device-width: 320px){
		.section-title h2 {font-size: 34px;}
		.image-icon-box .content-box p {padding: 0 20px;}
		.side-icon-list ul li .content p {padding-right: 15%;}
		.cta-box h2 {font-size: 28px;}
		.preloader .inner {top: -30px;}
	}
</style>
	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_home.jpg')}}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_home.jpg')}}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1>
							É fácil<br>evoluir 
						</h1>
						<p>
							<b>	Pague com bank!</b> <br>
							Uma carteira digital <br> 
							completa para você.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="play-now"> 	
			<a href="/home" data-fancybox data-width="640" data-height="360"  class="play-btn"><img src="" alt=""></a>	
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 	width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
				<defs>
					<path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
				</defs>
				<circle cx="150" cy="100" r="75" fill="none"/>
				<g>
					<use xlink:href="#circlePath" fill="none"/>
					<text>
						<textPath xlink:href="#circlePath">
							Pensou, pagou! - Pensou, pagou! - Pensou, pagou! - 
						</textPath>
					</text>
				</g>
			</svg>
		</div>
	</header>
	
    <section class="digital-wallet content-section" data-background="#a5d357">
      	<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="section-title text-center">
						<figure>
							<img src="{{ asset('/assets/images/icon_carteiradigital.png')}}" alt="Image">
						</figure>
						<h2 class="text-white">
							bank é a sua <br> Carteira Digital
						</h2>
					</div>
				</div>
				<div class="col-lg-7">
					<figure class="image-box" data-scroll data-scroll-speed="-1" > 
						<img src="{{ asset('/assets/images/bank_carteiradigital-1_new.jpeg')}}" alt="Image"> 
					</figure>
				</div>
				<div class="col-lg-5">
					<div class="side-icon-list right-side">
						<ul>
							<li>
								<figure> 
									<img src="{{ asset('/assets/images/icon_pagamento-facil.png')}}" alt="Image"> 
								</figure>
								<div class="content">
									<h5 class="text-white">
										Pagamento fácil, <br> 
										direto pelo aplicativo
									</h5>
									<p> 
										A melhor evolução é aquela que <br>
										contribui também, com a <br>
										evolução de seu meio. bank é <br>
										facilidade e praticidade, somos <br>
										aliados da tecnologia para te <br>
										levar além.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
      	</div>
	</section>
	
    <section class="advantages content-section no-bottom-spacing" id="evolucao">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="section-title text-center">
						<figure>
							<img src="{{ asset('/assets/images/icon_duvida.png')}}" alt="Image">
						</figure>
						<h6 style="letter-spacing:1px;">
							Uma nova experiência com pagamentos
						</h6>
						<h2>
							O que a evolução <br> 
							tem a oferecer?
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0">
			<div class="row g-0">
				<div class="col-lg-4 border_right">
					<div class="image-icon-box" data-scroll data-scroll-speed="-1">
						<figure class="icon"> 
							<img src="{{ asset('/assets/images/icon_praticidade.png')}}" alt="Image"> 
						</figure>
						<figure class="content-image"> 
							<img src="{{ asset('/assets/images/img_praticidade.jpg')}}" alt="Image"> 
						</figure>
						<div class="content-box">
							<h4>Praticidade</h4>
							<div class="expand">
								<p>
									Tudo o que você precisa para realizar pagamentos,
									está centralizado em um só lugar. Seja para pagar
									em estabelecimentos ou boletos, você paga com bank.
								</p> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 border_right">
					<div class="image-icon-box" data-scroll data-scroll-speed="0.5">
						<figure class="icon"> 
							<img src="{{ asset('/assets/images/icon_agilidade.png')}}" alt="Image"> 
						</figure>
						<figure class="content-image"> 
							<img src="{{ asset('/assets/images/img_agilidade.jpg')}}" alt="Image"> 
						</figure>
						<div class="content-box">
							<h4>Facilidade</h4>
							<div class="expand">
								<p>
									Serviços completos para receber e realizar pagamentos
									no seu dia a dia. Com bank é rápido, fácil e digital,
									você faz tudo do seu celular ou computador.
								</p> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="image-icon-box" data-scroll data-scroll-speed="1">
						<figure class="icon"> 
							<img src="{{ asset('/assets/images/icon_facilidade.png')}}" alt="Image"> 
						</figure>
						<figure class="content-image"> 
							<img src="{{ asset('/assets/images/img_facilidade.jpg')}}" alt="Image"> 
						</figure>
						<div class="content-box">
							<h4>Agilidade</h4>
							<div class="expand">
								<p>
									Otimização de tempo é com bank, pagamento agora é
									digital para que você dedique mais tempo com o que 
									realmente importa: você!
								</p> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
    </section>

    <section class="cta content-section" data-background="#202020"> 
		<div class="container">
			<div class="row justify-content-center"><div class="col-12"><div class="section-title text-center"></div></div></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="recent-news">
						<div class="content-box"> 
							<h1 class="green_title">
								Pensou, pagou!							
							</h1>
							<p class="text-white">
								Com bank você realiza e recebe <br> seus pagamentos de forma <br> rápida e segura.
							</p>
							<a href="https://pay.bank.com.br/cadastro" class="btn_subscribe">Faça seu cadastro</a> 
						</div>
						<figure data-scroll data-scroll-speed="-1">
							<img src="{{ asset('/assets/images/img_pensoupagou_new.png')}}" alt="Image">
						</figure>
					</div>
				</div>
			</div>
		</div>
    </section>

    <section class="cta-footer content-section" data-background="#a5d357">
		<div class="video-bg">
		</div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:300;">
					O usuário bank tem <br> 
					liberdade e segurança,<br> 
					porque <b class="bold-custom">sua carteira é digital</b>.
				</h2>
			</div>			
		</div>		
    </section>    


	
@endsection