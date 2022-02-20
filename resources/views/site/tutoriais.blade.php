@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-texts .swiper-slide h1.tutorial-title, .section-title h2 {font-size:60px;}
		.tutorial_tabs{border:1px solid #dedede;padding:2rem;border-radius:7px;}
		.tutorial_tabs .nav-pills button{border:unset;background:unset;text-align:left;padding: 1rem 0;}
		.tutorial_tabs .nav-pills .nav-link.active, .nav-pills .show>.nav-link {color: #a5d357;background-color: unset;}
		.tab_overflow{max-height: 350px;overflow-y: scroll;}
		.tab-content iframe{width: 100%;height: 470px;}
		.questions_not_answered{border:1px solid #a5d357;border-radius:7px;padding:4rem 5rem;}
		.btn_green_tutorial {background-color: #a5d357;color: #202020;text-align: center;border-radius: 30px;line-height: 40px!important;display: inline-block;padding: 10px 50px;min-width: 145px;font-size: 14px;-webkit-transition: .25s ease-in-out;-moz-transition: .25s ease-in-out;-ms-transition: .25s ease-in-out;-o-transition: .25s ease-in-out;transition: .25s ease-in-out;}
		.tutorial-video .video-bg:after {background: url("{{ asset('/assets/images/img_bank-evolucao.jpg') }}");opacity: 1;background-size: cover!important;background-position: -3px;}
		.text-left{text-align:left}
		.ml-auto{margin-left:auto}
		.tutorial_download{font-weight:400;color:#ffffff;font-size:60px!important}
		.download_btns{display:flex;}
		.download_btns a:first-of-type{padding-right:10px}
		@media only screen and (max-width: 1280px), only screen and (max-device-width: 1280px){
			.slider .slider-texts .swiper-slide h1.tutorial-title, .section-title h2 {font-size:40px;}
			.tutorial_header{max-width:75%}
			.tab_overflow {max-height: 210px;}
			.tab-content iframe {height: 350px;}
			.questions_not_answered {padding: 3rem 4rem;}
		}
		@media only screen and (max-width: 1100px), only screen and (max-device-width: 1100px){
		}
		@media only screen and (max-width: 960px), only screen and (max-device-width: 960px){
			.tutorial_tabs{margin-bottom:2rem;}
		}
		@media only screen and (max-width: 767px), only screen and (max-device-width: 767px){
			.slider .slider-images .swiper-slide .mobile-slide {display: none!important;}
			.side-arts {padding: 40px;}
			.tutorial_download {font-size: 30px!important;text-align: center;}
			.questions_not_answered {padding: 1.5rem 1rem;margin: 1rem;}}
		@media only screen and (max-width: 375px), only screen and (max-device-width: 375px){
			.custom_title_h1 {font-size: 42px;line-height: 52px;}}
		@media only screen and (max-width: 320px), only screen and (max-device-width: 320px){
			.custom_title_h1 {font-size: 36px;line-height: 40px;}}
	</style>

	<header class="slider">	
		<div class="swiper-container slider-images">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-background="#ededed">
					<div class="mobile-slide" data-background="#ededed"></div>
				</div>
			</div>
		</div>
		<div class="swiper-container slider-texts">			
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="container">
						<div class="row">
							<div class="col-xl-5 d-flex flex-column justify-content-center">
								<h1 class="tutorial-title text-green">
									Aprenda <br>
									como usar o <br>
									sistema bank
								</h1>
								<p>
									Veja nossos tutoriais para aprender <br> 
									a utilizar o seu meio de pagamento.
								</p>
							</div>
							<div class="col-xl-7 text-center">
								<img class="tutorial_header" src="{{ asset('/assets/images/tutorial_header.png')}}" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 

    <section class="content-section" data-background="#ffffff">
      	<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="section-title text-center">
						<figure>
							<img src="{{ asset('/assets/images/tutorial.svg')}}" width="50px" alt="Image">
						</figure>
						<h2 class="tutorial_video text-dark">
							Vídeos tutoriais
						</h2>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="tutorial_tabs">
						<h5 class="mb-4">Veja os principais tópicos</h5>
						<hr>
						<div class="tab_overflow">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<button class="nav-link active" id="v-pills-create-account-pf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create-account-pf" type="button" role="tab" aria-controls="v-pills-create-account-pf" aria-selected="true">
									Como criar minha conta bank? (PF)
								</button>
								<button class="nav-link" id="v-pills-create-account-pj-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create-account-pj" type="button" role="tab" aria-controls="v-pills-create-account-pj" aria-selected="false">
									Como criar minha conta bank? (PJ)
								</button>
								<button class="nav-link" id="v-pills-active-2fa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-active-2fa" type="button" role="tab" aria-controls="v-pills-active-2fa" aria-selected="false">
									Como ativar a 2FA?
								</button>
								<button class="nav-link" id="v-pills-validate-docs-pf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-validate-docs-pf" type="button" role="tab" aria-controls="v-pills-validate-docs-pf" aria-selected="false">
									Como funciona a validação da <br> minha documentação? (PF)
								</button>
								<button class="nav-link" id="v-pills-validate-docs-pj-tab" data-bs-toggle="pill" data-bs-target="#v-pills-validate-docs-pj" type="button" role="tab" aria-controls="v-pills-validate-docs-pj" aria-selected="false">
									Como funciona a validação da <br> minha documentação? (PJ)
								</button>
								<button class="nav-link" id="v-pills-recovery-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-recovery-password" type="button" role="tab" aria-controls="v-pills-recovery-password" aria-selected="false">
									Como recuperar a senha da minha conta?
								</button>
								<button class="nav-link" id="v-pills-make-deposit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-make-deposit" type="button" role="tab" aria-controls="v-pills-make-deposit" aria-selected="false">
									Como realizar um depósito?
								</button>
								<button class="nav-link" id="v-pills-transfer-between-accounts-tab" data-bs-toggle="pill" data-bs-target="#v-pills-transfer-between-accounts" type="button" role="tab" aria-controls="v-pills-transfer-between-accounts" aria-selected="false">
									Como enviar saldo entre contas?
								</button>
								<button class="nav-link" id="v-pills-how-access-reports-tab" data-bs-toggle="pill" data-bs-target="#v-pills-how-access-reports" type="button" role="tab" aria-controls="v-pills-how-access-reports" aria-selected="false">
									Como acessar os relatórios da minha conta?
								</button>
								<button class="nav-link" id="v-pills-how-withdrawal-works-tab" data-bs-toggle="pill" data-bs-target="#v-pills-how-withdrawal-works" type="button" role="tab" aria-controls="v-pills-how-withdrawal-works" aria-selected="false">
									Como funciona o saque da minha conta?
								</button>
								<button class="nav-link" id="v-pills-change-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change-password" type="button" role="tab" aria-controls="v-pills-change-password" aria-selected="false">
									Como trocar a senha da minha conta?
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-xl-1 col-xl-7 col-lg-8 ">					
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-create-account-pf" role="tabpanel" aria-labelledby="v-pills-create-account-pf-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/bPGVNY2p5xk?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-create-account-pj" role="tabpanel" aria-labelledby="v-pills-create-account-pj-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/DCBEPOmaXDw?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-active-2fa" role="tabpanel" aria-labelledby="v-pills-active-2fa-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/-93v4EKhfHQ?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-validate-docs-pf" role="tabpanel" aria-labelledby="v-pills-validate-docs-pf-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/UCLu-aj30-E?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-validate-docs-pj" role="tabpanel" aria-labelledby="v-pills-validate-docs-pj-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/5ULFu9wK9e8?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-make-deposit" role="tabpanel" aria-labelledby="v-pills-make-deposit-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/RJ0eE4qwkyw?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-transfer-between-accounts" role="tabpanel" aria-labelledby="v-pills-transfer-between-accounts-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/kiecFxXbeGY?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-recovery-password" role="tabpanel" aria-labelledby="v-pills-recovery-password-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/WVAzuklYn3c?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-how-access-reports" role="tabpanel" aria-labelledby="v-pills-how-access-reports-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/hfuQDG3gcl4?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-how-withdrawal-works" role="tabpanel" aria-labelledby="v-pills-how-withdrawal-works-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/rHcp7WW35LM?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/1RthL7Mc8aY?list=PLgwmIvdHks--Hyye3U3GCnWWNRJggbHLl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
      	</div>
	</section>

    <section class="content-section pt-0" data-background="#ffffff">
      	<div class="container">
			<div class="row">
			  	<div class="col-xl-10 col-lg-10" style="margin:auto">
					<div class="row align-items-center questions_not_answered">
						<div class="col-xl-6 col-lg-6 col-md-6 offset-xl-1">
							<figure class="mb-3">
								<img src="{{ asset('/assets/images/icon_baixe.png')}}" height="50px" alt="Image">
							</figure>
							<h5 class="tutorial_video text-dark mb-4">
								SUAS DÚVIDAS NÃO <br> FORAM RESPONDIDAS?
							</h5>
							<p>A sua resposta pode estar mais <br> perto do que você imagina, <br> acesse nossa central de ajuda.</p>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center">
							<a class="btn_green_tutorial" target="_blank" href="https://api.whatsapp.com/send/?phone=554198090361">Acesse aqui</a>
						</div>
					</div>
				</div>
			</div>
      	</div>
	</section>
	
	<section class="content-section tutorial-video" data-background="#a5d357">
		<div class="video-bg"></div>		
		<div class="container">		
			<div class="cta-box justify-content-end text-left" data-scroll data-scroll-speed="-1">
				<div class="col-xl-6">
					<h2 class="tutorial_download">
						bank, a evolução <br> 
						do pagamento.
					</h2>	
					<div class="download_btns">
						<a class="mt-5 " href="#">
							<img src="{{ asset('/assets/images/baixar-googleplay.png')}}" height="50px" alt="Image">
						</a> 
						<a class="mt-5 " href="#">
							<img src="{{ asset('/assets/images/baixar-applestore.png')}}" height="50px" alt="Image">
						</a> 
					</div>
				</div>
			</div>			
		</div>		
	</section>  
	
@endsection

