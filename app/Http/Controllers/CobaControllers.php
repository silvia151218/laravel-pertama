<?php

namespace App\Http\CobaControllers;

use App\Models\Friends;
use Illuminate\Http\Request;

class CobaController extends Controllers
{

    public function index()
    {
        $friends = Friends::all();

        return view('index', compact('friends'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;

        $friends->save();
    }
}
