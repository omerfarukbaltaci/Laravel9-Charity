<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function mainMenuList() {
        return Menu::where('parent_id','=',0)->with('children')->get();
    }
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

    public function content($id)
    {
        $data = Content::find($id);
        $images = DB::table('images')->where('content_id',$id)->get();
        return view('home.content', [
            'data' => $data,
            'images' => $images
        ]);
    }

    public function test()
    {
        echo "Test page";
    }
}
