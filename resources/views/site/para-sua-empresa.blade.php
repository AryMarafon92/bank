@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-images .swiper-slide {background-size: cover !important; background-position: center!important;}
		.slider .slider-texts .swiper-slide h1 {font-size: 110px;font-weight: 400;}
		.slider .slider-texts {padding-top: 0px;margin-top:-40px;}
		.first-video .video-bg:after {background: url('assets/images/bg_empresa.jpg');opacity: 1;background-size: cover!important;}
		.first-video .container{padding: 50px 0;}
		.last-video .video-bg:after {	background: url('assets/images/bank_pagamentofacil.jpg');opacity: 1;background-size: cover!important;
										background-position: -3px;}
		.last-video .container{padding: 100px 0;}
		.col-12:nth-child(odd) .recent-news .content-box {order: 1;margin-left: 0;margin-right: -15%;text-align: left;}
		.col-12:nth-child(even) .recent-news .content-box {order: 1;margin-left: 0;margin-right: -15%;text-align: left;}
		.col-12:nth-child(even) .recent-news .content-box p {padding-right: 34%;padding-left:20%;}
		.recent-news .content-box p, .recent-news .content-box h6{padding-left: 20%;padding-right: 34%;}
		.swiper-slide{margin-top:60px;}
		@media only screen and (max-width: 1100px), only screen and (max-device-width: 1100px){
			.slider .slider-texts .swiper-slide h1 {font-size: 90px;}
			.slider .slider-images .swiper-slide .mobile-slide {background-position: center!important;}}
		@media only screen and (max-width: 767px), only screen and (max-device-width: 767px){
			.slider .slider-texts .swiper-slide h1 {font-size: 50px;}		
			.slider .slider-texts .swiper-slide p {padding-left: 0px;font-size:15px;}
			.cta-box h2 {font-size: 26px;}
			.recent-news .content-box p, .recent-news .content-box h6,.col-12:nth-child(even) .recent-news .content-box p {padding-left: 10%;padding-right: 10%;}
			.slider .slider-images .swiper-slide .mobile-slide {background-position: left!important;}}
		@media only screen and (max-width: 375px), only screen and (max-device-width: 375px){
			.cta-box h2 {padding: 0 37px;}
			.cta-box h2 br{display:none!important}
			.slider .slider-texts .swiper-slide p br{display:none!important}}
		@media only screen and (max-width: 320px), only screen and (max-device-width: 320px){
			.cta-box h2 {padding: 0 37px;}
			.cta-box h2 br{display:none!important}
			.slider .slider-texts .swiper-slide p br{display:none!important}}
	</style>


	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_empresa.jpg')}}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_empresa.jpg')}}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1 class="text-light">
							Para sua <br> 
							empresa
						</h1>
						<p>
							Evolua seu negócio com os serviços bank, tenha <br> 
							um sistema em tecnologia de pagamento inteiro <br> 
							disponível para sua empresa.
						</p>
						<a class="btn_subscribe_white mt-5 " href="https://pay.bank.com.br/cadastro">Faça seu cadastro</a> 
					</div>
				</div>
			</div>
		</div>
	</header>
	
    <section class="content-section first-video" data-background="#a5d357">
		<div class="video-bg"></div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:400;color:#fff;">
					Seja parceiro bank e não <br> 
					perca mais nenhuma venda <br> 
					por falta de opções.
				</h2>
			</div>			
		</div>		
    </section>   

    <section class="content-section">    
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="recent-news">
						<div class="content-box"> 
							<h6>
								A forma de pagamento <br>
							 	que seu cliente precisa
							</h6>
							<p>
								Os clientes hoje não são somente consumidores, eles procuram por boas
								experiências junto a empresa. Oferecendo bank em seu negócio, você estará 
								proporcionando mais facilidade, praticidade e segurança ao seu cliente.
							</p>
						</div>
					<figure data-scroll data-scroll-speed="-1">
						<img src="/assets/images/bank_celular.gif" alt="Image">
					</figure>
				</div>            
			</div>          
			<div class="col-12">
				<div class="recent-news">
					<div class="content-box">
						<h6>
							Plataforma de <br> 
							pagamento online
						</h6>
						<p>
							Com uma interface intuitiva, você tem acesso ao seu extrato completo de 
							todos os períodos, para a gestão financeira da sua empresa.
						</p> 
					</div>              
					<figure data-scroll data-scroll-speed="1">
						<img src="/assets/images/bank_macbook.gif" alt="Image">
					</figure>
				</div>            
			</div>             
		</div>      
    </section>
	
	<section class="content-section last-video" data-background="#a5d357">
		<div class="video-bg"></div>		
		<div class="container">
			<div class="cta-box" data-scroll data-scroll-speed="-1">
				<h2 style="font-weight:300;color:#fff;">
					Sua empresa com <br> pagamento fácil
				</h2>				
				<a class="btn_subscribe_white mt-5 " href="https://pay.bank.com.br/cadastro">Faça seu cadastro</a> 
			</div>			
		</div>		
	</section> 
	
@endsection

