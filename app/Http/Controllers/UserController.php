<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = \App\Models\Info::all();
        return view('index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'age'         => ['required', 'integer', 'min:0', 'max:150'],
            'phonenumber' => ['required', 'string', 'max:32'],
        ]);
        $info = Info::create($data);

        return redirect()->route('infos.show', $info->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $info = Info::findOrFail($id);
        return view('show', compact('info'));
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
