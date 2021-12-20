<article @php(post_class())>
    <div class="image">
        <i class="far fa-newspaper fa-3x m-auto"></i>
    </div>
    <div class="teaser">
        <header>
            <h2 class="flex-auto text-xl pt-4">
                {!! $title !!}
            </h2>
        </header>

        <div class="entry-summary">
            @php(the_excerpt())
        </div>

        @include('partials/entry-meta')
    </div>
</article>
