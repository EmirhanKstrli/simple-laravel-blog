@extends('back.layouts.master')
@section('title', 'Tüm Makaleler')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right"><strong>{{ $articles->count() }}</strong> Makale Bulundu
                    <a href="{{ route('admin.trashed.article') }}" class="ml-2 btn btn-sm btn-secondary"><i class="fa fa-dumpster"></i> Silinen Makaleler</a>
                </span>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Makale Başlığı</th>
                            <th>Kategori</th>
                            <th>Hit</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>
                                    <img src="{{ asset($article->image) }}" width="200">
                                </td>
                                <td class="w-25">{{ $article->title }}</td>
                                <td>{{ $article->getCategory->name }}</td>
                                <td>{{ $article->hit }}</td>
                                <td>{{ $article->created_at->diffForHumans() }}</td>
                                <td>
                                    <input class="switch" article-id="{{ $article->id }}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="warning" @if($article->status == 1) checked @endif data-toggle="toggle">
                                </td>
                                <td>
                                    <a target="_blank" href="{{ route('single', [$article->getCategory->slug, $article->slug]) }}" class="btn btn-sm btn-success" title="Görüntüle"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.makaleler.edit', $article->id) }}" class="btn btn-sm btn-primary" title="Düzenle"><i class="fa fa-pen"></i></a>
                                    <a href="{{ route('admin.delete.article', $article->id) }}" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function() {
                id = $(this)[0].getAttribute('article-id');
                statu = $(this).prop('checked');
                $.get("{{ route('admin.switch') }}", {id:id, statu:statu}, function(data, status){});
            })
        })
    </script>
@endsection