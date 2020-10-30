@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DL's Blog">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>{{$post['title']}}DL Blog</title>
@endsection

@section('content')
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$post['title']}}</h1>
            <hr>

            <!-- Date/Time -->
            <p>Posted on {{$post->created_at->format('M d, Y')}}</p>
            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{\Illuminate\Support\Facades\Storage::url($post->featured_img)}}" alt="">
            <hr>

            <!-- Post Content -->
            {!! $post->content !!}
            <hr>

        </div>
        @include('vendor.sidebar')

    </div>
@endsection
