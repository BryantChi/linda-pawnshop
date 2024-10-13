@extends('layouts_main.master')

@section('content')
    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '代償降息專案', 'page_title_sub' => 'On-Lendding'])

        <!-- On-Lendding Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-on-lendding-01"
                    id="pg-on-lendding">

                    <div class="col-lg-3 text-center">
                        <img src="{{asset('assets/img/02/02_icon5.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <h5><span class="text-danger">整合債務，代償高利</span>，減輕還款壓力！</h5>
                        <p>
                            聯大優質當舖推出「代償降息專案」，幫助您有效降低利息負擔，解決高利貸款問題。<br>
                            不論您是需要代墊工程款項，還是您的汽車、機車、房屋、土地、廠房、設備已在他舖借貸，我們都能提供更優惠的利率和靈活的還款方案，幫助您解決資金周轉問題，減輕您的還款壓力，讓您的財務狀況更為穩定。
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="car-service-box py-4 px-3">
                            <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                            <ul style="list-style-type: none;padding-left: 10px;">
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">降低利息：替您償還高利貸款，以更優惠的利率重新貸款。
                                </li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">靈活還款：提供彈性還款方案，根據您的財務狀況調整還款計畫。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid"
                                        alt="">快速審核：簡化審核流程，快速批核，讓您迅速享受降息優惠。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">專業諮詢：專業團隊為您量身打造最合適的代償方案。
                                </li>
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
                            <p>年滿20歲之中華民國國民，有其他融資或當舖借款皆可辦理。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                            <p>依據個人信用狀況及還款能力進行評估，最高可達市價2倍額度。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">貸款利率</h6>
                            <p>月息1%起，依個人信用評分條件及貸款金額提供優惠利率。</p>

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
                            <p>
                                1.債權人清冊<br>
                                2.前置協商申請書<br>
                                3.最近2年度的綜合所得<br>
                                4.身份證正本及正反面影本<br>
                                5.最近3個月薪資證明文件
                            </p>

                            <p class="mt-5" style="color: #e76818;">
                                ※相關文件依實際需求為主。
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- On-Lendding End -->

        @include('services.services_sub_content')

    </div>
@endSection
