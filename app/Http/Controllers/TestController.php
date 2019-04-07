<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utena;

class TestController extends Controller
{
  public function index()
  {
      $data = Utena::find(1)->photo;
      $data2 = Utena::find(2)->photo;
      return view('test', [
        'data' => $data,
        'data2' => $data2,
      ]);
  }
}
