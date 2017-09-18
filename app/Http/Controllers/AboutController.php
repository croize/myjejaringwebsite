<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $s = About::all();
      return view('about.index')->with('sindex', $s);
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
      $edit = About::find($id);
      return view('about.update')->with('editabout', $edit);
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
     'describe' => 'required',
     'title' => 'required',
     'link' => 'required',
     'image' => 'image',
      ]);

      $file = About::find($id);
      $file->describe = $request->describe;
      $file->link = $request->link;
      $file->title = $request->title;

       if ($request->hasFile('image')) {

         $nameimage = $request->image->getClientOriginalName();
         $request->image->storeAs('public/about',$nameimage);
         $oldback = $file->image;

         $file->image = $nameimage;
         Storage::delete('public/about/'.$oldback);
       }
       $file->save();
       return redirect('/myjejaring/about/1/edit')->with('message', 'Data has been updated.');

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
