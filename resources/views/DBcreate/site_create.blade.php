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
                <li><select name="map_name">
                    <option value="" disabled selected>マップ選択</option>
                    <option value="1"　@if( old('map_name') === '1' ) selected @endif>アセント</option>
                    <option value="2" @if( old('map_name') === '2' ) selected @endif>スプリット</option>
                    <option value="3" @if( old('map_name') === '3' ) selected @endif>ヘイヴン</option>
                    <option value="4" @if( old('map_name') === '4' ) selected @endif>バインド</option>
                    <option value="5" @if( old('map_name') === '5' ) selected @endif>アイスボックス</option>
                    <option value="6" @if( old('map_name') === '6' ) selected @endif>ブリーズ</option>
                    <option value="7" @if( old('map_name') === '7' ) selected @endif>フラクチャー</option>
                    <option value="8" @if( old('map_name') === '8' ) selected @endif>パール</option>
                    <option value="9" @if( old('map_name') === '9' ) selected @endif>ロータス</option>
                    <option value="10" @if( old('map_name') === '10' ) selected @endif>サンセット</option></select>
                </li>
            </ul>
            <ul>
                <li><p>SITE NAME</p></li>
                <li><select name="site_name" value=>
                    <option value="" disabled selected>サイト選択</option>
                    <option value="A" @if( old('site_name') === 'A' ) selected @endif>A</option>
                    <option value="B" @if( old('site_name') === 'B' ) selected @endif>B</option>
                    <option value="C" @if( old('site_name') === 'C' ) selected @endif>C</option></select>
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