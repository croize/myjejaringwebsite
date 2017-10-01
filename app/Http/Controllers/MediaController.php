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

     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('access:1');
     }

    public function index()
    {
      $s = Mediasocial::all();
      return view('admin_social.index')->with('sindex', $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_social.create');
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
      $ca = $request['name'];
      $ccd = Mediasocial::where('name' , $ca)->value('name');
      if ($ccd==null) {
      $file->save();
        return redirect('/myjejaring/social')->with('message', 'Data has been updated.');
      }else{
        return redirect('/myjejaring/social/create')->with('message', 'Name ready exists');
      }

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
      return view('admin_social.update')->with('social', $edit);
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
      $ca = $request['name'];
      $id = $request['id'];
      $ccd = Mediasocial::where('name' , $ca)->value('name');
      if ($ccd==null) {
      $file->save();
        return redirect('myjejaring/social')->with('message', 'Data has been updated.');
      }else{
        return redirect('/myjejaring/social/'.$id.'/edit')->with('message', 'Name ready exists');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Mediasocial::find($id);
        $file->delete();
        return redirect('myjejaring/social');
    }
}
