@extends('backend.app')

@section('content')
    @if(session('basari'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            İşlem Başarılı &nbsp;<i class="fa fa-check"></i>
        </div>
    @elseif(session('hata'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            İşlem Başarısız!! &nbsp;<i class="fa fa-close"></i>
        </div>
    @endif

    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Oteller
                    </h2>
                    <ul class="m-r--5 pull-right">
                        <a href="/admin/oteller/ekle" role="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">queue</i>
                        </a>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Otel Adı</th>
                                <th>Yıldız</th>
                                <th>İl</th>
                                <th>Oluşturma Tarihi</th>
                                <th>Düzenleme Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Otel Adı</th>
                                <th>Yıldız</th>
                                <th>İl</th>
                                <th>Oluşturma Tarihi</th>
                                <th>Düzenleme Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($oteller as $otel)
                                <tr>
                                    <td>{{ $otel->id }}</td>
                                    <td>{{ $otel->ad }}</td>
                                    <td>{{ $otel->yildiz }}</td>
                                    <td>{{ (isset($otel->il->ad) ? $otel->il->ad : 'İl Yok') }}</td>
                                    <td>{{ $otel->created_at }}</td>
                                    <td>{{ $otel->updated_at }}</td>
                                    <td align="center">
                                        <a href="/admin/oteller/guncelle/{{ $otel->id }}" role="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" title="Düzenle">
                                            <i class="material-icons">mode_edit</i>
                                        </a>&nbsp;&nbsp; / &nbsp;
                                        <a href="/admin/oteller/sil/{{ $otel->id }}" role="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" title="Sil">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
@endsection

@section('css')

@endsection

@section('js')

@endsection