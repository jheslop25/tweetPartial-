<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [
        [
            'author' => 'alex',
            'content' => 'lorum ipsum one'
        ],

        [
            'author' => 'someotherguy',
            'content' => 'lorum ipsum two'
        ],

        [
            'author' => 'otherguy',
            'content' => 'lorum ipsum three'
        ],

        [
            'author' => 'alex',
            'content' => 'lorum ipsum four'
        ]
    ];

    public function show(){

        return view('tweets', ['allTweets' => $this->tweets]);
    }

    public function showTweet($id){
        if($id > sizeof($this->tweets)){
            return view('tweetError');
        }
        return view("tweets", ["allTweets" => [$this->tweets[$id]]]);

    }
}
