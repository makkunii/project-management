@extends('layout.main.app')

@section('title','login')

@section('content')
<div  class="hold-transition login-page">
    <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <div class="login-box" >
            <div class="card">
                <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to your Account</p>

                <form action="{{ route('loginprocess') }}" method='POST'>
                    @csrf
                    <div class="input-group mb-3">
                    <input type="username" name="email" id="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-8">
                        <p class="mb-1">
                        <a class="text-dark" href="forgot-password.html">I forgot my password</a>
                        </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" id="submit-button" class="btn btn-dark btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>

                </div>

            </div>
    </div>

</div>
@endsection
