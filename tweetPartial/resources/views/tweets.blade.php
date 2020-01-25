@extends('master')

@section('title')
    all tweets
@endsection

@section('content')

 {{-- @php
    var_dump($allTweets);
 @endphp --}}
    @foreach ($allTweets as $tweet)
    <p> {{$tweet->content}}</p>
    <p><strong> {{$tweet->author}}</strong></p>
    <form action="/deletePost" method="post">
        @csrf
    <button type="submit" name="id" value="{{$tweet->id}}">delete post</button>
    </form>
    @endforeach

    @include('header')

    <form action="/tweets/" method="post">
    @csrf
        <p>enter content</p>
    <input type="text" name="content">
    <p>enter author</p>
    <input type="text" name="author"><br><br><br>
    <input type="submit" value="create tweet">

    </form>
@endsection
