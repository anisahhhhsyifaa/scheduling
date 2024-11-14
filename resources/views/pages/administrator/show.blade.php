@extends('layouts.app')

@section('content')
    <div class="pages-heding">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-building"></span>
                Detail Administrator
            </h3>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.administrator.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

                    <table class="table table-striped table-brodered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $administrators->name }}</Strong></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $administrators->email }}</Strong></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>{{ $administrators->password }}</Strong></td>
                        </tr>
                        <tr>
                            <td>Created_at</td>
                            <td>{{ Carbon\Carbon::parse($administrators->created_at)->format('DD MMMM Y HH:mm') }}</td>
                        </tr>
                        <tr>
                            <td>Updated_at</td>
                            <td>{{ Carbon\Carbon::parse($administrators->updated_at)->format('DD MMMM Y HH:mm') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
@endsection
