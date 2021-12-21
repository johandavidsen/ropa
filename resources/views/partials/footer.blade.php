<footer class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
    @if (has_nav_menu('primary_navigation'))
      {!!
        wp_nav_menu([
        	'theme_location' => 'footer_navigation',
        	'menu_class' => 'footer-menu',
        	'container' => null,
        	'echo' => false
        ])
      !!}
    @endif

    <div class="mt-8 flex justify-center space-x-6">

      @if ( is_active_sidebar('sidebar-footer') )
        <?php dynamic_sidebar('sidebar-footer') ?>
      @endif

    </div>

      <p class="mt-8 text-center text-base text-gray-400">
      &copy; {{ $year }} {{ $siteName }}. All rights reserved.
    </p>
  </div>
</footer>
