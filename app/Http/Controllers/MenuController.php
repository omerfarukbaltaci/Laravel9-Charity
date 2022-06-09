<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($menu,$title) {
        if($menu->parent_id == 0) {
            return $title;
        }

        $parent = Menu::find($menu->parent_id);
        $title = $parent->title . ' > ' . $title;
        return MenuController::getParentsTree($parent,$title);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menucreate()
    {
        //
        $data = Menu::all();
        $setting = Setting::first();
        return view('home.user.menucreate',[
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
    public function menustore(Request $request)
    {
        //
        $data = new Menu();
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('userpanel/menus');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function menuedit(Menu $menu,$id)
    {
        //
        $data = Menu::find($id);
        $datalist = Menu::all();
        $setting = Setting::first();
        return view('home.user.menuedit',[
            'data' => $data,
            'datalist' => $datalist,
            'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function menuupdate(Request $request, Menu $menu,$id)
    {
        //
        $data = Menu::find($id);
        $data->parent_id = $request->parent_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('userpanel/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function menudestroy(Menu $menu,$id)
    {
        //
        $data = Menu::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('userpanel/menus');
    }
}
