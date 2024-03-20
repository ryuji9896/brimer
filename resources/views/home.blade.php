@extends('layouts.app')
@section('title','DBデータ追加')
@section('content')
    <h1>DB用データ入力画面</h1>
    
    <form action="{{ route('map_data_add') }}" method="post" enctype="multipart/form-data">
    
        @csrf
    
        <ul>
            <li><input type="text" class="form-control" name="map_name" rows="50" value="{{old('map_name')}}" placeholder="マップの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="form-controle-file" name="map_image" placeholder="マップの画像を選択"></li>
            <li><input type="file" class="form-controle-file" name="impact_id_image" placeholder="impact_id付のマップ画像を選択"></li>
        </ul>
    </form>
    
    <form action="{{ route('site_data_add') }}" method="post" enctype="multipart/form-data">
    
        @csrf
    
        <ul>
            <li><input type="text" class="form-control" name="site_name" rows="50" value="{{old('site_name')}}" placeholder="サイトの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="form-controle-file" name="site_image" placeholder="サイトの画像を選択"></li>
        </ul>
    </form>
@endsection
