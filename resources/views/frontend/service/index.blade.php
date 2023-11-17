@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern bg-color-quaternary page-header-md custom-page-header">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>- HİZMETLERİMİZ</h1>
                    <span class="d-block text-4">Karşıyaka Yıldırım Koltuk Yıkama </span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-end breadcrumb-light">
                        <li><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="active">HİZMETLERİMİZ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container container-fluid">
         <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
            @foreach($Service as $item)
            <div class="col-md-6 mb-2 col-6">
                <a href="{{ route('servicedetail', $item->slug) }}" class="text-decoration-none">
                    <div class="card custom-card-style-1">
                        <div class="card-body text-center py-5">
                            <div class="custom-card-style-1-image-wrapper bg-primary d-inline-block mb-3">
                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }} - Karşıyaka Koltuk Yıkama ">
                            </div>
                            <h4 class="custom-card-style-1-title text-color-dark font-weight-bold mb-2">{{ $item->title }}</h4>
                            <p class="custom-card-style-1-description">{{ $item->short }} </p>
                            <span class="custom-card-style-1-link font-weight-bold">Devamı için</span>
                        </div>
                    </div>
                </a>
            </div>
          @endforeach
        </div>
    </div>
@endsection
