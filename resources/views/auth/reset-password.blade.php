
@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 px-2">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0">Parola Sıfırla</h4>
            </div>
        </div>
        <p class="px-2">Lütfen yeni bir parola belirle.</p>

        <div class="card-content">

            <div class="card-body pt-1">
                <form method="POST" action="{{ route('password.store') }}">

                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <fieldset class="form-label-group form-group position-relative has-icon-left">

                        <input class="form-control" type="email" name="email" value="{{$request->email}}" placeholder="Email" required autofocus />

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

                    <fieldset class="form-label-group position-relative has-icon-left">

                        <input type="password" class="form-control" id="user-password" placeholder="Parola Tekrar" name="password_confirmation" required autocomplete="current-password">

                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>

                        <label for="user-password">Parola Tekrar</label>

                    </fieldset>



                    <button type="submit" class="btn btn-primary float-right btn-inline">Parolamı Sıfırla</button>
                </form>

            </div>
        </div>
        <div class="login-footer">
            <div class="divider">
            </div>
            <div class="footer-btn d-inline">

            </div>
        </div>
    </div>
@endsection
