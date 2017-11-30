<!-- Footer
		============================================= -->
<footer id="footer" class="dark">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="col_one_third">

                    <div class="widget clearfix">

                        <img src="/assets/theme/images/footer-widget-logo.png" alt="" class="footer-logo">

                        <p>Seçimleriniz Doğrultusunda En Doğru Tatil Yerlerini Seçtireceğimize İnanıyoruz </p>

                        <div style="background: url('/assets/theme/images/world-map.png') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>Adres:</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <abbr title="Phone Number"><strong>Telefon:</strong></abbr> (91) 8547 632521<br>
                            <abbr title="Fax"><strong>Faks:</strong></abbr> (91) 11 4752 1433<br>
                            <abbr title="Email Address"><strong>E-posta:</strong></abbr><a href="mailto:info@tatilrehberim.com">info@tatilrehberim.com</a>
                        </div>

                    </div>

                </div>

                <div class="col_one_third">

                    <div class="widget widget_links clearfix">

                        <h4>Yararlı Bağlantılar</h4>

                        <ul>
                            <li><a href="http://www.fb.com/">Facebook</a></li>
                        </ul>

                    </div>

                </div>

            </div>
        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2017 Tüm Hakları Ahmet Emin ŞİT & Özlem Atabay'a aittir<br>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Otel Kriterleri Modal -->
<div class="modal fade" id="otelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Otel Arama Kriterleri</h4>
                </div>
                <div class="modal-body">
                    <h4>Fiyat Aralığı</h4>
                    <div class="col-md-12 col-sm-12 bottommargin-sm">
                        <div class="white-section">
                            <input class="range_01"/>
                        </div>
                    </div>
                    <hr>
                    <h4>Yıldız Sayısı</h4>
                    <div class="col-md-12 bottommargin-sm">
                        <div class="white-section">
                            <input id="input-5" type="number" class="rating" data-symbol="&#xe667;" max="5" data-stars="5" data-size="md" data-glyphicon="false" data-rating-class="fontawesome-icon"
                                   data-default-caption="{rating} Hits" data-star-captions="{}">
                        </div>
                    </div>
                    <hr>
                    <h4>Konum</h4>
                    <div class=" nobottommargin clearfix">
                        <form action="#" method="post" class="nobottommargin">
                            <div class="bottommargin-sm">
                                <label for=""> Gitmek istediğiniz ili seçin</label>
                                <select class="select-1 form-control" style="width:100%;">
                                    <optgroup label="İller">
                                        @php($iller = \App\Iller::all())
                                        @foreach($iller as $il)
                                            <option value="{{ $il->id }}">{{ $il->ad }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 bottommargin-sm">
                    <label> Otel Özellikleri</label><label>:</label><br>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Denize Sıfır</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Su Kaydırağı</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Çocuk Su Kaydırağı</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Gece Kulübü</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Wi-fi</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Otopark</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Restorant</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <label class="col-sm-12" for="">Toplantı Salonu</label>
                            <input class="bt-switch" type="checkbox" checked data-on-text="<i class='icon-line-circle-check'></i>" data-off-text="<i class='icon-line-circle-cross'></i>" data-on-color="white"
                                   data-off-color="black">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Kriterleri Ara</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tatil Yeri Kriterleri Modal -->
<div class="modal fade" id="mekanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Otel Arama Kriterleri</h4>
                </div>
                <div class="modal-body">
                    <h4>Konum</h4>
                    <div class=" nobottommargin clearfix">
                        <form action="#" method="post" class="nobottommargin">
                            <div class="bottommargin-sm">
                                <label for=""> Gitmek istediğiniz ili seçin</label>
                                <select class="select-1 form-control" style="width:100%;">
                                    <optgroup label="iller">
                                        @foreach($iller as $il)
                                            <option value="{{ $il->id }}">{{ $il->ad }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Kriterleri Ara</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="/assets/theme/js/jquery.js"></script>
<script type="text/javascript" src="/assets/theme/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="/assets/theme/js/functions.js"></script>

<!-- Select-Boxes Plugin -->
<script type="text/javascript" src="/assets/theme/js/components/select-boxes.js"></script>

<!-- Select-Splitter Plugin -->
<script type="text/javascript" src="/assets/theme/js/components/selectsplitter.js"></script>

<!-- Star Rating Plugin -->
<script type="text/javascript" src="/assets/theme/js/components/star-rating.js"></script>


<!-- Range Slider Plugin -->
<script type="text/javascript" src="/assets/theme/js/components/rangeslider.min.js"></script>
<script type="text/javascript" src="/assets/theme/js/components/moment.js"></script>


<!-- Bootstrap Switch Plugin -->
<script type="text/javascript" src="/assets/theme/js/components/bs-switches.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        //Fiyat Skalası
        $(".range_01").ionRangeSlider();

        //checkbox düzenlemesi
        jQuery(".bt-switch").bootstrapSwitch();

        // select Tags
        $(".select-tags").select2({
            tags: true
        });
    });
</script>

@yield('js')

</body>
</html>