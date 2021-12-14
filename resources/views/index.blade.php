@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (! have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'ropa') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    @while(have_posts()) @php(the_post())
    <div class="container">
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    </div>
    @endwhile

    <div class="container py-5">
        {!! $pagination !!}
    </div>

    @include('partials.sidebar')
@endsection

@section('sidebar')

@endsection
