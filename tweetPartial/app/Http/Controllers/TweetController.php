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

    public function showTweet($id){
        if($id > sizeof($this->tweets)){
            return view('tweetError');
        }
        return view("tweets", ["allTweets" => [$this->tweets[$id]]]);

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
}
