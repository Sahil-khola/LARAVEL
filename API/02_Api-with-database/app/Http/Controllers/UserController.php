<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return["result"=>"complete index"];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return["result"=>"complete create"];
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return["result"=>"complete store"];
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return["result"=>"complete show"];
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return["result"=>"complete edit"];
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return["result"=>"complete update"];
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
