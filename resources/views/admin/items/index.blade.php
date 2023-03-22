@extends('layouts.admin')
@section('title')
MeccaShop | Tampil Barang
@endsection
@section('container')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                             <a href="/items/create" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>stok</th>
                                            <th>harga</th>
                                            <th>tools</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>stok</th>
                                            <th>harga</th>
                                            <th>tools</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->kode }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->category->nama }}</td>
                                                <td>{{ $item->stok }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>
                                                    <a href="/items/{{ $item->slug }}/edit"
                                                        class="btn btn-warning btn-sm">
                                                        <span class="icon-note"></span></a>
                                                    <form action="/items/{{ $item->slug }}" method="post"
                                                        class="d-inline">
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
        </div>
    </div>
@endsection
