<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<main id="main" class="main">
  <div class=" prose max-w-none">
  @yield('content')
</div>
</main>

@hasSection('sidebar')
<aside class=" sidebar">
    @yield('sidebar')
    </aside>
    @endif

    @include('sections.footer')
