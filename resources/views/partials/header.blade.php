<header id="header" class="holder-nav">
    <div class="holder-title">
        @if($showLogo)
          <div class="site-logo"><?php the_custom_logo(); ?></div>
        @endif
        <div>
            <a href="{{ $siteUrl }}" class="site-title font-pacifico">
                {{ $siteName }}
            </a>
         </div>
        <span class="site-description">
        {{ $siteTagline }}
      </span>
    </div>

    <nav class="main-menu">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex justify-center text-lg', 'echo' => false ]) !!}
        @endif
    </nav>

    <div class="flex-1 flex justify-end">
        {{--@include('forms/search')--}}
    </div>
</header>
