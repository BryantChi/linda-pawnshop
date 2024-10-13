@extends('layouts_main.master')

@section('content')

    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '支客票貼現', 'page_title_sub' => 'Cheque'])


        <!-- Cheque Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center pg-cheque-01" id="pg-cheque">

                    <div class="col-lg-3 text-center">
                        <img src="{{asset('assets/img/02/02_icon2.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <h5>免押、免保，<span class="text-danger">每日3點半前撥款！</span></h5>
                        <p>
                            聯大優質當舖專門提供中和、板橋、永和、新店、木柵等地區的支票借款服務；我們讓您的支客票快速變現，無論是個人戶還是公司戶，票期長短皆可全額貼現，免去銀行繁瑣手續。<br>
                            聯大支票貼現採用“銀行式票貼”，每天3點半前撥款，讓您輕鬆調度資金，無後顧之憂。
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="car-service-box py-4 px-3">
                            <h5><img src="{{asset('assets/img/02/02_feature.png')}}" class="img-fluid" alt=""> 服務特色</h5>
                            <ul style="list-style-type: none;padding-left: 10px;">
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">快速變現：支客票全額貼現，免去繁瑣手續。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">銀行式票貼：每天3點半前撥款，資金周轉快速便利。</li>
                                <li><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">地區專業服務：中和、板橋、永和、新店、木柵地區支票貼現。</li>
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
                            <p>年滿20歲之國民，持有銀行支票即可辦理。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">申貸額度</h6>
                            <p>額度1000萬，依照支票借款信用或附屬擔保品評估。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">還款方式</h6>
                            <p>可分一次結清和分期攤還亦可，亦可當月只繳利息不還本金還款。</p>

                            <h6><img src="{{asset('assets/img/02/02tick.png')}}" class="img-fluid" alt="">備註說明</h6>
                            <p>公司企業負責人如提供擔保品還可增加票貼或借貸額度。</p>
                        </div>
                    </div>
                    <div class="col-lg-6 px-3">
                        <div class="d-flex justify-content-center align-items-center services-info-title text-start">
                            <img src="{{asset('assets/img/02/02_document.png')}}" class="img-fluid services-info-icon" alt="">
                            <h5 class="">應備文件</h5>
                        </div>

                        <div class="services-info-content-2 px-3 mt-4">
                            <h6>個人戶：</h6>
                            <p>
                                1.身分證正本<br>
                                2.銀行支票（須整本）<br>
                                3.最近三個月的銀行對帳單<br>
                                4.印鑑章
                            </p>

                            <h6>公司戶：</h6>
                            <p>
                                1.負責人身分證正本<br>
                                2.營利事業登記證<br>
                                3.銀行支票和公司大小章<br>
                                4.最近三個月的銀行對帳單
                            </p>

                            <h6>客票：</h6>
                            <p>
                                1.身分證正本<br>
                                2.客票名片或發票
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Cheque End -->

        @include('services.services_sub_content')


    </div>
@endSection
