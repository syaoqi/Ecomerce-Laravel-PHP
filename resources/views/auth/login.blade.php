@extends('layouts.auth')
@section('title')
MeccaShop | Masuk
@endsection
@section('login')
  <div class="container container-login animated fadeIn">
      <form action="/login" id="loginform" method="POST">
        @csrf
            <h3 class="text-center">Masukkan Akun</h3>
            <div class="login-form">
                <div class="form-group form-floating-label">
                    <input id="username" name="username" type="text" class="form-control input-border-bottom"
                        required>
                    <label for="username" class="placeholder">Nama Pengguna</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom"
                        required>
                    <label for="password" class="placeholder">Kata Sandi</label>
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
                {{-- <div class="row form-sub m-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme">Remember Me</label>
                    </div>

                    <a href="#" class="link float-right">Forget Password ?</a>
                </div> --}}
                <div class="form-action mb-3">
                    <button class="btn btn-primary btn-rounded btn-login" type="submit">Masuk</button>
                </div>
                <div class="login-account">
                    <span class="msg">Tidak Punya Akun ?</span>
                    <a href="/register" id="show-signup" class="link">Daftar</a>
                </div>
            </div>
            </form>
        </div>

@endsection
