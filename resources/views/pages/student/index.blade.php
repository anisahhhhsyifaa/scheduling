@extends('layouts.app') 

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-people-fill"></span>
                Daftar Student
            </h3>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.student.create') }}" class="btn btn-sm btn-outline-secondary mb-2">
                        Create New </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Class</th>
                                    {{-- <th>Umur</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->class }}</td>
                                        <td>
                                            <!-- Tombol Tampilkan Detail -->
                                            <a href="{{ route('admin.administrator.show', $student->id) }}"
                                                class="btn btn-outline-success btn-sm me-1">
                                                <span class="bi bi-eye"></span>
                                                Show
                                            </a>
                                            <a href="{{ route('admin.administrator.edit', $student->id) }}"
                                                class="btn btn-outline-warning btn-sm me-1">
                                                <span class="bi bi-pencil"></span>
                                                Edit
                                            </a>
                                            <a href="#"class="btn btn-outline-danger btn-sm me-1"
                                                onclick="handleDestroy(`{{ route('admin.administrator.destroy', $student->id) }}`)";>
                                                <span class="bi bi-trash"></span>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data student</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </section>
    </div>
</div>
    
    
@endsection
@push('styles')
        <link rel="stylesheet" href="{{ asset('/assets/vendors/simple-datatables/style.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
        <script>
            let datatable = document.querySelector('#datatable');
            new simpleDatatables.DataTable(datatable);
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script type="text/javascript">
            function handleDestroy(url) {
                swal({
                        title: "Apakah anda yakin?",
                        text: "Data yang di hapus tidak bisa dikembalikan",
                        icon: "warning",
                        buttons: ['Batal', 'Ya Hapus!'],
                        dangerMode: true,
                    })
                    .then((confirmed) => {
                        if (confirmed) {
                            $('#form-delete').attr('action', url);
                            $('#form-delete').submit();
                        }
                    });

            }
        </script>
    @endpush

