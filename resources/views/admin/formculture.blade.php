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
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Form Culture</h5>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form class="row g-3" method="POST" action="{{ route('culture.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Nama Culture</label>
                                            <input type="text" class="form-control" name="nama_culture" value="{{ old('nama_culture') }}">
                                            @error('nama_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputState" class="form-label">Kategori</label>
                                            <select id="inputState" class="form-select" name="kategori_id">
                                                <option selected>Pilih Kategori</option>
                                                @foreach ($kategori as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                            @error('kategori_id')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Deksripsi Culture</label>
                                            <input type="text" class="form-control" name="desc_culture" value="{{ old('desc_culture') }}">
                                            @error('desc_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Sejarah Culture</label>
                                            <input type="text" class="form-control" name="sejarah_culture" value="{{ old('sejarah_culture') }}">
                                            @error('sejarah_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Makna Culture</label>
                                            <input type="text" class="form-control" name="makna_culture" value="{{ old('makna_culture') }}">
                                            @error('makna_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Ciri Culture</label>
                                            <input type="text" class="form-control" name="ciri_culture" value="{{ old('ciri_culture') }}">
                                            @error('ciri_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Url Video Culture</label>
                                            <input type="text" class="form-control" name="video_culture" value="{{ old('video_culture') }}" placeholder="https://www.youtube.com">
                                            @error('video_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputNanme4" class="form-label">Masukan Foto Culture</label>
                                            <input type="file" class="form-control" name="gambar_culture" accept=".png,.jpg,.jpeg">
                                            @error('gambar_culture')
                                            <p class="text text-danger mb-0">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a class="btn btn-info" href="{{ route('culture.index') }}">Kembali</a>
                                        </div>
                                    </form><!-- Vertical Form -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!--   Core JS Files   -->
        @include('admin.js')
</body>

</html>