<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form create student
        return view('pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        // Menyimpan data student ke database
        Student::create([
            'name' => $request->name,
            'class' => $request->class,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pages.student.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mendapatkan data student berdasarkan ID
        $student = Student::findOrFail($id);

        // Menampilkan view detail student
        return view('pages.student.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data student berdasarkan ID
        $students = Student::findOrFail($id);

        // Menampilkan form edit student
        return view('pages.student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
        ]);

        // Mendapatkan data student berdasarkan ID
        $students = Student::findOrFail($id);

        // Memperbarui data student
        $students->update([
            'name' => $request->name,
            'class' => $request->class,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pages.student.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mendapatkan data student berdasarkan ID dan menghapusnya
        $student = Student::findOrFail($id);
        $student->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
