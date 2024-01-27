@props(['chunkedCulture'])

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
