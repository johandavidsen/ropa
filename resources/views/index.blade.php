@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (! have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'ropa') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    <div class="container mx-auto">
    @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile
    </div>

    @if(is_paged())
    <div class="container py-5">
        {!! $pagination !!}
    </div>
    @endif

@endsection

@section('sidebar')

@endsection
