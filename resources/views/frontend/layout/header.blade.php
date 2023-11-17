<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}" title="Anasayfa">
                                <img src="/logo.png" class="img-fluid" width="220" alt="Karşıyaka Yıldırım Koltuk Yıkama" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ route('home') }}" class="nav-link active">Anasayfa</a></li>
                                        <li><a href="{{ route('corporatedetail', 'hakkimizda') }}" class="nav-link">Hakkımızda</a></li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="{{ route('service') }}">
                                                Hizmetlerimiz<i class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                @foreach($Service as $item)
                                                    <li> <a class="dropdown-item" href="{{ route('servicedetail', $item->slug) }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('corporatedetail', 'fiyatlarimiz') }}" class="nav-link">Fiyatlarımız</a></li>
                                        <li><a href="{{ route('contactus') }}" class="nav-link">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 align-items-center ms-lg-4">
                            <div class="feature-box-icon d-none d-sm-inline-flex">
                                <img class="icon-animated" width="48" src="img/demos/cleaning-services/icons/phone.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark position-relative bottom-3'}" />
                            </div>
                            <div class="feature-box-info ps-2">
                                <p class="font-weight-semibold line-height-1 text-2 pb-0 mb-1">İLETİŞİME GEÇ</p>
                                <a href="tel:{{ config('settings.telefon1') }}" class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold line-height-1 custom-font-size-1 pb-0">{{ config('settings.telefon1') }}</a>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
