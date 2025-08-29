@extends('back.layouts.master')
@section('title', 'Silinen Makaleler')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right"><strong>{{ $articles->count() }}</strong> Makale Bulundu
                    <a href="{{ route('admin.makaleler.index') }}" class="ml-2 btn btn-sm btn-secondary"><i class="fa fa-border-all"></i> Hazır Makaleler</a>
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
                            <th>Oluşturulma Tarihi</th>
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
                                    <a href="{{ route('admin.recover.article', $article->id) }}" class="btn btn-sm btn-primary" title="Kurtar"><i class="fa fa-recycle"></i></a>
                                    <a href="{{ route('admin.hard.delete.article', $article->id) }}" class="btn btn-sm btn-danger" title="Kalıcı Olarak Sil"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection