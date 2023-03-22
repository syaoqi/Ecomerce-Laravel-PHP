@extends('layouts.admin')
@section('title')
MeccaShop | Tambah Kategori
@endsection
@section('container')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="post" action="/categories" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="card-header">
                                <div class="card-title">Tambah Kategori Barang</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input autofocus type="text"
                                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                name="nama" value="{{ old('nama') }}" required>
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text"
                                                class="form-control @error('slug') is-invalid @enderror" id="slug"
                                                name="slug" value="{{ old('slug') }}" readonly required>
                                            @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5 ">
                                            <input class="form-control @error('gambar') is-invalid @enderror" type="file"
                                                id="gambar" name="gambar" onchange="previewImage()">
                                            @error('gambar')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-danger">Hapus</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/items/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
