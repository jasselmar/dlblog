@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DL's Blog">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>DL Blog</title>
@endsection

@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Search Result For:
                <small>{{$key}}</small>
            </h1>

            @include('vendor.posts-list')

        </div>
        @include('vendor.sidebar')
    </div>
@endsection
