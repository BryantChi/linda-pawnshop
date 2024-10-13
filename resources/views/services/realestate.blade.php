@extends('layouts_main.master')

@section('content')
<div class="position-relative" id="main">

    @include('layouts_main.inner_main_top', ['page_title' => '房屋土地借款', 'page_title_sub' => 'Real Estate'])

    <!-- Realestate Start -->
    <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-realestate-01" id="pg-realestate">

                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/02/02_icon4.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5">
                    <h5>專業鑑價，<span class="text-danger">高額低利</span>，專人到府服務！</h5>
                    <p>
                        聯大優質當舖提供全方位的房屋和土地貸款服務，包括一胎、二胎、三胎貸款、法拍屋代墊、土地借款和農地借款等。<br>
                        無需擔保或保證人，讓您靈活運用資金，免去銀行繁瑣手續和人情壓力。<br>
                        即使負債比過高、信用有瑕疵，或無法從銀行取得貸款，我們也能為您提供專業的貸款方案。
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="car-service-box py-4 px-3">
                        <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                        <ul style="list-style-type: none;padding-left: 10px;">
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">免擔保、免保證人：簡化申請流程，讓您輕鬆取得資金。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">高額度貸款：在原有貸款額度之上再增加額度，最高可貸滿100%。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">快速審核：配合專業不動產估價團隊，提供快速估價和貸款服務。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">自有房屋坪數不限，屋齡不限，房貸繳滿一年即可申請。</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center align-items-start my-5">

                <div class="col-lg-6 px-3">
                    <div class="d-flex justify-content-center align-items-center services-info-title text-start">
                        <img src="{{asset('assets/img/02/02_infor.png')}}" class="img-fluid services-info-icon" alt="">
                        <h5 class="">借款資訊</h5>
                    </div>

                    <div class="services-info-content-1 px-3 mt-4">
                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申辦條件</h6>
                        <p>年滿二十歲之房屋所有人，免保人，免收入證明，皆可申辦。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                        <p>依據專業估價，最高可貸滿100%。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">貸款利率</h6>
                        <p>月息1%起，若房屋無貸款，利率可再降。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">還款方式</h6>
                        <p>只付利息或按月本利攤還，無需綁約，提前還款無違約金。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸限制</h6>
                        <p>本公司與銀行屬不同體系，借款人與銀行之間所有債務協商或不良信用不影響申貸。</p>
                    </div>
                </div>
                <div class="col-lg-6 px-3">
                    <div class="d-flex justify-content-center align-items-center services-info-title text-start">
                        <img src="{{asset('assets/img/02/02_document.png')}}" class="img-fluid services-info-icon" alt="">
                        <h5 class="">應備文件</h5>
                    </div>

                    <div class="services-info-content-2 px-3 mt-4">
                        <p>
                            1.身分證正本（雙證件）<br>
                            2.土地/建物所有權狀正本<br>
                            3.印鑑證明及房貸繳款餘額證明
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Realestate End -->


    @include('services.services_sub_content')


</div>
@endSection
