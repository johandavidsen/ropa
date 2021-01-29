@include('partials.header')

<main class="content">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside>
    @yield('sidebar')
  </aside>
@endif

@include('partials.footer')
