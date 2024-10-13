@extends('layouts_main.master')

@section('content')
<div class="position-relative" id="main">

    @include('layouts_main.inner_main_top', ['page_title' => '計息方式', 'page_title_sub' => 'Interest'])

    <!-- Interest Start -->
    <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center" id="pg-interest">
                <div class="col-lg-auto">
                    <!-- <h5 class="pg-case-title text-start mb-0"></h5> -->
                    <p class="w-100 text-center mb-0" style="line-height: 1.8rem;">
                        在聯大當舖，我們提供給客戶最靈活且適合他們需求的計息方式。<br>
                        無論您是需要短期貸款還是長期貸款；我們都能滿足您的需求。
                    </p>
                </div>

            </div>

            <div class="row justify-content-center align-items-start mb-5">
                <div class="col-lg-4 p-0 m-0 text-end">
                    <img src="{{asset('assets/img/05/05illu.png')}}" class="img-fluid interest-img-01" alt="">
                </div>
                <div class="col-lg-8 p-0 m-0 interest-content">
                    <div class="illu-box py-5 px-lg-5 px-4">
                        <h6 class="d-flex"><span class="num-box me-2">1</span>按日計息</h6>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            適用範圍：此計息方式適用於短期借款，您可以根據實際借款天數計算利息。
                        </p>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            計息方式：利息將根據您實際借款的天數進行計算，每天產生的利息將根據您的借款金額和利率進行計算。
                        </p>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            特點：這種計息方式使您可以精確地了解您的利息支出，並在短期內盡快還清貸款。
                        </p>

                        <div class="interest-line"></div>

                        <h6 class="d-flex"><span class="num-box me-2">2</span>按月計息</h6>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            適用範圍：如果您需要長期貸款，按月計息方式可能更適合您的需求。您的借款金額將按月計算利息。
                        </p>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            計息方式：利息將按每個月的借款金額和利率計算，每月產生的利息將加入到您的總貸款金額中。
                        </p>
                        <p class="mb-0">
                            <img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt="">
                            特點：這種計息方式適用於需要長期貸款的客戶，讓您更輕鬆地管理每月的還款計劃和預算。
                        </p>


                    </div>
                </div>


            </div>

            <div class="row justify-content-center align-items-center mt-5 mx-lg-4 mx-3 mb-lg-5 mb-3">
                <div class="process-share-box row px-3 py-5">
                    <div class="col-lg-7 py-3">
                        <h5 class="mb-4" style="font-family: '微軟正黑體', sans-serif !important;">
                            聯大優質當鋪為合法立案並具有多年經驗的專業當鋪，以低調保密、高效誠信的服務，成為眾多客戶在資金周轉上的首選夥伴！</h5>
                        <p>
                            聯大優質當鋪致力為客戶提供更多元、安全且便利的資金借貸服務，將您的資金週轉需求交給<br>
                            聯大優質當鋪，讓您在輕鬆、保密的環境下迅速解決資金難題。<br>
                            有資金需求就找聯大，聯大是您最堅強的金援靠山！
                        </p>
                        <div class="d-lg-flex mt-4 w-lg-75">
                            <a href="line://ti/p/0286632299"><img src="{{asset('assets/img/00-hp/pur_line.png')}}" class="img-fluid"
                                    alt=""></a>
                            <a href="{{route('cases')}}"><img src="{{asset('assets/img/03/03_bu_case.png')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative text-lg-start text-center">
                        <img src="{{asset('assets/img/03/03illu.png')}}" class="img-fluid process-illu-img" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Interest End -->

    @include('services.services_sub_content')


</div>
@endSection
