<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Content;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('home.user.index', [
            'setting' => $setting,

        ]);
    }

    public function reviews()
    {
        $comments = Comment::where('user_id','=',Auth::id())->get();
        $setting = Setting::first();
        return view('home.user.comments', [
            'setting'=>$setting,
            'comments'=>$comments,
        ]);
    }

    public function reviewdestroy($id)
    {
        $data = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.reviews'));
    }

    public function contents()
    {
        $contents = Content::where('user_id','=',Auth::id())->get();
        $setting = Setting::first();
        return view('home.user.contents', [
            'setting'=>$setting,
            'contents'=>$contents

        ]);
    }

    public function menus()
    {
        $data = Menu::all();
        $setting = Setting::first();
        return view('home.user.menus', [
            'setting'=>$setting,
            'data'=>$data,
        ]);
    }

    public function donations()
    {
        $data = Payment::where('user_id','=',Auth::id())->get();
        $setting = Setting::first();
        return view('home.user.donations', [
            'setting'=>$setting,
            'data'=>$data,
        ]);
    }

}
