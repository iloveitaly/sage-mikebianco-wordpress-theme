<header class="banner">
  <div class="container flex flex-wrap lg:justify-between sm:justify-center mx-auto">
    <a class="flex" href="{{ home_url('/') }}">
      <img src="/wp-content/uploads/2014/09/mike_bianco-e1419089986517.png" width="570" alt="Michael Bianco" />
    </a>

    @if (has_nav_menu('primary_navigation'))
    <nav class="flex w-auto" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif
  </div>
</header>
