@extends('layouts.admin')
@section('title','DBマップデータ追加')
@section('content')
    <h1>DB用マップデータ入力画面</h1>
    <form action="{{ route('map_add') }}" method="post" enctype="multipart/form-data">
    
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
                    <option value="" disabled selected>マップを選択</option>
                    <option value="アセント">アセント</option>
                    <option value="スプリット">スプリット</option>
                    <option value="ヘイヴン">ヘイヴン</option>
                    <option value="バインド">バインド</option>
                    <option value="アイスボックス">アイスボックス</option>
                    <option value="ブリーズ">ブリーズ</option>
                    <option value="フラクチャー">フラクチャー</option>
                    <option value="パール">パール</option>
                    <option value="ロータス">ロータス</option>
                    <option value="サンセット">サンセット</option></select>
                </li>
            </ul>
            <li>マップ画像<input type="file" class="map_image" name="map_image" placeholder="マップの画像を選択"></li>
            <li>着弾位置画像<input type="file" class="impact_id_image" name="impact_id_image" placeholder="着弾位置の画像を選択"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="マップデータ投稿">
    </form>
    <a href="{{ route('site_view')}}"><h2>DBサイトデータ追加</h2></a>
@endsection