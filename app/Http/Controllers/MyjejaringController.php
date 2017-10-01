<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Header;

class MyjejaringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('access:1');
     }

    public function index()
    {
      $s = Header::all();
      return view('admin.header')->with('sindex', $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Header::find($id);
      return view('admin.header_update')->with('edithead', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
     'titlehead' => 'required',
     'deschead' => 'required',
     'link' => 'required',
     'imgback' => 'image',
     'imgvid' => 'image',
      ]);
      $file = Header::find($id);
      $file->titlehead = $request->titlehead;
      $file->deschead = $request->deschead;
      $file->link = $request->link;


       if ($request->hasFile('imgback')) {
         $nameimgback = $request->imgback->getClientOriginalName();
         $request->imgback->storeAs('public/header',$nameimgback);
         $oldback = $file->imgback;
         $file->imgback = $nameimgback;
         Storage::delete('public/header/'.$oldback);
       }
       if ($request->hasFile('imgvid')) {
       $nameimgvid = $request->imgvid->getClientOriginalName();
       $request->imgvid->storeAs('public/header',$nameimgvid);
       $oldvid = $file->imgvid;
       $file->imgvid = $nameimgvid;
       Storage::delete('public/header/'.$oldvid);
       }
       $file->save();
       return redirect('myjejaring/header/1/edit')->with('message', 'Data has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
