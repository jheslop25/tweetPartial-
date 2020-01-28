@extends('master')

@section('title')
    just one tweet
@endsection

@section('content')
@include('header')

 {{-- @php
    var_dump($allTweets);
 @endphp --}}
 <div id="tweet-container">
    @foreach ($allTweets as $tweet)
    <div><p> {{$tweet->content}}</p></div>
    <div><p><strong> {{$tweet->author}}</strong></p></div>


    <form action="/editTweets/{{$tweet->id}}" method="get">

    @include('editAdd')
    @endforeach
 </div>
    @include('footer')
@endsection
