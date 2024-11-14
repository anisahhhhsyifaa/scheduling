<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\AdministratorModel;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $administrators = Administrator::all();
        return view('pages.administrator.index', compact('administrators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.administrator.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:128',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);
            $administrators = Administrator::create($request->all());
            return redirect()->route('admin.administrator.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $administrators = Administrator::find($id);
        return view('pages.administrator.show', compact('administrators'));
    }

    public function edit(string $id)
    {
        $administrators = Administrator::find($id);
        return view('pages.administrator.edit', compact('administrators'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:128',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);
            $administrators = Administrator::find($id);
            $administrators->update($request->all());
            return redirect()->route('admin.administrator.index');
    }

    public function destroy(string $id)
    {
        $administrators = Administrator::find($id);
        $administrators->delete();
        return redirect()->route('admin.administrator.index');
    }




    

    
    
    

}

