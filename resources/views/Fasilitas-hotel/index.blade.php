@extends('starter-admin')

@section('isi')

<div class="container" style="margin-bottom: 30px">
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

                    <table class="table" style="margin-top: 10px">
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