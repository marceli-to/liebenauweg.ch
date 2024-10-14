@if (!Route::is('page.privacy') && !Route::is('page.imprint'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer>
  @if (!Route::is('page.privacy') && !Route::is('page.imprint'))
    <div class="py-15 md:py-30 px-15 md:px-25">
      <x-layout.inner>
        <h3 class="text-teal !mb-0">Kontakt</h3>
        <div class="flex justify-between">
          <address class="not-italic">
            smeyers Immobilien AG<br>
            Seetalstrasse 185<br>
            6032 Emmen
          </address>
          <div>
            <a href="https://www.smeyers.ch/" target="_blank" title="smeyers Immobilien AG">
              <img src="{{ asset('media/img/logo.png') }}" alt="smeyers Immobilien AG" class="max-w-[160px] md:max-w-[240px] h-auto w-full">
            </a>
          </div>
        </div>
      </x-layout.inner>
    </div>
  @endif
  <div class="bg-teal text-white text-sm md:text-base py-10 px-15 md:px-25">
    <x-layout.inner>
      <nav>
        <ul class="flex gap-x-15 lg:gap-x-20">
          <li>
            <a href="{{ route('page.imprint') }}" title="Impressum">Impressum</a>
          </li>
          <li>
            <a href="{{ route('page.privacy') }}" title="Datenschutz">Datenschutz</a>
          </li>
          <li>
            <a href="https://stoz.ch" target="_blank" title="stoz.ch" rel="noopener">design by stoz</a>
          </li>
        </ul>
      </nav>
    </x-layout.inner>
  </div>
</footer>
@livewireScripts
@vite('resources/js/app.js')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SE839VVBCP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-SE839VVBCP');
</script>
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->