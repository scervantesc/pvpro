@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-10">
                <div class="card border-0 shadow bg-white">
                    <div class="card-header bg-transparent m-2 d-flex justify-content-center">
                        <h4>Acceder</h4>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username"><b>Usuario</b></label>
                                <input id="username" type="text" class="form-control form-control-sm @error('username') is-invalid @enderror"
                                    name="username"
                                    value="{{ old('username') }}"
                                    autocomplete required autofocus>

                                @error('username')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"><b>Contraseña</b></label>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control-sm form-control border-right-0 @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password">
                                    <div class="input-group-append">
                                        <button id="show_password" class="btn btn-sm btn-primary shadow-none"
                                            type="button"
                                            onclick="showpass()"><span class="fa fa-eye-slash icon"></span>
                                        </button>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <span id="alert-mayus"></span>

                            <button type="submit" class="btn btn-primary btn-xs btn-block"><b>Continuar</b></button>
                        </form>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <hr>
                        <div class="date">
                            <span id="weekDay" class="weekDay"></span>,
                            <span id="day" class="day"></span> de
                            <span id="month" class="month"></span> del
                            <span id="year" class="year"></span>
                        </div>
                        <div class="clock">
                            <span id="hours" class="hours"></span> :
                            <span id="minutes" class="minutes"></span> :
                            <span id="seconds" class="seconds"></span>
                        </div>
                        <span>El Dólar equivale a</span> <strong><span id="resultado"></span></strong> MXN
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="/js/clock.js"></script>
<script src="/js/pass.js"></script>
@endsection
