<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public static $quotes = array("https://imagestallerdos.s3.amazonaws.com/quote_1.png",
    "https://imagestallerdos.s3.amazonaws.com/quote_2.jpeg",
    "https://imagestallerdos.s3.amazonaws.com/quote_3.jpeg",
    "https://imagestallerdos.s3.amazonaws.com/quote_4.jpeg",
    "https://imagestallerdos.s3.amazonaws.com/quote_5.jpeg",
    "https://imagestallerdos.s3.amazonaws.com/quote_6.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_7.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_8.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_9.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_10.jpeg",
    "https://imagestallerdos.s3.amazonaws.com/quote_11.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_12.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_13.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_14.jpg",
    "https://imagestallerdos.s3.amazonaws.com/quote_15.jpg",
    );

    public function index()
    {
        $data = [];

        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];

        $data['image'] = $randomQuote;
        $data['server_ip'] = gethostbyname(gethostname());

        #return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
        return view('randomQuoteView')->with('data', $data);

    }
}
