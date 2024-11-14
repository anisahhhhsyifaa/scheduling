@extends('layouts.app')

@section('content')
    <div class="pages-heding">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-building"></span>
                Detail Teacher
            </h3>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.teacher.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

                    <table class="table table-striped table-brodered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $teachers->name }}</Strong></td>
                        </tr>
                        <tr>
                            <th>Mata pelajaran</th>
                            <td>{{ $teachers->mata_pelajaran }}</Strong></td>
                        </tr>
                        <tr>
                            <td>Created_at</td>
                            <td>{{ Carbon\Carbon::parse($teachers->created_at)->format('D M Y HH:mm') }}</td>
                        </tr>
                        <tr>
                            <td>Updated_at</td>
                            <td>{{ Carbon\Carbon::parse($teachers->updated_at)->format('D M Y HH:mm') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
@endsection
