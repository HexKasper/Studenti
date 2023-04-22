@extends('admin.template-forms')

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
                            <h3 class="text-center font-weight-light my-4">Register new account</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="small mb-1" for="name">Name</label>
                                    <input name="name" class="form-control py-4" id="name" type="text"
                                        placeholder="Your member name on this site" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input name="email" class="form-control py-4" id="inputEmailAddress" type="email"
                                        placeholder="Enter email address" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input name="password" class="form-control py-4" id="inputPassword" type="password"
                                        placeholder="Enter password" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="password_confirmation">Password Confirmation</label>
                                    <input name="password_confirmation" class="form-control py-4" id="password_confirmation"
                                        type="password" placeholder="Confirm password" />
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

                                    <button type="submit" class="btn btn-primary btn-block"
                                        href="index.html">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="{{ route('login') }}">Already have an account? Login!</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
