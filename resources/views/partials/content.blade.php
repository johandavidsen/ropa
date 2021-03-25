<a href="{{ get_permalink() }}">
<article @php(post_class([ 'mt-8', 'mb-5', 'w-full',  'flex', 'flex-row', 'shadow-2xl']))>
  <div class="w-1/6 text-center bg-black text-white">
    <i class="far fa-newspaper fa-3x m-auto"></i>
  </div>
  <div class="flex flex-col w-5/6 px-8 py-4">
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
