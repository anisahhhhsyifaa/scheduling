@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="page-title mb-3">
                <h3>
                    <span class="bi bi-building"></span>
                    Create New - Teacher
                </h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.teacher.index') }}" class="btn btn-sm btn-outline-secondary mb-2">
                            Kembali </a>

                        <form action="{{ route('admin.teacher.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label"> Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value ="{{ old('name') }}" required />
                            </div>
                            <div class="form-group">
                                <label for="mata_pelajaran" class="form-label"> Mata pelajaran <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran"
                                    value ="{{ old('mata_pelajaran') }}" required />
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-sm ">Simpan</button>
                            <a href="{{ route('admin.teacher.index') }}" class="btn btn-sm btn-outline-secondary"> Batal
                            </a>
                    </div>
                </div>
            </section>
        </div>
    @endsection
