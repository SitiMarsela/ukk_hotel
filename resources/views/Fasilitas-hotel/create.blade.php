@extends('starter-admin')

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
                        <div class="form-group my-3">
                            <label class="form-label my-3">Gambar</label>
                            <input type="text" name="url_gambar"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection