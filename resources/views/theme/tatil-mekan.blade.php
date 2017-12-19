@extends('theme.app')

@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Tatil Mekanları</h1>
            <span>Bulunan Tatil Mekanları</span>
            <ol class="breadcrumb">
                <li><a href="/">Anasayfa</a></li>
                <li class="active">Tatil Yerleri Ara</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop product-3 grid-container clearfix">
                        @foreach($oteller as $otel)
                            <div class="product  oteller clearfix">
                                <div class="product-image">
                                    <a href="#"><img class="center img-responsive" src="{{ $otel->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img class="center img-responsive" src="{{ $otel->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-line2-directions"></i><span> {{ $otel->uzaklik }} km</span></a>
                                        <a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc alert alert-warning center">
                                    <div class="product-title"><h3><a href="/otel-detay/{{ $otel->id }}">{{ (strlen($otel->ad) > 15 ? substr($otel->ad, 0, 15).'...' : $otel->ad) }}</a></h3></div>
                                    <div class="product-price">{{ $otel->fiyat }}₺</div>
                                    <hr>
                                    <div class="product-rating">
                                        @if($otel->yildiz == 1)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($otel->yildiz == 2)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($otel->yildiz == 3)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($otel->yildiz == 4)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        @else
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach($mekanlar as $mekan)
                            <div class="product  mekanlar clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="{{ $mekan->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img src="{{ $mekan->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc alert alert-success center">
                                    <div class="product-title"><h3><a href="/mekan-detay/{{ $mekan->id }}">{!! (strlen($mekan->ad) > 15 ? substr($mekan->ad, 0, 15).'...' : $mekan->ad) !!}</a></h3></div>
                                    <div class="product-price">{{ substr($mekan->icerik, 0, 10) }}...</div>
                                    <hr>
                                    <div class="product-rating">
                                        @if($mekan->yildiz == 1)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($mekan->yildiz == 2)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($mekan->yildiz == 3)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        @elseif($mekan->yildiz == 4)
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        @else
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach($yemekler as $yemek)
                            <div class="product yemekler clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="{{ $yemek->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img src="{{ $yemek->resim_yol }}" alt="Slim Fit Chinos"></a>
                                    <div class="product-overlay">
                                        <a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc alert alert-info center">
                                    <div class="product-title"><h3><a href="/yemek-detay/{{ $yemek->id }}">{{ (strlen($yemek->ad) > 15 ? substr($yemek->ad, 0, 15).'...' : $yemek->ad) }}</a></h3></div>
                                    <div class="product-price">{{ substr($yemek->aciklama, 0, 10) }}...</div>
                                    <hr>
                                    @if($yemek->yildiz == 1)
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    @elseif($yemek->yildiz == 2)
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    @elseif($yemek->yildiz == 3)
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    @elseif($yemek->yildiz == 4)
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    @else
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div><!-- #shop end -->
                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget widget-filter-links clearfix">
                            <h4>Kategori Seçiniz</h4>
                            <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                                <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Temizle</a></li>
                                <li><a href="#" data-filter=".mekanlar">Mekanlar</a></li>
                                <li><a href="#" data-filter=".yemekler">Yemekler</a></li>
                                <li><a href="#" data-filter=".oteller">Oteller</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-filter-links clearfix">
                            <h4>Sort By</h4>
                            <ul class="shop-sorting">
                                <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Temizle</a></li>
                                <li><a href="#" data-sort-by="name">Ada Göre</a></li>
                                <li><a href="#" data-sort-by="price_lh">Fiyat: Azdan Çoka</a></li>
                                <li><a href="#" data-sort-by="price_hl">Fiyat: Çoktan Aza</a></li>
                            </ul>
                        </div>
                        <div class="row thumbnail">
                            <label class="label label-default">Renk Açıklamaları</label>
                            <div class="col-md-12">
                                <div class="alert alert-info">Yemek</div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-success">Mekan</div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-warning">Otel</div>
                            </div>
                        </div>
                    </div>
                </div><!-- .sidebar end -->
            </div>
        </div>
    </section><!-- #content end -->
@endsection

@section('css')

@endsection

@section('js')

@endsection