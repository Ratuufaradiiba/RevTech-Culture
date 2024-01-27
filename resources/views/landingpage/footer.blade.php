<section class="footer-2 section-padding gray-bg pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">About Indonesian Culture</h5>
                    <a href="{{ url('about-me') }}">
                        <img src="{{ asset('img/about.jpeg') }}" alt="" class="img-fluid">
                        <p class="mt-4">Temukan keindahan dan kekayaan kebudayaan Indonesia dalam setiap pulau,
                            tarian, dan senyum. Rasakan sentuhan magis budaya yang kaya warna dari Sabang hingga
                            Merauke. 🌺🎵 #WonderfulIndonesia</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Trending</h5>

                    @foreach ($trendingCultures as $trendingCulture)
                        <div class="media pb-3 sidebar-post-item">
                            <a href="{{ url('culturedetail', $trendingCulture->id) }}">
                                @empty($trendingCulture->gambar_culture)
                                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="" class="mr-4">
                                @else
                                    <img src="{{ asset($trendingCulture->gambar_culture) }}" alt=""
                                        class="mr-4">
                                @endempty
                                <div class="media-body">
                                    <span
                                        class="text-uppercase font-sm font-extra letter-spacing">{{ $trendingCulture->kategori->nama_kategori }}</span>
                                    <h4 class="mt-1">{{ $trendingCulture->nama_culture }}</a>
                                    </h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Gallery</h5>

                    <div class="row no-gutters">
                        @foreach ($footerculture as $gmbr )
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <a href="{{ url('culturedetail', $gmbr->id) }}">
                                @empty($gmbr->gambar_culture)
                                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="" class="img-fluid">
                                @else
                                    <img src="{{ asset($gmbr->gambar_culture) }}" alt=""
                                        class="img-fluid">
                                @endempty
                                </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
