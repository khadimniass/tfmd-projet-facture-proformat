<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {

    }
    public function create(Request $request)
    {
        return view('factures.create');
    }
    public function store(Request $request)
    {
        dd($request);
    }

    public function show()
    {

    }
    public function destroy()
    {

    }
}
