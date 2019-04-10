<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utena;
use App\Photo;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      $validatedData = $this->validate($request,[
        'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ]);

      if ($request->hasFile('photo')) {

        foreach ($request->photo as $photo) {

          $filename = $photo->getClientOriginalName();
          $path = $photo->storeAs('public/images', $filename);
          $post = [
            'photo'=> $path,
            'utena_id' => $request['utena_id']
          ];
          Photo::create($post);
          $post = $request->except('_token');

        }

      }

      // $validatedData = $request->validate([
      //   'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);
      //
      //
      // $path = $request->file('photo')->storePublicly('public/images');
      // $post = [
      //   'photo'=> $path,
      //   'utena_id' => $request['utena_id']
      // ];
      // // var_dump($post);
      // Photo::create($post);
      // $post = $request->except('_token');
      // // var_dump($post);

      return redirect()->back();
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
