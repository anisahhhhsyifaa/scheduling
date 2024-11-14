@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="page-title mb-3">
                <h3>
                    <span class="bi bi-building"></span>
                    Create New - Administrator
                </h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.administrator.index') }}" class="btn btn-sm btn-outline-secondary mb-2">
                            Kembali </a>

                        <form action="{{ route('admin.administrator.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label"> Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value ="{{ old('name') }}" required />
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label"> Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" id="email"
                                    value ="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label"> Password <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" id="password"
                                    value ="{{ old('password') }}" required />
                            </div>
                            
                            <button type="submit" class="btn btn-outline-primary btn-sm ">Simpan</button>
                            <a href="{{ route('admin.administrator.index') }}" class="btn btn-sm btn-outline-secondary"> Batal
                            </a>
                    </div>
                </div>
            </section>
        </div>
    @endsection
