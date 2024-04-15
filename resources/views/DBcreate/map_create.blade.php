@extends('layouts.admin')
@section('title','DBマップデータ追加')
@section('content')
    <h1>DB用マップデータ入力画面</h1>
    <form action="{{ route('mapCreate') }}" method="post" enctype="multipart/form-data">
    
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
                    <option value="アセント"　@if( old('map_name') === 'アセント' ) selected @endif>アセント</option>
                    <option value="スプリット" @if( old('map_name') === 'スプリット' ) selected @endif>スプリット</option>
                    <option value="ヘイヴン" @if( old('map_name') === 'ヘイヴン' ) selected @endif>ヘイヴン</option>
                    <option value="バインド" @if( old('map_name') === 'バインド' ) selected @endif>バインド</option>
                    <option value="アイスボックス" @if( old('map_name') === 'アイスボックス' ) selected @endif>アイスボックス</option>
                    <option value="ブリーズ" @if( old('map_name') === 'ブリーズ' ) selected @endif>ブリーズ</option>
                    <option value="フラクチャー" @if( old('map_name') === 'フラクチャー' ) selected @endif>フラクチャー</option>
                    <option value="パール" @if( old('map_name') === 'パール' ) selected @endif>パール</option>
                    <option value="ロータス" @if( old('map_name') === 'ロータス' ) selected @endif>ロータス</option>
                    <option value="サンセット" @if( old('map_name') === 'サンセット' ) selected @endif>サンセット</option></select>
                </li>
            </ul>
            <li>マップ画像<input type="file" class="map_image" name="map_image" placeholder="マップの画像を選択"></li>
            <li>着弾位置画像<input type="file" class="impact_id_image" name="impact_id_image" placeholder="着弾位置の画像を選択"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="マップデータ投稿">
    </form>
@endsection