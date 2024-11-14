@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-building"></span>
                Update Administrator
            </h3>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.administrator.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

                    <form action="{{ route('admin.administrator.update', $administrators->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $administrators->name }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="class" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ $administrators->class }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                        <a href="{{ route('admin.administrator.index') }}"
                            class="btn btn-sm btn-outline-secondary mt-3">Batal</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
