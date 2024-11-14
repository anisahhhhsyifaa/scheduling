@extends('layout.app')
@section('content') 
<div class="page-title" >
    <div class="page-title" mb-3>
     <h3>
        <span claas="bi bi-building"></span>
        Update Administrator
     </h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.administrator.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

                <form action="{{route('admin.administrator.update', $administrator->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                   <div class="form-gruop">
                        <label for="name" class="form-label"> Nama<<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $administrator->name }}" required />    
                </div>  
                </form>
                <button type="submit" class="form-control btn btn-primary btn-sm">Simpan</button>
                <a href="{{route('admin.administrator.index', class="btn btn-sm btn-outline-secondary")}}">Batal</a>
            </div>
        </div>
    </section>
</div>
@endsection