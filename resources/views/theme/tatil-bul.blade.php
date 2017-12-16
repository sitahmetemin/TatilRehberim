@extends('theme.app')

@section('content')


    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Bulunan Otel, Mekan ve Yerler</h1>
            <span>Seçimlerinizi Yaptıktan Sonra <b>Tatil Bul</b> Butonuna Basın</span>
            <ol class="breadcrumb">
                <li><a href="/">Anasayfa</a></li>
                <li class="active">Bulunan Uygun Tatil Planı</li>
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
                <div class=" nobottommargin ">
                    <div class="thumbnail">
                        <div class="center">
                            <label class="label label-info" style="font-size: 15px"><i class="icon-info"></i> &nbsp; Bilgilendirme</label><br><br>
                            <p>Sizlere en uygun tatili bulmamıza yardım etmek için lütfen aşağıdaki beğendiğiniz resimleri işaretleyin ve soruları cevaplayın </p>
                        </div>
                    </div>
                    <form action="">
                        <div class="panel-group nobottommargin" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#1">
                                        Resim
                                    </a>
                                </div>
                                <div id="1" class="panel-collapse collapse in">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/1-camur-yesil.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#2">
                                        Resim
                                    </a>
                                </div>
                                <div id="2" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/2-butik-otel.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#3">
                                        Resim
                                    </a>
                                </div>
                                <div id="3" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/3-kumsal-mavi.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#4">
                                        Resim
                                    </a>
                                </div>
                                <div id="4" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/5-doga-sari.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#5">
                                        Resim
                                    </a>
                                </div>
                                <div id="5" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/6-turistik-sari.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#6">
                                        Resim
                                    </a>
                                </div>
                                <div id="6" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/7-kumsal-mavi.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#7">
                                        Resim
                                    </a>
                                </div>
                                <div id="7" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/8-kar-tatil-beyaz.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#8">
                                        Resim
                                    </a>
                                </div>
                                <div id="8" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/8-doga-yesil-mavi.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#9">
                                        Resim
                                    </a>
                                </div>
                                <div id="9" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/9-kumsal-mavi.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#10">
                                        Resim
                                    </a>
                                </div>
                                <div id="10" class="panel-collapse collapse ">
                                    <div class="panel-body center">
                                        <div class="row">
                                            <img src="/uploads/images/secimResimleri/10-luksotel.jpg" alt="">
                                            <br><br>
                                            <input class="bt-switch" type="checkbox" data-off-color="danger">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#sorular">
                                        Sorular
                                    </a>
                                </div>
                                <div id="sorular" class="panel-collapse collapse in">
                                    <div class="panel-body center">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">1. Tatile gidiş amacınız nedir?</label>
                                            <select name="il_id" class="select-1 form-control" style="margin: auto; width: 20%;">
                                                <optgroup label="iller">
                                                    <option value="">Gezmek</option>
                                                    <option value="">Sağlık</option>
                                                    <option value="">Eğlenmek</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="" class="form-label">2. Konfor mu yoksa amaç mı sizin için önemlidir? </label>
                                            <select name="il_id" class="select-1 form-control" style="margin: auto; width: 20%;">
                                                <optgroup label="iller">
                                                    <option value="">Gezmek</option>
                                                    <option value="">Sağlık</option>
                                                    <option value="">Eğlenmek</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="" class="form-label">4. Hangi renkten hoşlanırsınız</label>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div style="background-color: yellow; width: 100px; height: 100px;">Sarı</div>
                                                    <input id="switch-toggle-1" class="switch-toggle switch-rounded-mini switch-toggle-round" type="checkbox">
                                                </div>
                                                <div class="col-md-1">
                                                    <div style="background-color: grey; width: 100px; height: 100px;">Sarı</div>
                                                    <input class="bt-switch" type="checkbox" data-off-color="danger" data-handle-width="20">
                                                </div>
                                                <div class="col-md-1">
                                                    <div style="background-color: green; width: 100px; height: 100px; ">Sarı</div>
                                                    <input class="bt-switch" type="checkbox" data-off-color="danger" data-handle-width="20">
                                                </div>
                                                <div class="col-md-1">
                                                    <div style="background-color: black; width: 100px; height: 100px; ">Sarı</div>
                                                    <input class="bt-switch" type="checkbox" data-off-color="danger" data-handle-width="20">
                                                </div>
                                                <div class="col-md-1">
                                                    <div style="background-color: darkblue; width: 100px; height: 100px;">Sarı</div>
                                                    <input class="bt-switch" type="checkbox" data-off-color="danger" data-handle-width="20">
                                                </div>
                                                <div class="col-md-1">
                                                    <div style="background-color: #6a1b9a; width: 100px; height: 100px;">Sarı</div>
                                                    <input class="bt-switch" type="checkbox" data-off-color="danger" data-handle-width="20">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary"><i class="icon-search2"></i>&nbsp;Tatil Bul</button>
                        </div>
                    </form>

                </div><!-- .postcontent end -->

            </div>

        </div>

    </section><!-- #content end -->

@endsection

@section('css')
    <!-- Custom Css -->
    <link href="/assets/backend/css/style.css" rel="stylesheet">

@endsection

@section('js')


@endsection