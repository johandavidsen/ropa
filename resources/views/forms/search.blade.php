<div class="p-8">
  <form role="search" method="get" class="flex items-center rounded-full shadow-xl hover:shadow-2xl focus:shadow-2xl" action="{{ home_url('/') }}">
    <input
            type="search"
            class="search-field rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none"
            placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
            value="{{ get_search_query() }}"
            name="Search"
    >
    <div class="p-4">
      <input type="submit" class="bg-black text-white rounded-full p-2 hover:bg-gray-600 focus:outline-none w-12 h-12 flex items-center justify-center" value="{{ esc_attr_x('Search', 'submit button', 'sage') }}">
    </div>
  </form>

</div>
