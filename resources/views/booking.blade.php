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
         <div class="container-fluid bg-dark px-0 py-3">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-white text-uppercase">Hotel Starbhak</h2>
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
                        {{-- <div class="collapse navbar-collapse justify-content-between ms-auto" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0 ms-auto me-5">
                                <a href="home#home" class="nav-item nav-link active">Home</a>
                                <a href="home#about" class="nav-item nav-link">About Us</a>
                                <a href="home#room" class="nav-item nav-link">Rooms</a>
                                <a href="home#hotel" class="nav-item nav-link">Hotel Facility</a>
                            </div>
                        </div> --}}
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

      


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-blue text-uppercase">Room Booking</h6>
                </div>
                <div class="row g-5" style="margin-top: 10px">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about5.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about6.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about7.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about8.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                                    <div class="col-12">
                                          <div class="form-floating">
                                            <select class="form-select" id="type_kamar" name="tipe_kamar">
                                              <option value="1">Indonesia
                                                Standard Double</option>
                                              <option value="2">Indonesia
                                                Suite Family</option>
                                              <option value="3">Indonesia
                                                Deluxe Double</option>
                                            </select>
                                            <label for="type_kamar">Type Kamar</label>
                                          </div>
                                        </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-12">
                      <div class="card">
                           <div class="card-body">
                                <h1 class="text-center">DETAIL PEMESANAN</h1>
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
                                      <th scope="col">Tipe kam</th>
          
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
        <div class="container-fluid bg-dark text-light footer wow fadeIn mt-5" data-wow-delay="0.1s" >
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Hotelier</h1></a>
                            <p class="text-white mb-0">
							 <a class="text-dark fw-medium" href="">Hotel Hebat
							</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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