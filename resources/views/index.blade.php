@extends('layouts_main.master')

@section('content')
    <div id="main_section">

        <div class="container-fluid p-0 m-0 bg-gray-20">
            <div class="container">
                <div class="row py-42 px-md-auto px-3">
                    <div class="marquee" data-aos="zoom-in" data-aos-delay="200">
                        <div class="marquee-text">{{ $marqueeText }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0 m-0">
            <div class="coin-section position-relative w-100">
                <img src="{{ asset('assets/img/00-hp/bg_coin.png') }}" class="img-fluid coin-01" alt="">
            </div>
        </div>

        <!-- Services & About Start -->
        <div class="container-fluid pt-5 bg-gray-20">
            <div class="container">
                <div class="row g-5" id="services">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <img src="{{ asset('assets/img/00-hp/title_star.png') }}" class="img-fluid me-2"
                            style="height: 80%;width: auto;" alt="">
                        <div class="d-block">
                            <h3 class="mb-2 content-title">聯大的多元借貸服務</h3>
                            <p class="content-subtitle text-uppercase mb-0">Service</p>
                        </div>
                    </div>
                    <div class="col-lg-10 mx-auto my-0">
                        <p class="w-100 text-center" style="color: #666666;">
                            無論是個人還是企業，聯大優質當鋪都能為您提供快速、安全、可信賴的借貸服務，助您輕鬆解決財務需求。
                        </p>
                    </div>
                    <div class="col-md-7 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- youtube shorts autoplay  --}}
                                <iframe width="100%" class="img-fluid" style="height: 27rem;"
                                    src="https://www.youtube.com/embed/Nj2yIgA0JXM?autoplay=1&mute=1"
                                    title="台北當鋪推薦當日撥款∣快速合法借錢找聯大當舖現金" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-6">
                                <iframe width="100%" class="img-fluid" style="height: 27rem;"
                                    src="https://www.youtube.com/embed/AYJvLDMXfn4?autoplay=1&mute=1"
                                    title="台北當鋪推薦當日撥款∣快速合法借錢找聯大當舖現金"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 m-0"></div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon1.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>汽機車借款</h5>
                                <p>不限車種、車齡<br>手續簡單</p>
                                <a href="{{ route('services.car') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon2.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>支客票貼現</h5>
                                <p>每大3點半前撥款<br>快速變現</p>
                                <a href="{{ route('services.cheque') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon3.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>企業工商周轉</h5>
                                <p>門檻低，額度高<br>快速撥款</p>
                                <a href="{{ route('services.turnover') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon4.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>房屋土地借款</h5>
                                <p>免擔保、免保證人<br>快速審核</p>
                                <a href="{{ route('services.realestate') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon5.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>代償降息專案</h5>
                                <p>降低利息，靈活還款可增貸</p>
                                <a href="{{ route('services.on-lendding') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="services-item-box row justify-content-center align-content-center">
                            <div class="col-7 align-self-center">
                                <img src="{{ asset('assets/img/00-hp/ser_icon6.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-auto align-self-center p-0 m-0">
                                <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col align-self-center services-item-box-text text-center">
                                <h5>精品典當借款</h5>
                                <p>額度高，撥款快<br>免費鑑價</p>
                                <a href="{{ route('services.valuable') }}" class="btn-services-item-more">了解更多</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Services & About End -->

        <!-- About Start -->
        <div class="container-fluid p-0 m-0 position-relative">
            <div class="sbg-about-point"></div>
            <div class="container-fluid pt-3 pb-3 position-relative">
                <div class="sbg-about-2"></div>
                <div class="sbg-about"></div>
                <div class="container">
                    <div class="row px-0" id="about">
                        <div class="col-lg-6 p-0 m-0">
                            <img src="{{ asset('assets/img/00-hp/about_pic.jpg') }}" class="img-fluid about-img"
                                alt="">
                        </div>
                        <div class="col-lg-6 px-lg-5 px-3 py-lg-5 py-4 m-0 align-self-center">
                            <h4 class="about-title mb-3">聯大優質當鋪秉持誠信經營、保護您的隱私</h4>
                            <p class="about-description">
                                聯大的專業團隊擁有豐富經驗，準確評估您的貴重物品，保證給予最公正的價格！<br><br>

                                聯大優質當舖作為業界領先的當舖品牌，為您提供快捷、高效且安全的財務解決方案，為每位客戶的獨特需求，量身規劃適合的借貸服務，包括快速放款、高價質押、專業珠寶鑑定等。
                            </p>
                            <div class="row about-description">
                                <div class="col-lg-5">
                                    <img src="{{ asset('assets/img/00-hp/about_tick.png') }}" class="img-fluid"
                                        alt="">
                                    信任可靠品牌
                                </div>
                                <div class="col-lg-5">
                                    <img src="{{ asset('assets/img/00-hp/about_tick.png') }}" class="img-fluid"
                                        alt="">
                                    卓越專業的服務品質
                                </div>
                                <div class="col"></div>
                                <div class="col-lg-5">
                                    <img src="{{ asset('assets/img/00-hp/about_tick.png') }}" class="img-fluid"
                                        alt="">
                                    誠實公正的交易流程
                                </div>
                                <div class="col-lg-5">
                                    <img src="{{ asset('assets/img/00-hp/about_tick.png') }}" class="img-fluid"
                                        alt="">
                                    立即解決您的金錢難關
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{ route('about') }}"
                                    class="btn-about-more">關於聯大&emsp;<span>more</span>&emsp;〉</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid position-relative">
                <div class="container" id="about2">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <h4 class="about-title2 font-weight-bold">合法立案<span>安心借</span>，高額低利<span>流程簡易</span>，<br
                                    class="d-block d-lg-none">當日撥款<span>快速核貸超有感！</span></h4>
                            <p class="about-subtitle2">簡單<span class="text-danger">4</span>步驟，聯大助您迅速解決資金煩惱，<br
                                    class="d-block d-lg-none">手續便捷、息低保密、安全合法！</p>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-auto col-5 my-3 p-0 m-0">
                            <div class="step-box text-center d-grid align-items-center m-auto">
                                <img src="{{ asset('assets/img/00-hp/step_icon1.png') }}" class="img-fluid w-50 mx-auto"
                                    alt="">
                                <p>來電/線上諮詢<br>聯大客服</p>
                            </div>
                        </div>
                        <div class="col-auto my-3 text-center p-0 m-0">
                            <img src="{{ asset('assets/img/00-hp/step_arrow.png') }}" class="img-fluid img-arrow"
                                alt="">
                        </div>
                        <div class="col-lg-auto col-5 my-3 p-0 m-0">
                            <div class="step-box text-center d-grid align-items-center m-auto">
                                <img src="{{ asset('assets/img/00-hp/step_icon2.png') }}" class="img-fluid w-50 mx-auto"
                                    alt="">
                                <p>備妥文件<br>快速審核</p>
                            </div>
                        </div>
                        <div class="col-auto my-3 text-center p-0 m-0">
                            <img src="{{ asset('assets/img/00-hp/step_arrow.png') }}" class="img-fluid img-arrow"
                                alt="">
                        </div>
                        <div class="col-12 d-block d-xl-none"></div>
                        <div class="col-lg-auto col-5 my-3 p-0 m-0">
                            <div class="step-box text-center d-grid align-items-center m-auto">
                                <img src="{{ asset('assets/img/00-hp/step_icon3.png') }}" class="img-fluid w-50 mx-auto"
                                    alt="">
                                <p>說明計息與規範<br>滿意再借</p>
                            </div>
                        </div>
                        <div class="col-auto my-3 text-center p-0 m-0">
                            <img src="{{ asset('assets/img/00-hp/step_arrow.png') }}" class="img-fluid img-arrow"
                                alt="">
                        </div>
                        <div class="col-lg-auto col-5 my-3 p-0 m-0">
                            <div class="step-box text-center d-grid align-items-center m-auto">
                                <img src="{{ asset('assets/img/00-hp/step_icon4.png') }}" class="img-fluid w-50 mx-auto"
                                    alt="">
                                <p>審核通過<br>火速撥款</p>
                            </div>
                        </div>

                        <div class="col-12 text-center pt-5 pb-5">
                            <a href="{{ route('process') }}"
                                class="btn-step-more">快速借款流程&emsp;<span>more</span>&emsp;〉</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid p-0 m-0">
            <div class="coin-section position-relative w-100">
                <img src="{{ asset('assets/img/00-hp/bg_coin2.png') }}" class="img-fluid coin-02" alt="">
            </div>
        </div>

        <div class="container-fluid p-0 m-0 position-relative " style="overflow: hidden;">
            <div class="bg-case"></div>
            <div class="container px-lg-auto px-4 py-5">
                <div class="row justify-content-center align-items-center h-100" id="cases">
                    <div class="col-lg-5 pt-5 pb-3">
                        <div class="d-flex justify-content-start align-items-center mb-3">
                            <img src="{{ asset('assets/img/00-hp/title_star.png') }}" class="img-fluid me-2"
                                style="height: 80%;width: auto;" alt="">
                            <div class="d-block">
                                <h3 class="mb-2 content-title">借款成功案例</h3>
                                <p class="content-subtitle text-uppercase mb-0">CASES</p>
                            </div>
                        </div>

                        <p style="font-weight: 500;letter-spacing: 1.5px;">
                            聯大優質當舖用心傾聽您的需求<br>
                            助您在輕鬆保密的環境下快速取得高額低利的急用資金<br>
                            不論是大額週轉還是小額借貸，我們都能快速解決您的燃眉之急<br>
                            聯大是您的現金急救站、最值得信賴的財務夥伴！<br><br>
                        </p>

                        <a href="{{ route('cases') }}" class="btn-case-more mt-5">更多案例&emsp;<span>more</span>&emsp;〉</a>
                    </div>
                    <div class="col-lg-7 py-3">
                        <div class="case-box">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <img src="{{ asset('assets/img/00-hp/case_pic.png') }}" class="img-fluid mb-3"
                                        alt="">
                                    <p>外送員<br>江小姐</p>

                                </div>
                                <div class="col-lg-auto align-self-center ser_line text-center p-0 m-0">
                                    <img src="{{ asset('assets/img/00-hp/ser_line.png') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg align-self-center px-4">
                                    <h5 class="mb-3" style="color: #e36100;">機車借款免留車，成功借款4萬元</h5>
                                    <p style="font-size: 15px;font-weight: 500;letter-spacing: 1.5px;">
                                        住在新北三重的江小姐面臨生活周轉需求，卻因工作需用到機車而無法留車。於是她向聯大優質當舖辦理了機車借款免留車，成功借款4萬元。<br>
                                        這筆款項不僅讓她迅速應對了生活上的緊急開支，同時也保留了她在外送工作中必備的工具。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid p-0 m-0 position-relative" style="overflow: hidden;">
            <div class="bg-contact"></div>
            <div class="contact-wave"></div>
            <div class="contact-wave-bg"></div>
            <div class="container pt-xl-3 pt-lg-4 pt-5 pb-lg-5 position-relative">
                <div class="row justify-content-center align-items-center h-100" id="contact">
                    <div class="col-lg-7">
                        <h4 class="contact-title font-weight-bold mb-4">誠信<span>服務</span>，優質<span>保證</span>，<br
                                class="d-block d-lg-none">聯大優質當舖<span>與您共同解決所有資金難題</span></h4>

                        <p>
                            現今快節奏的生活中，無論是個人還是企業，都可能面臨突如其來的資金需求。<br>
                            聯大優質當舖作為一家合法立案並具有多年經驗的專業當舖，用高效、透明和誠信服務，成為眾多客戶在資金周轉上的首選夥伴。<br><br>

                            無論您面臨什麼樣的財務需求，聯大當舖都竭誠為您提供最佳解決方案，讓您輕鬆解決資金困難，實現財務自由！
                        </p>
                        <div class="d-flex mt-4">
                            <a href="line://ti/p/0286632299" target="_blank"><img
                                    src="{{ asset('assets/img/00-hp/pur_line.png') }}" class="img-fluid"
                                    alt=""></a>
                            <a href="{{ route('interest') }}"><img
                                    src="{{ asset('assets/img/00-hp/pur_interest.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/img/00-hp/pur_pic.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row g-3 mt-lg-3 mt-5 contact-qa-more">
                    <div class="col-lg-6">
                        <div class="row g-0 bg-white rounded-30 boxshadow h-100">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/00-hp/faq_pic.jpg') }}"
                                    class="img-fluid rounded-30-left h-100 w-100" style="object-fit: cover;"
                                    alt="">
                            </div>
                            <div class="col-lg-6 px-3 py-4 d-grid position-relative">
                                <p>
                                    想借錢卻有許多擔心和疑慮嗎？<br>
                                    聯大優質當舖為您整理了借款常見問題，線上即時解答，迅速解決您的疑惑！
                                </p>
                                <a href="{{ route('faq') }}"
                                    class="btn-step-more mt-auto">觀看常見問答&emsp;<span>more</span>&emsp;〉</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-0 bg-white rounded-30 boxshadow h-100">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/00-hp/con_pic.jpg') }}"
                                    class="img-fluid rounded-30-left h-100 w-100" style="object-fit: cover;"
                                    alt="">
                            </div>
                            <div class="col-lg-6 px-3 py-4 d-grid position-relative">
                                <p>
                                    無論您有任何金錢急用或週轉需求，<br>
                                    歡迎聯繫聯大優質當舖。<br>
                                    我們提供24小時專人在線免費諮詢服務！
                                </p>
                                <a href="{{ route('location') }}"
                                    class="btn-step-more mt-auto">聯絡聯大當舖&emsp;<span>more</span>&emsp;〉</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
