@extends('layouts.app') 

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-people-fill"></span>
                Teacher
            </h3>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.teacher.create') }}" class="btn btn-sm btn-outline-secondary mb-2">
                        <span class="bi bi-plus-circle"></span>
                        Create New </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->mata_pelajaran }}</td>
                                        <td>
                                            <!-- Tombol Tampilkan Detail -->
                                            {{-- <a href="{{ route('admin.teacher.show', $teacher->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                            </form> --}}
                                            <a href="{{ route('admin.teacher.show', $teacher->id) }}"
                                                class="btn btn-outline-success btn-sm me-1">
                                                <span class="bi bi-eye"></span>
                                                Show
                                            </a>
                                            <a href="{{ route('admin.teacher.edit', $teacher->id) }}"
                                                class="btn btn-outline-warning btn-sm me-1">
                                                <span class="bi bi-pencil"></span>
                                                Edit
                                            </a>
                                            <a href="#"class="btn btn-outline-danger btn-sm me-1"
                                                onclick="handleDestroy(`{{ route('admin.teacher.destroy', $teacher->id) }}`)";>
                                                <span class="bi bi-trash"></span>
                                                Delete
                                            </a>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data Guru</td>
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

