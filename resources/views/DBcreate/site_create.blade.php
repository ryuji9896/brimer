@extends('layouts.admin')
@section('title','DBサイトデータ追加')
@section('content')
    <h1>DB用サイトデータ入力画面</h1>
    <form action="{{ route('siteCreate') }}" method="post" enctype="multipart/form-data">
    
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
                <li><select name="map_id">
                    <option value="" disabled selected>マップを選択</option>
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
                    <option value="" disabled selected>サイトを選択</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option></select>
                </li>
            </ul>
            <ul>
                <li><p>サイト画像</p></li>
                <li><input type="file" class="site_image" name="site_image" placeholder="サイトの画像を選択"></li>
            </ul>
        </ul>   
        <input type="submit" class="btn btn-primary" value="サイトデータを投稿">
    </form>
@endsection