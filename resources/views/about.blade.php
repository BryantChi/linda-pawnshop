@extends('layouts_main.master')

@section('content')
<div class="position-relative" id="main">

    @include('layouts_main.inner_main_top', ['page_title' => '公司簡介', 'page_title_sub' => 'About'])

    <!-- About Start -->
    <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row pt-5 g-5" id="pg-about">
                <div class="col-lg-10 mx-auto my-0">
                    <h5 class="pg-about-title text-center mb-3">聯大優質當鋪以客戶為中心，提供客製化的融資方案和貼心的客戶服務</h5>
                    <p class="w-100 text-center">
                        聯大優質當舖作為業界領先的當舖品牌，為您提供快捷、高效且安全的財務解決方案，<br>
                        為每位客戶的獨特需求，量身規劃借貸服務，包括快速放款、高價質押、專業珠寶鑑定等。
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="about-item-box row justify-content-center align-content-center h-100">
                        <div class="col-lg-4 align-self-center text-center">
                            <img src="{{asset('assets/img/01/01_icon1.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col align-self-center about-item-box-text text-start">
                            <h5><img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt=""> 信任可靠的品牌</h5>
                            <p>
                                聯大優質當舖以誠信為根本，詮釋服務真諦，演繹財富經典，無論您是需要快速資金週轉，還是想要妥善保管珍貴物品，我們都能為您提供專業的當舖服務和解決方案，我們的品牌象徵著信任和可靠，是您資金需求的最佳夥伴。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item-box row justify-content-center align-content-center h-100">
                        <div class="col-lg-4 align-self-center text-center">
                            <img src="{{asset('assets/img/01/01_icon2.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col align-self-center about-item-box-text text-start">
                            <h5><img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt=""> 卓越專業的服務品質</h5>
                            <p>
                                堅持以客戶為中心，我們提供個性化的方案和服務，滿足客戶的期待與夢想，聯大優質當舖致力於以卓越的服務品質和專業的態度，為您提供最優質的當舖服務，包括快速借款、高價質押、珠寶鑑定等，保證每一筆交易都讓您滿意。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item-box row justify-content-center align-content-center h-100">
                        <div class="col-lg-4 align-self-center text-center">
                            <img src="{{asset('assets/img/01/01_icon3.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col align-self-center about-item-box-text text-start">
                            <h5><img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt=""> 誠實公正的交易流程</h5>
                            <p>
                                信譽成就品牌，累積成就大業，聯大優質當舖秉持著【誠信】的原則，為您提供透明、公平、公正的服務，每一步都以誠信為基石，讓您在交易過程中感到安心和放心，無論是黃金、珠寶、名錶還是其他貴重物品，我們都保證給予最真實的評估和最公正的價格。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-item-box row justify-content-center align-content-center h-100">
                        <div class="col-lg-4 align-self-center text-center">
                            <img src="{{asset('assets/img/01/01_icon4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col align-self-center about-item-box-text text-start">
                            <h5><img src="{{asset('assets/img/01/01tick.png')}}" class="img-fluid" alt=""> 解決金錢難關，實現美好願景</h5>
                            <p>
                                「具日月精華，理天下財富，傳千年文化，創美好未來。」聯大優質當舖不僅為您提供財務解決方案，更希望能成為您生活中的助力，讓每一位客戶在金融上得到支持和幫助，實現個人和家庭的美好願景，是聯大當舖的目標。
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row justify-content-center align-items-center text-center mt-5">
                <div class="co-lg-10">
                    <p>
                        我們的專業團隊擁有豐富的經驗，能夠準確評估您的貴重物品，並保證給予最公平合理的價格。<br>
                        聯大優質當舖秉持誠信經營的理念，確保每一次交易的透明、公正，並保護您的隱私，讓聯大成為您最信賴的財務夥伴，<br>
                        助您輕鬆實現財務自由、迎接美好未來！
                    </p>
                </div>

                <div class="col-auto d-flex justify-content-center position-relative mt-3">
                    <img src="{{asset('assets/img/01/01_illu1.png')}}" class="img-fluid illu-img-1" alt="">
                    <div class="illu-box py-lg-4 py-3">
                        <div class="illu-box-content row justify-content-center align-items-center my-2 px-lg-4 px-2">
                            <div class="col-auto">
                                <p class="illu-box-title">專業團隊</p>
                            </div>
                            <div class="col-9">
                                <p>聯大擁有經驗豐富的專業團隊，為您提供最準確的物品評估和最優質的服務。</p>
                            </div>
                        </div>
                        <div class="illu-box-line mx-auto mb-4"></div>

                        <div class="illu-box-content row justify-content-center align-items-center my-2 px-lg-4 px-2">
                            <div class="col-auto">
                                <p class="illu-box-title">高價收購</p>
                            </div>
                            <div class="col-9">
                                <p>承諾以市場最高價收購您的黃金、珠寶、名錶等貴重物品。</p>
                            </div>
                        </div>
                        <div class="illu-box-line mx-auto mb-4"></div>

                        <div class="illu-box-content row justify-content-center align-items-center my-2 px-lg-4 px-2">
                            <div class="col-auto">
                                <p class="illu-box-title">快速放款</p>
                            </div>
                            <div class="col-9">
                                <p>理解您的急需，提供快速放款服務，確保您能夠迅速獲得所需資金。</p>
                            </div>
                        </div>
                        <div class="illu-box-line mx-auto mb-4"></div>

                        <div class="illu-box-content row justify-content-center align-items-center my-2 px-lg-4 px-2">
                            <div class="col-auto">
                                <p class="illu-box-title">隱私保障</p>
                            </div>
                            <div class="col-9">
                                <p>尊重並保護每一位客戶的隱私，所有交易均嚴格保密。</p>
                            </div>
                        </div>
                        <div class="illu-box-line mx-auto mb-4"></div>

                        <div class="illu-box-content row justify-content-center align-items-center my-2 px-lg-4 px-2">
                            <div class="col-auto">
                                <p class="illu-box-title">靈活方案</p>
                            </div>
                            <div class="col-9">
                                <p>根據您的需求，提供多樣化的借款和質押方案，靈活應對您的各種資金需求。</p>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('assets/img/01/01_illu2.png')}}" class="img-fluid illu-img-2" alt="">

                </div>
            </div>

            <div class="row justify-content-center align-items-center text-center mt-5">
                <div class="col-auto">
                    <a href="{{route('process')}}"><img src="{{asset('assets/img/01/01_button.png')}}" class="img-fluid w-75" alt=""></a>
                </div>
                <div class="col-12 text-center mt-4">
                    <h4 class="illu-title font-weight-bold mb-4"><span>聯大優質當舖團隊是擁有</span>金融專業，秉持誠信<span>經營的</span>合法當舖</h4>
                    <p style="font-size: 15px;">聯大優質當舖的服務項目包括多種靈活、便捷的借款方案，可以滿足各類客戶的條件需求，</p>
                    <p style="font-size: 16.5px;color:#666461;font-weight: 800;">無論是個人還是企業，聯大都為您提供高效、安全、可信賴的借貸服務，助您輕鬆解決金錢難關！</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


</div>
@endSection
