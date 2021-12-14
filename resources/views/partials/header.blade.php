<div class="navigation" x-data="{ showMobileMenu: false }">
    <div class="menu">
        <div class="menu-container-left">
            <a href="#" class="menu-title font-pacifico">
                <span class="sr-only">{{ $siteName }}</span>
                @if( ! empty($siteIcon) )
                    <img class="h-8 w-auto sm:h-10" src="{{ $siteIcon }}"
                         alt="">
                @endif
                {!! $siteName !!}
            </a>
        </div>

        <div class="mobile-container-button">
            <button type="button"
                    @click="showMobileMenu = true"
                    aria-expanded="false">
                <span class="sr-only">{{ __('Open menu', 'ropa') }}</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <nav class="menu-container-center">
            @if (has_nav_menu('primary_navigation'))
                {#!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'text-base font-medium
                text-gray-500 hover:text-gray-900', 'echo' => false ]) !!}
            @endif
        </nav>
        <div class="menu-container-right"></div>
    </div>

    <div  x-transition:enter="duration-200 ease-out"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="duration-100 ease-in"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          x-show="showMobileMenu"
          class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
              <div class="pt-5 pb-6 px-5">
                  <div class="flex items-center justify-between">
                      <a href="#" class="menu-title font-pacifico">
                          <span class="sr-only">{{ $siteName }}</span>
                          @if( ! empty($siteIcon) )
                              <img class="h-8 w-auto sm:h-10" src="{{ $siteIcon }}"
                                   alt="">
                          @endif
                          {!! $siteName !!}
                      </a>
                      <div class="-mr-2">
                          <button type="button"
                                  @click="showMobileMenu = false"
                                  class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                              <span class="sr-only">Close menu</span>
                              <!-- Heroicon name: outline/x -->
                              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                   stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"/>
                              </svg>
                          </button>
                      </div>
                  </div>
                  <div class="mt-6">
                      <nav class="grid grid-cols-1 gap-7">
                          @if (has_nav_menu('primary_navigation'))
                              {#!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50', 'echo' => false ]) !!}
                          @endif
                      </nav>
                  </div>
              </div>
          </div>
    </div>
</div>

