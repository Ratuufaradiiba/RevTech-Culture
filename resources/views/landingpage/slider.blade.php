<section class="slider mt-4">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                @foreach ($cultureslider as $row )
                <div class="slider-item">
                    <div class="slider-item-content group">
                        <div class="post-thumb mb-4">
                            <a href="{{ url('culturedetail', $row->id)}}">
                                @empty($row->gambar_culture)
                                <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile">
                                @else
                                <img src="{{ asset($row->gambar_culture) }}" alt="Profile">
                                @endempty
                            </a>
                        </div>
                        <div class="slider-post-content">
                            <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $row->kategori->nama_kategori}}</span>
                            <h3 class="post-title mt-1 "><a href="{{ url('culturedetail', $row->id)}}">{{ $row->nama_culture }}</a></h3>
                            <span class=" text-muted text-capitalize">{{ $row->created_at->format('F d, Y') }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
