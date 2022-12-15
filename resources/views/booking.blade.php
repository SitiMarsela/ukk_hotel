<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotel STARBHAK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

         <!-- Header Start -->
         <div class="container-fluid px-0 py-3" style="background-color: #1d2031">
            <div class="row gx-0">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-white text-uppercase fw-bold">Hotel Starbhak</h2>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                          
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotel Starbhak</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between ms-auto" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0 ms-auto me-5">
                                <a href="/" class="nav-item nav-link">Home</a>
                                <a href="about" class="nav-item nav-link">About Us</a>
                                <a href="home#room" class="nav-item nav-link">Rooms</a>
                                <a href="home#hotel" class="nav-item nav-link">Hotel Facility</a>
                                <a href="/booking" class="nav-item nav-link active">Booking Room</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

      


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow" data-wow-delay="0.1s">
                    <h2 class="py-2 fw-bold text-uppercase" style="color: orange">ROOM BOOKING</h2>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="./about5.jpg" class="d-block w-100">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./about6.jpg" class="d-block w-100">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./about7.jpg" class="d-block w-100">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./about8.jpg" class="d-block w-100">
                                  </div>
                                 
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    <div class="col-lg-7" style="margin-left: 80px">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="{{ route('save-booking') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nama_pemesan" placeholder="nama_pemesan">
                                            <label for="nama_pemesan">Nama Pemesana</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email" placeholder="Nama Tamu">
                                            <label for="nama_tamu">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="telp" placeholder="telp">
                                            <label for="telp">No Telpon</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nama_tamu" placeholder="Nama Tamu">
                                            <label for="nama_tamu">Nama Tamu</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating" data-target-input="nearest">
                                            <input type="date" class="form-control" name="tgl_checkin" id="checkin" placeholder="Check In"  />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating" data-target-input="nearest">
                                            <input type="date" class="form-control" name="tgl_checkout" id="checkout" placeholder="Check Out" />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                          <div class="form-floating">
                                            <select class=" form-select form-control" id=" " name="tipe_kamar">
                                              <option selected>Pilih Tipe Kamar</option>
                                              @foreach ($datapesanan as $item)
                                                  <option value="{{ $item->tipe_kamar }}">
                                                    {{ $item->tipe_kamar }}</option>
                                              @endforeach
                                            </select>
                                            <label for="tipe_kamar">Tipe Kamar</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating" data-target-input="nearest">
                                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" />
                                                <label for="jumlah">Jumlah</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                 <div class="col-12">
                      <div class="card" style="margin-top: 30px" >
                           <div class="card-body">
                                <h1 class="text-center pb-5" style="color: orange">DETAIL PEMESANAN</h1>
                                @if ($message = Session::get('success'))
                                <div class= "alert alert-success" role="alert">
                                     {{ $message }}
                                </div>
                                @endif
       
                           <!-- table -->
                           
                           <table class="table">
                                <thead  class="" style="align-content: center">
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
          
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($resep as $item)
                              
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

        <!-- Footer Start -->
  <section>
    <footer id="footer" style="margin-top: 30px">
        <div class="left">
              <h1 style="color: white">
            HOTEL STARBHAK
        </h1>
        </div>
      
        <div class=" d-flex footer-right">
            <ul>
                <li>
                    <h2 style="color: white">ROOMS</h2>
                </li>
                <li>
                    <p>Indonesia Standard Double</p>
                </li>
                <li>
                    <p>Indonesia Suite Family</p>
                </li>
                <li>
                    <p>Indonesia Deluxe Double</p>
                </li>
            </ul>
            <ul>
                <li>
                    <h2 style="color: white">FACILITY HOTEL</h2>
                </li>
                <li>
                    <p>FOOD & RESTAURANT</p>
                </li>
                <li>
                    <p>SPA & FITNESS</p>
                </li>
                <li>
                    <p>SPORT & GAMING</p>
                </li>
            </ul>
            <ul>
                <li>
                    <h2 style="color: white">BOOKING</h2>
                </li>

                <li>
                    <div class="d-flex justify-content-between">
                    <a class="btn btn-sm btn-primary py-2 px-4" href="">BOOKING NOW</a>
                    </div>
                </li>
            </ul>
        </div>

       
   </footer>
  </section>
        <!-- Footer End -->


        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>