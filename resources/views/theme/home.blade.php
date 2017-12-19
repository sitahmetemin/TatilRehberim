@extends('theme.app')

@section('content')


    <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('/assets/theme/images/slider/swiper/1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">TATİL REHBERİME HOŞGELDİNİZ</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your
                                    own Canvas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be
                                    adapted to any screen size.</p>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video id="slide-video" poster="/assets/theme/images/videos/explore.jpg" preload="auto" loop autoplay muted>
                                <source src='/assets/theme/images/videos/explore.webm' type='video/webm'/>
                                <source src='/assets/theme/images/videos/explore.mp4' type='video/mp4'/>
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('/assets/theme/images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="row clearfix bottommargin-lg common-height">

            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                    <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K</div>
                    <h5>Kullanıcı Sayısı</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
                    <div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
                    <h5>Doğru Karar Yüzdesi</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                    <div class="counter counter-lined"><span data-from="10" data-to="" data-refresh-interval="25" data-speed="3500"></span></div>
                    <h5>Otel Sayısı</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
                    <div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>
                    <h5>Tatil Yeri Sayısı</h5>
                </div>
            </div>

        </div>

        <div class="row bottommargin-lg">
            <div class="clearfix center nomargin">
                <h3>Bazı Otellerimiz</h3>
            </div>
        </div>

        {{--Kayar menü
        ===============================================--}}
        <div id="oc-images" class="row owl-carousel owl-carousel-full news-carousel header-stick bottommargin-lg carousel-widget" data-margin="3" data-loop="true" data-stage-padding="50" data-pagi="false"
             data-items-xs="1" data-items-lg="2">
            @php(\Carbon\Carbon::setLocale('tr'))
            @foreach($oteller as $otel)
                <div class="oc-item">
                    <a href="#"><img src="{{ $otel->resim_yol }}" alt="Image 1"></a>
                    <div class="overlay">
                        <div class="text-overlay">
                            <span class="label label-danger">{{ $otel->il->ad }}</span>
                            <div class="text-overlay-title">
                                <h2>{{ $otel->ad }}</h2>
                            </div>
                            <div class="text-overlay-meta">
                                <span>{{ $otel->created_at->diffForHumans() }}</span>
                            </div>
                            <a href="/otel-detay/{{ $otel->id }}" class="button button-reveal button-border button-light button-small button-rounded uppercase tright noleftmargin topmargin-sm"><span>Detaylar</span><i
                                        class="icon-angle-right"></i></a>
                        </div>
                        <div class="rounded-skill" data-color="#e74c3c" data-trackcolor="rgba(0,0,0,0.1)" data-size="80" data-percent="{{ $otel->yildiz }}00" data-width="{{ $otel->yildiz }}"
                             data-animate="3000">{{ $otel->yildiz }}</div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="">
            <div class="container clearfix">
                <div class="row topmargin-lg bottommargin-sm">
                    <div class="heading-block center">
                        <h2>Sistem Nasıl Çalışır?</h2>
                    </div>

                    <div class="col-md-4 col-sm-6 bottommargin">

                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-heart"></i></a>
                            </div>
                            <h3>Sizlerin beğeni ve seçimlerinizden yola çıkmaktadır</h3>
                        </div>

                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-paper"></i></a>
                            </div>
                            <h3>Yüksek Hesaplama Matematiği Kullanılmıştır</h3>
                        </div>

                    </div>

                    <div class="col-md-4 hidden-sm bottommargin center">
                        <img src="/assets/theme/images/services/iphone7.png" alt="iphone 2">
                    </div>

                    <div class="col-md-4 col-sm-6 bottommargin">

                        <div class="feature-box topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-power"></i></a>
                            </div>
                            <h3>Her Zaman Farklı Sonuçlar</h3>
                        </div>

                        <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-check"></i></a>
                            </div>
                            <h3>Güçlü Sistem Yaklaşımı</h3>
                        </div>
                    </div>

                </div>

            </div>

            <div class="section topmargin nobottommargin nobottomborder">
                <div class="container clearfix">
                    <div class="heading-block center nomargin">
                        <h3>En Çok Tercih Edilen İller</h3>
                    </div>
                </div>
            </div>

            <div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/1.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="/assets/theme/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="/assets/theme/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                        <span><a href="#">Illustrations</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-uielements">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="/assets/theme/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-icons pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="/assets/theme/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="/assets/theme/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                        <span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-media">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/5.jpg" alt="Console Activity">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="/assets/theme/images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Console Activity</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/6.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="/assets/theme/images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="/assets/theme/images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="/assets/theme/images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="/assets/theme/images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-uielements pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single-video.html">
                            <img src="/assets/theme/images/portfolio/4/7.jpg" alt="Backpack Contents">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                    </div>
                </article>

                <article class="portfolio-item pf-graphics">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="/assets/theme/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="/assets/theme/images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                        <span><a href="#">Graphics</a></span>
                    </div>
                </article>
            </div>
        </div>
    </section><!-- #content end -->

@endsection

@section('css')

@endsection

@section('js')

@endsection