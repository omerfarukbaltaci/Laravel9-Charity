<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata = Content::limit(4)->get();
        $contentlist1 = Content::limit(6)->get();

        return view('home.index', [
            'sliderdata' => $sliderdata,
            'contentlist1' => $contentlist1

        ]);
    }

    public function test()
    {
        echo "Test page";
    }
}
