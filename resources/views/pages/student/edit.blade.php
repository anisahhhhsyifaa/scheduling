@extends('layouts.app')
@section('content') 
<div class="page-title">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Update Student
        </h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.student.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

                <form action="{{ route('admin.student.update', $students->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $students->name }}" required />    
                    </div>  

                    <div class="form-group mt-3">
                        <label for="class" class="form-label">Class <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="class" id="class" value="{{ $students->class }}" required />
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                    <a href="{{ route('admin.student.index') }}" class="btn btn-sm btn-outline-secondary mt-3">Batal</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
