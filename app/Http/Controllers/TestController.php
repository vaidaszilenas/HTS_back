<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Utena;

class TestController extends Controller
{
  public function index($id)
  {
    $utena = Utena::where('id', $id)->firstOrFail();

    return View::make('test')->with('utena', $utena);




      // $data = Utena::findOrFail(1)->photo;
      // $data2 = Utena::findOrFail(2)->photo;
      // return view('test', [
      //   'data' => $data,
      //   'data2' => $data2,
      // ]);
  }
}
