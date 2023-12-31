@php
    $title = 'Login Page';
    $description = 'Login Page';
@endphp
@extends('layout_full', ['title' => $title, 'description' => $description])
@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="/js/vendor/jquery.validate/additional-methods.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/auth.register.js"></script>
@endsection

@section('content_left')
    <div class="min-h-100 d-flex align-items-center">
        <div class="w-100 w-lg-75 w-xxl-50">
            <div>
                <div class="mb-5">
                    <h1 class="display-3 text-white">Pioneer</h1>
                    <!-- <h1 class="display-3 text-white">Ready for Your Project</h1> -->
                </div>
                <p class="h6 text-white lh-1-5 mb-5">
                    Dynamically target high-payoff intellectual capital for customized technologies. Objectively integrate
                    emerging core competencies before
                    process-centric communities...
                </p>
                <div class="mb-5">
                    <a class="btn btn-lg btn-outline-white" href="/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content_right')
    <div
        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
        <div class="sw-lg-50 px-5">
            <div class="sh-11">
                <a href="/">
                    <!-- <div class="logo-default"></div> -->
                </a>
            </div>
            <div class="mb-5">
                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                <h2 class="cta-1 text-primary"></h2>
            </div>
            <div class="mb-5">
                <p class="h6">Please use the form to register.</p>
                <p class="h6">
                    If you are a member, please
                    <a href="/Pages/Authentication/Login">login</a>
                    .
                </p>
            </div>


            <form id="registerForm" class="tooltip-end-bottom" action="{{ route('create-damin') }}" method="POST">
                @csrf
            
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user"></i>
                    <input class="form-control" placeholder="Namdfge" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="email"></i>
                    <input class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="navigate-diagonal"></i>
                    <input class="form-control" placeholder="Location" name="location" value="{{ old('location') }}" />
                    @error('location')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user"></i>
                    <input class="form-control" placeholder="Usertype" name="usertype" value="{{ old('usertype') }}" />
                    @error('usertype')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="lock-off"></i>
                    <input class="form-control" name="password" type="password" placeholder="Password" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <button type="submit" class="btn btn-lg btn-primary">Signup</button>
            </form>
            


{{-- 
            <form id="registerForm" class="tooltip-end-bottom" method="post" action="/createaccount"
                >
                @csrf



                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user"></i>
                    <input class="form-control" placeholder="Name" name="name" />
                </div>
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="email"></i>
                    <input class="form-control" placeholder="Email" name="email" />
                </div>
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="navigate-diagonal"></i>
                    <input class="form-control" placeholder="Location" name="location" />
                </div>
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user"></i>
                    <input class="form-control" placeholder="Usertype" name="usertype" />
                </div>


                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="lock-off"></i>
                    <input class="form-control" name="password" type="password" placeholder="Password" />
                </div>
                 {{-- <div class="mb-3 position-relative form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="registerCheck" name="registerCheck" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and accept the
                                    <a href="/" target="_blank">terms and conditions.</a>
                                </label>
                            </div>
                        </div>  --}}
                {{-- <button type="submit" class="btn btn-lg btn-primary">Signup</button>
            </form> --}}

        </div>
    </div>
@endsection
