{{-- @extends('starter-admin')

@section('isi')
    <div class="container">
        <a href="{{ route('create-fasilitas') }}" type="button" class="btn btn-outline-primary my-4">Tambah data</a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datahotel as $hotel)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $hotel->nama_fasilitas_hotel}}</td>
                    <td>{{ $hotel->deskripsi}}</td>
                    <td>
                        <a class="btn btn-outline-info" href="{{ url('edit-fasilitas',$hotel->id) }}">Edit</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

@extends('starter-admin')

@section('isi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card" style="overflow-x:auto">
                <div class="card-body">
                    <h1 class="text-center">Data Fasilitas Hotel</h1>
                    <!-- @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif -->
                    <a href="{{ route('create-fasilitas')}}" class="btn btn-info">Tambah Data</a>

                    <!-- table -->

                    <table class="table">
                        <thead>
                            <tr scope="row">
                                <th>No</th>
                                <th>Nama Fasilitas Hotel</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datahotel as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->nama_fasilitas_hotel}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>
                                    <a href="{{ url('edit-fasilitas', $item->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection