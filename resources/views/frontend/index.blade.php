@extends('layouts.app-front')
@section('content')

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">

<!--
        <h1 class="logo float-left"><a href="#hero"><span>.</span>{{setting()->site_name}}<span>.</span></a></h1>
-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#store">Store</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        @include('admin.include.flash')

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1><span>.</span>{{setting()->site_name}}<span>.</span></h1>
                <h1><span>.</span>Server<span>.</span></h1>
                <h2>Our Server Client Version Is 6609, Easy Server, Free To Play
                    <br>
                    Join Now!</h2>
            </div>
        </div>

    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= Register Section ======= -->
    <section id="register" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Register</h2>
                <p>Register</p>
            </div>


            <div class="col-lg-12 mt-5 mt-lg-0">

                {!! Form::open(['route'=>'frontend.register', 'method' => 'post'], ['class' => 'php-email-form', 'role' => 'form']) !!}
                <div class="php-email-form">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 form-group">
                            {!! Form::text('Username',old('Username'),['placeholder'=>'Username *', 'class'=> 'form-control text-center']) !!}
                            @error('Username')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 form-group">
                            {!! Form::password('Password',['placeholder'=>'Password *', 'class'=> 'form-control text-center']) !!}
                            @error('Password')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 form-group">
                            {!! Form::password('Password_confirmation',['placeholder'=>'Password Confirmation *', 'class'=> 'form-control text-center']) !!}
                            @error('Password_confirmation')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 form-group">
                            {!! Form::email('Email',old('Email'),['placeholder'=>'Email *', 'class'=> 'form-control text-center']) !!}
                            @error('Email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 form-group">
                            {!! Form::text('MobileNumber',old('MobileNumber'),['placeholder'=>'Mobile *', 'class'=> 'form-control text-center']) !!}
                            @error('MobileNumber')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        {!!Form::button('Create Account', ['type', 'submit','class'=>'createa'])!!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>

        </div>
    </section>
    <!-- End Register Section -->

    <!-- ======= Download Section ======= -->
    <section id="download" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Download</h2>
                <p>Download</p>
            </div>

            <div class="row justify-content-center">


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="{{setting()->client_link}}">Click Here</a>

                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="{{setting()->client_link}}">Full Client</a></h4>
                            <span>Extract the client and open from auto patch</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="{{setting()->patch_link}}">Click Here</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4><a href="{{setting()->patch_link}}">Full Patch</a></h4>
                            <span>Extract the patch on v6609 Client and open from autopatch</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Download Section -->

    <!-- ======= Store Section ======= -->
    <section id="store" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Store</h2>
                <p>Store</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/cup.png')}}" alt="cup"></div>
                        <h4><a href="">Gold Prize</a></h4>
                        <p style="font-size: larger;">{{setting()->cup_price}} L.E</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/vip.png')}}" alt="vip7"></div>
                        <h4><a href="">VIP 7</a></h4>
                        <p style="font-size: larger;">{{setting()->vip_7_price}} L.E</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/full_perf.png')}}" alt="full prefection"></div>
                        <h4><a href="">Full Perfection</a></h4>
                        <p style="font-size: larger;">{{setting()->full_perfection_price}} L.E</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/cps.png')}}" alt="cps"></div>
                        <h4><a href="">Billion CPS</a></h4>
                        <p style="font-size: larger;">{{setting()->billion_cps_price}} L.E</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/King.png')}}" alt="king"></div>
                        <h4><a href="">King Month</a></h4>
                        <p style="font-size: larger;">{{setting()->king_month}} L.E</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="{{asset('frontend/assets/img/store/cps.png')}}" alt="cps"></div>
                        <h4><a href="">10 Billions CPS</a></h4>
                        <p style="font-size: larger;">{{setting()->ten_billion_cps_price}} L.E</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Store Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>


            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    {!! Form::open(['route'=>'frontend.contact', 'method' => 'post']) !!}
                    <div class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                {!!  Form::text('name',old('name'),['class' => 'form-control' ,'placeholder'=>'Name *'])  !!}
                                @error('name')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-6 form-group">
                                {!!  Form::email('email',old('email'),['class' => 'form-control' ,'placeholder'=>'E-mail *'])  !!}
                                @error('email')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                {!!  Form::text('title',old('title'),['class' => 'form-control' ,'placeholder'=>'Subject *'])  !!}
                                @error('title')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-6 form-group">
                                {!!  Form::text('mobile',old('mobile'),['class' => 'form-control' ,'placeholder'=>'Mobile'])  !!}
                                @error('mobile')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            {!!  Form::textarea('message',old('message'),['class' => 'form-control' ,'placeholder'=>'Your Message *'])  !!}
                            @error('message')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-row justify-content-center">
                            {!!Form::button('Send Message', ['type', 'submit','class'=>'createa'])!!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->


@endsection
