@extends('starter-resepsionis')

@section('judul', 'Form Create Data Tamu')
@section('isi')
<div class="container" style="margin-bottom: 30px">
     <div class="row justify-content-center">
          <div class="col-8">
               <div class="card">
                    <div class="card-body">
                    <form action="{{ route('simpan-pemesanan') }}" method="POST" enctype= "multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Pemesan :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pemesan" name="nama_pemesan">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email :</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email Anda" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">No Telepon :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan No Telepon" name="telp">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Tamu :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Tamu" name="nama_tamu">
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Cek In :</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1"  name="tgl_checkin">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Cek Out :</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1"  name="tgl_chekout">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tipe Kamar :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan " name="tipe_kamar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                      </div>
               </div>
          </div>
     </div>
</div>
@endsection