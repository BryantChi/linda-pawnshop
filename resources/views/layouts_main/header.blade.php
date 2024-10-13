<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top pt-lg-4 pt-3 pb-2" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{route('index')}}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('assets/img/00-hp/top_logo.svg')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('about')}}" class="nav-item nav-link active">公司簡介</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">服務項目</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0 nav-dropdown text-lg-center">
                            <a href="{{route('services.car')}}" class="dropdown-item">汽機車借款</a>
                            <a href="{{route('services.cheque')}}" class="dropdown-item">支客票貼現</a>
                            <a href="{{route('services.turnover')}}" class="dropdown-item">企業工商周轉</a>
                            <a href="{{route('services.realestate')}}" class="dropdown-item">房屋土地借款</a>
                            <a href="{{route('services.on-lendding')}}" class="dropdown-item">代償降息專案</a>
                            <a href="{{route('services.valuable')}}" class="dropdown-item">精品典當借款</a>
                        </div>
                    </div>
                    <a href="{{route('process')}}" class="nav-item nav-link">借款流程</a>
                    <a href="{{route('cases')}}" class="nav-item nav-link">成功案例</a>
                    <a href="{{route('interest')}}" class="nav-item nav-link">計息方式</a>
                    <a href="{{route('faq')}}" class="nav-item nav-link">常見問答</a>
                    <a href="{{route('location')}}" class="nav-item nav-link">交通位置</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
