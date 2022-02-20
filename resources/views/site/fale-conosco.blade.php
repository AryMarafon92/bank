@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-images .swiper-slide {background-size: cover !important; background-position: center!important;}
		.slider .slider-texts .swiper-slide h1 {font-size: 110px;font-weight: 400;}
		.slider .slider-texts .swiper-slide p {font-weight:400; font-size:18px;color:#000;}
		.dark_title{font-size: 84px;}
		.contact-box h6 {font-size: 20px;font-weight: 500;}
		.contact-box p {padding-right: 40%;}		
	</style>


	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="{{ asset('/assets/images/header_ouvidoria.jpg')}}">
					<div class="mobile-slide" data-background="{{ asset('/assets/images/header_ouvidoria.jpg')}}"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<h1 class="text-dark">
							Ouvidoria <br>
							bank 
						</h1>
						<p>
							Pode contar com o nosso suporte para <br> 
							te ajudar, estamos aqui para fazer com <br> 
							que a sua experiência com a <br>
							nossa plataforma seja incrível.
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="content-section " data-background="#a5d357"> 
		<div class="container">
			<div class="row justify-content-center"><div class="col-12"><div class="section-title text-center"></div></div></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="recent-news">
						<div class="content-box"> 
							<h1 class="dark_title">
								Nossa central <br> de ajuda							
							</h1>
							<p class="p-dark">
								A sua resposta pode estar mais <br> 
								perto do que você imagina, <br>
								acesse nossa central de ajuda.
							</p>
							<a href="https://api.whatsapp.com/send/?phone=554198090361" target="_blank"class="btn_subscribe_white">Acesse Aqui</a> 
						</div>
						<figure data-scroll data-scroll-speed="-1">
							<img src="{{ asset('/assets/images/img_centraldeajuda.png')}}" alt="Image">
						</figure>
					</div>
				</div>
			</div>
		</div>
    </section>
	
    <section class="content-section" data-background="#fff">
      	<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="section-title text-center">
						<figure>
							<img src="{{ asset('/assets/images/icon_faleconosco.png')}}" alt="Image">
						</figure>
						<h2 class="color_green">
							Fale com a gente
						</h2>
					</div>				
				</div>			
				<div class="col-lg-5">
					<div class="contact-box">
						<h6 class="text-uppercase">
							Suas dúvidas não <br> foram respondidas? 
						</h6>
						<p>
							Vamos conversar. Você pode entrar em contato com a nossa equipe de 
							especialistas via chat ou e-mail.
						</p>
					</div>						
					<div class="contact-box">
						<h6 class="text-uppercase">E-mail para dúvidas:</h6>
						<p>
							sac@bank.com.br.
						</p>
					</div>					
				</div>
				<div class="col-lg-5">
					<div class="contact-form">
						<!-- <form class="w-100" method="post" action="/contact"> -->
						  <!-- {{ csrf_field() }} -->
							<div class="mb-3">
								<input id="input_name" name="input_name" type="text" placeholder="Nome" required>
							</div>						
							<div class="mb-3">
								<input class="w-100" id="input_email" name="input_email" type="email" placeholder="E-mail" required>
							</div>						
							<div class="mb-3">
								<input id="input_subject" name="input_subject" type="text" placeholder="Assunto" required>
							</div>						
							<div class="mb-3">
								<textarea id="input_message" name="input_message" placeholder="Mensagem" required></textarea>
							</div>						
							<div class="mb-3">
								<input type="submit" value="Enviar">
							</div>		
						<!-- </form> -->
					</div>						
				</div>				
			</div>
      	</div>
    </section>
	
@endsection

