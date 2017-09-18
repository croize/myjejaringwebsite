<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class UsermonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sh = User::all();
        $users = User::count();
        return view('operator.operator')->with('user', $sh)->with('jml', $users);
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
        $as = User::find($id);
        return view('operator.operatoredit')->with('sa', $as);
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
        'name' => 'required|string|max:255',
        'email' => 'required|string|email',
        'number' => 'required|numeric',
        'akses' => 'required',
        'image' => 'image',
      ]);

      $file = User::find($id);
      $file->name = $request->name;
      $file->email = $request->email;
      $file->akses = $request->akses;
      $file->number = $request->number;
      if ($request->hasFile('image')) {
        $nameimage = $request->image->getClientOriginalName();
        $request->image->storeAs('public/user',$nameimage);
        $oldback = $file->image;
        $file->image = $nameimage;
        Storage::delete('public/user/'.$oldback);
      }
      $file->save();
       return redirect('myjejaring/monitor')->with('message', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $is = User::find($id);
      $is->delete();
      return redirect('myjejaring/monitor')->with('message', 'Data has been deleted.');
    }
}
