<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mediasocial;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $s = Mediasocial::all();
      return view('mediasocial.index')->with('sindex', $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mediasocial.create');
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
     'name' => 'required',
     'link' => 'required',
      ]);
      $file = new Mediasocial;
      $file->name = $request->name;
      $file->link = $request->link;
      $file->save();

       return redirect('social');
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
      $edit = Mediasocial::find($id);
      return view('mediasocial.update')->with('social', $edit);
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
     'name' => 'required',
     'link' => 'required',
      ]);
      $file = Mediasocial::find($id);
      $file->name = $request->name;
      $file->link = $request->link;
      $file->save();


       return redirect('social');
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
