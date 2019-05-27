<?php

namespace App\Http\Controllers;

use App\Marijampole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DB;
use View;

class MarijampoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {

         $utena = Marijampole::orderby('created_at', 'desc')->paginate(12);

       return view('counties/marijampole',[
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
         return view('create-marijampole');
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
         'file_name'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:20000',
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
       Marijampole::create($post);
       $post = $request->except('_token');
       // var_dump($post);

       return redirect()->route('marijampole');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {

       $utena = Marijampole::where('id', $id)->firstOrFail();

       return View::make('show-marijampole')->with('utena', $utena);
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
       $utena = Marijampole::findOrFail($id);
       if ($utena == true) {
         foreach ($utena['photo'] as $key) {
           var_dump($key['photo']);
           Storage::disk('local')->delete($key['photo']);
         }
       }
       $utena::destroy($id);
       Storage::disk('local')->delete($utena['file_name']);

       return redirect()->back();
     }
}
