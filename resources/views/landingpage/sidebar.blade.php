<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
    <div class="sidebar sidebar-right">
        <div class="sidebar-wrap mt-5 mt-lg-0">


            <div class="sidebar-widget mb-5 ">
                <h4 class="text-center widget-title">Trending Culture</h4>
                <div class="sidebar-post-item-big">
                    <a href="{{ url('culturedetail', $popularCulture->id) }}">
                        @empty($popularCulture->gambar_culture)
                            <img src="{{ url('admin\media\no-image-found.png') }}" alt="" class="img-fluid">
                        @else
                            <img src="{{ asset($popularCulture->gambar_culture) }}" alt="" class="img-fluid">
                        @endempty
                        <div class="mt-3 media-body">
                            <span
                                class="text-muted letter-spacing text-uppercase font-sm">{{ $popularCulture->kategori->nama_kategori }}</span>
                            <h4>{{ $popularCulture->nama_culture }}
                            </h4>
                        </div>
                    </a>
                </div>

                @foreach ($culturekanan as $row)
                    <a href="{{ url('culturedetail', $row->id) }}" class="media">
                        <div class="media border-bottom py-3 sidebar-post-item">
                            @empty($row->gambar_culture)
                                <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="mr-4">
                            @else
                                <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="mr-4">
                            @endempty

                            <div class="media-body">
                                <span
                                    class="text-muted letter-spacing text-uppercase font-sm">{{ $row->created_at->format('F d, Y') }}</span>
                                <h4>{{ $row->nama_culture }}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>


            <div class="sidebar-widget category mb-5">
                <h4 class="text-center widget-title">Kategori</h4>
                <ul class="list-unstyled">
                    @foreach ($kategori as $row)
                        <li class="align-items-center d-flex justify-content-between">
                            <a href="{{ url('/kategori/#' . $row->nama_kategori) }}">{{ $row->nama_kategori }}</a>
                            <span>{{ $row->culture_count }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>
