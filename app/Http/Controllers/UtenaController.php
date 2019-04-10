<?php

namespace App\Http\Controllers;

use App\Utena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DB;
use View;

class UtenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $utena = Utena::all();
        return view('counties/utena',[
          'utena'=>$utena
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-structure');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'file_name'=>'image|mimes:jpeg,png,jpg,gif,svg|max:20000',
        'pond'=>'required|min:2',
        'small-describe'=>'required|min:10',
        'describe'=>'required|min:10',
        'district'=>'required'
      ]);

      $path = $request->file('file_name')->storePublicly('public/images');
      $post = [
        'file_name'=> $path,
        'pond'=>$request['pond'],
        'small-describe'=>$request['small-describe'],
        'describe'=>$request['describe'],
        'district'=>$request['district']

      ];
      // var_dump($post);
      Utena::create($post);
      $post = $request->except('_token');
      // var_dump($post);

      return redirect()->route('utena');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $utena = Utena::where('id', $id)->firstOrFail();

      return View::make('show-structure')->with('utena', $utena);
        // $utena = Utena::findOrFail($id);
        // return view('show-structure',[
        //   'utena' => $utena
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
