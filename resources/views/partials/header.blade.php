<header>
  <div class="nav p-4">
    <a href="{{ home_url('/') }}" class="flex items-center text-lg font-pacifico flex-1">
      {{ $siteName }}
    </a>

    <nav class="flex-1">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex justify-center text-lg', 'echo' => false ]) !!}
      @endif
    </nav>

    <div class="flex-1 flex justify-end">
      {{--@include('forms/search')--}}
    </div>
  </div>
</header>
