@extends('app')
@section('content')
<x-layout.section>
  <x-layout.inner class="imprint">
    <h1>Impressum</h1>
    <p>
      smeyers Immobilien AG<br>
      Seetalstrasse 185<br>
      6032 Emmen<br>
      <a href="mailto:info@smeyers.ch" target="_blank" class="hover:underline underline-offset-2 decoration-1">info@smeyers.ch</a>
    </p>
    <h2>Design und Entwicklung</h2>
    <p>Stoz Werbeagentur AG<br>Barzloostrasse 2<br>8330 Pfäffikon ZH<br><a href="mailto:hello@stoz.ch" target="_blank" class="hover:underline underline-offset-2 decoration-1">hello@stoz.ch</a><br><a href="https://www.stoz.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">www.stoz.ch</a></p>
    <h2>Programmierung</h2>
    <p>Marcel Stadelmann, Zürich<br><a href="https://marceli.to" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">marceli.to</a></p>
  </x-layout.inner>
</x-layout.section>
@endsection