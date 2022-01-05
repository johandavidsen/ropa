<article @php(post_class('flex flex-col rounded-lg shadow-lg overflow-hidden'))>
    <div class="flex-shrink-0 rounded-t-lg">
        @if(1 < count($featured_image))
            <img class="h-48 w-full object-cover rounded-t-lg" src="{{ $featured_image[0] }}" >
        @else
            <img class="h-48 w-full" src="{{ $featured_image[0] }}" >
        @endif
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <a href="{!! get_permalink() !!}" class="block mt-2">
                <h2 class="">
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
