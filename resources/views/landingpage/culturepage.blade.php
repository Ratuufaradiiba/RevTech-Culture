<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('landingpage/theme/images/logo.png')}}" type="image/x-icon">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Themify -->
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/slick-carousel/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/slick-carousel/slick.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/theme/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{asset('landingpage/theme/css/style.css')}}">
</head>

<body>
    @include('landingpage.header')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-header mb-5 text-center ">
                        <h2 class="post-title mt-2">
                            Culture di Indonesia
                        </h2>
                    </div>
                    <div class="row">
                        @foreach ($culture as $row)

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a href="{{ url('culturedetail', $row->id)}}" class="post-thumb mb-4 d-block">
                                    @empty($row->gambar_culture)
                                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100" style="height: 245px;">
                                    @else
                                    <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="img-fluid w-100" style="height: 245px;">
                                    @endempty</a>
                                </a>

                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">{{ $row->created_at->format('d') }}</span>
                                        <span class="month text-uppercase">{{ $row->created_at->format('M') }}</span>
                                    </div>
                                    <span class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">{{ $row->kategori->nama_kategori }}</span>
                                    <h3 class="post-title mt-1">
                                        <a href="{{ url('culturedetail', $row->id)}}">{{ $row->nama_culture}}</a>
                                    </h3>
                                    <p>
                                        {{ Str::limit($row->desc_culture, $limit = 100, $end = '...') }}
                                    </p>
                                </div>
                            </article>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline">
                            {{ $culture->links('vendor.pagination.default') }}
                        </ul>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    @include('landingpage.footer')

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