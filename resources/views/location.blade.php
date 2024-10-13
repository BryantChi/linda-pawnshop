@extends('layouts_main.master')

@section('content')
    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '交通位置', 'page_title_sub' => 'Location'])

        <!-- Location Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center" id="pg-location">
                    <div class="col-lg-auto">
                        <!-- <h5 class="pg-case-title text-start mb-0"></h5> -->
                        <p class="w-100 text-center mb-0" style="line-height: 1.8rem;">
                            聯大當鋪地理位置便利，無論是開車或搭乘公共交通工具，都能輕鬆抵達。<br>
                            我們期待您的蒞臨，為您提供專業、快捷的借貸服務。如有任何問題，請隨時與我們聯繫！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-start my-5">

                    <div class="col-lg-4 mb-3">
                        <div class="location-box py-3 px-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/07/07icon1.png')}}" class="img-fluid" alt="">
                                <div class="d-block">
                                    <h6 class="location-item-title text-start mb-0">店面服務地址：</h6>
                                    <p class="w-100 text-start mb-0">台北市文山區羅斯福路五段206之2號</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="location-box py-3 px-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/07/07icon2.png')}}" class="img-fluid" alt="">
                                <div class="d-block">
                                    <h6 class="location-item-title text-start mb-0">服務專線：</h6>
                                    <p class="w-100 text-start mb-0">（02） 8663-8555 / 0909-055-571</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="location-box py-3 px-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/07/07icon3.png')}}" class="img-fluid" alt="">
                                <div class="d-block">
                                    <h6 class="location-item-title text-start mb-0">LINE ID:</h6>
                                    <p class="w-100 text-start mb-0">0286632299</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-12 location-map m-0 p-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.9136742203345!2d121.53355915236284!3d25.003049120864098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa1d74ca955f%3A0x68a56c1dd2d13430!2z6IGv5aSn55W26IiWIOaxveapn-i7iuWAn-asvuWFjeeVmei7iiDmlK_lrqLnpajlgJ_mrL7osrznj74g5Lit5bCP5LyB5qWt6YCx6L2JIOaIv-Wxi-S4gOS6jOiDjg!5e0!3m2!1szh-TW!2stw!4v1728331809829!5m2!1szh-TW!2stw"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
        <!-- Location End -->


    </div>
@endSection
