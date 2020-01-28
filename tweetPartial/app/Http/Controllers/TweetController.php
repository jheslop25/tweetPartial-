<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{


    // private $tweets = [
    //     [
    //         'author' => 'alex',
    //         'content' => 'lorum ipsum one'
    //     ],

    //     [
    //         'author' => 'someotherguy',
    //         'content' => 'lorum ipsum two'
    //     ],

    //     [
    //         'author' => 'otherguy',
    //         'content' => 'lorum ipsum three'
    //     ],

    //     [
    //         'author' => 'alex',
    //         'content' => 'lorum ipsum four'
    //     ]
    // ];

    public function show(){
        $tweets = DB::select('select * from tweet');

        return view('tweets', ['allTweets' => $tweets]);
    }

    public function showTweet(Request $request){
        $tweet = DB::select("select * from tweet where id = '$request->id'");
        // if($request->id > sizeof($tweet)){
        //     return view('tweetError');
        // }
        return view("oneTweet", ["allTweets" => $tweet]);

    }

    public function addTweet(Request $request){
        DB::insert("insert into tweet (author, content) values ('$request->author', '$request->content')");
        $tweets = DB::select('select * from tweet');

        return view('tweets', ['allTweets' => $tweets]);
    }

    public function deleteTweet(Request $request){
        DB::delete("delete from tweet where id = '$request->id'");
        $tweets = DB::select('select * from tweet');

        return view('tweets', ['allTweets' => $tweets]);
    }

    public function edit(Request $request){
        //var_dump($request->tweetId);
        DB::update("UPDATE `tweet` SET `content`= '$request->content',`author`= '$request->author' WHERE `id`= $request->tweetId;");
        $tweet = DB::select("select * from tweet where id = '$request->tweetId'");

        // if($request->id > sizeof($tweet)){
        //     return view('tweetError');
        // }
        return view("oneTweet", ["allTweets" => $tweet]);
    }
}
