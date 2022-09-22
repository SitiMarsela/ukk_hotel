@extends('starter-admin')

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
                        <a class="btn btn-outline-info" href="{{ route('update-fasilitas',$hotel->id) }}">Edit</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection