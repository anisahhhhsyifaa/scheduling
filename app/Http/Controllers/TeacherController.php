<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255', // menggunakan 'teachers' untuk validasi unique
        ]);

        // Menyimpan data teacher ke database
        Teacher::create([
            'name' => $request->name,
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pages.teacher.index')->with('success', 'Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mendapatkan data teacher berdasarkan ID
        $teachers = Teacher::findOrFail($id);

        // Menampilkan view detail teacher
        return view('pages.teacher.show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data teacher berdasarkan ID
        $teachers = Teacher::findOrFail($id);

        // Menampilkan form edit teacher
        return view('pages.teacher.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $id, // menggunakan 'teachers' untuk validasi unique
            'age' => 'required|integer',
        ]);

        // Mendapatkan data teacher berdasarkan ID
        $teacher = Teacher::findOrFail($id);

        // Memperbarui data teacher
        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('teacher.index')->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mendapatkan data teacher berdasarkan ID dan menghapusnya
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('teacher.index')->with('success', 'Teacher deleted successfully.');
    }
}
