@extends('layouts.app')
@section('content')
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="{{ asset('visitorPage/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Doctors</h2>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Doctor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Doctor Section Begin -->
    <section class="doctor spad">
        <div class="container">
            <div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-1">
                        <div class="doctor__item__pic">
                            <img src="{{ asset('visitorPage/img/doctor/doctor-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="doctor__item__text">
                            <span>MBBS, MRCP(UK), CCST(DERM)</span>
                            <h2>Dr Emili Craythorne</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.sis. </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                            </ul>
                            <div class="doctor__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-4">
                        <div class="doctor__item__pic">
                            <img src="{{ asset('visitorPage/img/doctor/doctor-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-3">
                        <div class="doctor__item__text  doctor__item__text--left">
                            <span>MBBS, MRCP(UK), CCST(DERM)</span>
                            <h2>Dr Jessica Jones</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.sis. </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                            </ul>
                            <div class="doctor__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-5">
                        <div class="doctor__item__pic">
                            <img src="{{ asset('visitorPage/img/doctor/doctor-3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-6">
                        <div class="doctor__item__text">
                            <span>MBBS, MRCP(UK), CCST(DERM)</span>
                            <h2>Dr Ahel Natasha</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.sis. </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                            </ul>
                            <div class="doctor__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor__item">
                <div class="row">
                    <div class="col-lg-6 order-lg-8">
                        <div class="doctor__item__pic">
                            <img src="{{ asset('visitorPage/img/doctor/doctor-4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-7">
                        <div class="doctor__item__text doctor__item__text--left">
                            <span>MBBS, MRCP(UK), CCST(DERM)</span>
                            <h2>Dr Gabriela Beckett</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.sis. </p>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                            </ul>
                            <div class="doctor__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection