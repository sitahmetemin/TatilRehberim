@extends('theme.app')

@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Oteller</h1>
            <span>Bulunan Oteller</span>
            <ol class="breadcrumb">
                <li><a href="/">Anasayfa</a></li>
                <li class="active">Oteller</li>
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
                    <!-- Oteller Listesi
                    ============================================ -->
                        <div id="shop" class="shop product-3 grid-container clearfix">
                            @foreach($oteller as $otel)
                            <div class="product oteller clearfix">
                                <div class="product-image">
                                    <a href="#"><img src="/assets/theme/images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                    <a href="#"><img src="/assets/theme/images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                    <div class="sale-flash">50% indirim*</div>
                                    <div class="product-overlay">
                                        <a href="#" title="Merkeze Uzaklık" class="add-to-cart"><i class="icon-location-arrow"></i><span> 6 km</span></a>
                                        <a href="#" title="Detaylar" class="item-quick-view"><i class="icon-zoom-in2"></i><span> </span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">OtelAdı</a></h3></div>
                                    <div class="product-price">
                                        <ins>₺12.49</ins>
                                        <ins class="icon-resize-horizontal"></ins>
                                        <ins>₺24.49</ins>
                                    </div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- #Oteller Listesi end -->
                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-filter-links clearfix">

                            <h4>Kategori</h4>
                            <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                                <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Temizle</a></li>
                                <li><a href="#" data-filter=".oteller">Oteller</a></li>
                            </ul>

                        </div>

                        <div class="widget widget-filter-links clearfix">

                            <h4>Sırala</h4>
                            <ul class="shop-sorting">
                                <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Temizle</a></li>
                                <li><a href="#" data-sort-by="name">Ada Göre</a></li>
                                <li><a href="#" data-sort-by="price_lh">Fiyat: Azdan Çoka</a></li>
                                <li><a href="#" data-sort-by="price_hl">Fiyat: Çoktan Aza</a></li>
                            </ul>
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