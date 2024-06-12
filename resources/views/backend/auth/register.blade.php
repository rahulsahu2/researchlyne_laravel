@extends('layouts.login-master')

@section('content')
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url(/assets/admin/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box row">
            <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(/assets/admin/images/big/3.jpg);">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <div class="text-center">
                        <img src="/assets/admin/images/big/icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">Sign Up</h2>
                    <p class="text-center">Enter your email address and password to register.</p>
                    <form class="mt-4" action="{{ route('admin.register.store') }}" method="POST">
                        <div class="row">
                            @csrf
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="name">Username</label>
                                    <input class="form-control" id="name" type="text" name="name"
                                        placeholder="enter your name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="enter your email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="pwd">Password</label>
                                    <input class="form-control" id="pwd" type="password" name="password"
                                        placeholder="enter your password">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn w-100 btn-dark">Sign Up</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                Login Here <a href="{{ route('admin.login') }}" class="text-danger">Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
@endSection
