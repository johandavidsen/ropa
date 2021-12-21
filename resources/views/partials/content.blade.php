<article @php(post_class('flex flex-col rounded-lg shadow-lg overflow-hidden'))>
    <div class="flex-shrink-0">
        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <a href="{!! get_permalink() !!}" class="block mt-2">
                <h2 class="text-xl font-semibold text-gray-900">
                    {!! $title !!}
                </h2>
                <p class="mt-3 text-base text-gray-500">
                    @php(the_excerpt())
                </p>
            </a>
        </div>
        <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">

            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">
                </p>
                <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="{{ get_post_time('c', true) }}">
                        {{ get_the_date() }}
                    </time>
                    <span aria-hidden="true">
                        &middot;
                    </span>
                    <span>
                        {!! do_shortcode('[read_meter]') !!}
                    </span>
                </div>
            </div>
        </div>
    </div>
</article>
