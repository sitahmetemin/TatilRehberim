@extends('backend.app')

@section('content')
    <!-- Tabs With Icon Title -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">reorder</i> Mekan
                            </a>
                        </li>
                    </ul>

                    <form id="form_validation" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                <!-- Basic Validation -->
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div>
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" id="ad" name="ad" required>
                                                                <label class="form-label">Mekan Adı</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <textarea type="text" class="form-control" id="icerik" name="icerik" ></textarea>
                                                                <label class="form-label">İçerik</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-float ">
                                                            <div class="form-line">
                                                                <label>Resim</label>
                                                                <input type="file" class="form-control" name="resim_yol">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>
                                                            <b>İl</b>
                                                        </p>
                                                        <select class="form-control show-tick" name="il_id" data-live-search="true">
                                                            @foreach($iller as $il)
                                                                <option value="{{ $il->id }}">{{ $il->ad }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #END# Basic Validation -->
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-plus-circle"></i> Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Tabs With Icon Title -->
@endsection

@section('css')
    <!-- Bootstrap Select Css -->
    <link href="/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="/assets/backend/css/style.css" rel="stylesheet">
    <!-- Dropzone Css -->
    <link href="/assets/backend/plugins/dropzone/dropzone.css" rel="stylesheet">

@endsection

@section('js')
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/assets/backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- Dropzone Plugin Js -->
    <script src="/assets/backend/plugins/dropzone/dropzone.js"></script>
@endsection