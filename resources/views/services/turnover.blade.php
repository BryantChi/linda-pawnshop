@extends('layouts_main.master')

@section('content')
<div class="position-relative" id="main">

    @include('layouts_main.inner_main_top', ['page_title' => '企業工商周轉', 'page_title_sub' => 'Turnover'])

    <!-- Turnover Start -->
    <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-turnover-01" id="pg-turnover">

                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/02/02_icon3.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5">
                    <h5>大額資金周轉，<span class="text-danger">10分鐘快速撥款！</span></h5>
                    <p>
                        無論您是製造業、服務業、零售業，還是其他行業，只要有資金週轉需求，都可以選擇聯大優質當鋪的企業工商週轉服務。<br>
                        從營運資金、庫存補充到設備升級，我們都能為您提供強而有力的支持！
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="car-service-box py-4 px-3">
                        <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                        <ul style="list-style-type: none;padding-left: 10px;">
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">個人票、公司票、廠房、土地全方面周轉運用。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">門檻低。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">3分鐘告知額度。</li>
                            <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">10分鐘快速撥款。</li>
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
                        <p>
                            1.年滿20歲的國民<br>
                            2.開業滿1年以上<br>
                            3.資本額50萬元以上的公司負責人
                        </p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                        <p>額度2000萬，可為您量身規劃一個額度，隨時可借可還，無違約金問題。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">還款方式</h6>
                        <p>可一次結清或分期攤還，當月只繳利息不還本金，金額最低以萬元為單位。</p>

                        <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">備註說明</h6>
                        <p>備負責人身分證、營利事業登記證、公司車或個人車行照，輕鬆貸，輕鬆還。</p>
                    </div>
                </div>
                <div class="col-lg-6 px-3">
                    <div class="d-flex justify-content-center align-items-center services-info-title text-start">
                        <img src="{{asset('img/02/02_document.png')}}" class="img-fluid services-info-icon" alt="">
                        <h5 class="">應備文件</h5>
                    </div>

                    <div class="services-info-content-2 px-3 mt-4">
                        <p>
                            1.公司負責人身分證正本及名片<br>
                            2.營利事業登記證影本（如有工廠登記證請檢附）<br>
                            3.主要往來銀行存摺影本（近六個月）<br>
                            4.銀行代收資料簿或銀行票貼收據明細<br>
                            5.公司交易單據或發票
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Turnover End -->


</div>
@endSection
