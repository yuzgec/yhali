@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- {{ $Detail->title }} </h1>
                    <span class="d-block text-4">Karşıyaka Yıldırım Koltuk Yıkama </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">ANASAYFA</a></li>
                        <li><a href="{{ route('service') }}">Hizmetlerimiz</a></li>
                        <li class="active">{{ $Detail->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                @if($Detail->getFirstMediaUrl('page'))
                    <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }}">
                @endif
                {!!  $Detail->desc !!}
            </div>
            <div class="col-lg-4 position-relative">
                <aside class="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">

                    <div class="card custom-card-style-1 mb-2 border-color-grey-1">
                        <div class="card-body text-center py-2 px-4">
                            <h3 class="text-color-primary font-weight-bold text-4 pb-1 mb-4">{{ $Detail->title }} FiYATLARI</h3>
                            <div class="d-flex justify-content-center ">
                                <div class="price font-weight-bold text-color-dark" style="font-size:40px">
                                    <span style="font-size:13px">{{ ($Detail->id == 7) ? 'm²' : 'Adet' }}</span>{{ $Detail->seo_key }}₺
                                </div>
                                <div>
                                    <del><span style="font-size:20px">{{ round(($Detail->seo_key * 25) / 100  + $Detail->seo_key) }}₺</span></del>
                                </div>


                            </div>
                            <p class="mt-2" style="font-size:13px">*İzmir Karşıyaka, Çiğli, Menemen, Bayraklı, Bornova,  Konak ilçeleri için geçerlidir.</p>
                        </div>
                    </div>
                    @include('frontend.layout.form')
                    <div class="card border-0 border-radius-0 custom-box-shadow-1 px-2 ">
                        <div class="card-body">
                            <h3 class="text-transform-none font-weight-bold pb-3 mb-4">HİZMETLERİMİZ</h3>
                            <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                                @foreach($Service as $item)
                                <li>
                                    <a  class="text-decoration-none text-color-dark text-color-hover-primary" href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                        <i class="icon-arrow-right icons"></i> {{ $item->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
