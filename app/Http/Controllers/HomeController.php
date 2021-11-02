<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contacto(Request $request)
    {
    
        $subject = $request->asunto;
        $for = "steven0.14@hotmail.com";
        \Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("hesmastyle@gmail.com","HESMA STYLE");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
     
    }
}
