<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Portafolio;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about = About::firts();
        return view('admin.home', compact('about'));
    }

    public function prueba()
    {
        //
    
       $about =  \DB::table('abouts')->first();
       
        return view('about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if ($request->id != "null") {

            $about = About::find($request->id);
        } else {
            $about = new About();
        }

        if ($request->file != "null") {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('\images\header-bg'), $fileName);
            $about->imagen = $fileName;
        }
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->description = $request->description;
        $about->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }

    public function bannercreate(Request $request)
    {


        if ($request->id != "null") {

            $banner = Banner::find($request->id);
        } else {
            $banner = new Banner();
        }

        if ($request->file != "null") {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('\images\slider'), $fileName);
            $banner->banner = $fileName;
        }
        $banner->title = $request->title;

        $banner->save();
    }

    public function portafolio(Request $request)
    {


        if ($request->id != "null") {

            $banner = Portafolio::find($request->id);
        } else {
            $banner = new Portafolio();
        }

        if ($request->file != "null") {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('\images\portfolio'), $fileName);
            $banner->imagen = $fileName;
        }

        $banner->save();
    }

    public function bannerdelete(Request $request)
    {
        $data = Banner::find($request->id);
        $data->delete();
        return response()->json(['data' => $data], 200);
    }
}
