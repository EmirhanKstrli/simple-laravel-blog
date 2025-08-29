@extends('front.layouts.master')
@section('title', 'İletişim')
@section('bg', 'https://static.wixstatic.com/media/nsplsh_981d562dbd304a9c801e1544053d6885~mv2.jpg/v1/fill/w_980,h_653,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/nsplsh_981d562dbd304a9c801e1544053d6885~mv2.jpg')
@section('content')
    
<div class="col-md-8">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <p>Bizimle İletişime Geçebilirsiniz!</p>
    <form method="post" action="{{ route('contact.post') }}">
        @csrf
        <div class="control-group mb-3">
            <div class="form-group controls">
                <label>Ad Soyad</label>
                <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Adınız Soyadınız" name="name" required >
            </div>
        </div>
        <div class="control-group mb-3">
            <div class="form-group controls">
                <label>Email Adresi</label>
                <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Email Adresiniz" name="email" required >
            </div>
        </div>
        <div class="control-group mb-3">
            <div class="form-group col-xs-12 controls">
                <label>Konu</label>
                <select class="form-control" name="topic">
                    <option @if(old('topic') == "Bilgi") selected @endif>Bilgi</option>
                    <option @if(old('topic') == "Destek") selected @endif>Destek</option>
                    <option @if(old('topic') == "Genel") selected @endif>Genel</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group controls">
                <label>Mesajınız</label>
                <textarea rows="5" name="message" class="form-control" placeholder="Mesajınız" required>{{ old('message') }}</textarea>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
        </div><br>
    </form>
</div>
<div class="col-md-4">
    <div class="card card-default">
        <div class="card-body">Panel Content</div>
        Adres: Örnek Mah. Örnek Cad. No:1
    </div>
</div>

@endsection
