<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.header')
        <!-- End Navbar -->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Culture Table</h6>
                                <a href="{{ route('culture.create') }}" class="btn btn-sm btn-primary shadow-sm">
                                    Tambah</a>
                                <a href="{{ url('culture-pdf') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" title="Export To PDF">
                                    <i class="bi bi-filetype-pdf"></i>PDF</a>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Culture</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deksripsi</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $culture as $row )
                                            @php
                                            $wordCount = str_word_count($row->desc_culture);
                                            $words = explode(' ', $row->desc_culture);
                                            $limitedDescCulture = implode(' ', array_slice($words, 0, 7));
                                            $ellipsis = $wordCount > 7 ? '...' : '';
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @empty($row->gambar_culture)
                                                            <img src="{{ url('admin\media\no-image-found.png') }}" alt="Culture" class="avatar avatar-sm me-3">
                                                            @else
                                                            <img src="{{ asset($row->gambar_culture) }}" alt="Culture" class="avatar avatar-sm me-3">
                                                            @endempty
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $row->nama_culture }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $row->kategori->nama_kategori }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $limitedDescCulture . $ellipsis }}</p>
                                                </td>
                                                <td class="align-middle">
                                                    <form method="POST" id="formDelete" action="{{ route('culture.destroy', $row->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('culture.show', $row->id) }}" class=" btn  btn-primary shadow-sm  text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                            Detail
                                                        </a>
                                                        &nbsp;
                                                        <a href="{{ route('culture.edit', $row->id) }}" class="btn btn-info shadow-sm text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-danger shadow-sm text-xs btnDelete" data-action="{{ route('culture.destroy', $row->id) }}" data-toggle="tooltip" data-original-title="Edit user" >
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--   Core JS Files   -->
        @include('admin.js')
</body>

</html>