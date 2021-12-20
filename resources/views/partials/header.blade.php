<nav class="bg-white">
    <div class="mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    @if( ! empty($siteIcon) )
                        <img class="h-8 w-auto" src="{{ $siteIcon }}"
                             alt="">
                    @else
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" class="h-8 w-auto">
                            <g>
                                <path d="M472.178,34.62H39.822C17.829,34.62,0,52.449,0,74.442v45.264c0,3.141,2.547,5.689,5.689,5.689h500.622
                                    c3.143,0,5.689-2.547,5.689-5.689V74.442C512,52.449,494.171,34.62,472.178,34.62z M71.805,92.844
                                    c-7.09,0-12.836-5.747-12.836-12.836c0-7.088,5.747-12.836,12.836-12.836c7.089,0,12.836,5.747,12.836,12.836
                                    C84.642,87.097,78.895,92.844,71.805,92.844z M112.957,92.844c-7.09,0-12.836-5.747-12.836-12.836
                                    c0-7.088,5.747-12.836,12.836-12.836s12.836,5.747,12.836,12.836C125.793,87.097,120.046,92.844,112.957,92.844z M154.109,92.844
                                    c-7.089,0-12.836-5.747-12.836-12.836c0-7.088,5.747-12.836,12.836-12.836c7.09,0,12.836,5.747,12.836,12.836
                                    C166.945,87.097,161.198,92.844,154.109,92.844z"/>
                                <path d="M506.311,148.15H5.689c-3.141,0-5.689,2.546-5.689,5.689v283.719c0,21.993,17.829,39.822,39.822,39.822h432.356
                                    c21.993,0,39.822-17.829,39.822-39.822V153.839C512,150.697,509.454,148.15,506.311,148.15z M162.001,369.529
                                    c4.443,4.443,4.443,11.647,0,16.09c-2.222,2.221-5.134,3.333-8.045,3.333c-2.913,0-5.823-1.11-8.045-3.333l-65.447-65.447
                                    c-4.443-4.443-4.443-11.647,0-16.09l65.447-65.447c4.443-4.443,11.647-4.443,16.092,0c4.443,4.443,4.443,11.647,0,16.09
                                    L104.6,312.127L162.001,369.529z M318.553,233.85l-97.692,169.208c-2.107,3.65-5.931,5.691-9.863,5.691
                                    c-1.931,0-3.887-0.492-5.679-1.527c-5.442-3.141-7.307-10.1-4.164-15.542l97.693-169.208c3.141-5.442,10.098-7.308,15.542-4.164
                                    C319.832,221.449,321.695,228.408,318.553,233.85z M431.536,320.172l-65.447,65.447c-2.222,2.221-5.135,3.333-8.045,3.333
                                    c-2.912,0-5.823-1.11-8.045-3.333c-4.443-4.443-4.443-11.647,0-16.09l57.402-57.402l-57.402-57.402
                                    c-4.443-4.443-4.443-11.647,0-16.09c4.444-4.443,11.646-4.443,16.092,0l65.447,65.447c2.133,2.133,3.333,5.028,3.333,8.045
                                    C434.869,315.145,433.67,318.038,431.536,320.172z"/>
                            </g>
                        </svg>
                    @endif
                    <span class="hidden lg:block sm:ml-6">{!! $siteName !!}</span>
                </div>
                @if (has_nav_menu('primary_navigation'))
                    {!!
                        wp_nav_menu([
	                        'theme_location' => 'primary_navigation',
	                        'menu_class' => 'hidden sm:ml-6 sm:flex sm:space-x-8',
	                        'container' => null,
	                        'echo' => false
	                    ])
	                !!}
                @endif
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Right align menu--}}
            </div>
        </div>
    </div>
</nav>
