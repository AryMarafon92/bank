<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function site(){
    	$title = 'A evolução do pagamento | bank';
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/site', compact('title', 'description'));
    }
    
    public function bank(){
    	$title = 'Meio de pagamento online | bank';
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/meio-de-pagamento', compact('title', 'description'));
    }
    
    public function paravoce(){
    	$title = 'Carteira digital | bank';
    	$description = 'O seu bank, a sua carteira digital. Com bank você pode pagar, receber e realizar transferências, tudo direto do App.';

        return view('site/carteira-digital', compact('title', 'description'));
    }
    
    public function parasuaempresa(){
    	$title = ' Para sua empresa | bank';
    	$description = 'Evolua seu negócio com os serviços bank, tenha um sistema em tecnologia de pagamento inteiro disponível para sua empresa.';

        return view('site/para-sua-empresa', compact('title', 'description'));
    }
    
    public function faleconosco(){
    	$title = 'Fale conosco | bank';
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/fale-conosco', compact('title', 'description'));
    }
    
    public function faq(){
    	$title = 'Central de ajuda | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/faq', compact('title', 'description'));
    }
    
    public function faqdoc(){
    	$title = 'Central de ajuda - Documentos | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/faq-doc', compact('title', 'description'));
    }
    
    public function faqparavoce(){
    	$title = 'Central de ajuda - Para você | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/faq-para-voce', compact('title', 'description'));
    }
    
    public function faqparasuaempresa(){
    	$title = 'Central de ajuda - Para sua empresa | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/faq-para-sua-empresa', compact('title', 'description'));
    }

    public function termosdeuso(){
    	$title = 'Termos de uso | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/termos-de-uso', compact('title', 'description'));
    }

    public function politicadeprivacidade(){
    	$title = 'Politica de privacidade | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/politica-de-privacidade', compact('title', 'description'));
    }

    public function tutoriais(){
    	$title = 'Tutoriais | bank';    	
    	$description = 'bank vai além, não é somente um meio de pagamento, é uma carteira digital inteira.';

        return view('site/tutoriais', compact('title', 'description'));
    }
}
