<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
      return view('public/home');
    }

    public function show($id)
    {
      $parameter = $id;
      $nama = 'Dedi Hartono';
      return view('public/single', [ 'parameter'=>$parameter , 'nama'=> $nama ]);
    }
}
