<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Payment;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index() {
        return view("admin.index");
    }

    public function setting() {
        $data = Setting::first();
        if($data===null) {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data = Setting::first();
        }
        return view("admin.setting",['data'=>$data]);
    }

    public function donation()
    {
        $data = Payment::all();
        return view('admin.donation', [
            'data'=>$data,
        ]);
    }


    public function settingUpdate(Request $request) {
        $id = $request->input('id');
        $data = Setting::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->countries = $request->input('countries');
        $data->volunteers = $request->input('volunteers');
        $data->goal = $request->input('goal');
        $data->raised = $request->input('raised');
        $data->facebook = $request->input('facebook');
        $data->twitter = $request->input('twitter');
        $data->instagram = $request->input('instagram');
        $data->linkedin = $request->input('linkedin');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        if ($request->file('icon')) {
            $data->icon = $request->file('icon')->store('images');
        }
        $data->save();
        return redirect()->route('admin.setting');
    }
}
