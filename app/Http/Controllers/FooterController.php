<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $s = Footer::all();
      return view('admkin.index')->with('sindex', $s);
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
      $edit = Footer::find($id);
      return view('admin.footer')->with('editfoot', $edit);
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
     'address' => 'required',
     'contacts' => 'required',
     'link' => 'required',
     'imgparalax' => 'image',
      ]);
      $file = Footer::find($id);
      $file->address = $request->address;
      $file->contacts = $request->contacts;
      $file->link = $request->link;

       if ($request->hasFile('imgparalax')) {
         $nameimgvid = $request->imgparalax->getClientOriginalName();
         $request->imgparalax->storeAs('public/footer',$nameimgvid);
         $oldvid = $file->imgparalax;
         $file->imgparalax = $nameimgvid;
         Storage::delete('public/footer/'.$oldvid);

       }
       $file->save();

       return redirect('/myjejaring/footer/1/edit')->with('message', 'Data has been updated.');
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
