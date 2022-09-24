@extends('starter-resepsionis')

@section('judul', 'Tamu')
@section('isi')

<div class="container">
     <div class="row justify-content-center">
          <div class="col-12">
               <div class="card">
                    <div class="card-body">
                         <h1 class="text-center">Data Pemesanan</h1>
                         @if ($message = Session::get('success'))
                         <div class= "alert alert-success" role="alert">
                              {{ $message }}
                         </div>
                         @endif

                    <!-- table -->
                    
                    <table class="table">
                         <thead  class="">
                           <tr>
                               <th scope="col">#</th>
                               
                               <th scope="col">Nama Pemesanan</th>
                               <th scope="col">Email</th>
                               <th scope="col">Telepon</th>
                               <th scope="col">Nama Tamu</th>
                               <th scope="col">Tgl. Check In</th>
                               <th scope="col">Tgl. Check Out</th>
                               <th scope="col">Tipe kamar</th>
                               <th scope="col">Jumlah Kamar</th>
                               <th scope="col">Option</th>
   
                             </tr>
                           </thead>
                           <tbody>
                               @foreach ($data as $item)
                       
                             <tr>
                               <th scope="row">{{$loop->iteration}}</th>
                               
                               <td>{{ $item->nama_pemesan }}</td>
                               <td>{{ $item->email }}</td>
                               <td>{{ $item->telp }}</td>
                               <td>{{ $item->nama_tamu }}</td>
                               <td>{{ $item->tgl_checkin }}</td>
                               <td>{{ $item->tgl_checkout }}</td>
                               <td>{{ $item->tipe_kamar }}</td>
                               <td>{{ $item->jumlah }}</td>
                               
   
                               <td>
                                   <form action="{{ url('/delete-pesan', $item->id)}}" method="POST">
                                   @csrf
                                   @method('delete')
                                   <button class="btn btn-danger">Hapus</button>
                                   </form>
                               </td>
                             </tr>
                             @endforeach
                           </tbody>
                       </table>
                     {{-- <a href="{{url('/home')}}" type="submit" class="btn btn-warning mb-3">Kembali</a> --}}
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection