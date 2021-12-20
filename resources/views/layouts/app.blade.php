@include('partials.header')

<main class="content py-5">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="my-10">
    @yield('sidebar')
  </aside>
@endif

@include('partials.footer')
