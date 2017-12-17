@extends('theme.app')

@section('content')

    <hr>
    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="single-post nobottommargin">
                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">
                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $veriler->ad }}</h2>
                        </div><!-- .entry-title end -->
                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{ $veriler->resim_yol }}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->
                        <!-- Entry content
                        ============================================= -->
                        <div class="entry-content notopmargin">
                            <p>{{ isset($veriler->aciklama) ? $veriler->aciklama : ' ' }}</p>
                            @if(isset($veriler->yildiz))
                                <div class="thumbnail">
                                    Özellikler:
                                    <ul style="padding-left: 30px">
                                        <li>Denize Sıfır:{{ $veriler->denize_sifir  == 1 ? 'Evet' : 'Hayır' }}</li>
                                        <li>su_kaynagi: {{ $veriler->su_kaynagi  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>cocuk_su_kaydiragi: {{ $veriler->cocuk_su_kaydiragi  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>Bar: {{ $veriler->gece_kulubu  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>wifi: {{ $veriler->wifi  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>otopark: {{ $veriler->otopark  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>restorant: {{ $veriler->restorant  == 1 ? 'Var' : 'Yok' }}</li>
                                        <li>toplanti_salonu :{{ $veriler->toplanti_salonu  == 1 ? 'Var' : 'Yok' }}</li>
                                    </ul>
                                </div>
                            @elseif(isset($veriler->icerik))

                            @endif
                        </div>
                        <!-- Post Single - Content End -->
                    </div>
                </div><!-- .entry end -->
            </div>
        </div>
        </div>
    </section><!-- #content end -->

@endsection

@section('css')

@endsection

@section('js')

@endsection