@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 px-2" style="height: 100%;">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0">Parolamı Unuttum</h4>
            </div>
        </div>
        <p class="px-2">Sorun değil. Doğrulanmış e-posta adresinize parolanızı sıfırlamanız için bir link göndereceğiz.</p>

        <div class="card-content">

            <div class="card-body pt-1">
                @if (session('status'))
                    <div style="color: green" class="font-medium text-sm text-green-600">
                        {{ __('Parolanızı sıfırlamanız için link gönderildi!') }}
                    </div>
                @endif
                <form  method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <fieldset class="form-label-group form-group position-relative has-icon-left">

                        <input class="form-control" type="email" name="email" placeholder="Email" required autofocus />

                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>

                        <label for="user-name">Email</label>

                    </fieldset>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Parolamı Sıfırla</button>
                </form>
            </div>
        </div>
        <div class="login-footer">

        </div>
    </div>
@endsection
