@extends('admin.template-forms')

@section('title', 'Formular logare')

@section('content')
<div class="bubbles">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
</div>
<link rel="stylesheet" href="/front/css/bubble.css">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="auth card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login form</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress"> Email </label>
                                    <input name="email" class="form-control py-4" id="inputEmailAddress" type="email"
                                        placeholder="Enter email address" />
                                    @error('email') <span class="text-danger sm">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input name="password" class="form-control py-4" id="inputPassword" type="password"
                                        placeholder="Enter password" />
                                    @error('password') <span class="text-danger sm">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input name="remember" class="custom-control-input" id="rememberPasswordCheck"
                                            type="checkbox" />
                                        <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                            password</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                    <button type="submit" class="btn btn-primary btn-block" href="index.html">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
                            <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
