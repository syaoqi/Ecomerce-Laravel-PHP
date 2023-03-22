@extends('layouts.admin')
@section('title')
MeccaShop | Tampil Kategori
@endsection
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-sub">
                            <div class="card-title">Kategori Barang</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="/categories/create" class="btn btn-primary">Tambah</a>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->nama }}</td>

                                        <td>
                                            <a href="/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm">
                                                <span class="icon-note"></span></a>
                                            <form action="/categories/{{ $category->slug }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Anda Yakin?')"><span
                                                        class="icon-trash"></span></button>
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

@endsection
