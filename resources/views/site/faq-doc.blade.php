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
		.breadcrumb-position{padding:0 100px}
		.breadcrumb-item {font-size:16px}
		.breadcrumb-item.active {color: #202020;}
		.breadcrumb-item+.breadcrumb-item::before {
			float: left;
			padding-right: .5rem;
			color: #6c757d;
			content: var(--bs-breadcrumb-divider, ">");
		}
		p{font-size: 15px;font-weight:300;}
		p b{font-weight:500;}

		@media screen and (max-width: 767px){
			.breadcrumb {display:none;}
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

	<section class="content-section faq" data-background="#fff"> 		
		<nav class="breadcrumb-position" aria-label="breadcrumb ">
			<ol class="breadcrumb">
				<li class="breadcrumb-item " aria-current="page">Cadastro</li>
				<li class="breadcrumb-item active" aria-current="page">Como devo enviar meus documentos?</li>
			</ol>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-sm-12 mx-auto">
					<div class="row">
						<div class="pt-5 pb-5">
							<h1 class="pb-5">Como devo enviar <br> meus documentos?</h1>
							<h5 class="pb-4">Para você (contas Pessoa Física):</h5>
							<p class="pb-3">Para realizar o envio dos seus documentos clique no botão de <b>“Perfil”<b>, que fica no canto superior direito da sua tela.</p>
							<p class="pb-3">	1. Leia as instruções sobre o envio da documentação > Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	2. Anexe as fotos <b>frente e verso do seu documento de identificação</b> > Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	3. Tire uma Selfie segurando o seu documento de identificação > Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	4. Anexe o seu comprovante de residência > Leia os <b>Termos de uso</b> e <b>Política de privacidade</b> > Marque o campo <b>“Li e concordo”</b> > Clique em <b>“Enviar”</b>;</p>

							<p class="pb-4">Tudo pronto! Seus documentos estão em análise.</p>
						</div>
						
						<div>
							<h5 class="pb-4">Para sua empresa (contas Pessoa Jurídica):</h5>
							<p class="pb-3">Para realizar o envio dos seus documentos clique no botão de <b>“Perfil”</b>, que fica no canto superior direito da sua tela.</p>
							<p class="pb-3">	1. Leia as instruções sobre o envio da documentação > Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	2. Anexe as fotos frente e verso do seu documento de identificação e Cartão CNPJ> Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	3. Tire uma Selfie segurando o seu documento de identificação > Clique em <b>“Próximo”</b>;</p>
							<p class="pb-3">	4. Anexe o seu comprovante de residência > Leia os Termos de uso e Política de privacidade > Marque o campo “Li e concordo” > Clique em <b>“Enviar”</b>;</p>
							<p class="pb-3"> 	5. Anexe uma foto onde contenha a primeira e a última página do Contrato Social, Estatuto ou 
								certificado da Condição do Microempreendedor Individual de sua empresa.</p>
							<p class="pb-3">	6. Leia com atenção aos Termos de uso e Políticas de Privacidade da plataforma
								e depois basta clicar em "Próximo";</p>

							<p>Tudo pronto! Seus documentos estão em análise.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center " style="padding: 70px 0 0;">
				<a class="btn_subscribe" href="/central-de-ajuda">Central de Ajuda</a> 
			</div>
		</div>
    </section>
	
@endsection

