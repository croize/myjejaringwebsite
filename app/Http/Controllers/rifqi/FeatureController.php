<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fu = Feature::all();
      return view('feature.index')->with('index', $fu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
   'title' => 'required',
   'desc' => 'required',
   'link' => 'required',
   'image' => 'image',
    ]);
    $file = new Feature;
    $file->title = $request->title;
    $file->desc = $request->desc;
    $file->link = $request->link;
       if ($request->hasFile('image')) {
         $nameimgback = $request->image->getClientOriginalName();
         $request->image->storeAs('public/feature',$nameimgback);
         $oldback = $file->image;
         $file->image = $nameimgback;
       }
       $file->save();
       return redirect('feature');
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
        $fu = Feature::find($id);
        return view('feature.update')->with('fuedit', $fu);
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
   'title' => 'required',
   'desc' => 'required',
   'link' => 'required',
   'image' => 'image',
    ]);
    $file = Feature::find($id);
    $file->title = $request->title;
    $file->desc = $request->desc;
    $file->link = $request->link;
       if ($request->hasFile('image')) {
         $nameimgback = $request->image->getClientOriginalName();
         $request->image->storeAs('public/feature',$nameimgback);
         $oldback = $file->image;
         $file->image = $nameimgback;
         Storage::delete('public/feature/'.$oldback);
       }
       $file->save();
       return redirect('feature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $file = Header::find($id);
      Storage::delete($file->image);
      $file->delete();
    }
}
