@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DL's Blog">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>DLBlog</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">

            <h1 class="my-4">DL
                <small>Home Page</small>
            </h1>

            @include('vendor.posts-list')

        </div>
        @include('vendor.sidebar')
    </div>
@endsection
