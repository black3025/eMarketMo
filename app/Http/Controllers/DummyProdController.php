<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dummyProd;
class DummyProdController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prods = dummyProd::all();
        return view('product.index',compact('prods'));
    }

    public function catalog()
    {
        $prods = dummyProd::all();
        return view('welcome',compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
