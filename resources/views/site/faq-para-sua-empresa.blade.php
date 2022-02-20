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
				<li class="breadcrumb-item active" aria-current="page">Para sua empresa</li>
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
									<p>Para utilizar o bank é muito fácil. Disponibilizamos nosso meio de pagamento em versões para celular e computador, então você pode baixar o aplicativo <b>bank</b> na sua loja de apps, ou acessar a nossa plataforma <a href="https://pay.bank.com.br/selecionar_tipo">clicando aqui</a>. Após isso, é só realizar o cadastro de usuário, e pronto, você já pode utilizar todos os nossos serviços. </p>
									<p>Efetue pagamentos em locais que aceitem <b>bank</b>, realize transferências <b>entre contas bank</b> de forma imediata e gratuita, 24h por dia e 7 dias por semana.</p>
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
									<p>Para abrir a sua conta no bank, acesse a página da nossa plataforma através do link: pay.bank.com.br;</p>
									<ul class="clear-ul">
										<li>	1. Clique em <b>“Crie uma conta”</b>;</li>
										<li>	2. Escolha a opção de conta <b>“Para minha empresa”</b>;</li>
										<li>	3. Preencha os dados solicitados e clique em <b>“Cadastro”</b>.</li>
										<li><b>Sua senha deve conter 8 caracteres.</b></li>
									</ul>
									<p><i>Importante</i> é permitido somente 1 usuário por CPF/CNPJ – você poderá ter uma conta pessoal (no seu CPF) e outra profissional (com o seu CNPJ).</p>
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
										<li>	Digite o seu e-mail de login no <b>bank</b> > Clique em <b>“Gerar nova senha”</b>;</li>
										<li>	Vá até a caixa de entrada do seu e-mail > Clique no botão para <b>“Resetar senha”</b>;</li>
										<li>	Crie uma nova senha > Confirme sua nova senha > Clique em <b>“Salvar senha”</b>.</li>
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
									<p>Para trocar a sua senha, você deve clicar no botão do seu <b>“Perfil”</b>, que fica no canto superior direito da Plataforma ir até a opção <b>"Configurações":</b></p>
									<ol>
										<li>	Clique em <b>"Acesso";</b></li>
										<li>	Digite a sua <b>senha atual;</b></li>
										<li>	Digite a sua <b>nova senha > Confirme</b> a nova senha; </li>
										<li>	Informe o seu <b>código 2FA;</b></li>
										<li>	Clique em <b>"Salvar alterações".</b></li>
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
									<p>Para ativar, basta baixar um aplicativo de autenticação. O Google Authenticator e Authy são as opções mais recomendadas. </p>
									<ol>
										<li>	Vá até a opção <b>"Configurações"</b> na sua conta bank;</li>
										<li>	Clique na aba <b>“2FA”</b>;</li>
										<li>	Escaneie o <b>QR Code</b> ou <b>digite o código</b>  pelo aplicativo de autenticação do seu celular;</li>
										<li>	O aplicativo gera automaticamente uma <b>combinação de seis dígitos;</b></li>
										<li>	Insira a numeração no campo <b>“Código 2FA”</b> e clique em <b>"Cadastrar"</b>.</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingDoc">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-activeDoc" 
								aria-expanded="false" aria-controls="flush-activeDoc">
								Como funciona a validação da minha documentação?
							</button>
							</h2>
							<div id="flush-activeDoc" class="accordion-collapse collapse" aria-labelledby="flush-activeDoc" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>Por questão de segurança, algumas validações são necessárias para comprovação de identidade e informações.</p>
									<p>Conclua seu cadastro clicando no botão de <b>“Perfil”</b>, que fica no canto superior direito da sua tela ().</p>
									<p>Após isso, clique em <b>“Configurações”</b> e siga os passos para a validação:</p>
									<ol>
										<li>	Leia as instruções sobre o envio da documentação > Clique em <b>“Próximo”</b>;</li>
										<li>	Anexe as fotos frente e verso do seu documento de identificação > Clique em “Próximo”;</li>
										<li>	Tire uma Selfie segurando o seu documento de identificação > Clique em “Próximo”;</li>
										<li>	Anexe o seu comprovante de residência > Leia os <b>Termos de uso</b> e <b>Política de privacidade</b> > Marque o campo <b>“Li e concordo”</b> > Clique em <b>“Enviar”</b>;</li>
									</ol>
								</div>
							</div>
						</div>
						<!-- bank ACCORDION -->

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
									<p>Para realizar depósitos na sua conta bank, acesse <b>"Depositar"</b> na tela inicial:</p>
									<ol>
										<li>	<b>Digite o valor</b> que deseja depositar;</li>
										<li>	Escolha o método de depósito (Pix, TED/DOC ou via boleto);</li>
										<ul>
											<li class="clear-ul"><b>Via Pix:</b> Clique em <b>“Próximo”</b> > A plataforma gera um QR Code/Pix copia e cola.</li>
											<li class="clear-ul"><b>Via TED/DOC:</b> Clique em <b>“Próximo”</b> > Clique em <b>“Criar intenção de depósito”</b> > Realize a transferência para os dados bancários descritos na tela > Anexe o comprovante da transação no campo.</li>
											<li class="clear-ul"><b>Via Boleto:</b> Clique em <b>“Próximo”</b> > Informe o seu número de telefone > Clique em <b>“Visualizar boleto bancário”</b> > Na tela de visualização das informações clique em <b>“Visualizar boleto”.</b></li>
										</ul>
									</ol>
									<p>É importante ressaltar que o depósito via Pix levará 30 minutos para ser validado no período diurno, e até 60 minutos no período noturno.</p>
									<p>Na opção TED/DOC o prazo de compensação é de até 48 horas e o custo da operação varia de acordo com cada banco.</p>
									<p>Para depósito via Boleto, o valor é compensado dentro de 48 horas após o pagamento e o boleto vence 3 dias após a emissão.</p>
									<p>Essa opção é válida apenas para operações da mesma titularidade.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-pixRoles">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-pixRoles" 
								aria-expanded="false" aria-controls="flush-pixRoles">
								Novas Regras do Pix para Contas Pessoa Jurídica
							</button>
							</h2>
							<div id="flush-pixRoles" class="accordion-collapse collapse" aria-labelledby="flush-pixRoles" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<h6>Confira aqui como a ferramenta passa a funcionar com as mudanças.</h6>
									<p>A nova regra do Banco Central <b>não se aplica</b> para empresas (sistema Pessoa Jurídica).</p>
									<p><b>Ações que serão aplicadas no bank</b></p>
									<p>O valor de R$25.000,00 permanece sendo a quantia limite do saque diário. No nosso sistema, segue sendo necessário a liberação manual pelo setor financeiro para saques a partir de R$10.000,00.</p>
									<p>Para <b>aumento do limite diurno</b> (valor de até R$300.000,00), usuários <b>Pessoa Jurídica</b>, devem dar aceite no <b>termo</b> para ajuste de valores. O termo está disponível na sua conta bank, no <b>Espaço Pix > Ajuste de limites.</b></p>
									<p>Por questões de segurança, resolvemos adotar em nosso sistema a limitação de valores também para contas <b>Pessoa Jurídica</b>, implementando um mecanismo interno para valores até R$10.000,00 dentro do horário limite (20h às 6h). <b><u>Não estipulado pelo Banco Central.</u></b></p>
									<p>As solicitações de aumento de limite das transações do meio de pagamento poderão levar de 24 a 48 horas para serem efetivadas.</p>
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
							<h2 class="accordion-header" id="flush-headingEight">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" 
								aria-expanded="false" aria-controls="flush-collapseEight">
								Qual o valor mínimo e máximo que posso solicitar para saque?
							</button>
							</h2>
							<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>	1. Na opção <B>“Sacar”</B> você pode transferir os valores da sua conta bank para sua conta bancária via Pix;</p>
									<p>	2. Depósitos e transferências devem ser da mesma titularidade da conta bank;</p>
									<p>	3. O valor mínimo para solicitação de saque é de R$50,00 (cinquenta reais) e o máximo de R$25.000,00 (vinte e cinco mil reais).</p>
									<p>	4. Você poderá alterar seu limite de saque mediante aceite do termo. </p>
									<p class="mt-1"><b>Observação: </b>Solicitações de saques acima do valor máximo estarão sujeitos a avaliações.</p>
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
										<li>	Na tela de início clique no botão <b>"Enviar"</b>;</li>
										<li>	Informe o e-mail ou código da conta de destino;</li>
										<li>	Informe o valor que deseja enviar; </li>
										<li>	Confirme com seu código <b>2FA.</b></li>
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
									<p>Os relatórios possuem todas as opções de <b>controle de valores</b> da sua conta.</p>
									<p>Acesse <b>“Relatórios”</b> através do botão disponível na sua tela inicial, no canto superior direito. Ao clicar você perceberá os comandos: Extrato, À receber e Faturas. Veja o que cada um tem a oferecer:</p>
									<p><b>Extrato:</b> nessa opção você pode acompanhar seu saldo líquido total ou separado por dia, valores de entrada, saída e taxas.</p>
									<p>À <b>Receber:</b> essa opção possui todos os valores à receber de cartão de crédito, separados por dias, valores, taxas e número de parcelas.</p>
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
						<!-- Section Title -->
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
										<li class="clear-ul">Pix de entrada - 0.99%</li>
										<li class="clear-ul">Taxa de saque para transações de Pix/TED/DOC - R$4,99</li>
										<li class="clear-ul">Boleto - R$3,49</li>
									</ul>
									<p><b>Cartão de Crédito</b></p>
									<ul>
										<li class="clear-ul">À Vista 3,09%</li>
										<li class="clear-ul">2 a 6 vezes 4,09%</li>
										<li class="clear-ul">7 a 12 vezes 4,39%</li>
									</ul>
									<p>Transações entre contas bank não possuem taxas.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
							<h2 class="accordion-header" id="flush-headingSeventeen">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" 
								aria-expanded="false" aria-controls="flush-collapseSeventeen">
								Transferência entre contas bank
							</button>
							</h2>
							<div id="flush-collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="flush-headingSeventeen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. 
									This is the second item's accordion body. Let's imagine this being filled with some actual content.
								</div>
							</div>
						</div>
						<div class="accordion-item w-100">
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
						</div>
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