@extends('Frontend.layout.frontend-master')

@section('body')

    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>sign in</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">sign in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=========================
        LOGIN START
    ==========================-->
    <section class="tf__login mt_195 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="tf__login_area">
                        <h2>Welcome to Eduor!</h2>
                        <p>sign in to continue</p>
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>email</label>
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>password</label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput tf__login_check_area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remeber Me
                                            </label>
                                        </div>
                                        <a href="#">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <button type="submit" class="common_btn">login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p class="create_account">Dont’t have an aceount ? <a href="sign_up.html">Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        LOGIN END
    ==========================-->


    @endsection