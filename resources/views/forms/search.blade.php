<form role="search" method="get" class="border" action="{{ home_url('/') }}">
  <input
    type="search"
    class="search-field pl-2 p-1"
    placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
    value="{{ get_search_query() }}"
    name="Search"
  >

  <input type="submit" class="button p-1 pr-2" value="{{ esc_attr_x('Search', 'submit button', 'sage') }}">
</form>
