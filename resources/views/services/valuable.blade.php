@extends('layouts_main.master')

@section('content')
    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '精品典當借款', 'page_title_sub' => 'Valuable'])

        <!-- Valuable Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-valuable-01"
                    id="pg-valuable">

                    <div class="col-lg-3 text-center align-self-start">
                        <img src="{{asset('assets/img/02/02_icon6.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <h5><span class="text-danger">額度高</span>，手續簡便，撥款快！</h5>
                        <p>
                            舉凡名錶、鑽石、珠寶、名牌包⋯等，聯大優質當鋪都能提供適合的典當借款服務，專業鑑定、公正評估，萬物皆可當！讓您的資產輕鬆轉換為急需資金，解決財務需求，發揮更大價值。
                        </p>

                        <p class="mt-5">
                            可借物品類型》<br>
                            1.黃金、珠寶：高價值的珠寶首飾或黃金製品均可用作借款擔保品。<br>
                            2.名錶、精品：知名品牌的名錶、精品皮包等可以作為高價值的借款擔保品。<br>
                            3.3C商品：如高價值的手機、筆記型電腦、相機等。<br>
                            4.其他大宗物品：若您擁有其他大宗物品，例如藝術品、古董等，也可作為借款擔保品。<br>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="car-service-box py-4 px-3">
                            <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                            <ul style="list-style-type: none;padding-left: 10px;">
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">額度高：最高借款額度視質借物品價值決定，讓您滿足更大的資金需求。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">撥款快：審核確認後當日即可快速撥款，解決您資金急需的問題。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">低利率：超低貸款利率1%起，讓您借款成本更低。
                                </li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">彈性還款：可按日或按月計息，依您的需求選擇最合適的還款方式</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">免去資金調度煩惱：快速借款，讓您省去調度資金的煩惱，隨時應對各種突發情況。</li>
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
                            <p>年滿20歲之中華民國國民，年滿20歲以上，持有有物價。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                            <p>視提供之擔保品而定。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">還款方式</h6>
                            <p>彈性還款，可一次結清或分期攤還，提前還款無違約金。</p>

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
                            <h6>精品珠寶：</h6>
                            <p>
                                1.身分證正本。<br>
                                2.第二證件正本（駕照或健保卡）。<br>
                                3.購買證明。
                            </p>

                            <h6>3C手機、家電：</h6>
                            <p>
                                1.身分證正本。<br>
                                2.第二證件正本（駕照或健保卡）。<br>
                                3.保證書。
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Valuable End -->

    </div>
@endSection
