@extends('layouts.admin')
@section('title','DBマップデータの編集')
@section('content')
    <h1>DB用マップデータ編集画面</h1>
    <form action="{{ route('mapUpdate') }}" method="post" enctype="multipart/form-data">
    
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
                <li><select name="map_name" value="{{ old('map_name') }}">
                    <option value="{{ $map_form->map_name }}"disabled selected>{{ $map_form->map_name }}(登録している内容)</option>
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
            <li><img src="{{ secure_asset('storage/image/map_image/' . $map_form->map_image_path) }}"></li>
            <li>着弾位置画像<input type="file" class="impact_id_image" name="impact_id_image" placeholder="着弾位置の画像を選択"></li>
            <li><img src="{{ secure_asset('storage/image/impact_id_image/' . $map_form->impact_id_image_path) }}"></li>
            <li><input type="hidden" name="id" value="{{ $map_form->id }}"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="マップデータ更新">
    </form>
    @endsection