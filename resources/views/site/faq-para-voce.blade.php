@extends('site/layouts.default')

@section('content')

	<style>
		.slider .slider-images .swiper-slide {background-size: cover !important; background-position: left!important;}
		.slider .slider-texts .swiper-slide h1 {font-weight: 400; margin-top: 90px;margin-bottom:0;}
		.slider .slider-texts .swiper-slide p {font-weight:400; font-size:18px;color:#000;}
		.dark_title{font-size: 84px;}
		.contact-box h6 {font-size: 20px;font-weight: 500;}
		.contact-box p {padding-right: 40%;}
		.faq{padding-top:40px;}
		.faq h6{color:#000;letter-spacing:1px;font-weight:400;}
		.faq figure{margin-bottom: 25px;text-align: center;}
		.faq a{text-decoration:none}
		.breadcrumb-position{padding:0 100px}
		.breadcrumb-item {font-size:16px}
		.breadcrumb-item.active {color: #202020;}
		.accordion-button {padding: 1.6rem 3.1rem;font-size: 24px;font-weight: 300;}
		.accordion-body {padding: 0 2.25rem 2.5rem;}
		.accordion-collapse {border: none;}
		.accordion-flush .accordion-item .accordion-button {border: 1px solid #a3d357;border-radius: 40px;margin-bottom: 20px;}
		.accordion-flush .accordion-item:first-of-type .accordion-button {border-top-width: 1px;border-top-left-radius: 40px;border-top-right-radius: 40px;}
		.accordion-flush .accordion-item:last-of-type .accordion-button.collapsed {border-bottom-width: 1px;border-bottom-right-radius: 40px;border-bottom-left-radius: 40px;}
		.accordion-button:focus {box-shadow: unset;}
		.accordion-button:not(.collapsed) {color: #fff;background-color: #a3d357;}
		.clear-ul { list-style-type: none; }

		@media screen and (max-width: 1100px){
			.accordion-button {padding: 1.6rem 2.1rem;font-size: 20px;text-align:left}
			.title_accordion h1 {font-size: 60px;}
		}
		@media screen and (max-width: 960px){
			.title_accordion h1 {font-size: 50px;}
			.accordion-button {padding: 1.6rem 2.1rem;font-size: 18px;text-align:left}
		}
		@media screen and (max-width:767px){
			.title_accordion h1 {font-size: 40px;}
			.accordion-button {padding: 1.6rem 1.1rem;font-size: 14px;text-align:left;}
			.accordion-body{font-size:14px;}
			.title_accordion {padding: 35px 25px 25px;}
		}
		@media screen and (max-width: 767px){
			.title_accordion h1 {font-size: 34px;}
		}
		@media screen and (max-width: 320px){
			.title_accordion h1 {font-size: 30px;}
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
				<li class="breadcrumb-item active" aria-current="page">Para você</li>
			</ol>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-sm-12 mx-auto">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<!-- bank ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>bank</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingOne">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" 
								aria-expanded="false" aria-controls="flush-collapseOne">
								O que é o bank
							</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>O bank é um meio de pagamento, uma plataforma de pagamento online. Aqui você pode pagar, receber e realizar transferências entre contas, diretamente do seu celular ou computador, tudo de forma rápida e fácil.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" 
								aria-expanded="false" aria-controls="flush-collapseTwo">
								Como usar o bank?
							</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Para utilizar o bank é muito fácil. Disponibilizamos nosso meio de pagamento em versões para celular e computador, então você pode baixar o aplicativo <b>bank</b> na sua loja de apps, ou acessar a nossa plataforma <a href="https://pay.bank.com.br/selecionar_tipo"><b>clicando aqui</b></a>. Após isso, é só realizar o cadastro de usuário, e pronto, você já pode utilizar todos os nossos serviços. </p>
									<p>Efetue pagamentos em locais que aceitem <b>bank, realize transferências <b>entre contas bank</b> de forma imediata e gratuita, 24h por dia e 7 dias por semana.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" 
								aria-expanded="false" aria-controls="flush-collapseThree">
								Como criar minha conta bank?
							</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Antes de começar, é importante lembrar que poderá realizar seu cadastro <b>para você</b> e/ou <b>para sua empresa</b>. </p>
									<p>Para abrir a sua conta no bank, <b>acesse</b> a página da nossa plataforma através do link: <a href="pay.bank.com.br">pay.bank.com.br</a>;</p>
									<ul>
										<li class="clear-ul">	1. Clique em <b>“Crie uma conta”</b>;</li>
										<li class="clear-ul">	2. Escolha entre a opção de conta <b>“Para mim”</b>;</li>
										<li class="clear-ul">	3. Preencha os dados solicitados e clique em “Cadastro”.</li>
										<li style="list-style-type: none;"><b>Sua senha deve conter 8 caracteres.</b></li>
									</ul>
									<p><b>Importante</b>: é permitido somente <b>1 usuário</b> por CPF/CNPJ – você poderá ter uma conta pessoal (no seu CPF) e outra profissional (com o seu CNPJ).</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" 
								aria-expanded="false" aria-controls="flush-collapseFour">
								Como faço para recuperar minha senha?
							</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Na etapa de login, clique em <b>“Esqueceu sua senha?”</b>, siga os passos:</p>
									<ol>
										<li class="clear-ul">	1. Digite o seu e-mail de login no <b>bank</b> > Clique em <b>“Gerar nova senha”</b>;</li>
										<li class="clear-ul">	2. Vá até a caixa de entrada do seu e-mail > Clique no botão para <b>“Resetar senha”</b>;</li>
										<li class="clear-ul">	3. Crie uma nova senha > Confirme sua nova senha > Clique em <b>“Salvar senha”</b>.</li>
									</ol>
									<p>Pronto! Você poderá acessar a plataforma com sua nova senha.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingFive">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" 
								aria-expanded="false" aria-controls="flush-collapseFive">
								Como trocar minha senha?
							</button>
							</h2>
							<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Para trocar a sua senha, você deve clicar no botão do seu <b>“Perfil”</b>, que fica no canto superior direito da Plataforma () ir até a opção <b>"Configurações"</b>:</p>
									<ol>
										<li>	Clique em "Acesso";</li>
										<li>	Digite a sua senha atual;</li>
										<li>	Digite a sua nova senha > Confirme a nova senha;</li>
										<li>	Informe o seu código 2FA;</li>
										<li>	Clique em "Salvar alterações".</li>
									</ol>
									<p>Pronto! Você poderá acessar a plataforma com sua nova senha.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingSix">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" 
								aria-expanded="false" aria-controls="flush-collapseSix">
								Como ativar a 2FA?
							</button>
							</h2>
							<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>A autenticação de dois fatores (2FA), é uma ferramenta adicional de segurança para sua conta.</p>
									<p>Para ativar, basta baixar um aplicativo de autenticação. O Google Authenticator e Authy são as opções mais recomendadas.</p>
									<ol>
										<li>	Vá até a opção <b>"Configurações"</b> na sua conta bank;</li>
										<li>	Clique na aba <b>“2FA”</b>;</li>
										<li>	Escaneie o <b>QR Code</b> ou <b>digite o código</b>  pelo aplicativo de autenticação do seu celular;</li>
										<li>	O aplicativo gera automaticamente uma <b>combinação de seis dígitos</b>;</li>
										<li>	Insira a numeração no campo <b>“Código 2FA”</b> e clique em <b>"Cadastrar"</b>.</li>
									</ol>
								</div>
							</div>
						</div>

						<div class="accordion-item w-100">
							<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseHowitwork" 
								aria-expanded="false" aria-controls="flush-collapseHowitwork">
								Como funciona a validação da minha documentação?
							</button>
							</h2>
							<div id="flush-collapseHowitwork" class="accordion-collapse collapse" aria-labelledby="flush-collapseHowitwork" data-bs-parent="#flush-collapseHowitwork">
								<div class="accordion-body">
									<p>Por questão de segurança, algumas validações são necessárias para comprovação de identidade e informações.</p>
									<p>Conclua seu cadastro clicando no botão de “Perfil”, que fica no canto superior direito da sua tela.</p>
									<p>Após isso, clique em “Configurações” e siga os passos para a validação:</p>
									<ol>
										<li>	Leia as instruções sobre o envio da documentação > Clique em <b>“Próximo”</b>;</li>
										<li>	Anexe as fotos frente e verso do seu documento de identificação > Clique em <b>“Próximo”</b>;</li>
										<li>	Tire uma Selfie segurando o seu documento de identificação > Clique em <b>“Próximo”</b>;</li>
										<li>	Anexe o seu comprovante de residência > Leia os Termos de uso e Política de privacidade > Marque o campo <b>“Li e concordo”</b> > Clique em <b>“Enviar”</b>;</li>
										<li>	Insira a numeração no campo <b>“Código 2FA”</b> e clique em <b>"Cadastrar"</b>.</li>
									</ol>
								</div>
							</div>
						</div>

						<div class="title_accordion">
							<h1>Novas Regras do Pix para Contas PF e MEI</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingEight">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" 
								aria-expanded="false" aria-controls="flush-collapseEight">
								Confira aqui como a ferramenta passa a funcionar com as mudanças.
							</button>
							</h2>
							<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<h3>Qual o meu limite noturno para transações via Pix?</h3>
									<p>O Banco Central estabeleceu o limite de R$1.000,00 de envio noturno (20h às 06h) para o usuário Pessoa Física e MEIs. O envio de transferências via Pix sem limitações de valores poderá ocorrer para contatos cadastrados pelo usuário previamente.</p>
									<h3>Ações que serão aplicadas no bank</h3>
									<p>O valor de R$25.000,00 permanece sendo a quantia limite do saque diário. No nosso sistema, segue sendo necessário a liberação manual pelo setor financeiro para saques acima de R$10.000,00.</p>
									<p>Para aumento do limite diurno (valor de até R$100.000,00), usuários Pessoa Física e MEI devem dar aceite no termo para ajuste de valores. O termo está disponível na sua conta bank, no Espaço Pix > Ajuste de limites.</p>
									<p>Conforme estipulado pelo Banco Central, implementamos em nosso sistema a limitação de valores para contas Pessoa Física, desenvolvendo um mecanismo interno para valores até R$1.000,00 dentro do horário limite (20h às 6h).</p>
									<p>As solicitações de aumento de limite das transações do meio de pagamento poderão levar de 24 a 48 horas para serem efetivadas.</p>
								</div>
							</div>
						</div>

						<!-- DEPÓSITO ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>Depósito</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingSeven">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" 
								aria-expanded="false" aria-controls="flush-collapseSeven">
								Como realizar um depósito?
							</button>
							</h2>
							<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Para realizar depósitos na sua conta bank, acesse "Depositar" na tela inicial:</p>
									<p>1. Digite o valor que deseja depositar;</p>
									<p>2. Escolha o método de depósito (Pix, TED/DOC ou via boleto);</p>
									<ol class="clear-ul">
										<li>- Via Pix: Clique em “Próximo” > A plataforma gera um QR Code/Pix copia e cola.</li>
										<li>- Via TED/DOC: Clique em “Próximo” > Clique em “Criar intenção de depósito” > Realize a transferência para os dados bancários descritos na tela > Anexe o comprovante da transação no campo.</li>
										<li>- Via Boleto: Clique em “Próximo” > Informe o seu número de telefone > Clique em “Visualizar boleto bancário” > Na tela de visualização das informações clique em “Visualizar boleto”.</li>
									</ol>
									<p>É importante ressaltar que o depósito via Pix levará 30 minutos para ser validado no período diurno, e até 60 minutos no período noturno.</p>
									<p>Na opção TED/DOC o prazo de compensação é de até 48 horas e o custo da operação varia de acordo com cada banco.</p>
									<p>Para depósito via Boleto, o valor é compensado dentro de 48 horas após o pagamento e o boleto vence 3 dias após a emissão.</p>
									<p>Essa opção é válida apenas para operações da mesma titularidade.</p>
								</div>
							</div>
						</div>
						<!-- DEPÓSITO ACCORDION -->



						<!-- SAQUE ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>Saque</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headignSaque-1">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSaque-1" 
								aria-expanded="false" aria-controls="flush-collapseSaque-1">
								Qual o valor mínimo e máximo que posso solicitar para saque?
							</button>
							</h2>
							<div id="flush-collapseSaque-1" class="accordion-collapse collapse" aria-labelledby="flush-headignSaque-1" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p> 	1. Na opção “Sacar” você pode transferir os valores da sua conta bank para sua conta bancária via Pix;</p>
									<p> 	2. Depósitos e transferências devem ser da mesma titularidade da conta bank;</p>
									<p> 	3. O valor mínimo para solicitação de saque é de R$50,00 (cinquenta reais) e o máximo de R$25.000,00 (vinte e cinco mil reais).</p>
									<p> 	4. Você poderá alterar seu limite de saque mediante aceite do termo.</p>
									<p class="mb-1"><b>Observação</b>: Solicitações de saques acima do valor máximo estarão sujeitos a avaliações.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingNine">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" 
								aria-expanded="false" aria-controls="flush-collapseNine">
								Como posso solicitar saque?
							</button>
							</h2>
							<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Fazer solicitação de saque no <b>bank</b> é simples:</p>
									<ol>
										<li>Na página inicial ao lado direito clique em <b>"Saque"</b> ou selecione <b>"Extrato"</b> no menu superior, em seguida clique em <b>"Sacar"</b>;</li>
										<li>Preencha os seus dados bancários, caso não estejam preenchidos, e adicione o valor que deseja sacar;</li>
										<li>Em seguida, clique em <b>“Sacar”</b>;</li>
									</ol>
									<p>Feito isso, sua solicitação de saque já terá sido realizada.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingTen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" 
								aria-expanded="false" aria-controls="flush-collapseTen">
								Em que horário posso solicitar meu saque?
							</button>
							</h2>
							<div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Os saques podem ser solicitados das 10h às 16h.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingEleven">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" 
								aria-expanded="false" aria-controls="flush-collapseEleven">
								Qual é o prazo de conclusão de um saque?
							</button>
							</h2>
							<div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>O dinheiro estará na sua conta em até 4 dias úteis.</p>
									<p><b>Lembre-se</b>: a conta bancária utilizada para o saque deve pertencer obrigatoriamente ao CPF do titular da conta <b>bank</b>.</p>
								</div>
							</div>
						</div>
						<!-- SAQUE ACCORDION -->	
						
						<!-- TRANSFERÊNCIAS ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>Transferências</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingFourteen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" 
								aria-expanded="false" aria-controls="flush-collapseFourteen">
								Como enviar saldo entre contas bank?
							</button>
							</h2>
							<div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>A opção de <b>“Enviar”</b> é utilizada quando você deseja enviar um valor entre usuários bank.</p>
									<p>Caso seu contato já esteja cadastrado ele vai aparecer na sua lista. Caso contrário, você poderá adicionar <b>novos contatos.</b></p>
									<p><b>De conta bank para bank. Sem taxas, zero burocracia e ágil.</b></p>
									<p><b>Passo a passo:</b></p>
									<ol>
										<li>	Na tela de início clique no botão "Enviar";</li>
										<li>	Informe o e-mail ou código da conta de destino;</li>
										<li>	Informe o valor que deseja enviar; </li>
										<li>	Confirme com seu código 2FA.</li>
									</ol>
									<p>Pronto! A quantia será transferida imediatamente e sem taxas.</p>
								</div>
							</div>
						</div>
						<!-- TRANSFERÊNCIAS ACCORDION -->

						<!-- MOVIMENTAÇÕES ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>Relatórios</h1>
						</div>
						<!-- Section Title -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingFifteen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" 
								aria-expanded="false" aria-controls="flush-collapseFifteen">
								Como faço para visualizar os meus relatórios?
							</button>
							</h2>
							<div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Os relatórios possuem todas as opções de controle de valores da sua conta.</p>
									<p>Acesse <b>“Relatórios”</b> através do botão disponível na sua tela inicial, no canto superior direito. Ao clicar você perceberá os comandos: Extrato, À receber e Faturas. Veja o que cada um tem a oferecer:</p>
									<p><b>Extrato:</b> nessa opção você pode acompanhar seu saldo líquido total ou separado por dia, valores de entrada, saída e taxas.</p>
									<p><b>À Receber:</b> essa opção possui todos os valores à receber de cartão de crédito, separados por dias, valores, taxas e número de parcelas.</p>
									<p><b>Faturas:</b> a opção mais completa para acompanhar todos os seus pedidos, informando desde a data, hora e valor, até o status do pedido. </p>
									<p>Os demais ícones contém informações individuais de cada opção de pagamento.</p>
									<p>Em todas as opções você pode retirar relatórios em formatos diferentes, como: Copy, Excel, CSV e PDF.</p>
								</div>
							</div>
						</div>
						<!-- MOVIMENTAÇÕES ACCORDION -->

						<!-- TAXAS ACCORDION -->
						<!-- Section Title -->
						<div class="title_accordion">
							<h1>Taxas bank</h1>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingSixteen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen" 
								aria-expanded="false" aria-controls="flush-collapseSixteen">
								Aqui você encontra as menores taxas balcão do mercado.
							</button>
							</h2>
							<div id="flush-collapseSixteen" class="accordion-collapse collapse" aria-labelledby="flush-headingSixteen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Nosso produto surgiu da vontade de fazer com que empreendedores pudessem ter uma solução simples a partir de um sistema de pagamentos. Por isso, parte do nosso plano é oferecer taxas atrativas em nosso meio de pagamento.</p>
									<p><b>Confira:</b> </p>
									<ul class="clear-ul">
										<li>Pix de entrada - 0.99%</li>
										<li>Taxa de saque para transações de Pix/TED/DOC - R$4,99</li>
										<li>Boleto - R$3,49</li>
									</ul>
									<p><b>Cartão de Crédito</b></p>
									<ul class="clear-ul">
										<li>À Vista 3,09%</li>
										<li>2 a 6 vezes 4,09%</li>
										<li>7 a 12 vezes 4,39%</li>
									</ul>
									<p class="mt-1">Transações entre contas bank não possuem taxas.</p>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingSeventeen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" 
								aria-expanded="false" aria-controls="flush-collapseSeventeen">
								Transferência entre contas bank
							</button>
							</h2>
							<div id="flush-collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="flush-headingSeventeen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									R$ 0,00
								</div>
							</div>
						</div>
						<!-- <div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingEighteen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen" 
								aria-expanded="false" aria-controls="flush-collapseEighteen">
								Estabelecimentos
							</button>
							</h2>
							<div id="flush-collapseEighteen" class="accordion-collapse collapse" aria-labelledby="flush-headingEighteen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. 
									This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling 
									up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingNineteen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen" 
								aria-expanded="false" aria-controls="flush-collapseNineteen">
								Saque bank+
							</button>
							</h2>
							<div id="flush-collapseNineteen" class="accordion-collapse collapse" aria-labelledby="flush-headingNineteen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. 
									This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling 
									up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
								</div>
							</div>
						</div> -->
						<!-- TAXAS ACCORDION -->

					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center " style="padding: 70px 0 0;">
				<a class="btn_subscribe" href="/central-de-ajuda">Central de Ajuda</a> 
			</div>
		</div>
    </section>

@endsection