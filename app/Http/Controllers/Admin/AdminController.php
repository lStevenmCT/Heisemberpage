<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\About;
use App\Models\Banner;
use App\Models\Portafolio;

class AdminController extends Controller
{
    //
    public function show()
    {

        $user = User::all();
    }
    public function login()
    {
        if (\Auth::check()) {
            return view('admin.home');
        }
        return view('admin.login');
    }
    public function access(Request $request)
    {
        $input = $request->all();


        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

    

        if (\Auth::attempt(array('email' => $input['username'], 'password' => $input['password']))) {
    
            return redirect('/admin/home');
        } else {
            return redirect('/')
                ->with('error', '');
        }
    }
    public function index()
    {
        $about = About::first();
        return view('admin.home', compact('about'));
    }

    public function banner()
    {
        $banners = Banner::all();
        return view('admin.banner', compact('banners'));
    }

    public function portafolio()
    {
        $portafolio = Portafolio::all();
        return view('admin.portafolio', compact('portafolio'));
    }
}
