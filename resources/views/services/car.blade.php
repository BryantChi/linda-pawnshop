@extends('layouts_main.master')

@section('content')


    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '汽機車借款', 'page_title_sub' => 'Car'])

        <!-- Car Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-car-01" id="pg-car">

                    <div class="col-lg-3 text-center">
                        <img src="{{asset('assets/img/02/02_icon1.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <h5><span class="text-danger">10分鐘</span>內立即撥款，不限車種車齡！</h5>
                        <p>
                            聯大優質當舖專案辦理汽車借款和機車借款，無論是新店、木柵、永和、中和、板橋等地區，全部可在10分鐘內立即撥款，手續簡單快速！<br>
                            無論車種、車齡，銀行貸款車、分期車或是信用有瑕疵者，皆可辦理；我們承諾絕對保密，讓您的愛車也能成為資金靈活運用的週轉工具。
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="car-service-box py-4 px-3">
                            <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                            <ul style="list-style-type: none;padding-left: 10px;">
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">快速撥款：10分鐘內完成撥款</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">不限車種車齡：任何車種、車齡皆可辦理。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">免費鑑價：免費提供汽（機）車鑑價。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">保密性高：確保個人隱私，方便資金運用。</li>
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
                            <p>年滿20歲之車主皆可辦理聯大所提供之汽車借款、機車借款、公司車或貸款車也可原車融資。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                            <p>無論是公司車、貸款車、汽車借款或是機車借款，聯大皆提供專業鑑價服務，最高可至市價2倍額度。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">貸款利率</h6>
                            <p>月息2%起，無貸款車可享降息優惠。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">還款方式</h6>
                            <p>聯大汽車借款，機車借款，皆採彈性還款方式，可一次結清或分期攤還。</p>
                        </div>
                    </div>
                    <div class="col-lg-6 px-3">
                        <div class="d-flex justify-content-center align-items-center services-info-title text-start">
                            <img src="{{asset('assets/img/02/02_document.png')}}" class="img-fluid services-info-icon" alt="">
                            <h5 class="">應備文件</h5>
                        </div>

                        <div class="services-info-content-2 px-3 mt-4">
                            <h6>分期車：</h6>
                            <p>
                                1.身分證正本（雙證件）<br>
                                2.汽車行照正本
                            </p>

                            <h6>無貸款車（享優惠利率）：</h6>
                            <p>
                                1.身分證正本<br>
                                2.領牌登記書<br>
                                3.汽車行照正本
                            </p>

                            <h6>公司車：</h6>
                            <p>
                                1.公司負責人身分證正本<br>
                                2.營利事業登記證，市府函<br>
                                3.汽車行照正本<br>
                                4.公司大小章
                            </p>

                            <p class="mt-5" style="color: #e76818;">
                                ※汽車借款流程說明：備齊相關應備文件，親臨本公司→填寫基本資料後立即撥款。
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Car End -->


        @include('services.services_sub_content')

    </div>

@endSection
