{{--
  Template Name: Default template no title
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
