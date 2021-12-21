<article @php(post_class('relative py-16 bg-white overflow-hidden mx-auto'))>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-gray-400 font-semibold tracking-wide uppercase">
                    @foreach(get_the_category() as $category)
                        <a href="{{ get_category_link($category->term_id) }}">{{ $category->name }}</a>
                    @endforeach
                </span>
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"> {!! $title !!}</span>
            </h1>
            <p class="mt-8 text-xl text-gray-500 leading-8">{!! the_excerpt() !!}</p>
        </div>
        <div class="mt-6 prose prose-lg text-gray-800 mx-auto">
            @php(the_content())
        </div>

        @php(comments_template())
    </div>
</article>
