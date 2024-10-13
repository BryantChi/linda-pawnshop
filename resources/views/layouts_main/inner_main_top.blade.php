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

<div class="sbg-point"></div>

<div class="container-fluid p-0 m-0 position-relative">
    <div class="content-pagetitle-bg-2"></div>
    <div class="content-pagetitle-bg"></div>
    <div class="container">
        <div class="row" id="pg-pagetitle">
            <div class="d-flex justify-content-center align-items-center mb-3 mt-4">
                <img src="{{ asset('assets/img/00-hp/title_star.png') }}" class="img-fluid me-1"
                    style="height: 80%;width: auto;" alt="">
                <div class="d-block">
                    <h3 class="mb-0 content-title">{{ $page_title }}</h3>
                    <p class="content-subtitle text-uppercase mb-0">{{ $page_title_sub }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
