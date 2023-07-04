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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('landingpage.header')
    <!--search overlay end-->

    <section class="single-block-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <article class="post">

                                <div class="post-header mb-5 text-center">
                                    <div class="meta-cat">
                                        <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{ $row->kategori->nama_kategori }}</a>
                                    </div>
                                    <h2 class="post-title mt-2">
                                        {{ $row->nama_culture }}
                                    </h2>

                                    <div class="post-meta">
                                        <span class="text-uppercase font-sm letter-spacing-1">{{ $row->created_at->format('F d, Y') }}</span>
                                    </div>

                                </div>

                                <!--video post start-->
                                <div class="post-img position-relative mb-4">
                                    <a href="{{ url('culturedetail', $row->id)}}">
                                        @empty($row->gambar_culture)
                                        <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100">
                                        @else
                                        <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="img-fluid w-100">
                                        @endempty</a>

                                    <a href="{{ $row->detailculture->video_culture }}" class="play-btn popup-youtube"><i class="ti-control-play"></i></a>
                                </div>
                                <!--video post end-->

                                <div class="post-body">
                                    <div class="entry-content">
                                        <p>{{ $row->desc_culture}}</p>
                                        <h2 class="mt-4 mb-3">Sejarah {{$row->nama_culture}}</h2>
                                        <p><?php echo nl2br($row->detailculture->sejarah_culture); ?></p>

                                        <h2 class="mt-4 mb-3">Makna {{$row->nama_culture}}</h2>
                                        <p><?php echo nl2br($row->detailculture->makna_culture); ?></p>

                                        <h2 class="mt-4 mb-3">Ciri - Ciri {{$row->nama_culture}}</h2>
                                        <p><?php echo nl2br($row->detailculture->ciri_culture); ?></p>



                                    </div>

                                    <div class="post-tags py-4">
                                        <h5>#Culture &nbsp;&nbsp; #{{ $row->nama_culture}} &nbsp;&nbsp; #{{$row->kategori->nama_kategori}}</h5>
                                    </div>

                                    <form class="comment-form mb-5 gray-bg p-5" id="comment-form" action="{{url('add_comment')}}" method="POST">
                                        @csrf
                                        <h3 class="mb-4 text-center">Tinggalkan Komentar</h3>
                                        <div class="row">
                                            <input type="hidden" name="culture_id" value="{{ $culture->id }}">
                                            <div class="col-lg-12">
                                                <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Isi Komentar"></textarea>
                                            </div>


                                        </div>

                                        <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Kirim Komentar">
                                    </form>


                                    <div class="comment-area my-5">
                                        <h3 class="single-comment-o"><i class="fa fa-comment-o"></i>{{ $row->commentCount }} Komentar</h3>
                                        @foreach ($culture->comment as $row )

                                        <div class="comment-area-box media mt-3 mb-3">
                                            <div class="media-body ml-4">
                                                <h4 class="mb-0">{{ $row->nama_commenter }} </h4>
                                                <span class="date-comm font-sm text-capitalize text-color"><i class="ti-time mr-2"></i>{{ $row->created_at->format('F d, Y') }} </span>

                                                <div class="comment-content mt-3">
                                                    <p>{{ $row->isi_comment }}</p>
                                                </div>
                                                <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                                                    <a href="#" class="text-underline " onclick="reply(this)">Reply</a>
                                                </div>
                                                @foreach ($row->reply as $reply)

                                                <div class="media-body ml-4 mt-3 mb-3">
                                                    <h4 class="mb-0">{{ $reply->nama_replier }}</h4>
                                                    <span class="date-comm font-sm text-capitalize text-color">
                                                        <i class="ti-time mr-2"></i>{{ $reply->created_at->format('F d, Y') }}
                                                    </span>
                                                    <div class="comment-content mt-3">
                                                        <p>{{ $reply->isi_reply }}</p>
                                                    </div>
                                                    <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                                                        <a href="#" class="text-underline" onclick="reply(this)">Reply</a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="replyDiv" style="display: none;">
                                            <br>
                                            <textarea class="form-control mb-3" name="reply" id="reply" cols="30" rows="5" placeholder="Reply"></textarea>
                                            <a class="btn btn-primary">Kirim Balasan</a>
                                            <a class="btn" onclick="reply_close(this)">Tutup</a>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <nav class="post-pagination clearfix border-top border-bottom py-4">
                        <div class="prev-post">
                            @if($prev)
                            <a href="{{ url('culturedetail', ['id' => $prev->id]) }}">
                                <span class="text-uppercase font-sm letter-spacing">Previous</span>
                                <h4 class="mt-3"> {{ $prev->nama_culture }}</h4>
                            </a>
                            @endif
                        </div>
                        <div class="next-post">
                            @if($next)
                            <a href="{{ url('culturedetail', ['id' => $next->id]) }}">
                                <span class="text-uppercase font-sm letter-spacing">Next</span>
                                <h4 class="mt-3">{{ $next->nama_culture }}</h4>
                            </a>
                            @endif
                        </div>
                    </nav>
                    <div class="related-posts-block mt-5">
                        <h3 class="news-title mb-4 text-center">
                            Kamu mungkin juga suka
                        </h3>
                        <div class="row">
                            @foreach ($culturesuka as $row)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="post-block-wrapper mb-4 mb-lg-0">
                                    <a class="post-thumb " href="{{ url('culturedetail', $row->id)}}">
                                        @empty($row->gambar_culture)
                                        <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid custom-image">
                                        @else
                                        <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="img-fluid custom-image">
                                        @endempty
                                    </a>
                                    <div class="post-content mt-3 text-center">
                                        <h5>
                                            <a href="{{ url('culturedetail', $row->id)}}">{{ $row->nama_culture }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('landingpage.sidebar')
            </div>
        </div>
    </section>

    @include('landingpage.footer')
    <!--footer end-->

    <!-- THEME JAVASCRIPT FILES
================================================== -->
    <!-- initialize jQuery Library -->
    <script>
        function reply(caller) {
            $('.replyDiv').insertAfter($(caller));

            $('.replyDiv').show();
        }

        function reply_close(caller) {

            $('.replyDiv').hide();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.penci-post-like').click(function(e) {
                e.preventDefault();
                var cultureId = $(this).data('culture-id');

                $.ajax({
                    url: '/culturelike/' + cultureId, // Ganti dengan URL yang sesuai untuk menambah like
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Like berhasil ditambahkan
                            var likeCount = response.likeCount;
                            $('.count-number-like').text(likeCount);
                            $('.penci-post-like').addClass('liked');
                        }
                    }
                });
            });
        });
    </script>
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