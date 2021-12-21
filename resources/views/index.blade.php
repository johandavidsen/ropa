@extends('layouts.app')

@section('content')

    @if (! have_posts())
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'ropa') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endif

    @if(have_posts())
        <div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                        From the {!! $title !!}
                    </h2>
                    <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                        {!! the_excerpt() !!}
                    </p>
                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                    @while(have_posts()) @php(the_post())
                        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
                    @endwhile
                </div>
            </div>
        </div>

    @endif

    @if(is_paged())
    <div class="container py-5">
        {!! $pagination !!}
    </div>
    @endif

@endsection

@section('sidebar')

@endsection
