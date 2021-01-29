<a href="{{ get_permalink() }}">
<article @php(post_class([ 'mt-8', 'mb-5', 'w-full',  'flex', 'flex-row', 'shadow-2xl']))>
  <div class="w-1/4 p-5 text-center m-auto">
    <i class="far fa-newspaper fa-3x"></i>
  </div>
  <div class="flex flex-col w-3/4 bg-black text-white pr-2 pl-2">
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
</a>
