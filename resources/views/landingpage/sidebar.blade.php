<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
    <div class="sidebar sidebar-right">
        <div class="sidebar-wrap mt-5 mt-lg-0">


            <div class="sidebar-widget mb-5 ">
                <h4 class="text-center widget-title">Trending Culture</h4>

                <div class="sidebar-post-item-big">
                <a href="{{ url('culturedetail', $popularCulture->id)}}">
                        @empty($popularCulture->gambar_culture)
                        <img src="{{ url('admin\media\no-image-found.png') }}" alt="" class="img-fluid">
                        @else
                        <img src="{{ asset($popularCulture->gambar_culture) }}" alt="" class="img-fluid">
                        @endempty</a>
                    <div class="mt-3 media-body">
                        <span class="text-muted letter-spacing text-uppercase font-sm">{{ $popularCulture->kategori->nama_kategori }}</span>
                        <h4><a href="{{ url('culturedetail', $popularCulture->id)}}">{{ $popularCulture->nama_culture }}</a></h4>
                    </div>
                </div>

                @foreach ($culturekanan as $row)
                <div class="media border-bottom py-3 sidebar-post-item">
                    <a href="{{ url('culturedetail', $row->id)}}">
                        @empty($row->gambar_culture)
                        <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="mr-4">
                        @else
                        <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="mr-4">
                        @endempty</a>
                    <div class="media-body">
                        <span class="text-muted letter-spacing text-uppercase font-sm">{{ $row->created_at->format('F d, Y') }}</span>
                        <h4><a href="{{ url('culturedetail', $row->id)}}">{{ $row->nama_culture }}</a></h4>
                    </div>
                </div>
                @endforeach

            </div>


            <div class="sidebar-widget category mb-5">
                <h4 class="text-center widget-title">Kategori</h4>
                <ul class="list-unstyled">
                    @foreach ($kategori as $row)
                    <li class="align-items-center d-flex justify-content-between">
                        <a >{{ $row->nama_kategori}}</a>
                        <span>{{ $row->culture_count }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>