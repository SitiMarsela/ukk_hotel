{{-- @extends('starter-admin')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="{{ route('simpan-fasilitas') }}" method="post">
                        @csrf
                        <div class="form-group my-3">
                            <label class="form-label my-3">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas_hotel"  class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Deskripsi</label>
                            <input type="text" name="deskripsi"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('starter-admin')

<!-- @section('judul', 'Form Create') -->
@section('isi')
<div class="container">
     <div class="row justify-content-center">
          <div class="col-8">
               <div class="card">
                    <div class="card-body">
                    <form action="{{ route('simpan-fasilitas') }}" method="POST" enctype= "multipart/form-data">
                    {{ csrf_field() }}
                    
                    
                    <div class="mb-3">
                    <label class="form-label">Nama Fasilitas Hotel</label>
                    <input type="text" class="form-control" name="nama_fasilitas_hotel">
                    @error('nama_fasilitas_hotel')
                    <div class="text-info">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                    <label class="form-label">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                    @error('deskripsi')
                    <div class="text-info">{{ $message }}</div>
                    @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>    
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection