<div class="col-lg-12">
    <div class="subscribe-home py-4 px-4 mb-5 bg-grey">
        <div class="form-group row align-items-center mb-0">
            <label for="colFormLabel" class="col-form-label col-sm-12 h4 col-lg-4">Subscribe for Newsletter</label>
            <div class="col-sm-6 col-lg-3">
                <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel" placeholder="Full Name">
            </div>
            <div class="col-sm-6 col-lg-3">
                <input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel2" placeholder="Email Address">
            </div>
            <div class="col-sm-2">
                <a href="#" class="btn btn-dark">Subscribe</a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
    <article class="post-list mb-5 pb-4 border-bottom">
        <a href="{{ url('culturedetail', $culture1->id) }}">
            <div class="post-thumb mb-3 d-block">
                @empty($culture1->gambar_culture)
                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100">
                @else
                    <img src="{{ asset($culture1->gambar_culture) }}" alt="Profile" class="img-fluid w-100">
                @endempty
            </div>
            <div class=" meta-cat">
                <span
                    class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ $culture1->kategori->nama_kategori }}</span>
            </div>
            <h3 class="post-title mt-2">{{ $culture1->nama_culture }}</h3>

            <div class="post-meta footer-meta">
                <ul class="list-inline">
                    <li class="post-like list-inline-item">
                        <span class="font-sm letter-spacing-1 text-uppercase"><i
                                class="ti-time mr-2"></i>{{ $culture1->created_at->diffForHumans() }}</span>
                    </li>
                    <li class="post-view list-inline-item letter-spacing-1">{{ $culture1->views->count() }} Views</li>
                </ul>
            </div>
            <div class="post-content">
                <p>{{ $culture1->desc_culture }}</p>
            </div>
        </a>
    </article>


    @foreach ($culture as $row)
        <div class="mb-4 post-list border-bottom pb-4">
            <a href="{{ url('culturedetail', $row->id) }}">
            <div class="row no-gutters">

                    <div class="col-md-5">
                        <div class="post-thumb">
                            @empty($row->gambar_culture)
                                <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile"
                                    class="img-fluid w-100">
                            @else
                                <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="img-fluid w-100">
                            @endempty
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="post-article mt-sm-3">
                            <div class="meta-cat">
                                <span
                                    class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ $row->kategori->nama_kategori }}</span>
                            </div>
                            <h3 class="post-title mt-2">{{ $row->nama_culture }}</h3>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-like list-inline-item">
                                        <span class="font-sm letter-spacing-1 text-uppercase"><i
                                                class="ti-time mr-2"></i>{{ $row->created_at->diffForHumans() }}</span>
                                    </li>
                                    <li class="post-view list-inline-item letter-spacing-1">{{ $row->views->count() }} Views</li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <p>{{ $row->desc_culture }}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </a>

        </div>
    @endforeach

    <div class="pagination mt-5 pt-4">
        <ul class="list-inline">
            {{ $culture->links('vendor.pagination.default') }}
        </ul>
    </div>

</div>
