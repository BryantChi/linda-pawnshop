<!-- Carousel Start -->
<div class="container-fluid px-0 mb-auto" id="hero">

    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide item1">
            </div>
            <div class="swiper-slide item2">
            </div>
            <div class="swiper-slide item3">
            </div>
        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> --}}
    </div>

    {{-- <div id="header-carousel" class="carousel slide2 carousel-fade px-0 mx-0" data-bs-ride="carousel"
        data-bs-interval="5000" data-aos="fade" data-aos-delay="200">
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <!-- <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 text-center">
                                <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark"></strong></p>
                                <h1 class="display-1 text-dark mb-4 animated zoomIn"></h1>
                                <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="carousel-item item2">

            </div>
            <div class="carousel-item item3">

            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div> --}}
</div>
<!-- Carousel End -->

@push('third_party_scripts')
    <script>
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            centeredSlides: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
    </script>
@endpush
