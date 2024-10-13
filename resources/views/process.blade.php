@extends('layouts_main.master')

@section('content')
    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '借款流程', 'page_title_sub' => 'Process'])

        <!-- Process Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 g-5 mb-lg-3 mb-5" id="pg-process">
                    <div class="col-lg-10 mx-auto my-0">
                        <h5 class="pg-process-title text-center mb-3">聯大優質當鋪的借款流程快速便捷，只需簡單<span
                                class="text-danger">4</span>步驟即可輕鬆獲得資金</h5>
                        <p class="w-100 text-center">
                            根據您的財務狀況規盡適合的還款計劃，無壓力管理還款，輕鬆應對財務需求
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-start mb-5 process-step">
                    <div class="col-lg-auto my-3 p-0 m-0">
                        <div class="step-box text-center d-grid align-items-center m-auto">
                            <img src="{{asset('assets/img/00-hp/step_icon1.png')}}" class="img-fluid w-50 mx-auto" alt="">
                            <p>來電/線上諮詢<br>聯大客服</p>
                        </div>
                        <div>
                            <p class="step-description mt-3">
                                透過官方Line或直接撥打電話聯繫<br>，將有專員針對您的需求，提供專<br>屬借款方案並解答所有疑問。
                            </p>
                        </div>
                    </div>
                    <div class="col-auto my-3 text-center p-0 m-0 pt-lg-5 mt-lg-5">
                        <img src="{{asset('assets/img/00-hp/step_arrow.png')}}" class="img-fluid img-arrow mt-lg-3" alt="">
                    </div>
                    <div class="col-lg-auto my-3 p-0 m-0">
                        <div class="step-box text-center d-grid align-items-center m-auto">
                            <img src="{{asset('assets/img/00-hp/step_icon2.png')}}" class="img-fluid w-50 mx-auto" alt="">
                            <p>備妥文件<br>快速審核</p>
                        </div>
                        <div>
                            <p class="step-description mt-3">
                                備齊相關資料，聯大當鋪將迅速審<br>核您的申請，確認您的借款資格。
                            </p>
                        </div>
                    </div>
                    <div class="col-auto my-3 text-center p-0 m-0 pt-lg-5 mt-lg-5">
                        <img src="{{asset('assets/img/00-hp/step_arrow.png')}}" class="img-fluid img-arrow mt-lg-3" alt="">
                    </div>
                    <div class="col-12 d-block d-xl-none"></div>
                    <div class="col-lg-auto my-3 p-0 m-0">
                        <div class="step-box text-center d-grid align-items-center m-auto">
                            <img src="{{asset('assets/img/00-hp/step_icon3.png')}}" class="img-fluid w-50 mx-auto" alt="">
                            <p>說明計息與規範<br>滿意再借</p>
                        </div>
                        <div>
                            <p class="step-description mt-3">
                                聯大當舖專員將詳細說明借款與還<br>款的相關須知與規範，讓您在充分<br>了解並同意後再進行借款；過程保<br>密低調是我們對您的支持與承諾。
                            </p>
                        </div>
                    </div>
                    <div class="col-auto my-3 text-center p-0 m-0 pt-lg-5 mt-lg-5">
                        <img src="{{asset('assets/img/00-hp/step_arrow.png')}}" class="img-fluid img-arrow mt-lg-3" alt="">
                    </div>
                    <div class="col-lg-auto my-3 p-0 m-0">
                        <div class="step-box text-center d-grid align-items-center m-auto">
                            <img src="{{asset('assets/img/00-hp/step_icon4.png')}}" class="img-fluid w-50 mx-auto" alt="">
                            <p>審核通過<br>火速撥款</p>
                        </div>
                        <div>
                            <p class="step-description mt-3">
                                完成簽訂相關合約條款之後，聯大<br>優質當舖就會立刻進行款項核撥，<br>讓您火速取得資金！
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
                                <a href="{{route('cases')}}"><img src="img/03/03_bu_case.png" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-5 position-relative text-lg-start text-center">
                            <img src="{{asset('assets/img/03/03illu.png')}}" class="img-fluid process-illu-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->


    </div>
@endSection
