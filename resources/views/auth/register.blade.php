@extends('layouts.auth')
@section('title')
MeccaShop | Daftar
@endsection
@section('login')
    <div class="wrapper wrapper-login">
        <div class="container container-login  animated fadeIn">
            <h3 class="text-center">Buat Akun Baru</h3>
            <form action="/register" method="POST">
                @csrf

            <div class="login-form">
                <div class="form-group form-floating-label">
                    <input id="nama" name="nama" type="text" class="form-control input-border-bottom" required>
                    <label for="nama" class="placeholder">Nama Panjang</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                    <label for="username" class="placeholder">Nama Pengguna</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password"
                        class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Kata Sandi</label>
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
                <div class="form-group form-floating-label">
                    <select class="form-control input-border-bottom" name="jk" id="jk" required>
                        <option value="">&nbsp;</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <label for="jk" class="placeholder">Jenis Kelamin</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="alamat" name="alamat" type="text" class="form-control input-border-bottom" required>
                    <label for="alamat" class="placeholder">Alamat</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="no_hp" name="no_hp" type="text" class="form-control input-border-bottom" required>
                    <label for="no_hp" class="placeholder">No. Telepon</label>
                </div>

                {{-- <div class="form-group form-floating-label">
                <input id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom"
                    required>
                <label for="confirmpassword" class="placeholder">Confirm Password</label>
                <div class="show-password">
                    <i class="icon-eye"></i>
                </div>
            </div> --}}
                {{-- <div class="row form-sub m-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                    <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
                </div>
            </div> --}}
                <div class="form-action">
                    <a href="/login" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Kembali</a>
                    <button class="btn btn-primary btn-rounded btn-login" type="submit">Daftar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
