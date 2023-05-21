@extends('auth.layouts.header')
@section('content')
    <div class="card rounded-0 mb-0 p-2">
        <div class="card-header pt-50 pb-1">
            <div class="card-title">
                <h4 class="mb-0">Hesap Oluştur</h4>
            </div>
        </div>
        <p class="px-2">Merhaba! Kayıt olmak için bütün alanları doldurmalısın.</p>
        <div class="card-content">
            <div class="card-body pt-0">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control" name="name" placeholder="İsim-Soyisim" required>
                        <label for="inputName">İsim-Soyisim</label>
                    </div>

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
                        <label for="inputEmail">Email</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Parola" required>
                        <label for="inputPassword">Parola</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputConfPassword" class="form-control" name="password_confirmation" placeholder="Parola Tekrar" required>
                        <label for="inputConfPassword">Parola Tekrar</label>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <fieldset class="checkbox">
                                <div class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox"  required>
                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                    <span class=""> Şartlar ve koşulları kabul ediyorum.</span>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">Giriş Yap</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
@endsection
