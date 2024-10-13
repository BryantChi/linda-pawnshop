@extends('layouts_main.master')

@section('content')

<div class="position-relative" id="main">

    @include('layouts_main.inner_main_top', ['page_title' => '借款成功案例', 'page_title_sub' => 'Cases'])

    <!-- Cases Start -->
    <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center" id="pg-cases">
                <div class="col-lg-auto text-lg-end text-center">
                    <img src="{{asset('assets/img/04/04illu.png')}}" class="img-fluid case-top-img" alt="">
                </div>
                <div class="col-lg-auto">
                    <h5 class="pg-case-title text-start mb-0">聯大優質當舖高額度、低利率，撥款快速！</h5>
                    <p class="w-100 text-start mb-0">
                        高達<span class="text-danger" style="font-size: 1.3rem;">99%</span>的超高過件率，免擔保、不需財力證明！<br>
                        體驗無憂借貸的方便及迅速，有任何資金需求、急用過轉，就來找聯大優質當鋪！<br>
                        合法立案、正派經營，低調為您保障您的個人隱私與權益。
                    </p>
                </div>

            </div>

            <div class="row justify-content-center align-items-start mb-5">
                <p class="text-danger text-end w-100 mb-0" style="font-size: 0.8rem;opacity: 0.7;">成功協助過8個借款案例</p>

                @if ($cases->count() > 0)

                    @foreach ($cases as $case)

                    <div class="col-lg-6">
                        <div class="case-box">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 text-center">
                                    <img src="{{asset('assets/img/00-hp/case_pic.png')}}" class="img-fluid mb-3" alt="">
                                    <p>{{ $case->occupation }}<br>{{ $case->name }}</p>

                                </div>
                                <div class="col-lg-auto align-self-center text-center p-0 m-0 h-100 mx-lg-2 mb-lg-auto mb-3">
                                    <div class="case_item_line m-auto"></div>
                                </div>
                                <div class="col-lg align-self-center px-4">
                                    @php
                                        $newTitle = preg_replace_callback('/(\d+)/', function ($matches) {
                                            return '<span style="font-size: 1.8rem;">' . $matches[0] . '</span>';
                                        }, $case->case_title);
                                    @endphp
                                    <h5 class="mb-3" style="color: #e36100;">{!! $newTitle !!}</h5>
                                    <p style="font-size: 15px;">
                                        {!! $case->case_content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                @else

                    <div class="col-lg-12 text-center p-3">
                        {{-- <img src="{{asset('assets/img/00-hp/case_pic.png')}}" class="img-fluid mb-3" alt=""> --}}
                        <p>目前沒有成功案例</p>
                    </div>
                @endif



            </div>

        </div>
    </div>
    <!-- Case End -->


</div>

@endsection
