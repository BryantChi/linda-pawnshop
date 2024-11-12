<!DOCTYPE html>
<html lang="zh_TW">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description" content="{{ $seoInfo->description }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription }}" />
    <meta property="og:image" content="{{ asset('assets/img/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name }}" />
    <title>{{ $seoInfo->title }}</title>
    <meta name="title" content="{{ $seoInfo->title }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/fimgs/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}?v={{ time() }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}?v={{ time() }}">

    @stack('third_party_stylesheets')

    @stack('page_css')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16751739416"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-16751739416');
    </script>
    <!-- Event snippet for [MT]-[DEFAULT2] conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-16751739416/xfUcCN_9_eAZEJiE7bM-',
                'value': 1.0,
                'currency': 'TWD',
                'event_callback': callback
            });
            return false;
        }
    </script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    @include('layouts_main.header')


    @include('layouts_main.hero')

    @yield('content')


    @include('layouts_main.footer')


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a> -->
    <a href="#" class="rounded-circle back-to-top">
        <img src="{{ asset('assets/img/00-hp/top.png') }}" class="img-fluid" style="width: 50px;" alt="">
    </a>
    {{-- line://ti/p/0286632299 --}}
    <div class="d-none d-md-block social-links-btn">
        <a href="https://line.me/ti/p/aFgNwWfjga" target="_blank" class="d-none d-md-block"><img
                src="{{ asset('assets/img/00-hp/left_line.png') }}" class="img-fluid left-line-img" alt=""></a>
        <a href="https://www.facebook.com/messages/t/1682613548693433" target="_blank" class="d-none d-md-block"
            onclick="return gtag_report_conversion('https://www.facebook.com/messages/t/1682613548693433');"><img
                src="{{ asset('assets/img/00-hp/left_msg.png') }}" class="img-fluid left-msg-img" alt=""></a>
    </div>


    <div class="d-flex d-md-none w-100 position-fixed bottom-0 left-0 social-links-btn-mobile">
        <div class="row justify-content-center align-content-center text-center p-0 m-0 w-100">
            <div class="col-4 s-line-btn align-self-center">
                <a href="https://line.me/ti/p/aFgNwWfjga" target="_blank">
                    <span><i class="bi bi-line"></i></span> 線上預約
                </a>
            </div>
            <div class="col-4 s-phone-btn align-self-center">
                <a href="tel:02-86638555" target="_blank">
                    <span><i class="bi bi-telephone-fill"></i></span> 聯絡專人
                </a>
            </div>
            <div class="col-4 s-location-btn align-self-center">
                <a href="https://maps.app.goo.gl/aJ45FEGGjogDkQeq7" target="_blank">
                    <span><i class="bi bi-map-fill"></i></span> 地址導航
                </a>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}?v={{ time() }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}?v={{ time() }}"></script>

    <script>
        $(document).ready(function() {});
    </script>

    @if (!request()->is('index'))
        <script>
            $(document).ready(function() {
                // 當頁面加載完成後，將 id="main" 的區域自動滾動到可視範圍內
                if ($('#main')) {
                    $('html, body').animate({
                        scrollTop: $('#main').offset().top - $('#pg-pagetitle').height() + 30
                    }, 0); // 1000 毫秒（1 秒）滾動到該區域
                }
            });
        </script>
    @endif

    @stack('third_party_scripts')

    @stack('page_scripts')

</body>

</html>
