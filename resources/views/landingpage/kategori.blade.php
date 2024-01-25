<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('landingpage/theme/images/logo.png') }}" type="image/x-icon">

    <!-- THEME CSS
 ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Themify -->
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/slick-carousel/slick.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/theme/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('landingpage/theme/css/style.css') }}">
</head>

<body>
    @include('landingpage.header')


    <div class="breadcrumb-wrapper">
        <div class="container">
            @foreach ($culture->groupBy('kategori_id') as $groupedCulture)
                <div class="row justify-content-center mb-5">
                    <h2 class="lg-title">{{ $groupedCulture[0]->kategori->nama_kategori }}</h2>
                </div>
                <div class="row">
                    @foreach ($groupedCulture->chunk(2) as $chunkedCulture)
                        <div class="col-lg-6">
                            @foreach ($chunkedCulture as $row)
                                <a href="{{ url('culturedetail', $row->id) }}">
                                    <article class="post-grid mb-5">
                                        <div class="post-thumb mb-4">
                                            @empty($row->gambar_culture)
                                                <img src="{{ url('admin\media\no-image-found.png') }}" alt=""
                                                    class="img-fluid w-100" />
                                            @else
                                                <img src="{{ asset($row->gambar_culture) }}" alt=""
                                                    class="img-fluid w-100" />
                                            @endempty
                                        </div>
                                        <span
                                            class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $row->kategori->nama_kategori }}</span>
                                        <h3 class="post-title mt-1">
                                            {{ $row->nama_culture }}
                                        </h3>
                                        <span
                                            class="text-muted text-capitalize">{{ $row->created_at->format('F d, Y') }}</span>
                                    </article>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>







    @include('landingpage.footer')
    <!--footer end-->

    <!-- THEME JAVASCRIPT FILES
================================================== -->
    <!-- initialize jQuery Library -->
    <script src="{{ asset('landingpage/theme/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('landingpage/theme/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landingpage/theme/plugins/bootstrap/js/popper.min.js') }}"></script>
    <!-- Owl caeousel -->
    <script src="{{ asset('landingpage/theme/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/theme/plugins/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('landingpage/theme/plugins/magnific-popup/magnific-popup.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('landingpage/theme/plugins/instafeed-js/instafeed.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('landingpage/theme/plugins/google-map/gmap.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('landingpage/theme/js/custom.js') }}"></script>

</body>

</html>
