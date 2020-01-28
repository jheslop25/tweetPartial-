@extends('master')

@section('title')
    all tweets
@endsection

@section('content')
@include('header')

 {{-- @php
    var_dump($allTweets);
 @endphp --}}
 <div id="tweets-container">
    @foreach ($allTweets as $tweet)
    <p> {{$tweet->content}}</p>
    <p><strong> {{$tweet->author}}</strong></p>
    <form action="/deletePost" method="post">
        @csrf
    <button type="submit" name="id" value="{{$tweet->id}}">delete post</button>
    </form>
    <form action="/tweets/{tweetId}" method="get">
        @csrf
    <button type="submit" name="id" value="{{$tweet->id}}">View post</button>
    </form>
    @endforeach

<form action="/tweets/" method="post">
    @include('editAdd')
 </div>
@include('footer')
@endsection
