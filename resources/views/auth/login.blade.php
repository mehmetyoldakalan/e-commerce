@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 px-2">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0">Giriş Yap</h4>
            </div>
        </div>
        <p class="px-2">Hoşgeldin. Devam etmek için giriş yapmalısın</p>

        <div class="card-content">

            <div class="card-body pt-1">
                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    <fieldset class="form-label-group form-group position-relative has-icon-left">

                        <input class="form-control" type="email" name="email" placeholder="Email" required autofocus />

                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>

                        <label for="user-name">Email</label>

                    </fieldset>


                    <fieldset class="form-label-group position-relative has-icon-left">

                        <input type="password" class="form-control" id="user-password" placeholder="Parola" name="password" required autocomplete="current-password">

                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>

                        <label for="user-password">Parola</label>

                    </fieldset>



                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div class="text-left">
                            <fieldset class="checkbox">
                                <div class="vs-checkbox-con vs-checkbox-primary">
                                    <input id="remember_me"  type="checkbox" name="remember">
                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                    <span class="">Beni Hatırla</span>
                                </div>
                            </fieldset>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="text-right"><a href="{{ route('password.request') }}" class="card-link">Parolamı Unuttum</a></div>
                        @endif
                    </div>

                    <a href="{{route('register')}}" class="btn btn-outline-primary float-left btn-inline">Kayıt Ol</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Giriş Yap</button>
                </form>
            </div>
        </div>
        <div class="login-footer">
            <div class="divider">
                <div class="divider-text">Yada</div>
            </div>
            <div class="footer-btn d-inline">
                <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
            </div>
        </div>
    </div>
@endsection
