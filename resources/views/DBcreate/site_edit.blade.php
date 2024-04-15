@extends('layouts.admin')
@section('title','DBサイトデータの編集')
@section('content')
    <h1>DB用サイトデータ編集画面</h1>
    <form action="{{ route('siteUpdate') }}" method="post" enctype="multipart/form-data">
    
        @csrf
        
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        <ul>
            <ul>
                <li><p>MAP NAME</p></li>
                <li><select name="map_name">
                    <option value="{{ $site_form->map_name }}">{{ $site_form->map_name }}(登録している内容)</option>
                    <option value="1">アセント</option>
                    <option value="2">スプリット</option>
                    <option value="3">ヘイヴン</option>
                    <option value="4">バインド</option>
                    <option value="5">アイスボックス</option>
                    <option value="6">ブリーズ</option>
                    <option value="7">フラクチャー</option>
                    <option value="8">パール</option>
                    <option value="9">ロータス</option>
                    <option value="10">サンセット</option></select>
                </li>
            </ul>
            <ul>
                <li><p>SITE NAME</p></li>
                <li><select name="site_name">
                    <option value="{{ $site_form->site_name }}">{{ $site_form->site_name }}(登録している内容)</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option></select>
                </li>
            </ul>
            <li>サイト画像<input type="file" class="site_image" name="site_image" placeholder="サイトの画像を選択"></li>
            <li><img src="{{ secure_asset('storage/image/site_image/' . $site_form->site_image_path) }}"></li>
            <li><input type="hidden" name="id" value="{{ $site_form->id }}"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="サイトデータ更新">
    </form>
    @endsection