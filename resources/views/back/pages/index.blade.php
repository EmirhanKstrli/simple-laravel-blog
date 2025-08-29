@extends('back.layouts.master')
@section('title', 'Tüm Sayfalar')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right"><strong>{{ $pages->count() }}</strong> Sayfa Bulundu</span>
            </h6>
        </div>
        <div class="card-body">
            <div style="display: none;" class="alert alert-success" id="orderSuccess">
                Sıralama başarıyla güncellendi.
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sıralama</th>
                            <th>Fotoğraf</th>
                            <th>Makale Başlığı</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                        @foreach ($pages as $page)
                            <tr id="page_{{ $page->id }}">
                                <td style="width: 20px;">
                                    <i class="fa fa-sort fa-2x handle d-flex justify-content-center p-5" style="cursor: move;"></i>
                                </td>
                                <td>
                                    <img src="{{ asset($page->image) }}" width="200">
                                </td>
                                <td class="w-25">{{ $page->title }}</td>
                                <td>
                                    <input class="switch" page-id="{{ $page->id }}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="warning" @if($page->status == 1) checked @endif data-toggle="toggle">
                                </td>
                                <td>
                                    <a target="_blank" href="{{ route('page', $page->slug) }}" class="btn btn-sm btn-success" title="Görüntüle"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.page.edit', $page->id) }}" class="btn btn-sm btn-primary" title="Düzenle"><i class="fa fa-pen"></i></a>
                                    <a href="{{ route('admin.page.delete', $page->id) }}" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-trash"></i></a>
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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.6/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
        $('#orders').sortable({
            handle:'.handle',
            update:function(){
                var siralama = $('#orders').sortable('serialize');
                $.get("{{ route('admin.page.orders') }}?" + siralama, function(data, status){
                    $("#orderSuccess").show().delay(1000).fadeOut();
                });
            }
        });
    </script>
    <script>
        $(function() {
            $('.switch').change(function() {
                id = $(this)[0].getAttribute('page-id');
                statu = $(this).prop('checked');
                $.get("{{ route('admin.page.switch') }}", {id:id, statu:statu}, function(data, status){
                    console.log(data);
                });
            })
        })
    </script>
@endsection