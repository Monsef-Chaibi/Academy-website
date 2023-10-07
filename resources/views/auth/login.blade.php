@extends('layouts.app')

@section('content')
<div lang="ar" style="direction: rtl;" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تسجيل الدخول :</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('البريد الالكتروني :') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class=" py-2 px-4 rounded-md border-slate-400 focus:border-emerald-500 border-[1.4px] focus:outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class=" py-2 px-4 rounded-md border-slate-400 focus:border-emerald-500 border-[1.4px] focus:outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class=" justify-center items-center text-white rounded-md bg-emerald-500 hover:bg-emerald-600 px-3 py-2">
                                    {{ __('الدخول') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة المرور') }}
                                    </a>
                                @endif --}}
                            </div>
                            @if (Route::has('register'))
                                <p class="nav-item text-emerald-400 mt-3 ">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __(' انشاء حساب ؟') }}</a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
