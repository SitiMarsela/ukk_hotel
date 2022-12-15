@extends('starter-admin')

<!-- @section('judul', 'Form Create') -->
@section('isi')
<div class="container" style="margin-bottom: 30px">
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