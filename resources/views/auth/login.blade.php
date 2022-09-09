@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0">
                <div class="card-body rounded-lg">
                        <p class="text-muted text-center pt-3 mb-5">
                            Login Dengan Cinta
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-4 shadow-sm">
                                <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-white">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" widht="20" height="20" class="mr-2zZZZ">
                                    <path fill="#eeeeee"
                                    d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"/>
                                  </svg>
                                </div>
                            </div>
                            <input type="email" name="email" id="email" class="form-control border-0 text-muted {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            value="{{ old('email') }}"
                            placeholder="Email" required autofocus>
                        </div>
                        <div class="input-group mb-2 mt-3 shadow-sm">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                        <path fill="#eeeeee"
                                        d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                    </svg>
                                </div>
                            </div>
                            <input type="password" name="password" id="password" class="form-control border-0 text-muted {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password')}} </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group row pt-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input shadow-sm"
                                    type="checkbox" name="remember"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-chec-label"
                                    for="remember">
                                    {{_('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3 mb-3">
                            <button type="submit" class="btn btn-primary shadow-sm">
                                {{ _('Sign In') }}
                            </button>

                        </div>
                        </form>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </div>






@endsection
