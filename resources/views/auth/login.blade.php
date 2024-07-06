@extends('layout.template_auth')

@section('content')
    <div class="m-auto mw-510 py-5">
        <form action="/login" method="POST">
            @csrf
            <div class="d-flex align-items-center gap-4 mb-3">
                <h4 class="fs-3 mb-0">Get’s started.</h4>
                <a href="">
                    <img src="{{ asset('') }}assets/images/logo.svg" alt="logo">
                </a>
            </div>
            <p class="fs-18 mb-5">Don’t have an account? <a href="register.html"
                    class="text-decoration-none text-primary">Register</a></p>
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="form-group mb-4">
                        <label class="label">Email</label>
                        <input type="email" class="form-control h-58" name="email" placeholder="envytheme@info.com">
                    </div>
                    <div class="form-group mb-0">
                        <label class="label">Password</label>
                        <div class="form-group">
                            <div class="password-wrapper position-relative">
                                <input type="password" id="password" class="form-control h-58 text-dark" name="password">
                                <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;"
                                    class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex justify-content-between mb-4">
                <a href="forget-password.html" class="fs-16 text-primary text-decoration-none mt-2 mt-sm-0 d-block">
                    Forgot your password?
                </a>
            </div>
            <button type="submit"
                class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                Login
            </button>
        </form>
    </div>
@endsection
