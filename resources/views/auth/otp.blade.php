@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 px-2">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0">Giriş Doğrulama</h4>
            </div>
        </div>
        <p class="px-2">Devam etmek için telefonunuza gelen doğrulama kodunu girmelisiniz</p>
        <div class="card-content">
            <div class="card-body pt-1">
                <form method="POST" action="{{ route('auth.otp.store') }}">
                    @csrf
                    <fieldset class="form-label-group position-relative has-icon-left">
                        <input type="password" class="form-control" id="user-password" placeholder="Doğrulama Kodu" name="token" required>
                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                    </fieldset>
                    <a href="{{route('auth.otp.resend')}}" class="btn btn-outline-primary float-left btn-inline">Yeniden gönder</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Onayla</button>
                </form>
            </div>
        </div>
        <div class="login-footer">
            <div class="divider">
            </div>
        </div>
    </div>
@endsection
