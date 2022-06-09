<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentcreate()
    {
        //
        $data = Menu::all();
        $setting = Setting::first();
        return view('home.user.contentcreate',[
            'data' => $data,
            'setting' => $setting
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contentstore(Request $request)
    {
        //
        $data = new Content();
        $data->menu_id = $request->menu_id;
        $data->user_id = 0; // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->type = $request->type;
        $data->date = $request->date;
        $data->hour = $request->hour;
        $data->location = $request->location;
        $data->donateQuantity = $request->donateQuantity;

        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('userpanel/contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function contentedit(Content $content,$id)
    {
        //
        $data = Content::find($id);
        $datalist = Menu::all();
        $setting = Setting::first();
        return view('home.user.contentedit',[
            'data' => $data,
            'datalist' => $datalist,
            'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function contentupdate(Request $request, Content $content,$id)
    {
        //
        $data = Content::find($id);
        $data->menu_id = $request->menu_id;
        $data->user_id = 0; // $request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->type = $request->type;
        $data->date = $request->date;
        $data->hour = $request->hour;
        $data->location = $request->location;
        $data->donateQuantity = $request->donateQuantity;

        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('userpanel/contents');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function contentdestroy(Content $content,$id)
    {
        //
        $data = Content::find($id);
        if (Storage::exists($data->image)) {
            Storage::delete($data->image);
        }
        Storage::delete($data->image);
        $data->delete();
        return redirect('userpanel/contents');
    }
}
