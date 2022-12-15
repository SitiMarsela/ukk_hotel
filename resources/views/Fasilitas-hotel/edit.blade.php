@extends('starter-admin')

<!-- @section('judul', 'Form Edit') -->
@section('isi')
<div class="container" style="margin-bottom: 30px">
     <div class="row justify-content-center">
          <div class="col-8">
               <div class="card">
                    <div class="card-body">
                    <form action="{{ route('update-fasilitas', $datahotel->id) }}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    
                    <div class="mb-3">
                    <label class="form-label">Nama Fasilitas Hotel</label>
                    <input type="text" class="form-control" name="nama_fasilitas_hotel" value="{{ $datahotel->nama_fasilitas_hotel }}">
                    @error('nama_fasilitas_hotel')
                    <div class="text-info">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="mb-3">
                         <label class="form-label">Deskripsi</label>
                         <input type="text" class="form-control" name="deskripsi" value="{{ $datahotel->deskripsi }}">
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