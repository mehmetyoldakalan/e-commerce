@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 px-2" style="height: 100%;">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0">Hesabınızı Doğrulayın</h4>
            </div>
        </div>
        <p class="px-2">Güvenliğiniz için mail adresinizi onaylamanız gerekmektedir. Bu işlem sadece 1 kere yapılacaktır.</p>

        <div class="card-content">

            <div class="card-body pt-1">
                @if (session('status') == 'verification-link-sent')
                    <div style="color: green" class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Hesabınızı doğrulamak için yeniden doğrulama maili gönderildi.') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="btn btn-outline-primary float-left btn-inline">
                            {{ __('Tekrar Mail Gönder') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary float-right btn-inline">{{ __('Çıkış Yap') }}</button>
                </form>
            </div>
        </div>
        <div class="login-footer">

        </div>
    </div>
@endsection
