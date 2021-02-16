@include('partials.header')

<main class="content">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="my-10">
    @yield('sidebar')
  </aside>
@endif

@include('partials.footer')
