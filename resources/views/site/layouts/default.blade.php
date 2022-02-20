<!DOCTYPE html>
<html lang="en">

  @include('site/layouts.head')
  
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFHHTQ9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="preloader" id="preloader">
      <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
      </svg>
      <div class="inner">
        <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
        <figure><img src="/assets/images/logo_botao.png" alt="Image"></figure>
        <small>Carregando...</small> </div>
      <!-- end inner --> 
    </div>

    <div class="page-transition">
      <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
      </svg>
    </div>
    
    @include('site/layouts.header')
    <div class="smooth-scroll">
      <div class="section-wrapper" data-scroll-section>

          @yield('content')
          @yield('styles')
          @include('site/layouts.footer')

      </div>
    </div>
    @yield('scripts')


  </body>
</html> 